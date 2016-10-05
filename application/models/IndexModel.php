<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class IndexModel extends CI_Model {
	public function __construct(){
		$this->load->database();
	}
	
	public function select_comm(){
		$this->db->select('*');
		$this->db->from('community');
		$this->db->order_by('id_comm','asc');

		return $this->db->get();
	}
	//Insert data ketika mendaftar
	public function insert_user($data){
		return $this->db->insert('user',$data);
	}
    //Cek keberadaan User
    public function check_user_account($email,$password){
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('email',$email);
        $this->db->where('password',$password);

        return $this->db->get();
    }
    // mengambil data user tertentu
    public function get_user($id_user){
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('id_user', $id_user);
        return $this->db->get();
    }
	//send verification email to user's email id
    public function sendEmail($to_email)
    {
        $from_email = 'zulham724@gmail.com'; //change this to yours
        $subject = 'Verify Your Email Address';
        $message = 'Dear User,<br /><br />Please click on the below activation link to verify your email address.<br /><br /> http://localhost/hookyouup/index.php/Index/verify/' . md5($to_email) . '<br /><br /><br />Thanks<br /><b>Hook You Up Team Developer</b>';
        
        //configure email settings
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://smtp.gmail.com'; //smtp host name
        $config['smtp_port'] = '465'; //smtp port number
        $config['smtp_user'] = $from_email;
        $config['smtp_pass'] = 'aamgaul724698'; //$from_email password
        $config['mailtype'] = 'html';
        $config['charset'] = 'iso-8859-1';
        $config['wordwrap'] = TRUE;
        $config['newline'] = "\r\n"; //use double quotes
        $this->email->initialize($config);
        
        //send mail
        $this->email->from($from_email, 'Hook You Up');
        $this->email->to($to_email);
        $this->email->subject($subject);
        $this->email->message($message);
        return $this->email->send();
    }
    
    //activate user account
    public function verifyEmailID($key)
    {
        $data = array('status' => 1);
        $this->db->where('md5(email)', $key);
        return $this->db->update('user', $data);
    }

}

/* End of file IndexModel.php */
/* Location: ./application/models/IndexModel.php */