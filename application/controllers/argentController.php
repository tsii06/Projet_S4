<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ArgentController extends CI_Controller{

    public function __construct() {
		parent::__construct();
		$this->load->helper('form');
	}
	
    public function argent(){
        $this->load->view('Utilisateur/argent');
    }

}
?>