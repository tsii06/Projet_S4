<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ObjectifController extends CI_Controller{

    public function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->database();
		$this->load->model('RegimeUtilisateurModel');
		$this->load->model('ObjectifUtilisateurModel');
		$this->load->model('ProfilUtilisateurModel');
		$this->load->model('UtilisateurModel');
	}
	
    public function objectif(){
		$id=1;
		$Utilisateur = $this->UtilisateurModel->utilisateurById($id);
		$data['utilisateur'] = $Utilisateur;
		$this->load->view('Utilisateur/objectif',$data);
    }

    public function insert(){
		$idUtilisateur = $this->input->post("idUtilisateur");
		$idObjectif = $this->input->post("idObjectif");
		$poids = $this->input->post("poids");
		$this->ObjectifUtilisateurModel->insert($idObjectif,$idUtilisateur,$poids);
		$listRegimePosible = $this->RegimeUtilisateurModel->listRegimeEgalePoids($poids,$idObjectif);
		if(count($listRegimePosible) > 0){
			$data['listRegimePosible'] = $listRegimePosible;
		}
		$listTousRegime = $this->RegimeUtilisateurModel->listRegime($idObjectif);
		$listsuggerer = [];
		foreach($listTousRegime as $row){ 
			$multiPoids = $poids/$row['poids'];
			$indice = array(
				'idRegime' => $row['idRegime'],
				'objectif' => $row['objectif'],
				'poids' => $poids,
				'prix' => $row['prix']*$multiPoids,
				'duree' => $row['duree']*$multiPoids,
				'multiple' => $multiPoids
			);
			array_push($listsuggerer,$indice);
		}
		$data['listsuggerer'] = $listsuggerer;
		//
		$idUtilisateur = 1;
		$Utilisateur = $this->UtilisateurModel->utilisateurById($idUtilisateur);
		$data['utilisateur'] = $Utilisateur;
		$this->load->view('Utilisateur/suggestion',$data);
    }
    public function getImc(){
		$idUtilisateur = 1;
		$profilUtilisateur = $this->ProfilUtilisateurModel->profilById($idUtilisateur);
		$imc = $profilUtilisateur[0]['poids']/($profilUtilisateur[0]['taille']*$profilUtilisateur[0]['taille']);
		if($imc < 0){
			$poids = -1*$imc;
			//mihena
			$idObjectif = 1;
			$listRegimePosible = $this->RegimeUtilisateurModel->listRegimeEgalePoids($poids,$idObjectif);
			if(count($listRegimePosible) > 0){
				$data['listRegimePosible'] = $listRegimePosible;
			}
			$listTousRegime = $this->RegimeUtilisateurModel->listRegime($idObjectif);
			$listsuggerer = [];
			foreach($listTousRegime as $row){ 
				$multiPoids = $poids/$row['poids'];
				$indice = array(
					'idRegime' => $row['idRegime'],
					'objectif' => $row['objectif'],
					'poids' => $poids,
					'prix' => $row['prix']*$multiPoids,
					'duree' => $row['duree']*$multiPoids,
					'multiple' => $multiPoids
				);
				array_push($listsuggerer,$indice);
			}
		}else if($imc == 0 || $imc > 0){
			$poids = $imc;
			//mitombo
			$idObjectif1 = 2;
			$listsuggerer = [];
			$listRegimePosible = $this->RegimeUtilisateurModel->listRegimeEgalePoids($poids,$idObjectif1);
			if(count($listRegimePosible) > 0){
				$data['listRegimePosible'] = $listRegimePosible;
			}
			$listTousRegime = $this->RegimeUtilisateurModel->listRegime($idObjectif1);
			foreach($listTousRegime as $row){ 
				$multiPoids = $poids/$row['poids'];
				$indice = array(
					'idRegime' => $row['idRegime'],
					'objectif' => $row['objectif'],
					'poids' => $poids,
					'prix' => $row['prix']*$multiPoids,
					'duree' => $row['duree']*$multiPoids,
					'multiple' => $multiPoids
				);
				array_push($listsuggerer,$indice);
			}
			$data['listsuggerer'] = $listsuggerer;
			$idUtilisateur = 1;
			$Utilisateur = $this->UtilisateurModel->utilisateurById($idUtilisateur);
			$data['utilisateur'] = $Utilisateur;
			$this->load->view('Utilisateur/suggestion',$data);
		}
    }

}
?>
