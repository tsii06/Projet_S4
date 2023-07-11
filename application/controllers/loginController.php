<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller{

    public function __construct() {
		parent::__construct();
		$this->load->helper('form');
	}
	
    public function verife(){
    	$email = $this->input->post("email");
        $mdp = $this->input->post("mdp"); 
        $this->load->Model('UtilisateurModel');
        $logged = $this->UtilisateurModel->is_logged($email,$mdp);
        $auth = $logged->row_array();
        if($auth['logged'] >= 1)
        {
            $id=$this->UtilisateurModel->id($email,$mdp);
            $this->load->view('Utilisateur/objectif');
        }
        else if ($this->input->post('email')=='doda@gmail.com' && $this->input->post('mdp')=='123') {
            redirect('LoginController/welcomeAdmin');
        }
        else  {              
        	redirect('Welcome/index');  
        }
        

    }
    public function welcomeAdmin()
    {
        $this->load->view('Admin/Ajouter/ajouterActivite');
    }

}
?>