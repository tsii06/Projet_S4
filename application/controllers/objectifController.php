<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ObjectifController extends CI_Controller{

    public function __construct() {
		parent::__construct();
		$this->load->helper('form');
	}
	
    public function objectif(){
        $this->load->view('Utilisateur/objectif');
    }

}
?>