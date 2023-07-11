<?php 
  class UtilisateurModel extends CI_Model{

    public function __construct() {
      parent::__construct();
      $this->load->database();
  }

    public function is_logged($email,$mdp)
    {
      $sql = $this->db->query("select count(*) as logged from utilisateur where email='$email' and mdp='$mdp'");
      return $sql;
    }
    public function id($email,$mdp)
    {
      $resultat=array(); 
      $sql="select * from utilisateur where email='%s' and mdp='%s' limit 1";
      $sql=sprintf($sql,$email,$mdp);
      $query=$this->db->query($sql);
      $resultat=$query->row_array();    
      return $resultat['idUtilisateur'];      
    }  
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
     public function utilisateurById($idUtilisateur){
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