<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda_Model extends CI_Model {
	public function __construct(){

	}
	public function user_online($data){
		$this->db->where('id_user',$this->session->userdata('id_user'));
		$this->db->update('user',$data);
	}
	public function select_all_user_online_by_comm(){
		$this->db->select('*');
		$this->db->from('community');
		$this->db->join('user','user.id_comm=community.id_comm');
		$this->db->where('user.is_online',true);

		return $this->db->get();
	}
	public function select_all_by_comm($selected_comm){
		$this->db->select('*');
		$this->db->from('community');
		$this->db->join('user','user.id_comm=community.id_comm');
		$this->db->where('user.id_comm',$selected_comm);

		return $this->db->get();
	}
	public function select_all_by_user($id_user){
		$this->db->select('*');
		$this->db->from('community');
		$this->db->join('user','user.id_comm=community.id_comm');
		$this->db->where('user.id_user',$id_user);

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
	public function select_all_post(){
		$this->db->select('*');
		$this->db->from('community');
		$this->db->join('user','community.id_comm=user.id_comm');
		$this->db->join('post','user.id_user=post.id_user');
		$this->db->where('post.privacy','0');
		$this->db->order_by('post.date_created','desc');
		$this->db->limit(10);

		return $this->db->get();
	}
	public function insert_comment($data){
		$this->db->insert('comment_post',$data);
		$this->db->set('date_created','NOW()',FALSE);
	}
	public function select_comment_by_comm($selected_comm){
		$this->db->select('*');
		$this->db->from('community');
		$this->db->join('user','community.id_comm=user.id_comm');
		$this->db->join('comment_post','user.id_user=comment_post.id_user_comment');
		$this->db->join('post','post.id_post=comment_post.id_post');
		$this->db->where('user.id_comm',$selected_comm);
		$this->db->order_by('comment_post.date_created_comment','asc');

		return $this->db->get();
	}
	public function select_post_by_user($id_user){
		$this->db->select('*');
		$this->db->from('community');
		$this->db->join('user','community.id_comm=user.id_comm');
		$this->db->join('post','user.id_user=post.id_user');
		$this->db->where('user.id_user',$id_user);
		$this->db->order_by('post.date_created','desc');

		return $this->db->get();
	}
	public function select_all_blog_by_comm($selected_comm){
		$this->db->select('*');
		$this->db->from('community');
		$this->db->join('user','community.id_comm=user.id_comm');
		$this->db->join('announcement','user.id_user=announcement.id_user');
		$this->db->where('user.id_comm',$selected_comm);
		$this->db->order_by('announcement.date_created','desc');

		return $this->db->get();
	}
	public function select_all_blog(){
		$this->db->select('*');
		$this->db->from('community');
		$this->db->join('user','community.id_comm=user.id_comm');
		$this->db->join('announcement','user.id_user=announcement.id_user');
		$this->db->order_by('announcement.date_created','desc');
		$this->db->limit(3);

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
	public function select_all_video($selected_comm){
		$this->db->select('*');
		$this->db->from('community');
		$this->db->join('user','community.id_comm=user.id_comm');
		$this->db->join('video','user.id_user=video.id_user');
		$this->db->where('user.id_comm',$selected_comm);
		$this->db->order_by('id_video','desc');

		return $this->db->get();
	}
	public function insert_video($data){
		$this->db->insert('video',$data);
	}
	public function insert_photo($data){
		$this->db->set('date_created','NOW()',false);
		$this->db->insert('photo',$data);
	}
	public function insert_photo_profile($data){
		$this->db->where('id_user',$this->session->userdata('id_user'));
		$this->db->update('user',$data);
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
	// For chat API --------------------------------------------------
	public function add_message($message, $nickname, $guid)
	{
		$data = array(
			'message'	=> (string) $message,
			'nickname'	=> (string) $nickname,
			'guid'		=> (string)	$guid,
			'timestamp'	=> time(),
		);
		  
		$this->db->insert('messages', $data);
	}
 
	public function get_messages($timestamp)
	{
		$this->db->where('timestamp >', $timestamp);
		$this->db->order_by('timestamp', 'DESC');
		$this->db->limit(10); 
		$query = $this->db->get('messages');
		
		return array_reverse($query->result_array());
	}

	// End chat API --------------------------------------------------

}

/* End of file Beranda_Model.php */
/* Location: ./application/modules/beranda/models/Beranda_Model.php */