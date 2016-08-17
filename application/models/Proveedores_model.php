<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Proveedores_model extends CI_Model{
		public function __construct(){
			parent::__construct();
		}

		public function getProveedores($id = null){
        $this->db->select('*');
        $this->db->from('proveedores');
        if($id != null){
            $this->db->where('idproveedores', $id);
        }
        $sql = $this->db->get();   
        
        if($sql->num_rows() > 0){
            return $sql->result();
        }
    }

		/*public function login($emai, $pass){
			$this->db->select('*');
			$this->db->from('proveedores');
			$this->db->where('email', $emai);
			$this->db->where('password', $pass);
			/* aqui lo que se esta haciendo comparando con la programacion anterior es SELECT * FROM Usuario WHERE username = '$user' AND password = '$pass'

			
			$sql = $this->db->get();

			if ($sql->num_rows() > 0) {
				return $sql->row();
			} else {
				return null;
			}
			
		}*/

		public function addProveedor($n, $ap, $am, $d, $t, $e, $r){
			$data = array(
					'idproveedores'=>0,
					'nombreproveedor'=>$n,
					'apaterno'=>$ap,
					'amaterno'=>$am,
					'direccion'=>$d,
					'telefono'=>$t,
					'email'=>$e,
					'rfc'=>$r
					
				);

			return $this->db->insert('proveedores',$data);

		}


		public function upProveedor($id, $n, $ap, $am, $d, $t, $e, $r){
			$data = array(
					'nombreproveedor'=>$n,
					'apaterno'=>$ap,
					'amaterno'=>$am,
					'direccion'=>$d,
					'telefono'=>$t,
					'email'=>$e,
					'rfc'=>$r
				);

			$this->db->where('idproveedores', $id);
			return $this->db->update('proveedores',$data);

		}

		 public function delProveedor($id){
    //DELETE FROM Usuario WHERE $idproveedor = $id
        $this->db->where('idproveedores', $id);
        return $this->db->delete('proveedores');
    }

		/*public function upStatus($id, $privilegio){
			$data = array(
					'status'=>$privilegio
				);

			$this->db->where('idproveedores', $id);
			return $this->db->update('proveedores', $data);
		}

		public function upPrivilegios($id, $privilegios){
			$data = array(
					'privilegios'=>$privilegios
				);

			$this->db->where('idproveedores', $id);
			return $this->db->update('proveedores', $data);
		}*/
	}
?>