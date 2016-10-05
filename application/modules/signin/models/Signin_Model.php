<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signin_Model extends CI_Model {
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	public function check_user_account($email, $password){
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->where('email', $email);
		$this->db->where('password', $password);
		return $this->db->get();
	}	

}

/* End of file Signin.php */
/* Location: ./application/modules/signin/models/Signin.php */