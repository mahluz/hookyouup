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
	public function select_all_blog($selected_comm){
		$this->db->select('*');
		$this->db->from('community');
		$this->db->join('user','community.id_comm=user.id_comm');
		$this->db->join('announcement','user.id_user=announcement.id_user');
		$this->db->where('user.id_comm',$selected_comm);
		$this->db->order_by('announcement.date_created','desc');

		return $this->db->get();
	}
	public function select_all_photo($selected_comm){
		$this->db->select('*');
		$this->db->from('community');
		$this->db->join('user','community.id_comm=user.id_comm');
		$this->db->join('photo','user.id_user=photo.id_user');
		$this->db->where('user.id_comm',$selected_comm);
		$this->db->order_by('id_photo','desc');

		return $this->db->get();
	}
	public function insert_blog($data){
		$this->db->insert('announcement',$data);
	}
	public function delete_blog($id_ann){
		$this->db->where('id_ann',$id_ann);
		$this->db->delete('announcement');
	}
	public function delete_post($id_post){
		$this->db->where('id_post',$id_post);
		$this->db->delete('post');
	}
	public function select_all_member($selected_comm){
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('id_comm',$selected_comm);
		$this->db->where('status','1');
		$this->db->order_by('id_user','desc');

		return $this->db->get();
	}

}

/* End of file Beranda_Model.php */
/* Location: ./application/modules/beranda/models/Beranda_Model.php */