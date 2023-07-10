<?php 
  class RegimeModel extends CI_Model{
  	public function insert($idObjectif,$poids,$prix,$duree){
    	$sql="insert into regime values(NULL,%s,%s,%s,%s)";
	    $sql=sprintf($sql,$idObjectif,$poids,$prix,$duree);
	    $query=$this->db->query($sql);
    }

    public function listeRegime(){
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