<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Deudasproveedores_model extends CI_Model{
		public function __construct(){
			parent::__construct();
		}

		public function getDeudasproveedores($id = null){
        $this->db->select('*');
        $this->db->from('deudaspagar','proveedores');
        $this->db->join('proveedores', 'proveedores.idproveedores = deudaspagar.idproveedores');
        if($id != null){
            $this->db->where('iddeudaspagar', $id);
        }
        $sql = $this->db->get();   
        
        if($sql->num_rows() > 0){
            return $sql->result();
        }
    }
    public function getDeudasproveedores2($id = null){
        $this->db->select('*');
        $this->db->from('proveedores','deudaspagar');
        $this->db->join('deudaspagar', 'deudaspagar.idproveedores = proveedores.idproveedores');
        if($id != null){
            $this->db->where('iddeudaspagar', $id);
        }
        $sql = $this->db->get();   
        
        if($sql->num_rows() > 0){
            return $sql->result();
        }
    }

		public function addDeudasproveedores($n, $c, $f, $p){
			$data = array(
					'iddeudaspagar'=>0,
					'notapagar'=>$n,
					'cantidaddeuda'=>$c,
					'fechadeuda'=>$f,
					'idproveedores'=>$p
					
				);

			return $this->db->insert('deudaspagar',$data);

		}


		public function upDeudasproveedor($id, $n, $c, $f, $p){
			$data = array(
					'notapagar'=>$n,
					'cantidaddeuda'=>$c,
					'fechadeuda'=>$f,
					'idproveedores'=>$p
				);

			$this->db->where('iddeudaspagar', $id);
			return $this->db->update('deudaspagar',$data);

		}

		 public function deldeudasproveedor($id){
    //DELETE FROM Usuario WHERE $idproveedor = $id
        $this->db->where('iddeudaspagar', $id);
        return $this->db->delete('deudaspagar');
   	 }	
	}
?>