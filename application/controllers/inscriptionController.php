<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InscriptionController extends CI_Controller{

    public function __construct() {
		parent::__construct();
		$this->load->helper('form');
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
            $nom = $this->input->post("nom");
            $email = $this->input->post("email");
            $mdp = $this->input->post("mdp");
            $this->load->model('UtilisateurModel');
            $this->UtilisateurModel->insert($nom,$email,$mdp);
            redirect('Welcome/index');
        }else{
            $this->load->view('register');
        }
    }
}
?>


