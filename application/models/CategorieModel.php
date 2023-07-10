<?php 
  class CategorieModel extends CI_Model{
  	public function insert($nom){
    	$sql="insert into categorie values(NULL,'%s')";
	    $sql=sprintf($sql,$nom);
	    $query=$this->db->query($sql);
    }

    public function listeCategorie(){
      $sql = "select * from categorie";
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