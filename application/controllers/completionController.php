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

    public function insert(){
    	$idUtilisateur = 1;
    	$genre = $this->input->post("genre");
        $taille = $this->input->post("taille");
        $poids = $this->input->post("poids");
        $this->load->model('ProfilUtilisateurModel');
        $this->ProfilUtilisateurModel->insert($idUtilisateur,$taille,$genre,$poids);
       redirect('completionController/completion');
    }

}
?>