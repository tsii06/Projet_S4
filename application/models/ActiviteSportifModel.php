<?php 
  class ActiviteSportifModel extends CI_Model{

    public function __construct() {
      parent::__construct();
      $this->load->helper('form');
      $this->load->database();
    }

  	public function insert($nom,$idObjectif){
    	$sql="insert into activiteSportive values(NULL,'%s',%s)";
	    $sql=sprintf($sql,$nom,$idObjectif);
	    $query=$this->db->query($sql);
    }

    public function listeActivie(){
      $sql = "select * from activiteSportive";
      $query = $this->db->query($sql);
      return $query->result_array();
    }

    public function listeByIdActive($idActivite){
      $sql = "select * from activiteSportive where idactiviteSportive=%s";
      $sql = sprintf($sql,$idActivite);
      $query = $this->db->query($sql);
      return $query->row_array();
    }  

    public function update($idObjectif,$nom,$idActivite){
   	  $sql="update activiteSportive set idObjectif=%s,nom='%s' where idActiviteSportive=%s";
      $sql=sprintf($sql,$idObjectif,$nom,$idActivite);
      $query=$this->db->query($sql);
    }
}
?>