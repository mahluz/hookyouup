<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MX_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Admin_Model');
		$this->load->helper('url','text','form');
		$this->load->library('session','form_validation','email');
	}
	public function index()
	{
		$data['blog']=$this->Admin_Model->select_all()->result();
		$this->load->view('entri_list',$data);
	}
	public function new_entri(){
		$this->load->view('entri_tambah');
	}
	public function proses_tambah_blog(){
		$data['title']=$this->input->post('title');
		$data['content']=$this->input->post('content');
		$this->db->set('date_created','NOW()',FALSE);
		$this->db->set('id_admin','1');
		$this->Admin_Model->insert_blog($data);
		redirect(site_url('admin'));
	}
}

/* End of file Admin.php */
/* Location: ./application/modules/admin/controllers/Admin.php */