<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StatistiqueController extends CI_Controller{

    public function __construct() {
		parent::__construct();
		$this->load->helper('form');
	}

	public function chart(){
		$this->load->model('RegimeUtilisateurModel');
		$this->load->model('MonnaieModel');

		$data=array();
		$data['tranche1'] = $this->RegimeUtilisateurModel->nombreClient(0,10000);
		$data['tranche2'] = $this->RegimeUtilisateurModel->nombreClient(10000,20000);
		$data['tranche3'] = $this->RegimeUtilisateurModel->nombreClient(20000,30000);
		$data['tranche4'] = $this->RegimeUtilisateurModel->nombreClient(30000,40000);
		$data['tranche5'] = $this->RegimeUtilisateurModel->nombreClient(40000,50000);
		$data['tranche6'] = $this->RegimeUtilisateurModel->nombreClient(50000,60000);

		$data['prixTotal'] = $this->RegimeUtilisateurModel->sommePrix();
		$data['depotTotal'] = $this->MonnaieModel->totalDepot();
		$this->load->view('Admin/statistique',$data);
	}
}
?>
