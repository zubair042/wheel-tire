<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('login/index');
	}
	public function user_login(){
		$post = $this->input->post();
		$this->load->model('user_model');
		if (!$this->user_model->user_login($post['email'], $post['password'])) {
			$this->session->set_flashdata("error","Incorrect username or password");
			return redirect('login');			
		}
	}
	public function logout(){
		$this->session->unset_userdata("isUserLoggedIn");
		return redirect();
	}
}
