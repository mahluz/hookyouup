<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends MX_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('date');
		$this->load->library('session','pagination');
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
		$data['user']=$this->Beranda_Model->select_all_by_user($this->session->userdata('id_user'))->row();
		$data['post']=$this->Beranda_Model->select_post_by_comm($selected_comm)->result();
		$data['comment']=$this->Beranda_Model->select_comment_by_comm($selected_comm)->result();
		$data['all_post']=$this->Beranda_Model->select_all_post()->result();
		$this->load->view('header',$data);
		$this->load->view('beranda',$data);
		$this->load->view('footer');
	}
	public function search_profile(){
		$str=$this->input->get('txtSearch');
		$plist=$this->Beranda_Model->search_profile($str);
		$count_result=0;
		
	}
	public function photo($offset=0){
		$selected_comm=$this->session->userdata('id_comm');
		// Pagination Configuration
		$perpage=8;
		$config['base_url']=base_url('Beranda/photo');
		$config['total_rows']=count($this->Beranda_Model->select_all_photo($selected_comm)->result()); 
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
		$data['community']=$this->Beranda_Model->select_all_by_comm($selected_comm)->row();
		$data['user']=$this->Beranda_Model->select_all_by_user($this->session->userdata('id_user'))->row();
		$data['photo']=$this->Beranda_Model->select_all_photo_page($selected_comm,$limit)->result();
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
	public function video($offset=0){
		$selected_comm=$this->session->userdata('id_comm');
		// Pagination Configuration
		$perpage=1;
		$config['base_url']=base_url('Beranda/video');
		$config['total_rows']=count($this->Beranda_Model->select_all_video($selected_comm)->result()); 
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
		$data['community']=$this->Beranda_Model->select_all_by_comm($selected_comm)->row();
		$data['user']=$this->Beranda_Model->select_all_by_user($this->session->userdata('id_user'))->row();
		$data['video']=$this->Beranda_Model->select_all_video_page($selected_comm,$limit)->result();
		$this->load->view('header',$data);
		$this->load->view('video',$data);
		$this->load->view('footer');
	}
	public function new_video(){
		$selected_comm=$this->session->userdata('id_comm');
		$data['community']=$this->Beranda_Model->select_all_by_comm($selected_comm)->row();
		$data['user']=$this->Beranda_Model->select_all_by_user($this->session->userdata('id_user'))->row();
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
	public function blog_list($offset=0){
		$selected_comm=$this->session->userdata('id_comm');
		// Pagination Configuration
		$perpage=3;
		$config['base_url']=base_url('Beranda/blog_list');
		$config['total_rows']=count($this->Beranda_Model->select_all_blog_by_comm($selected_comm)->result()); 
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

		$data['community']=$this->Beranda_Model->select_all_by_comm($selected_comm)->row();
		$data['user']=$this->Beranda_Model->select_all_by_user($this->session->userdata('id_user'))->row();
		$data['blog']=$this->Beranda_Model->select_all_blog_by_comm_page($selected_comm,$limit)->result();
		$data['all_blog']=$this->Beranda_Model->select_all_blog()->result();
		$this->load->view('header',$data);
		$this->load->view('blog_list',$data);
		$this->load->view('footer');
	}
	public function new_blog(){
		$selected_comm=$this->session->userdata('id_comm');
		$data['community']=$this->Beranda_Model->select_all_by_comm($selected_comm)->row();
		$data['user']=$this->Beranda_Model->select_all_by_user($this->session->userdata('id_user'))->row();
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
		$data['user']=$this->Beranda_Model->select_all_by_user($this->session->userdata('id_user'))->row();
		$this->load->view('header',$data);
		$this->load->view('member_list',$data);
		$this->load->view('footer');
	}
	public function forum(){
		$selected_comm=$this->session->userdata('id_comm');
		$data['community']=$this->Beranda_Model->select_all_by_comm($selected_comm)->row();
		$data['user']=$this->Beranda_Model->select_all_by_user($this->session->userdata('id_user'))->row();
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
	public function profile($id_user){
		$this->session->set_userdata('selected_profile',$id_user);
		redirect('Beranda/profile_post');
	}
	public function profile_post(){
		$selected_comm=$this->session->userdata('id_comm');
		$data['community']=$this->Beranda_Model->select_all_by_comm($selected_comm)->row();
		$data['user']=$this->Beranda_Model->select_all_by_user($this->session->userdata('selected_profile'))->row();
		$data['post']=$this->Beranda_Model->select_post_by_user($this->session->userdata('selected_profile'))->result();
		$this->load->view('profile/header',$data);
		$this->load->view('profile/post',$data);
		$this->load->view('profile/footer');
	}
	public function profile_change_profile(){
		$selected_comm=$this->session->userdata('id_comm');
		$data['community']=$this->Beranda_Model->select_all_by_comm($selected_comm)->row();
		$data['user']=$this->Beranda_Model->select_all_by_user($this->session->userdata('selected_profile'))->row();
		$data['post']=$this->Beranda_Model->select_post_by_user($this->session->userdata('selected_profile'))->result();
		$this->load->view('profile/header',$data);
		$this->load->view('profile/change_profile');
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

	//Uploading file --------------------------------------------------------
	public function do_upload(){
	$target_dir = "assets/gallery/".$this->session->userdata('id_comm')."/photo/";
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	if(!is_dir("assets/gallery/".$this->session->userdata('id_comm')."/photo")){
		mkdir("assets/gallery/".$this->session->userdata('id_comm')."/photo",0777,true);
	}
	// Check if image file is a actual image or fake image
	if(isset($_POST["submit"])) {
	    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
	    if($check !== false) {
	        echo "File is an image - " . $check["mime"] . ".";
	        $uploadOk = 1;
	    } else {
	        echo "File is not an image.";
	        $uploadOk = 0;
	    }
	}
	// Check if file already exists
	if (file_exists($target_file)) {
	    echo "Sorry, file already exists.";
	    $uploadOk = 0;
	} 
	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) {
	    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	    $uploadOk = 0;
	} 
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
	    echo "Sorry, your file was not uploaded.";
	// if everything is ok, try to upload file
	} else {
	    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
	        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
	        $data['id_user']=$this->session->userdata('id_user');
	        $data['photo_name']=basename( $_FILES["fileToUpload"]["name"]);
	        $this->Beranda_Model->insert_photo($data);
	        
	    } else {
	        echo "Sorry, there was an error uploading your file.";
	    }
	}
	}
	//End Uploading file ----------------------------------------------------
	//Uploading Profile file --------------------------------------------------------
	public function do_upload_profile(){
	$target_dir = "assets/gallery/".$this->session->userdata('id_comm')."/users/".$this->session->userdata('id_user')."/";
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	if(!is_dir("assets/gallery/".$this->session->userdata('id_comm')."/users/".$this->session->userdata('id_user'))){
		mkdir("assets/gallery/".$this->session->userdata('id_comm')."/users/".$this->session->userdata('id_user'),0777,true);
	}
	// Check if image file is a actual image or fake image
	if(isset($_POST["submit"])) {
	    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
	    if($check !== false) {
	        echo "File is an image - " . $check["mime"] . ".";
	        $uploadOk = 1;
	    } else {
	        echo "File is not an image.";
	        $uploadOk = 0;
	    }
	}
	// Check if file already exists
	if (file_exists($target_file)) {
	    echo "Sorry, file already exists.";
	    $uploadOk = 0;
	} 
	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) {
	    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	    $uploadOk = 0;
	} 
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
	    echo "Sorry, your file was not uploaded.";
	// if everything is ok, try to upload file
	} else {
	    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
	        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
	        $data['photo_profile']=basename( $_FILES["fileToUpload"]["name"]);
	        $this->Beranda_Model->insert_photo_profile($data);

	    } else {
	        echo "Sorry, there was an error uploading your file.";
	    }
	}
	}
	//End Uploading file ----------------------------------------------------
}

/* End of file beranda.php */
/* Location: ./application/modules/beranda/controllers/beranda.php */