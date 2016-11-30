<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->helper('url','text','form');
		$this->load->library('session','form_validation','email','pagination');
		$this->load->model('IndexModel');
		if($this->session->userdata('logged_in')==true){
			redirect('Beranda');
		}
		
	}
	public function index($offset=0)
	{
		// Pagination Configuration
		$perpage=3;
		$config['base_url']=base_url('Index/index');
		$config['total_rows']=count($this->IndexModel->select_all_blog()->result()); 
		$config['per_page']=$perpage;
		$config['full_tag_open'] = "<ul class='pagination'>";
		$config['full_tag_close'] ="</ul>";
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
		$config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
		$config['next_tag_open'] = "<li>";
		$config['next_tagl_close'] = "</li>";
		$config['prev_tag_open'] = "<li>";
		$config['prev_tagl_close'] = "</li>";
		$config['first_tag_open'] = "<li>";
		$config['first_tagl_close'] = "</li>";
		$config['last_tag_open'] = "<li>";
		$config['last_tagl_close'] = "</li>";
		$this->pagination->initialize($config);
		$limit['perpage'] = $perpage;
		$limit['offset'] =$offset;
		// End Configuration

		$data['comm_list']=$this->IndexModel->select_comm()->result();
		$data['blog']=$this->IndexModel->select_all_blog_page($limit)->result();
		$this->load->view('cover/Index',$data);
	}
	// memeriksa keberadaan akun email
	public function login(){
		$email = $this->input->post('email', 'true');
		$input_password = $this->input->post('pwd', 'true');
		$password = md5($input_password);
		$temp_account = $this->IndexModel->check_user_account($email, $password)->row();

		$remember = $this->input->post('remember_me');
		if($remember){
			$this->session->set_userdata('remember_me', true);
		}

		// check account
		$num_account = count($temp_account);
		$this->form_validation->set_rules('email', 'email', 'required');
		$this->form_validation->set_rules('pwd', 'Password', 'required');
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('Index');
		} else
		{
		// untuk menset data session
		if ($num_account > 0){
			$array_items = array(
			'id_user' => $temp_account->id_user,
			'name' => $temp_account->name,
			'email' => $temp_account->email,
			'id_comm' => $temp_account->id_comm,
			'status' => $temp_account->status,
			'logged_in' => true
			);
			$this->session->set_userdata($array_items);
			redirect(site_url('Index/view_success_page'));
		} else {
			// kalau ga ada diredirect lagi ke halaman login
			$this->session->set_flashdata('notification', 'Peringatan : email dan Password
			tidak cocok');
			redirect('Error/error_3');
		}
		}
	}
	public function view_success_page(){
		$logged_in = $this->session->userdata('logged_in');
		if (!$logged_in){
		redirect(site_url('Index'));
		}
		redirect(site_url('Beranda'));
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
    public function check_ssl(){
    	$fp = fsockopen("www.google.com", 80, $errno, $errstr, 10); // work fine
	    if (!$fp)
	        echo "www.google.com -  $errstr   ($errno)<br>\n";
	    else
	        echo "www.google.com -  ok<br>\n";


	    $fp = fsockopen("smtp.gmail.com", 465, $errno, $errstr, 10); // NOT work
	    if (!$fp)
	        echo "smtp.gmail.com 465  -  $errstr   ($errno)<br>\n";
	    else
	        echo "smtp.gmail.com 465 -  ok<br>\n";


	    $fp = fsockopen("smtp.gmail.com", 587, $errno, $errstr, 10); // NOT work
	    if (!$fp)
	        echo "smtp.gmail.com 587  -  $errstr   ($errno)<br>\n";
	    else
	        echo "smtp.gmail.com 587 -  ok<br>\n";

    }
	

}

/* End of file Index.php */
/* Location: ./application/controllers/Index.php */