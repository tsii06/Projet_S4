<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ObjectifController extends CI_Controller{

    public function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->database();
		$this->load->model('RegimeUtilisateurModel');
	}
	
    public function objectif(){
        $this->load->view('Utilisateur/objectif');
    }

    public function insert(){
    	$idUtilisateur = $this->input->post("idUtilisateur");
        $idObjectif = $this->input->post("idObjectif");
        $poids = $this->input->post("poids");
        $this->load->model('ObjectifUtilisateurModel');
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
		$this->load->view('Utilisateur/suggestion',$data);
    }

}
?>
