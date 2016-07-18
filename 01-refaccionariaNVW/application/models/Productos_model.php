<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Productos_model extends CI_Model{
		public function __construct(){
			parent::__construct();
		}

		public function getProductos($id = null){
        $this->db->select('*');
        $this->db->from('productos');
        if($id != null){
            $this->db->where('idproductos', $id);
        }
        $sql = $this->db->get();   
        
        if($sql->num_rows() > 0){
            return $sql->result();
        }
    }

		/*public function login($emai, $pass){
			$this->db->select('*');
			$this->db->from('productos');
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

		public function addProducto($n, $m, $u, $p, $s){
			$data = array(
					'idproductos'=>0,
					'nombre'=>$n,
					'marca'=>$m,
					'unidadmedida'=>$u,
					'preciolista'=>$p,
					'stock'=>$s
					
				);

			return $this->db->insert('productos',$data);

		}


		public function upProducto($id, $n, $m, $u, $p, $s){
			$data = array(
					'nombre'=>$n,
					'marca'=>$m,
					'unidadmedida'=>$u,
					'preciolista'=>$p,
					'stock'=>$s
				);

			$this->db->where('idproductos', $id);
			return $this->db->update('productos',$data);

		}

		 public function delProducto($id){
    //DELETE FROM Usuario WHERE $idproveedor = $id
        $this->db->where('idproductos', $id);
        return $this->db->delete('productos');
    }

		/*public function upStatus($id, $privilegio){
			$data = array(
					'status'=>$privilegio
				);

			$this->db->where('idproveedores', $id);
			return $this->db->update('productos', $data);
		}

		public function upPrivilegios($id, $privilegios){
			$data = array(
					'privilegios'=>$privilegios
				);

			$this->db->where('idproveedores', $id);
			return $this->db->update('productos', $data);
		}*/
	}
?>