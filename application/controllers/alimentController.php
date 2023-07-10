<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class alimentController extends CI_Controller{

    public function __construct() {
		parent::__construct();
		$this->load->helper('form');
	}
	
    public function AlimentListe(){
        $this->load->view('Admin/Liste/AlimentListe');
    }

    public function ajouterAliment(){
        $this->load->view('Admin/Ajouter/ajouterAliment');
    }
    
    public function modifier(){
        $this->load->view('Admin/Modifier/modifierAliment');
    }
}
?>