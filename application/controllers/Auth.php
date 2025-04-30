<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
	}

	// *** Menampilkan Halaman Login ***
	public function index(){
		$this->load->view('Admin/login');
	}

    // *** Menampilkan Halaman Register ***
	public function register(){
		$this->load->view('Admin/register');
	}
}