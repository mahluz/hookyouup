<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signin extends MX_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Signin_Model');
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->form_validation->CI =& $this;
	}
	public function index()
	{
		$this->load->view("signin");
	}
	public function login(){
		$email = $this->input->post('email', 'true');
		$pwd = $this->input->post('password', 'true');
		$password=md5($pwd);
		$temp_account = $this->Signin_Model->check_user_account($email, $password)->row();
		// check account
		$num_account = count($temp_account);
		$this->form_validation->set_rules('email', 'email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run() == FALSE){
		$this->load->view('Signin');
		} else{
		if ($num_account > 0){
		// kalau ada set session
		$array_items = array(
		'id_admin' => $temp_account->id_admin,
		'email' => $temp_account->email,
		'logged_in' => true
		);
		$this->session->set_userdata($array_items);
		redirect(site_url('Signin/view_success_page'));
		} 
		else {
		// kalau ga ada diredirect lagi ke halaman login
		$this->session->set_flashdata('notification', 'Peringatan : email dan Password
		tidak cocok');
		redirect(site_url('Signin'));
		}
		}
	}
	public function view_success_page(){
		$logged_in = $this->session->userdata('logged_in');
		if (!$logged_in){
		redirect(site_url('Signin'));
		}
		redirect(site_url('Admin'));
	}

}

/* End of file Signin.php */
/* Location: ./application/modules/signin/controllers/Signin.php */