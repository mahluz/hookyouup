<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MX_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Admin_Model');
		$this->load->helper('url','text','form');
		$this->load->library('session','form_validation','email');
		if($this->session->userdata('logged_in')==false){
			redirect('signin');
		}
	}
	public function index()
	{
		$data['comm_list']=$this->Admin_Model->select_all_comm()->result();
		$data['user_list']=$this->Admin_Model->select_all_user()->result();
		$this->load->view('header');
		$this->load->view('dashboard',$data);
		$this->load->view('footer');
	}
	public function blog_list(){
		$data['blog']=$this->Admin_Model->select_all_blog()->result();
		$this->load->view('header');
		$this->load->view('entri_list',$data);
		$this->load->view('footer');
	}
	public function new_entri(){
		$this->load->view('header');
		$this->load->view('entri_tambah');
		$this->load->view('footer');
	}
	public function proses_tambah_blog(){
		$selected_admin=$this->session->userdata('id_admin');
		$data['title']=$this->input->post('title');
		$data['content']=$this->input->post('content');
		$this->db->set('date_created','NOW()',FALSE);
		$this->db->set('id_admin',$selected_admin);
		$this->Admin_Model->insert_blog($data);
		redirect(site_url('admin/blog_list'));
	}
	public function event_list(){
		$data['event']=$this->Admin_Model->select_all_event()->result();
		$this->load->view('header');
		$this->load->view('event_list',$data);
		$this->load->view('footer');
	}
	public function new_event(){
		$this->load->view('header');
		$this->load->view('event_tambah');
		$this->load->view('footer');
	}
	public function proses_tambah_event(){

	}
	public function delete_blog($id_blog){
		$this->Admin_Model->delete_blog($id_blog);
		redirect('admin/blog_list');
	}
	public function tampil_blog($id_blog){
		$data['selected_blog']=$this->Admin_Model->tampil_blog($id_blog)->row();
		$this->load->view('header');
		$this->load->view('entri_view',$data);
		$this->load->view('footer');

	}
	public function comm_list(){
		$data['comm_list']=$this->Admin_Model->select_all_comm()->result();
		$this->load->view('header');
		$this->load->view('comm_list',$data);
		$this->load->view('footer');
	}
	public function user_list(){
		$data['user_list']=$this->Admin_Model->select_all_user()->result();
		$this->load->view('header');
		$this->load->view('user_list',$data);
		$this->load->view('footer');
	}
	public function logout(){
	$this->session->sess_destroy();
	redirect('index');
	}
}

/* End of file Admin.php */
/* Location: ./application/modules/admin/controllers/Admin.php */