<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('indexModel');

	}
	public function test(){
		$this->load->view('test');
	}
	public function index()
	{	
		$this->load->view('index');
	}
	public function login(){
		$email = $this->input->post("email");
        $pwd = $this->input->post("pwd");

        $this->form_validation->set_rules("email", "email", "trim|required");
        $this->form_validation->set_rules("pwd", "pwd", "trim|required");

        if ($this->form_validation->run() == FALSE)
          {
               //validation fails
               $this->load->view('index');
          }
          else
          {
               //validation succeeds
               if ($this->input->post('btn_login') == "Login")
               {
                    //check if username and password is correct
                    $usr_result = $this->indexModel->get_user($email, $pwd);
                    if ($usr_result > 0) //active user record is present
                    {
                         //set the session variables
                         $sessiondata = array(
                              'email' => $email,
                              'loginuser' => TRUE
                         );
                         $this->session->set_userdata($sessiondata);
                         redirect("");
                    }
                    else
                    {
                         $this->session->set_flashdata('msg', 'alert alert-danger text-center">Invalid username and password!');
                         redirect('index');
                    }
               }
               else
               {
                    redirect('');
               }
          }
     }

}

/* End of file index.php */
/* Location: ./application/controllers/index.php */