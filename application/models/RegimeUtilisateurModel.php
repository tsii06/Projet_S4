<?php 
  class RegimeUtilisateurModel extends CI_Model{
  	public function insert($idRegime,$idObjectif,$dateDebut){
    	$sql="insert into regime values(NULL,%s,%s,'%s')";
	    $sql=sprintf($sql,$idRegime,$idObjectif,$dateDebut);
	    $query=$this->db->query($sql);
    }

    public function listeRegi(){
      $sql = "select * from regime";
      $query = $this->db->query($sql);
      return $query->result_array();
    }

    public function update($idObjectif,$poids,$prix,$duree,$idRegime){
   	  $sql="update regime set idObjectif=%s,poids=%s,prix=%s,duree=%s where idRegime=%s";
      $sql=sprintf($sql,$idObjectif,$poids,$prix,$duree,$idRegime);
      $query=$this->db->query($sql);
    }
}
?>