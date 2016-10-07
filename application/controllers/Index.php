<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->helper('url','text','form');
		$this->load->library('session','form_validation','email');
		$this->load->model('IndexModel');
	}
	public function index()
	{
		$data['comm_list']=$this->IndexModel->select_comm()->result();
		$data['blog']=$this->IndexModel->select_all()->result();
		$this->load->view('cover/Index',$data);
	}
	// memeriksa keberadaan akun email
	public function login(){
		$email = $this->input->post('email', 'true');
		$input_password = $this->input->post('pwd', 'true');
		$password = md5($input_password);
		$temp_account = $this->IndexModel->check_user_account($email, $password)->row();
		// check account
		$num_account = count($temp_account);
		$this->form_validation->set_rules('email', 'email', 'required');
		$this->form_validation->set_rules('pwd', 'Password', 'required');
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('Index');
		} else
		{
		if ($num_account > 0){
		// kalau ada set session
		$array_items = array(
		'id_user' => $temp_account->id_user,
		'name' => $temp_account->name,
		'email' => $temp_account->email,
		'logged_in' => true
		);
		$this->session->set_userdata($array_items);
		redirect(site_url('Index/view_success_page'));
		} else {
		// kalau ga ada diredirect lagi ke halaman login
		$this->session->set_flashdata('notification', 'Peringatan : email dan Password
		tidak cocok');
		redirect(site_url('Index'));
		}
		}
	}
	public function view_success_page(){
		$logged_in = $this->session->userdata('logged_in');
		if (!$logged_in){
		redirect(site_url('Index'));
		}
		redirect(site_url('beranda'));
	}
	public function signup(){
		$data['name']=$this->input->post('name');
		$data['email']=$this->input->post('email');
		$data['password']=md5($this->input->post('pwd'));
		$data['gender']=$this->input->post('gender');
		$data['id_comm']=$this->input->post('comm');

		if($this->IndexModel->insert_user($data)){
			if($this->IndexModel->sendEmail($this->input->post('email'))){
				// successfully sent mail
				$this->session->set_flashdata('msg','<div class="alert alert-success text-center">You are Successfully Registered! Please confirm the mail sent to your Email-ID!!!</div>');
                    redirect('Index');
			}
			else{
				 // error
                    echo'gagal kirim email';

			}
		}
		else{
			// error
                echo'Email sudah ada atau terjadi error';
		}
	}
	public function verify($hash=NULL)
    {
        if ($this->IndexModel->verifyEmailID($hash))
        {
            $this->session->set_flashdata('verify_msg','<div class="alert alert-success text-center">Your Email Address is successfully verified! Please login to access your account!</div>');
            redirect('Index');
        }
        else
        {
            $this->session->set_flashdata('verify_msg','<div class="alert alert-danger text-center">Sorry! There is error verifying your Email Address!</div>');
            redirect('Index');
        }
    }
	

}

/* End of file Index.php */
/* Location: ./application/controllers/Index.php */