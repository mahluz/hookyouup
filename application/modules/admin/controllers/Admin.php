<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MX_Controller {

	public function index()
	{
		if (!$logged_in){
		redirect(site_url('Signin'));
		}
		else{
		$this->load->view('admin');
		}
	}

}

/* End of file Admin.php */
/* Location: ./application/modules/admin/controllers/Admin.php */