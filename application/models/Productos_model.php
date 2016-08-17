<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Productos_model extends CI_Model{
		public function __construct(){
			parent::__construct();
		}

		public function getProductos($id = null){
        $this->db->select('*');
        $this->db->from('productos','categoria','proveedores');
        $this->db->join('categoria', 'categoria.idcategoria = productos.idcategoria');
        $this->db->join('proveedores', 'proveedores.idproveedores = productos.idproveedores');
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

		public function addProducto($i_mod, $n, $c, $m, $u, $p, $s, $pro, $cat){
			$data = array(
					'idproductos'=>0,
					'imagenproducto'=>$i_mod,
					'nombreproducto'=>$n,
					'codigoproducto'=>$c,
					'marca'=>$m,
					'unidadmedida'=>$u,
					'preciolista'=>$p,
					'stock'=>$s,
					'idproveedores'=>$pro,
					'idcategoria'=>$cat
					
				);

			return $this->db->insert('productos',$data);

		}


		public function upProducto($id, $i, $n, $c, $m, $u, $p, $s, $pro, $cat){
			$data = array(
					'imagenproducto'=>$i,
					'nombreproducto'=>$n,
					'codigoproducto'=>$c,
					'marca'=>$m,
					'unidadmedida'=>$u,
					'preciolista'=>$p,
					'stock'=>$s,
					'idproveedores'=>$pro,
					'idcategoria'=>$cat
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


    public function getcategorias(){
		$this->db->select('*');
        $this->db->from('categoria');
        $sql = $this->db->get();   
        
        if($sql->num_rows() > 0){
            return $sql->result();
        }
	}

	public function getproveedores(){
		$this->db->select('*');
        $this->db->from('proveedores');
        $sql = $this->db->get();   
        
        if($sql->num_rows() > 0){
            return $sql->result();
        }
	}


	}
?>