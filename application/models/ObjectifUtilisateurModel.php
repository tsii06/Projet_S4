<?php 
  class ObjectifUtilisateurModel extends CI_Model{
	
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

  	public function insert($idObjectif,$idUtilisateur,$poids){
    	$sql="insert into objectifUtilisateur values (%s,%s,%s)";
	    $sql=sprintf($sql,$idObjectif,$idUtilisateur,$poids);
	    $query=$this->db->query($sql);
    }
}
?>