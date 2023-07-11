<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegimeController extends CI_Controller{

    public function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('ObjectifModel');
		$this->load->model('SakafoModel');
		$this->load->model('SportModel');
		$this->load->model('RegimeModel');
	}
	
    public function regimeListe(){
		$list = $this->RegimeModel->listeRegime();
		$data['list'] = $list;
        $this->load->view('Admin/Liste/regimeListe',$data);
    }

    public function ajouter(){
		$listObjectif = $this->ObjectifModel->getList();
		$data['objectifs'] = $listObjectif;
        $this->load->view('Admin/Ajouter/ajouterRegime',$data);
    }
	public function voirDetail(){
		$donnees = array(
			'idObjectif' => $this->input->post('objectif'),
			'poids' => $this->input->post('poids'),
			'prix' => $this->input->post('prix'),
			'duree' => $this->input->post('duree'),
		);
		$nomObjectif = $this->ObjectifModel->getNom($donnees['idObjectif']);
		$data['nomObjectif'] = $nomObjectif;
		$data['donnees']=$donnees;
		$data['listsakafo'] = $this->SakafoModel->listeSakafoByObjectif($donnees['idObjectif']);
		$data['listactivite'] = $this->SportModel->listeActiviteByObjectif($donnees['idObjectif']);
		$this->load->view('Admin/Ajouter/ajouterDetailRegime',$data);
	}
	public function insertRegime(){
		$idObjectif = $this->input->post('idObjectif');
		$poids = $this->input->post('poids');
		$prix = $this->input->post('prix');
		$duree = $this->input->post('duree');
		$tailleAliment = $this->input->post('tailleAliment');
		$tailleActivite = $this->input->post('tailleActivite');
		$listAliment = [];
		for($i=0 ; $i< $tailleAliment ; $i++){
			$nom = $this->input->post('aliment'.$i);
			$indice = array(
				'idSakafo' => $this->SakafoModel->getIdByNom($nom),
				'quantite' => $this->input->post('quantite'.$i)
			);
			array_push($listAliment,$indice);
		}
		$listActivite = [];
		for($j=0;$j<$tailleActivite;$j++){
			$nom = $this->input->post('activite'.$j);
			$indice = array(
				'idActiviteSportive' => $this->SportModel->getIdByNom($nom),
				'nombre' => $this->input->post('nombre'.$j)
			);
			array_push($listActivite,$indice);
		}
		//insertion dans database
		//regime
		$idRegime = $this->RegimeModel->insert($idObjectif,$poids,$prix,$duree);
		//detailRegimeSakafo
		foreach($listAliment as $row){
			$this->SakafoModel->insertDetail($idRegime,$row['idSakafo'],$row['quantite']);
		}
		//detailActivite
		foreach($listActivite as $row){
			$this->SportModel->insertDetail($idRegime,$row['idActiviteSportive'],$row['nombre']);
		}
		return redirect('RegimeController/regimeListe');
	}
	public function suprimerRegime(){
		$idRegime = $_GET['idRegime'];
		$this->RegimeModel->delete($idRegime);
		return redirect('RegimeController/regimeListe');
	}
	public function voirListeDetail(){
		$idRegime = $_GET['idRegime'];
		$listAliment = $this->SakafoModel->selectDetailByIdRegime($idRegime);
		$listActivite = $this->SportModel->selectDetailByIdRegime($idRegime);
		$data['listAliment'] = $listAliment;
		$data['listActivite'] = $listActivite;
		$this->load->view('Admin/detailRegime',$data);
	}

    public function modifier(){
        $this->load->view('Admin/Modifier/modifierRegime');
    }
}
?>