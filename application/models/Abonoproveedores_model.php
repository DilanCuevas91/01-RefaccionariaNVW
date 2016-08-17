<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Abonoproveedores_model extends CI_Model{
		public function __construct(){
			parent::__construct();
		}

		public function getabonoproveedores($id = null){
        $this->db->select('*');
        $this->db->from('abonoproveedores','deudaspagar');
        $this->db->join('deudaspagar', 'deudaspagar.iddeudaspagar = abonoproveedores.iddeudaspagar');
        if($id != null){
            $this->db->where('idabonoproveedores', $id);
        }
        $sql = $this->db->get();   
        
        if($sql->num_rows() > 0){
            return $sql->result();
        }
    }

		public function addAbonoproveedores($f, $a, $idd){
			$data = array(
					'idabonoproveedores'=>0,
					'fechaabono'=>$f,
					'cantidadabono'=>$a,
					'iddeudaspagar'=>$idd
					
				);

			return $this->db->insert('abonoproveedores',$data);

		}


		public function upAbonoproveedor($id, $f, $a){
			$data = array(
					'fechaabono'=>$f,
					'cantidadabono'=>$a
				);

			$this->db->where('idabonoproveedores', $id);
			return $this->db->update('abonoproveedores',$data);

		}

		 public function delAbonoproveedor($id){
    //DELETE FROM Usuario WHERE $idproveedor = $id
        $this->db->where('idabonoproveedores', $id);
        return $this->db->delete('abonoproveedores');
   	 }	
	}
?>