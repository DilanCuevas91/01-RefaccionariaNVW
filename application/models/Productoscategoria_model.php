<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Productoscategoria_model extends CI_Model{
		public function __construct(){
			parent::__construct();
		}

			public function getProductoscategoria($id = null){
	        $this->db->select('*');
	        $this->db->from('productos','categoria');
	        $this->db->join('categoria', 'categoria.idcategoria = productos.idcategoria');

	        if($id != null){
	            $this->db->where('idproductos', $id);
	        }
	        $sql = $this->db->get();   
	        
	        if($sql->num_rows() > 0){
	            return $sql->result();
	        }
	    }

	}
?>