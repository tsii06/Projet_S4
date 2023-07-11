<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ClientValideController extends CI_Controller{

    public function __construct() {
		parent::__construct();
		$this->load->helper('form');
	}
	
    public function clientListe(){
        $this->load->view('Admin/Liste/clientValide');
    }
}
?>