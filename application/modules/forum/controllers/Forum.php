<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forum extends MX_Controller {

	public function index()
	{
		$this->load->view('forum');
	}

}

/* End of file Forum.php */
/* Location: ./application/modules/forum/controllers/Forum.php */