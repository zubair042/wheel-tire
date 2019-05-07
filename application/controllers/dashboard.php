<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if (!$this->session->userdata("isUserLoggedIn")) {
			redirect("login");
		}
		$user_session = $this->session->userdata('isUserLoggedIn');
		$this->user_id = $user_session['user_id'];

	}
	public function index()
	{	
		$this->load->model('common_model');
		$data['report_detail'] = $this->common_model->listingResultWhere("user_id",$this->user_id,"reports");
		$this->load->view('dashboard/index',$data);
	}
}
