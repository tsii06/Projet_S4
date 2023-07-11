<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AlimentController extends CI_Controller{

    public function __construct() {
		parent::__construct();
		$this->load->helper('form');
	}
	
    public function AlimentListe(){
         $this->load->model('SakafoModel');
        $data = array();
        $data['liste'] = $this->SakafoModel->listeSakafo();   
        $this->load->view('Admin/Liste/AlimentListe',$data);
    }

    public function ajouterAliment(){
        $data = array();
        $this->load->model('CategorieModel');
        $data['liste'] = $this->CategorieModel->listeCategorie();   
        $this->load->view('Admin/Ajouter/ajouterAliment',$data);
    }

    public function ajouter(){
           $this->form_validation->set_rules('nom','nom',
               'required'
          );

          if($this->form_validation->run()){ 
        $nom = $this->input->post("nom");
        $idObjectif = $this->input->post("idObjectif");
        $idCategorie = $this->input->post("idCategorie");
        $this->load->model('SakafoModel');
        $this->SakafoModel->insert($idObjectif,$idCategorie,$nom);
        redirect('alimentController/ajouterAliment');
    }else{
        $data = array();
        $this->load->model('CategorieModel');
        $data['liste'] = $this->CategorieModel->listeCategorie();   
        $this->load->view('Admin/Ajouter/ajouterAliment',$data);
    }
    
    public function modifier($idSakafo){
        $this->load->model('SakafoModel');
        $this->load->model('CategorieModel');
        $data = array();
        $data['liste'] = $this->SakafoModel->sakafoById($idSakafo); 
        $data['categorie'] = $this->CategorieModel->listeCategorie(); 
        $this->load->view('Admin/Modifier/modifierAliment',$data);
    }
    public function update(){
        $nom = $this->input->post("nom");
        $idObjectif = $this->input->post("idObjectif");
        $idCategorie = $this->input->post("idCategorie");
        $idSakafo = $this->input->post("idSakafo");
        $this->load->model('SakafoModel');
        $this->SakafoModel->update($idObjectif,$idCategorie,$nom,$idSakafo);
        redirect('alimentController/AlimentListe');
    }
}
?>