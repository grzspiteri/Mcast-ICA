<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

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
		$data['title'] = 'contact us';
		$this->load->library('session');
		$data['flash'] = $this->session->flashdata('success');

		$this->load->view('structure/start', $data);
		$this->load->view('contact', $data);
		$this->load->view('structure/end', $data);
	}

	public function sendemail()
	{
		$this->load->library('email');
		$this->load->library('session');

		$this->email->from($this->input->post('email'), $this->input->post('first_name'), $this->input->post('last_name'));
		$this->email->to('grzspiteri@live.com');

		$this->email->subject($this->input->post('title'));
		$this->email->message($this->input->post('message'));

		if($this->email->send()){
			echo "yaaaaasssss"; die;
			$this->session->set_flashdata('success','Thanks fot the email');
			redirect('home');
		}

		else {
			// code...
			echo 'didnt work';
		}

	}

}
