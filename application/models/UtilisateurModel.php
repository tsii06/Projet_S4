<?php 
  class UtilisateurModel extends CI_Model{
  	public function insert($nom,$email,$mdp){
    	$sql="insert into utilisateur values(NULL,'%s','%s','%s')";
	    $sql=sprintf($sql,$nom,$email,$mdp);
	    $query=$this->db->query($sql);
    }

    public function listeUtilisateur(){
      $sql = "select * from utilisateur";
      $query = $this->db->query($sql);
      return $query->result_array();
    }
     public function utilisateruById($idUtilisateur){
      $sql = "select * from utilisateur where idUtilisateur=%s";
      $sql=sprintf($sql,$idUtilisateur);
      $query = $this->db->query($sql);
      return $query->result_array();
    }

    public function update($idCategorie){
   	  $sql="update categorie set nom='%s' where idCategorie=%s";
      $sql=sprintf($sql,$idCategorie);
      $query=$this->db->query($sql);
    }

}
?>