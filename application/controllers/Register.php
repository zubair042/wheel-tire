<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function index()
	{
		$this->load->view('register/index');
	}
	public function add_new_user(){
		$post = $this->input->post();
		//$data = array();
		$res = 'success';
		$this->load->model('common_model');	
		$checkUserExists = $this->common_model->listingRow('email',$post['email'],"user");
		if(count($checkUserExists)>0){
			$res = 'email_exists';
			echo $res;
			return false;
		}
		$data['company_id'] = $post['company_id'];
		$data['full_name'] = $post['full_name'];
		$data['email'] = $post['email'];
		$data['password'] = md5($post['password']);
		$data['created_at'] = date('Y-m-d H:i:s');
		$result = $this->db->insert("user",$data);
		echo $res;
	}
}

?>
