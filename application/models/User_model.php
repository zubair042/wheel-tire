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
	}	
	
?>