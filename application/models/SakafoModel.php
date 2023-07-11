<?php 
  class SakafoModel extends CI_Model{
  	public function insert($idObjectif,$idCategorie,$nom){
    	$sql="insert into sakafo values(NULL,%s,%s,'%s')";
	    $sql=sprintf($sql,$idObjectif,$idCategorie,$nom);
	    $query=$this->db->query($sql);
    }

    public function listeSakafo(){
      $sql = "select * from sakafo";
      $query = $this->db->query($sql);
      return $query->result_array();
    }

    public function listeSakafoByObjectif($idObjectif){
      $sql = "select * from sakafo where idObjectif=%s";
      $sql = sprintf($sql,$idObjectif);
      $query = $this->db->query($sql);
      return $query->result_array();
    }  

    public function sakafoById($idSakafo){
      $sql = "select * from sakafo where idSakafo=%s";
      $sql = sprintf($sql,$idSakafo);
      $query = $this->db->query($sql);
      return $query->row_array();
    }  

    public function update($idObjectif,$idCategorie,$nom,$idSakafo){
   	  $sql="update sakafo set idObjectif=%s,idCategorie=%s,nom='%s' where idSakafo=%s";
      $sql=sprintf($sql,$idObjectif,$idCategorie,$nom,$idSakafo);
      $query=$this->db->query($sql);
    }

  // ---------------------------------------------------------------
	public function getIdByNom($nom){
		$sql = "select idSakafo from sakafo where nom='%s'";
		$sql = sprintf($sql,$nom);
		$query = $this->db->query($sql);
		$row = $query->row_array();
		return $row['idSakafo'];
	}
	public function insertDetail($idRegime,$idSakafo,$quantite){
		$sql ="insert into detailRegimeSakafo values(%s,%s,%s)";
		$sql = sprintf($sql,$idRegime,$idSakafo,$quantite);
		$this->db->query($sql);
	}
	public function selectDetailByIdRegime($idRegime){
		$sql = "select s.nom,.det.quantite from detailRegimeSakafo as det
		join sakafo as s on s.idSakafo=det.idSakafo
		where det.idRegime=%s";
		$sql = sprintf($sql,$idRegime);
		$query = $this->db->query($sql);
		return $query->result_array();
	}

}
?>