<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ClientValideController extends CI_Controller{

    public function __construct() {
		parent::__construct();
		$this->load->helper('form');
	}
	
    public function clientListe(){
    	$this->load->Model('MonnaieModel');
    	$data = array();
    	$data['liste']=$this->MonnaieModel->lisetEnAttente();
        $this->load->view('Admin/Liste/clientValide',$data);
    }

    public function update($idEtatCode){
    	$this->load->Model('MonnaieModel');
        $this->MonnaieModel->validate($idEtatCode);
        redirect('ClientValideController/clientListe');
    }
}
?>
