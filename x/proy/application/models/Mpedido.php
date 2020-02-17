	<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mpedido extends CI_Model {
	
  	public function __construct(){
        parent::__construct(); 
  	}

	function get_all_product(){
		$result=$this->db->get('producto');
		return $result;
	}

  	public function buscaresproveedor($proveedor){
  		$query = $this->db->query("select nombre,precio,imagen from producto where proveedor = ".'"$proveedor"');
  		
  		if($query->num_rows()>0){
  			return $query->row();
  		}else{
  			return false;
  		}  		 		
  	}
	public function consultarproveedor($sql){
		$query = $this->db->query($sql);
		if ($query->num_rows()>0) {
			return $query;
		}else {
			return false;
		}

	}


		public function consultarproductos($sql){
		$query = $this->db->query($sql);
		if ($query->num_rows()>0) {
			return $query;
		}else {
			return false;
		}

	}
} 