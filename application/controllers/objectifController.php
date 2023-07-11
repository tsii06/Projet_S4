<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ObjectifController extends CI_Controller{

    public function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->database();
	}
	
    public function objectif(){
        $this->load->view('Utilisateur/objectif');
    }

    public function insert(){
    	$idUtilisateur = $this->input->post("idUtilisateur");
        $idObjectif = $this->input->post("idObjectif");
        $poids = $this->input->post("poids");
        $this->load->model('ObjectifUtilisateurModel');
        $this->ObjectifUtilisateurModel->insert($idUtilisateur,$idObjectif,$poids);
       redirect('ObjectifController/objectif');
    }

}
?>