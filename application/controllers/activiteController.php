<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ActiviteController extends CI_Controller{

    public function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->database();

	}
	
    public function activiteListe(){
        $this->load->model('ActiviteSportifModel');
        $data = array();
        $data['liste'] = $this->ActiviteSportifModel->listeActivie();   
        $this->load->view('Admin/Liste/activiteListe',$data);
    }

    public function ajouterActivite(){
        $this->load->view('Admin/Ajouter/ajouterActivite');
    }

    public function modifier($idActivite){
        $this->load->model('ActiviteSportifModel');
        $data = array();
        $data['liste'] = $this->ActiviteSportifModel->listeByIdActive($idActivite);  
        $this->load->view('Admin/Modifier/modifierActivite',$data);
    }
    public function update(){
        $nom = $this->input->post("nom");
        $idObjectif = $this->input->post("idObjectif");
        $idActivite = $this->input->post("idActivite");
        $this->load->model('ActiviteSportifModel');
        $this->ActiviteSportifModel->update($idObjectif,$nom,$idActivite);
        redirect('ActiviteController/activiteListe');
    }
    public function ajouter(){
        $nom = $this->input->post("nom");
        $idObjectif = $this->input->post("idObjectif");
        $this->load->model('ActiviteSportifModel');
        $this->ActiviteSportifModel->insert($nom,$idObjectif);
        redirect('ActiviteController/activiteListe');
    }
    public function delete($idActivite){
        $this->load->model('ActiviteSportifModel');
        $this->ActiviteSportifModel->delete($idActivite);
        redirect('ActiviteController/activiteListe');
    }

    // -----------------------------------------------------
    public function listeActiviteByObjectif($idObjectif){
		$sql = "select * from activiteSportive where idObjectif=%s";
		$sql = sprintf($sql,$idObjectif);
		$query = $this->db->query($sql);
		return $query->result_array();
	}  
	public function getIdByNom($nom){
		$sql = "select idActiviteSportive from activiteSportive where nom='%s'";
		$sql = sprintf($sql,$nom);
		$query = $this->db->query($sql);
		$row = $query->row_array();
		return $row['idActiviteSportive'];
	}
	public function insertDetail($idRegime,$idActiviteSportive,$nombre){
		$sql ="insert into detailRegimeSport values(%s,%s,%s)";
		$sql = sprintf($sql,$idRegime,$idActiviteSportive,$nombre);
		$this->db->query($sql);
	}
	public function selectDetailByIdRegime($idRegime){
		$sql = "select ac.nom,det.nombre from detailRegimeSport as det
		join activiteSportive as ac on ac.idActiviteSportive=det.idActiviteSportive
		where det.idRegime=%s";
		$sql = sprintf($sql,$idRegime);
		$query = $this->db->query($sql);
		return $query->result_array();
	}
}
?>