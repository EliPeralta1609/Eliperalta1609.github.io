	<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mapartamento extends CI_Model {
	
  	public function __construct(){
        parent::__construct(); 
  	}

  	public function saveapartamento($dato)
  	{
  		echo $this->db->insert("apartamento",$dato);	
  	}

  	public function buscarespecifico($id){
  		$query = $this->db->query("select * from apartamento where num_apa = ".$id);
  		
  		if($query->num_rows()>0){
  			return true;
  		}else{
  			return false;
  		}
  		 		
  	}
    
    public function actualizarapartamento($id, $dato)
    {
      # code...
      $query = $this->db->where($id);
      echo $query = $this->db->update("apartamento",$dato);
    }

    public function eliminarapartamento($id){
      $query = $this->db->where($id);
      echo $query = $this->db->delete("apartamento");

    }

	public function consultarapartamento($sql){
		$query = $this->db->query($sql);
		if ($query->num_rows()>0) {
			return $query;
		}else {
			return false;
		}

	}

	public function consultartorre($sql){
		$query = $this->db->query($sql);
		if ($query->num_rows()>0) {
			return $query;
		}else {
			return false;
		}

	}
} 