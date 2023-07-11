<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ArgentController extends CI_Controller{

    public function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('MonnaieModel');
		$this->load->model('UtilisateurModel');
	}
	
    public function argent(){
		$list = $this->MonnaieModel->ListMonnaie();
		$data['list'] = $list;
		$id=1;
		$Utilisateur = $this->UtilisateurModel->utilisateurById($id);
		$data['utilisateur'] = $Utilisateur;
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
			$Utilisateur = $this->UtilisateurModel->utilisateurById($idUtilisateur);
			$valeur = $this->MonnaieModel->getValeur($code);
			$nouveau_solde = $valeur+$Utilisateur['solde'];
			$this->MonnaieModel->updateSolde($nouveau_solde,$idUtilisateur);
			//
			$id=1;
			$Utilisateur = $this->UtilisateurModel->utilisateurById($id);
			$data['utilisateur'] = $Utilisateur;
			return redirect('argentController/argent');
		}else{
			foreach($listCodeEffectuer as $indice){
				if($indice['idCodeMonnaie'] == $code){
					$message ="Code non valider ou en attente";
					$data['message'] = $message;
					$data['list'] = $list;
					//
					$id=1;
					$Utilisateur = $this->UtilisateurModel->utilisateurById($id);
					$data['utilisateur'] = $Utilisateur;
					return $this->load->view('Utilisateur/argent',$data);
				}
			}
			$est = $this->MonnaieModel->estCodeExiste($code);
			if(count($est) > 0){
				$this->MonnaieModel->InsertEtat($donnees);
				$Utilisateur = $this->UtilisateurModel->utilisateurById($idUtilisateur);
				$valeur = $this->MonnaieModel->getValeur($code);
				$nouveau_solde = $valeur+$Utilisateur['solde'];
				$this->MonnaieModel->updateSolde($nouveau_solde,$idUtilisateur);
				$id=1;
				$Utilisateur = $this->UtilisateurModel->utilisateurById($id);
				$data['utilisateur'] = $Utilisateur;
				return redirect('argentController/argent',$data);
			}else{
				$message = "code tsy miexsite";
				$data['message'] = $message;
				$data['list'] = $list;
				$id=1;
				$Utilisateur = $this->UtilisateurModel->utilisateurById($id);
				$data['utilisateur'] = $Utilisateur;
				return $this->load->view('Utilisateur/argent',$data);
			}
		}
		
	}
}
?>
