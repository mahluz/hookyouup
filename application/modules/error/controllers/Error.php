<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Error extends MX_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('404');
		$this->load->view('footer');
	}
	public function error_2(){
		echo'Anda mencoba mengakses halaman tanpa login terlebih dahulu';
	}
	public function error_3(){
		echo'Email atau password yang anda masukkan salah';
	}

}

/* End of file Error.php */
/* Location: ./application/modules/error/controllers/Error.php */