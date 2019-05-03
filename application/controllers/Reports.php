<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Reports extends CI_Controller {

	public function index(){
		$this->load->view('reports/index');
	}

	public function add_report(){
		$this->load->view('reports/add_report');
	}
	public function view_report(){
		$this->load->view('reports/view_report');
	}

}