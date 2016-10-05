<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Model extends CI_Model {
	public function __construct(){
		$this->load->database();
	}
	public function insert_blog($data){
		$this->db->insert('blog',$data);
	}
	public function select_all(){
		$this->db->select('*');
		$this->db->from('blog');
		$this->db->join('admin','admin.id_admin=blog.id_admin');
		$this->db->order_by('id_blog','desc');

		return $this->db->get();
	}
}

/* End of file Admin_Model.php */
/* Location: ./application/modules/admin/models/Admin_Model.php */