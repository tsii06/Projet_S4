<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CompletionController extends CI_Controller{

    public function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('RegimeUtilisateurModel');
		$this->load->model('ObjectifUtilisateurModel');
	}
	
    public function completion(){
        $this->load->view('Utilisateur/completion');
    }

    public function insert(){
    	$idUtilisateur = 1;
        $taille = $this->input->post("taille");
        $poids = $this->input->post("poids");
        $this->load->model('ProfilUtilisateurModel');
        $this->ProfilUtilisateurModel->insert($idUtilisateur,$taille,$poids);
       	///
		redirect('suggestionController/suggestion');
    }

}
?>
