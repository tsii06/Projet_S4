<?php 
  class RegimeUtilisateurModel extends CI_Model{
  	public function insert($idRegime,$idUtilisateur,$dateDebut){
    	$sql="insert into regime values(NULL,%s,%s,'%s')";
	    $sql=sprintf($sql,$idRegime,$idUtilisateur,$dateDebut);
	    $query=$this->db->query($sql);
    }

    public function listeRegimeUtilisateur(){
      $sql = "select u.nom,ru.dateDebut,o.nom,r.poids,r.prix,r.duree from regimeUtilisateur as ru 
join regime as r on ru.idRegime=r.idRegime
join objectif as o on o.idObjectif=r.idObjectif
join utilisateur as u on u.idUtilisateur=ru.idUtilisateur";
      $query = $this->db->query($sql);
      return $query->result_array();
    }

        public function regimeUtilisateur($idUtilisateur){
      $sql = "select u.nom,ru.dateDebut,o.nom,r.poids,r.prix,r.duree from regimeUtilisateur as ru 
join regime as r on ru.idRegime=r.idRegime
join objectif as o on o.idObjectif=r.idObjectif
join utilisateur as u on u.idUtilisateur=ru.idUtilisateur where idUtilisateur=%s";
      $sql = sprintf($sql,$idUtilisateur);
      $query = $this->db->query($sql,$idUtilisateur);
      return $query->result_array();
    }

}
?>