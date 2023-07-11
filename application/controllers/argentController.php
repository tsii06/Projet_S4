<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ArgentController extends CI_Controller{

    public function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('MonnaieModel');
	}
	
    public function argent(){
		$list = $this->MonnaieModel->ListMonnaie();
		$data['list'] = $list;
        $this->load->view('Utilisateur/argent',$data);
    }
	public function verifieCode(){
		$idUtilisateur=1;
		$code = $this->input->post('idCodeMonnaie');
		$donnees = array(
			'idCodeMonnaie' => $code,
			'idUtilisateur' => $idUtilisateur,
			'etat' => 0
		);
		$list = $this->MonnaieModel->ListMonnaie();
		$listCodeEffectuer = $this->MonnaieModel->listCodeUtilisateur($idUtilisateur);
		if(count($listCodeEffectuer) == 0){
			$this->MonnaieModel->InsertEtat($donnees);
			return redirect('argentController/argent');
		}else{
			foreach($listCodeEffectuer as $indice){
				if($indice['idCodeMonnaie'] == $code){
					$message ="efa misy na en en attente io code io";
					$data['message'] = $message;
					$data['list'] = $list;
					return $this->load->view('Utilisateur/argent',$data);
				}
			}
			$est = $this->MonnaieModel->estCodeExiste($code);
			if(count($est) > 0){
				$this->MonnaieModel->InsertEtat($donnees);
				return redirect('argentController/argent');
			}else{
				$message = "code tsy miexsite";
				$data['message'] = $message;
				$data['list'] = $list;
				return $this->load->view('Utilisateur/argent',$data);
			}
		}
		
	}
}
?>
