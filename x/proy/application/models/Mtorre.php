	<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mtorre extends CI_Model {
	
  	public function __construct(){
        parent::__construct(); 
  	}

  	public function savetorre($dato)
  	{
  		echo $this->db->insert("torre",$dato);	
  	}

  	public function buscarespecifico($num_torre){
  		$query = $this->db->query("select * from torre where num_torre = ".$num_torre);
  		
  		if($query->num_rows()>0){
  			return true;
  		}else{
  			return false;
  		}
  		 		
  	}
    
    public function actualizartorre($num_torre, $dato)
    {
      # code...
      $query = $this->db->where($num_torre);
      echo $query = $this->db->update("torre",$dato);
    }

    public function eliminartorre($num_torre){
      $query = $this->db->where($num_torre);
      echo $query = $this->db->delete("torre");

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