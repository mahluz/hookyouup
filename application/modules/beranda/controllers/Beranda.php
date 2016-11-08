<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends MX_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('date');
		$this->load->library('session');
		$this->load->model('Beranda_Model');
		if ($this->session->userdata('logged_in')==false){
			redirect('Error/error_2');
		}
		if($this->session->userdata('status')==0){
			$this->session->sess_destroy();
			redirect('Error');
		}
		if($this->session->userdata('logged_in')==true){
			$data['is_online']=true;
			$this->Beranda_Model->user_online($data);
		}

	}
	public function index()
	{
		$selected_comm=$this->session->userdata('id_comm');
		$data['community']=$this->Beranda_Model->select_all_by_comm($selected_comm)->row();
		$data['post']=$this->Beranda_Model->select_post_by_comm($selected_comm)->result();
		$data['comment']=$this->Beranda_Model->select_comment_by_comm($selected_comm)->result();
		$data['all_post']=$this->Beranda_Model->select_all_post()->result();
		$this->load->view('header',$data);
		$this->load->view('beranda',$data);
		$this->load->view('footer');
	}
	public function photo(){
		$selected_comm=$this->session->userdata('id_comm');
		$data['community']=$this->Beranda_Model->select_all_by_comm($selected_comm)->row();
		$data['photo']=$this->Beranda_Model->select_all_photo($selected_comm)->result();
		$this->load->view('header',$data);
		$this->load->view('photo',$data);
		$this->load->view('footer');
	}
	public function download_photo($name,$comm){
		echo $name;
		echo $comm;
		$path=base_url('assets/gallery/'.$comm.'/photo/'.$name);
		ob_clean();
		$data=file_get_contents($path);
		force_download($name,$data);
		
	}
	public function video(){
		$selected_comm=$this->session->userdata('id_comm');
		$data['community']=$this->Beranda_Model->select_all_by_comm($selected_comm)->row();
		$data['video']=$this->Beranda_Model->select_all_video($selected_comm)->result();
		$this->load->view('header',$data);
		$this->load->view('video',$data);
		$this->load->view('footer');
	}
	public function new_video(){
		$selected_comm=$this->session->userdata('id_comm');
		$data['community']=$this->Beranda_Model->select_all_by_comm($selected_comm)->row();
		$this->load->view('header',$data);
		$this->load->view('video_add');
		$this->load->view('footer');
	}
	public function proses_new_video(){
		$selected_user=$this->session->userdata('id_user');
		$data['title']=$this->input->post('title');
		$data['video_url']=$this->input->post('URL');
		$data['content']=$this->input->post('content');
		$this->db->set('date_created','NOW()',FALSE);
		$this->db->set('id_user',$selected_user);
		$this->Beranda_Model->insert_video($data);

		redirect('Beranda/video');
	}
	public function blog_list(){
		$selected_comm=$this->session->userdata('id_comm');
		$data['community']=$this->Beranda_Model->select_all_by_comm($selected_comm)->row();
		$data['blog']=$this->Beranda_Model->select_all_blog_by_comm($selected_comm)->result();
		$data['all_blog']=$this->Beranda_Model->select_all_blog()->result();
		$this->load->view('header',$data);
		$this->load->view('blog_list',$data);
		$this->load->view('footer');
	}
	public function new_blog(){
		$selected_comm=$this->session->userdata('id_comm');
		$data['community']=$this->Beranda_Model->select_all_by_comm($selected_comm)->row();
		$this->load->view('header',$data);
		$this->load->view('blog_add');
		$this->load->view('footer');
	}
	public function proses_new_blog(){
		$selected_user=$this->session->userdata('id_user');
		$data['title']=$this->input->post('title');
		$data['content']=$this->input->post('content');
		$this->db->set('date_created','NOW()',FALSE);
		$this->db->set('id_user',$selected_user);
		$this->Beranda_Model->insert_blog($data);

		redirect('Beranda/blog_list');
	}
	public function delete_blog($id_ann){
		$this->Beranda_Model->delete_blog($id_ann);
		redirect('Beranda/blog_list');
	}
	public function delete_post($id_post){
		$this->Beranda_Model->delete_post($id_post);
		redirect('Beranda');
	}
	public function member_list(){
		$selected_comm=$this->session->userdata('id_comm');
		$data['member']=$this->Beranda_Model->select_all_member($selected_comm)->result();
		$data['community']=$this->Beranda_Model->select_all_by_comm($selected_comm)->row();
		$this->load->view('header',$data);
		$this->load->view('member_list',$data);
		$this->load->view('footer');
	}
	public function forum(){
		$selected_comm=$this->session->userdata('id_comm');
		$data['community']=$this->Beranda_Model->select_all_by_comm($selected_comm)->row();
		$data['online']=$this->Beranda_Model->select_all_user_online_by_comm()->result();
		$this->load->view('header',$data);
		$this->load->view('forum',$data);
		$this->load->view('footer');
	}
	public function display_session(){
		print_r($this->session->userdata);
		$THE_REFER = strval(isset($_SERVER['HTTP_REFERER']));
		if (!$THE_REFER){
			redirect('index');
		}  
	}
	public function display_data(){
		$selected_comm=$this->session->userdata('id_comm');
		$data['community']=$this->Beranda_Model->select_all_by_comm($selected_comm)->result();
		$this->load->view('test',$data);
	}
	public function logout(){
		$this->session->sess_destroy();
		$data['is_online']=false;
		$this->Beranda_Model->user_online($data);
		redirect('index');
	}
	public function proses_new_post(){
		$data['id_user']=$this->session->userdata('id_user');
		$data['content']=$this->input->post('content');
		$this->Beranda_Model->insert_post($data);

		redirect('beranda');
	}
	public function proses_new_comment($id_post){
		$data['content_comment']=$this->input->post('comment');
		$data['id_post']=$id_post;
		$data['id_user_comment']=$this->session->userdata('id_user');
		$this->Beranda_Model->insert_comment($data);

		redirect('Beranda');
	}
	public function proses_new_post_profile(){
		$data['id_user']=$this->session->userdata('id_user');
		$data['content']=$this->input->post('content');
		$this->Beranda_Model->insert_post($data);

		redirect('Beranda/profile_post');
	}
	public function profile_post($id_user){
		$selected_comm=$this->session->userdata('id_comm');
		$data['community']=$this->Beranda_Model->select_all_by_comm($selected_comm)->row();
		$data['user']=$this->Beranda_Model->select_all_by_user($id_user)->row();
		$data['post']=$this->Beranda_Model->select_post_by_user($id_user)->result();
		$this->load->view('profile/header',$data);
		$this->load->view('profile/post',$data);
		$this->load->view('profile/footer');
	}
	public function profile_biodata(){
		$selected_comm=$this->session->userdata('id_comm');
		$data['community']=$this->Beranda_Model->select_all_by_comm($selected_comm)->row();
		$this->load->view('profile/header');
		$this->load->view('profile/biodata',$data);
		$this->load->view('profile/footer');
	}
	public function profile_favorite(){
		$selected_comm=$this->session->userdata('id_comm');
		$data['community']=$this->Beranda_Model->select_all_by_comm($selected_comm)->row();
		$this->load->view('profile/header');
		$this->load->view('profile/favorite',$data);
		$this->load->view('profile/footer');
	}
	public function profile_following(){
		$selected_comm=$this->session->userdata('id_comm');
		$data['community']=$this->Beranda_Model->select_all_by_comm($selected_comm)->row();
		$this->load->view('profile/header');
		$this->load->view('profile/following',$data);
		$this->load->view('profile/footer');
	}
	// For Chat API ---------------------------------------------------------
	public function send_message()
	{
		$message = $this->input->get('message', null);
		$nickname = $this->input->get('nickname', '');
		$guid = $this->input->get('guid', '');
		
		$this->Beranda_Model->add_message($message, $nickname, $guid);
		
		$this->_setOutput($message);
	}
	
	
	public function get_messages()
	{
		$timestamp = $this->input->get('timestamp', null);
		
		$messages = $this->Beranda_Model->get_messages($timestamp);
		
		$this->_setOutput($messages);
	}
	
	
	private function _setOutput($data)
	{
		header('Cache-Control: no-cache, must-revalidate');
		header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
		header('Content-type: application/json');
		
		echo json_encode($data);
	}
	//End Chat API ----------------------------------------------------------
}

/* End of file beranda.php */
/* Location: ./application/modules/beranda/controllers/beranda.php */