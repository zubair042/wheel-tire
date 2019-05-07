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
		//print_r($post);exit();
		$data['user_id'] = $this->user_id;
		$data['vehicle_type'] = $post['vehicle_type'];
		$data['wheel_option1'] = $post['small_wheel'];
		$data['wheel_option2'] = $post['front_wheel'];
		$data['wheel_option3'] = $post['rear_wheel'];
		$data['weight'] = $post['lbs_weight'];
		$data['unit_number'] = $post['unit_number'];
		$data['name'] = $post['your_name'];
		$data['position'] = $post['position_at_company'];
		$data['comments'] = $post['comments'];
		// echo '<pre>';
		// print_r($data);
		$this->load->model("common_model");
		$data = $this->common_model->insertGetIDQuery("reports", $data);
		//$this->load->view('reports/add_report');
		// echo '<pre>';
		// print_r($post);
		//$data['weight']
	
	}
	public function view_report(){
		$this->load->view('reports/view_report');
	}

	
}