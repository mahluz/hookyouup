<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda_Model extends CI_Model {
	public function __construct(){

	}
	public function select_all_by_comm($selected_comm){
		$this->db->select('*');
		$this->db->from('community');
		$this->db->join('user','user.id_comm=community.id_comm');
		$this->db->where('user.id_comm',$selected_comm);

		return $this->db->get();
	}
	public function insert_post($data){
		$this->db->insert('post',$data);
		$this->db->set('date_created','NOW()',FALSE);
	}
	public function select_post_by_comm($selected_comm){
		$this->db->select('*');
		$this->db->from('community');
		$this->db->join('user','community.id_comm=user.id_comm');
		$this->db->join('post','user.id_user=post.id_user');
		$this->db->where('user.id_comm',$selected_comm);
		$this->db->order_by('post.date_created','desc');

		return $this->db->get();
	}

}

/* End of file Beranda_Model.php */
/* Location: ./application/modules/beranda/models/Beranda_Model.php */