<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class SportModel extends CI_Model{
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
