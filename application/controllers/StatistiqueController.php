<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StatistiqueController extends CI_Controller{

    public function __construct() {
		parent::__construct();
		$this->load->helper('form');
	}

	public function chart(){
		$this->load->Model('StatistiqueModel');
		$data=array();
		// $data['tranche1'] = $this->StatistiqueModel->nombreClient(0,1000);
		// $data['tranche2'] = $this->StatistiqueModel->nombreClient(1000,2000);
		// $data['tranche3'] = $this->StatistiqueModel->nombreClient(2000,3000);
		// $data['tranche4'] = $this->StatistiqueModel->nombreClient(3000,4000);
		// $data['tranche5'] = $this->StatistiqueModel->nombreClient(4000,5000);
		// $data['tranche6'] = $this->StatistiqueModel->nombreClient(5000,6000);
		$this->load->view('Admin/statistique',$data);
	}
}
?>