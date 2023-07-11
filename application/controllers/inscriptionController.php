<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InscriptionController extends CI_Controller{

    public function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('UtilisateurModel');
	}
	
    public function sign(){
		$listgenre = $this->UtilisateurModel->listGenre();
		$data['listgenre'] = $listgenre;
        $this->load->view('register',$data);
    }
    
    public function insert(){
        $nom = $this->input->post("nom");
        $email = $this->input->post("email");
        $mdp = $this->input->post("mdp");
		$genre = $this->input->post('genre');
        $this->load->model('UtilisateurModel');
        $this->UtilisateurModel->insert($nom,$email,$mdp,$genre);
        redirect('Welcome/index');
    }
}
?>


