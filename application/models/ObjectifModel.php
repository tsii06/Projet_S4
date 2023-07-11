<?php 
	if ( ! defined('BASEPATH')) exit('No direct script access allowed');
  	class ObjectifModel extends CI_Model{
		public function __construct()
			{
				$this->load->database();
			}
		public function getList(){
			$sql = "select * from objectif";
			$query = $this->db->query($sql);
			return $query->result_array();
		}
		public function getNom($idObjectif){
			$sql = "select nom from objectif where idObjectif=%s";
			$sql = sprintf($sql,$idObjectif);
			$query = $this->db->query($sql);
			$row = $query->row_array();
			return $row['nom'];
		}
  	}
?>
