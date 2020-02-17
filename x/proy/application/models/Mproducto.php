	<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mproducto extends CI_Model {
	
  	public function __construct(){
        parent::__construct(); 
  	}

  	public function saveproduct($dato)
  	{
  		echo $this->db->insert("producto",$dato);	
  	}

  	public function buscarespecifico($id){
  		$query = $this->db->query("select * from producto where identificacion = ".$id);
  		
  		if($query->num_rows()>0){
  			return true;
  		}else{
  			return false;
  		}
  		 		
  	}
    
    public function actualizar($id, $dato)
    {
      # code...
      $query = $this->db->where($id);
      echo $query = $this->db->update("producto",$dato);
    }

    public function eliminar($id){
      $query = $this->db->where($id);
      echo $query = $this->db->delete("producto");

    }

	public function consultar($sql){
		$query = $this->db->query($sql);
		if ($query->num_rows()>0) {
			return $query;
		}else {
			return false;
		}

	}
} 