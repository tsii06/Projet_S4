<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SuggestionController extends CI_Controller{

    public function __construct() {
		parent::__construct();
		$this->load->helper('form');
	}
	
    public function suggestion(){
        $this->load->view('Utilisateur/suggestion');
    }

    public function details(){
        $this->load->view('Utilisateur/details');
    }

}
?>