<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function index()
	{
		$this->load->view('register/index');
	}
	public function add_new_user(){
		$post = $this->input->post();
		$this->load->model('user_model');
		$this->user_model->add_new_user($post);
	}
}

?>
