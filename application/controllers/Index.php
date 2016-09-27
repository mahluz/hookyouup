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
		$this->load->view('cover/Index',$data);
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
				echo'Konfirmasi dulu';
			}
			else{
				 // error
                echo'gagal kirim konfirmasi email';

			}
		}
		else{
			// error
                $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Error.  Please try again later!!!</div>');
                redirect('Index');
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