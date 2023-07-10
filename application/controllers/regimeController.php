<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegimeController extends CI_Controller{

    public function __construct() {
		parent::__construct();
		$this->load->helper('form');
	}
	
    public function regimeListe(){
        $this->load->view('Admin/Liste/regimeListe');
    }

    public function ajouter(){
        $this->load->view('Admin/Ajouter/ajouterRegime');
    }

    public function modifier(){
        $this->load->view('Admin/Modifier/modifierRegime');
    }
}
?>