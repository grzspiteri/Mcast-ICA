<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('structure/start');
		$this->load->view('home');
		$this->load->view('structure/end');
	}

	public function login_submit()
	{
			# 1. Check the form for validation errors
			if ($this->fv->run('structure/start') === FALSE)
			{
					echo validation_errors();
					return;
			}

			# 2. Retrieve the data for checking
			$email      = $this->input->post('email');
			$password   = $this->input->post('password');

			# 3. Use the System model to verify the password
			# This avoids exposing information (sry h4xx0rs lol)
			$check = $this->system->check_password($email, $password);

			# 4. If check came back as FALSE, the password is wrong
			if ($check === FALSE)
			{
					echo "The email and password don't match.";
					return;
			}

			# 5. Retrieve the information from the database
			# bin2hex converts binary data to hex (0-9, a-f)
			$code = bin2hex($this->encryption->create_key(16));

			# 6. Try to log in.
			$data = $this->system->set_login_data($check, $code);

			# 7. If there's an error, stop here
			if ($data === FALSE)
			{
					echo "We could not log you in :D";
					return;
			}

			# 8. We'll check back in an hour
			$data['refresh'] = time() + 60 * 60;

			# 9. Write everything to CodeIgniter's cookies
			$this->session->set_userdata($data);

			# 10. Redirect home
			redirect('News');

	}

	public function success()
	{
		echo "YOU ARE LOGGED IN :D";
		echo anchor('logout', 'Piss off');
	}

	public function view($course)
	{

	}
}
