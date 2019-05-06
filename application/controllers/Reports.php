<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Reports extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if (!$this->session->userdata('isUserLoggedIn')) {
			redirect("login");
		}
		$user_session = $this->session->userdata('isUserLoggedIn');
		$this->user_id = $user_session['user_id'];
	}
	public function index(){
		$this->load->view('reports/index');
	}

	public function add_report(){
		$this->load->view('reports/add_report');
	}

	public function add_new_report(){
		$post = $this->input->post();
		//$data[]
		echo '<pre>';
		print_r($post);
		// $this->load->model("common_model");
		// $data = $this->common_model->insertGetIDQuery("reports", $post);
		// echo '<pre>';
		// print_r($post);
		//$data['weight']
	
	}
	public function view_report(){
		$this->load->view('reports/view_report');
	}

	
}