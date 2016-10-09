<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda_Model extends CI_Model {
	public function __construct(){

	}
	public function select_all_by_comm($selected_comm){
		$this->db->select('*');
		$this->db->from('user');
		$this->db->join('community','user.id_comm=community.id_comm');
		$this->db->where('user.id_comm',$selected_comm);

		return $this->db->get();
	}
	

}

/* End of file Beranda_Model.php */
/* Location: ./application/modules/beranda/models/Beranda_Model.php */