<?php 
  class RegimeModel extends CI_Model{
  	public function insert($idObjectif,$poids,$prix,$duree){
    	$sql="insert into regime values(NULL,%s,%s,%s,%s)";
	    $sql=sprintf($sql,$idObjectif,$poids,$prix,$duree);
	    $query=$this->db->query($sql);
			$sql1="select idRegime from regime order by idRegime desc limit 1";
			$query1 = $this->db->query($sql1);
			$row = $query1->row_array();
			return $row['idRegime'];
    }

    public function listeRegime(){
      $sql = "select re.idRegime,o.nom as objectif,re.poids,re.prix,re.duree from regime as re 
			join objectif as o on o.idObjectif=re.idObjectif";
      $query = $this->db->query($sql);
      return $query->result_array();
    }

    public function update($idObjectif,$poids,$prix,$duree,$idRegime){
   	  $sql="update regime set idObjectif=%s,poids=%s,prix=%s,duree=%s where idRegime=%s";
      $sql=sprintf($sql,$idObjectif,$poids,$prix,$duree,$idRegime);
      $query=$this->db->query($sql);
    }
	public function delete($idRegime){
		$sql = "delete from regime where idRegime=%s cascade";
		$sql = sprintf($sql,$idRegime);
		$query=$this->db->query($sql);
	}
}
?>
