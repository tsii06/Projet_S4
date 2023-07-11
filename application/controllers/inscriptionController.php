<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InscriptionController extends CI_Controller{

    public function __construct() {
		parent::__construct();
		$this->load->helper('form');
    	$this->load->model('UtilisateurModel');
		$this->load->model('MonnaieModel');
	}
	
    public function sign(){
        $this->load->view('register');
    }
    
    public function insert(){
        $this->form_validation->set_rules('nom','nom',
               'required'
          );
          $this->form_validation->set_rules('email','email',
               'required'
          );
          $this->form_validation->set_rules('mdp','mdp',
               'required'
          );
          if($this->form_validation->run()){ 
            $data['nom'] = $this->input->post("nom");
            $data['email'] = $this->input->post("email");
            $data['mdp'] = $this->input->post("mdp");
            $data['genre'] = $this->input->post("genre");
            $this->load->view('completion',$data);
        }else{
            $this->load->view('register');
        }
    }
    public function finition(){
      $this->form_validation->set_rules('poids','poids',
               'required'
          );
          $this->form_validation->set_rules('taille','taille',
               'required'
          );

          if($this->form_validation->run()){ 
            $nom = $this->input->post("nom");
            $email= $this->input->post("email");
            $mdp = $this->input->post("mdp");
            $genre = $this->input->post("genre");
            $poids = $this->input->post("poids");
            $taille = $this->input->post("taille");
            $this->load->model('UtilisateurModel');
            $this->load->model('ProfilUtilisateurModel');
            $idUtilisateur = $this->UtilisateurModel->insert($nom,$email,$mdp,$genre);
            $this->ProfilUtilisateurModel->insert($idUtilisateur,$taille,$poids);
            $id=1;

			$Utilisateur = $this->UtilisateurModel->utilisateurById($id);
			$data['utilisateur'] = $Utilisateur;
			$list = $this->MonnaieModel->ListMonnaie();
			$data['list'] = $list;
			$id=1;
			$Utilisateur = $this->UtilisateurModel->utilisateurById($id);
			$data['utilisateur'] = $Utilisateur;
            $this->load->view('Utilisateur/argent',$data);
        }else{
            $data['nom'] = $this->input->post("nom");
            $data['email'] = $this->input->post("email");
            $data['mdp'] = $this->input->post("mdp");
            $data['genre'] = $this->input->post("genre");
            $this->load->model('UtilisateurModel');
            $this->load->view('completion',$data);
        }
    }


}
?>


