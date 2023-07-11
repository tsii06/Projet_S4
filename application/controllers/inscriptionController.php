<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class inscriptionController extends CI_Controller{

    public function __construct() {
		parent::__construct();
		$this->load->helper('form');
	}
	
    public function sign(){
        $this->load->view('register');
    }
    
    public function insert(){
        $nom = $this->input->post("nom");
        $email = $this->input->post("email");
        $mdp = $this->input->post("mdp");
        $this->load->model('UtilisateurModel');
        $this->UtilisateurModel->insert($nom,$email,$mdp);
        redirect('Welcome/index');
    }
}
?>


