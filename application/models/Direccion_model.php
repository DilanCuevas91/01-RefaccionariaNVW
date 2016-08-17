<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Direccion_model extends CI_Model{
		public function __construct(){
			parent::__construct();
		}

		public function getDirecciones($id = null){
        $this->db->select('*');
        $this->db->from('direccion');
        if($id != null){
            $this->db->where('iddireccion', $id);
        }
        $sql = $this->db->get();   
        
        if($sql->num_rows() > 0){
            return $sql->result();
        }
    }
		public function addDireccion($e, $ci, $co, $col, $ca, $num){
			$data = array(
					'iddireccion'=>0,
					'estado'=>$e,
					'ciudad'=>$ci,
					'codigopostal'=>$co,
					'colonia'=>$col,
					'calle'=>$ca,
					'numero'=>$num
					
				);

			return $this->db->insert('direccion',$data);

		}


		public function upDireccion($id, $e, $ci, $co, $col, $ca, $num){
			$data = array(
					'estado'=>$e,
					'ciudad'=>$ci,
					'codigopostal'=>$co,
					'colonia'=>$col,
					'calle'=>$ca,
					'numero'=>$num
				);

			$this->db->where('iddireccion', $id);
			return $this->db->update('direccion',$data);

		}

		 public function delDireccion($id){
    //DELETE FROM Usuario WHERE $idproveedor = $id
        $this->db->where('iddireccion', $id);
        return $this->db->delete('direccion');
    }
	}
?>