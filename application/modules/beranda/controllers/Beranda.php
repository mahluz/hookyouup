<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends MX_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->model('Beranda_Model');
		if ($this->session->userdata('logged_in')==false){
			redirect('index');
		}
		if ($this->session->userdata('status')==0){
			redirect('index');
		}
	}
	public function index()
	{
		$selected_comm=$this->session->userdata('id_comm');
		$data['community']=$this->Beranda_Model->select_all_by_comm($selected_comm)->row();
		$data['post']=$this->Beranda_Model->select_post_by_comm($selected_comm)->result();
		$this->load->view('header',$data);
		$this->load->view('page',$data);
		$this->load->view('footer');
	}
	public function display_session(){
		print_r($this->session->userdata); 
	}
	public function display_data(){
		$selected_comm=$this->session->userdata('id_comm');
		$data['community']=$this->Beranda_Model->select_all_by_comm($selected_comm)->result();
		$this->load->view('beranda',$data);
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect('index');
	}
	public function proses_new_post(){
		$data['id_user']=$this->session->userdata('id_user');
		$data['content']=$this->input->post('content');
		$this->Beranda_Model->insert_post($data);

		redirect('beranda');
	}

}

/* End of file beranda.php */
/* Location: ./application/modules/beranda/controllers/beranda.php */