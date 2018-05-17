<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class System_Model extends CI_Model {

    # Register a user into the first table
    public function add_user($email, $password, $salt)
    {

        $data = array(
            'u_email'       => $email,
            'u_password'    => password_hash($salt.$password, CRYPT_BLOWFISH),
            'u_salt'        => strrev($salt)
        );

        $this->db->insert('tbl_users', $data);

        return $this->db->insert_id();

    }


    # Checks the user details table for unchanged/existing data
    public function check_user_details($id, $name, $surname)
    {

        $data = array(
            'user_id'       => $id,
            'u_name'        => $name,
            'u_surname'     => $surname
        );

        return $this->db->get_where('tbl_user_details', $data)->num_rows() == 1;
    }


    # Deletes a user from the database
    public function delete_user($id)
    {
        $this->db->delete('tbl_users', array('id' => $id));
    }


    # Associate user details with the login data
    public function user_details($id, $name, $surname)
    {
        if ($this->check_user_details($id, $name, $surname))
        {
            return TRUE;
        }

        $data = array(
            'user_id'       => $id,
            'u_name'        => $name,
            'u_surname'     => $surname,
            'u_creation'    => time()
        );

        $this->db->insert('tbl_user_details', $data);

        return $this->db->affected_rows() == 1;
    }


    # Checks the password provided by the user
    public function check_password($email, $password)
    {
        $info = $this->db->select('id, u_password, u_salt')
                        ->where('u_email', $email)
                        ->get('tbl_users')
                        ->row_array();

        $checkstr = strrev($info['u_salt']).$password;

        return password_verify($checkstr, $info['u_password']) ? $info['id'] : FALSE;
    }


    # Writes the login data and retrieve the user's information
    public function set_login_data($id, $code)
    {
        # 1. Write the login information or stop the code here
        if(!$this->persist($id, $code))
        {
            return FLASE;
        }

        return $this->db->select('tbl_users.user_id,
                                tbl_roles.role_name AS role,
                                tbl_users.user_email AS email,
                                tbl_login_info.user_persistence AS session_code')
                        ->join('tbl_login_info', 'tbl_login_info.user_id = tbl_users.id', 'left')
                        ->join('tbl_roles', 'tbl_roles.role_id = tbl_users.role_id', 'left')
                        ->where('tbl_users.id', $id)
                        ->get('tbl_users')
                        ->row_array();
    }


    # Writes the login information to the database
    public function persist($id, $code)
    {
        $data = array(
            'user_id'       => $id,
            'user_login_time'  => time(),
            'user_persistence' => $code
        );

        $this->db->insert('tbl_login_info', $data);

        return $this->db->affected_rows() == 1;
    }

    # Check the user's credentials: the more info the better but slower
    public function check_data($id, $email, $code)
    {
        $data = array(
            'tbl_users.user_id'                  => $id,
            'tbl_users.user_email'             => $email,
            'tbl_login_info.user_persistence'  => $code
        );

        return $this->db->select('tbl_users.user_id')
                        ->join('tbl_login_info', 'tbl_login_info.user_id = tbl_users.user_id', 'left')
                        ->get_where('tbl_users', $data)
                        ->num_rows() == 1;
    }

    # Removes the login data from the table (force the user to Log out)
    public function delete_session($id, $code)
    {
        $data = array(
            'user_id'       => $id,
            'user_persistence' => $code
        );

        $this->db->delete('tbl_login_info', $data);
    }

}
