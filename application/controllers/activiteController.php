<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class activiteController extends CI_Controller{

    public function __construct() {
		parent::__construct();
		$this->load->helper('form');
	}
	
    public function activiteListe(){
        $this->load->view('Admin/Liste/activiteListe');
    }

    public function ajouterActivite(){
        $this->load->view('Admin/Ajouter/ajouterActivite');
    }

    public function modifier(){
        $this->load->view('Admin/Modifier/modifierActivite');
    }
}
?>