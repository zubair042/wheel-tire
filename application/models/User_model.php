<?php 
	if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	/**
	 * 
	 */
	class User_model extends CI_Model
	{
		public function add_new_user($data){
			$val = $this->db->insert("user",$data);
			return $val;
		}
	}	
	
?>