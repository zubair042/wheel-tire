<?php 
	if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	/**
	 * 
	 */
	class User_model extends CI_Model
	{
		public function user_login($email, $password){
			$WhereArray = array(
				"email" => $email,
				"password" => md5($password),
			);
			$this->load->model('common_model');
			$result = $this->common_model->listingMultipleWhereRow("user", $WhereArray);
			if (count($result) > 0) {
				$data['user_id'] = $result->id;
				$this->session->set_userdata("isUserLoggedIn",$data);
				if ($this->session->userdata('isUserLoggedIn')) {
					return redirect("dashboard");
				}
			}
			else
			{
				return false;
			}
		}

		public function add_new_user($post){
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
			return $result;
		}
	}	
	
?>