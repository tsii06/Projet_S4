<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CompletionController extends CI_Controller{

    public function __construct() {
		parent::__construct();
		$this->load->helper('form');
	}
	
    public function completion(){
        $this->load->view('Utilisateur/completion');
    }

}
?>