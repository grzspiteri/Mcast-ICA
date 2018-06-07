<?php

class Upload extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
        }

        public function index()
        {
                $this->load->view('structure/start');
                $this->load->view('upload_form', array('error' => 'you suck ' ));
                $this->load->view('structure/end');
        }

        function submit()
        {
          $this->do_upload('name-of-file');
        }

        public function do_upload($name)
        {
          $images = glob("uploads/{$name}.*");

          if (count($images) > 0)
          {
            foreach($images as $img) unlink($img);
          }
                $config['upload_path']          = './upload';
                $config['file_name']            = urlencode($name);
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 10240;
                $config['max_width']            = 4096;
                $config['max_height']           = 4096;

                $this->load->library('upload', $config);

                if ( !$this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());
                        $this->load->view('structure/start');
                        $this->load->view('upload_form', $error);
                        $this->load->view('structure/end');
                        exit($error['error']);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
                        $this->load->view('structure/start');
                        $this->load->view('upload_success', $data);
                        $this->load->view('structure/end');
                }
        }
}
?>
