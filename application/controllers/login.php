<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{

    public function __construct() {
		parent::__construct();
		$this->load->helper('form');
	}
	

    public function signup(){
        $this->load->view('register');
    }

    public function signin(){
        $this->load->view('login');
    }
}
?>