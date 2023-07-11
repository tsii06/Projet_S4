<?php 
  class RegimeUtilisateurModel extends CI_Model{
  	public function insert($idRegime,$idUtilisateur,$dateDebut){
    	$sql="insert into regime values(NULL,%s,%s,'%s')";
	    $sql=sprintf($sql,$idRegime,$idUtilisateur,$dateDebut);
	    $query=$this->db->query($sql);
    }
		public function listRegimeEgalePoids($poids,$idObjectif){
			$sql="select re.idRegime,o.nom as objectif,re.poids,re.prix,re.duree from regime as re
			join objectif as o on o.idObjectif=re.idObjectif where re.poids=%s and re.idObjectif=%s";
			$sql = sprintf($sql,$poids,$idObjectif);
			$query = $query=$this->db->query($sql);
			return $query->result_array();
		}
		public function listRegime($idObjectif){
			$sql = "select re.idRegime,o.nom as objectif,re.poids,re.prix,re.duree from regime as re
			join objectif as o on o.idObjectif=re.idObjectif where re.idObjectif=%s";
			$sql = sprintf($sql,$idObjectif);
			$query = $query=$this->db->query($sql);
			return $query->result_array();
		}
		public function getDetailSakafoById($idRegime){
			$sql = "select s.nom as nom,det.quantite as quantite from detailRegimeSakafo as det
			join regime as re on re.idRegime=det.idRegime
			join sakafo as s on s.idSakafo=det.idSakafo where det.idRegime=%s";
			$sql = sprintf($sql,$idRegime);
			$query = $query=$this->db->query($sql);
			return $query->result_array();
		}
		public function getDetailActiviteById($idRegime){
			$sql = "select a.nom as nom,det.nombre as nombre from detailRegimeSport as det
			join regime as re on re.idRegime=det.idRegime
			join activiteSportive as a on a.idActiviteSportive=det.idActiviteSportive where det.idRegime=%s";
			$sql = sprintf($sql,$idRegime);
			$query = $query=$this->db->query($sql);
			return $query->result_array();
		}
		public function getCurrentDate(){
			$sql = "select now() as daty";
			$query = $this->db->query($sql);
			$row = $query->row_array();
			return $row['daty'];
		}
		public function insertAchatRegime($donnees){
			$sql = "insert into achatRegime(idUtilisateur,idRegime,datedebut) values(%s,%s,'%s')";
			$sql = sprintf($sql,$donnees['idUtilisateur'],$donnees['idRegime'],$donnees['datedebut']);
			$this->db->query($sql);
		}
		public function insertAchatRegimeTsy($donnees){
			$sql = "insert into achatRegime values(%s,%s,%s,'%s')";
			$sql = sprintf($sql,$donnees['idUtilisateur'],$donnees['idRegime'],$donnees['multiple'],$donnees['datedebut']);
			$this->db->query($sql);
		}
		public function getById($idRegime){
			$sql = "select re.idRegime,o.nom as objectif,re.poids,re.prix,re.duree from regime as re 
			join objectif as o on o.idObjectif=re.idObjectif where re.idRegime=%s";
			$sql = sprintf($sql,$idRegime);
			$query = $this->db->query($sql);
			$row = $query->row_array();
			return $row;
		}
		public function getDetailAlimentById($idRegime){
			$sql = "select s.nom as sakafo,det.quantite from detailRegimeSakafo as det
			join sakafo as s on s.idSakafo=det.idSakafo where det.idRegime=%s";
			$sql = sprintf($sql,$idRegime);
			$query = $this->db->query($sql);
			return $query->result_array();
		}
		public function nombreClient($min,$max){
			$sql = "select count(ar.idUtilisateur) as s from achatRegime as ar join regime as r on r.idRegime=ar.idRegime join utilisateur as u on u.idUtilisateur=ar.idUtilisateur where (r.prix*ar.multiple)<%s and (r.prix*ar.multiple)>%s";
			$sql = sprintf($sql,$max,$min);
			$query = $this->db->query($sql);
			$row = $query->row_array();
			return $row['s'];
		}

		public function sommePrix(){
			$sql = "select sum(r.prix*ar.multiple) as s from achatRegime as ar join regime as r on r.idRegime=ar.idRegime join utilisateur as u on u.idUtilisateur=ar.idUtilisateur";
			$query = $this->db->query($sql);
			$row = $query->row_array();
			return $row['s'];
		}
	}
?>
