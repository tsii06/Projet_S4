<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SuggestionController extends CI_Controller{

    public function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('RegimeUtilisateurModel');
		$this->load->model('ObjectifUtilisateurModel');
		$this->load->model('UtilisateurModel');
		$this->load->model('MonnaieModel');
	}
	
    public function suggestion(){
		$id=1;
		$idUtilisateur = 1;
		$Utilisateur = $this->UtilisateurModel->utilisateurById($id);
		$data['utilisateur'] = $Utilisateur;
		
		$poids = 2;
		///
		$idObjectif1 = 1;
		$this->ObjectifUtilisateurModel->insert($idObjectif1,$idUtilisateur,$poids);
		$listRegimePosible = $this->RegimeUtilisateurModel->listRegimeEgalePoids($poids,$idObjectif1);
		if(count($listRegimePosible) > 0){
			$data['listRegimePosible'] = $listRegimePosible;
		}
		$listTousRegime = $this->RegimeUtilisateurModel->listRegime($idObjectif1);
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
		///
		$idObjectif2 = 2;
		$this->ObjectifUtilisateurModel->insert($idObjectif2,$idUtilisateur,$poids);
		$listRegimePosible = $this->RegimeUtilisateurModel->listRegimeEgalePoids($poids,$idObjectif2);
		if(count($listRegimePosible) > 0){
			$data['listRegimePosible'] = $listRegimePosible;
		}
		$listTousRegime = $this->RegimeUtilisateurModel->listRegime($idObjectif2);
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
		$list = $this->MonnaieModel->ListMonnaie();
		$data['list'] = $list;
		$id=1;
		$Utilisateur = $this->UtilisateurModel->utilisateurById($id);
		$data['utilisateur'] = $Utilisateur;
		//
		$this->load->view('Utilisateur/suggestion',$data);
    }

    public function details(){
		$id=1;
		$idUtilisateur = 1;
		$Utilisateur = $this->UtilisateurModel->utilisateurById($id);
		$data['utilisateur'] = $Utilisateur;
        $this->load->view('Utilisateur/details',$data);
    }
	
}
?>
