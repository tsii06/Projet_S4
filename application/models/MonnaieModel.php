<?php
    if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class MonnaieModel extends CI_Model {
          public function __construct()
          {
               $this->load->database();
          }
		public function ListMonnaie(){
			$sql = "select * from codeMonnaie";
			$query = $this->db->query($sql);
			return $query->result_array();
		}
		/////////////////////back office
		public function NonValider($idUtilisateur){
			$sql = "select u.idUtilisateur,u.nom,e.idCodeMonnaie,c.valeur,e.etat from etatCode as e
			join codeMonnaie as c on c.idCodeMonnaie=e.idCodeMonnaie
			join utilisateur as u on u.idUtilisateur=e.idUtilisateur
			where e.idUtilisateur=%s and etat=0";
			$sql = sprintf($sql,$this->db->escape($idUtilisateur));
			$query = $this->db->query($sql);
			return $query->result_array();
		}
		public function EnAttente($idUtilisateur){
			$sql = "select u.idUtilisateur,u.nom,e.idCodeMonnaie,c.valeur,e.etat from etatCode as e
			join codeMonnaie as c on c.idCodeMonnaie=e.idCodeMonnaie
			join utilisateur as u on u.idUtilisateur=e.idUtilisateur
			where e.idUtilisateur=%s and etat=1";
			$sql = sprintf($sql,$this->db->escape($idUtilisateur));
			$query = $this->db->query($sql);
			return $query->result_array();
		}
		public function Valider($idUtilisateur){
			$sql = "select u.idUtilisateur,u.nom,e.idCodeMonnaie,c.valeur,e.etat from etatCode as e
			join codeMonnaie as c on c.idCodeMonnaie=e.idCodeMonnaie
			join utilisateur as u on u.idUtilisateur=e.idUtilisateur
			where e.idUtilisateur=%s and etat=2";
			$sql = sprintf($sql,$this->db->escape($idUtilisateur));
			$query = $this->db->query($sql);
			return $query->result_array();
		}
		public function InsertEtat($data){
			$sql = "insert into etatCode values(%s,%s,%s)";
			$sql = sprintf($sql,$data['idCodeMonnaie'],$data['idUtilisateur'],$data['etat']);
			$this->db->query($sql);
		}
		///////////front office
		public function listCodeUtilisateur($idUtilisateur){
			$sql = "select * from etatCode where idUtilisateur=%s";
			$sql = sprintf($sql,$idUtilisateur);
			$query = $this->db->query($sql);
			return $query->result_array();
		}
		public function estCodeExiste($code){
			$sql = "select * from codeMonnaie where idCodeMonnaie =%s";
			$sql = sprintf($sql,$code);
			$query = $this->db->query($sql);
			$row = $query->row_array();
			return $row;
		}
     }
?>
