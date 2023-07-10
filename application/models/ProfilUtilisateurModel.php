<?php 
  class ProfilUtilisateurModel extends CI_Model{
  	public function insert($idUtilisateur,$taille,$genre,$poids){
    	$sql="insert into profilUtilisateur values(NULL,%s,%s,'%s',%s)";
	    $sql=sprintf($sql,$idUtilisateur,$taille,$genre,$poids);
	    $query=$this->db->query($sql);
    }

    public function profilById($idUtilisateur){
      $sql = "select * from profilUtilisateur where idUtilisateur=%s";
      $sql=sprintf($sql,$idUtilisateur);
      $query = $this->db->query($sql);
      return $query->result_array();
    }

    public function update($idProfilUtilisateur,$taille,$genre,$poids){
   	  $sql="update profilUtilisateur set taille=%s,genre='%s',poids=%s where idProfilUtilisateur=%s";
      $sql=sprintf($sql,$taille,$genre,$poids,$idProfilUtilisateur);
      $query=$this->db->query($sql);
    }

}
?>