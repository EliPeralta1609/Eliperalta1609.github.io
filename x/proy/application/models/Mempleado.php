	<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mempleado extends CI_Model {
	
  	public function __construct(){
        parent::__construct(); 
  	}

  	public function saveempleado($dato)
  	{
  		echo $this->db->insert("empleado",$dato);	
  	}

  	public function buscarespecifico($id){
  		$query = $this->db->query("select * from empleado where ide = ".$id);
  		
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
      echo $query = $this->db->update("empleado",$dato);
    }

    public function eliminar($id){
      $query = $this->db->where($id);
      echo $query = $this->db->delete("empleado");

    }

	public function consultarempleado($sql){
		$query = $this->db->query($sql);
		if ($query->num_rows()>0) {
			return $query;
		}else {
			return false;
		}

	}
} 