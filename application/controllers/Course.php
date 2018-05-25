<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Course extends CI_Controller {

  public function index()
  {
    $this->show('interactive media');
  }

	public function show($course)
	{
    $data=array(
      'name' => $course
    );

    $this->load->view('structure/start');
		$this->load->view('courses/photography', $data);
		$this->load->view('structure/end');
	}


}
