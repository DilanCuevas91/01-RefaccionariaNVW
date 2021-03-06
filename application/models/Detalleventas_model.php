<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Detalleventas_model extends CI_Model{
		public function __construct(){
			parent::__construct();
		}

		public function getDetalleventas($id = null){
        $this->db->select('*');
        //$this->db->from('ventas');
        $this->db->from('detalleventas', 'ventas','productos');
        $this->db->join('ventas', 'ventas.idventas = detalleventas.idventas');
        $this->db->join('productos', 'productos.idproductos = detalleventas.idproductos');
        if($id != null){
            $this->db->where('idventas', $id);
        }
        $sql = $this->db->get();   
        
        if($sql->num_rows() > 0){
            return $sql->result();
        }
    }

		public function addVenta($f, $m){
			$data = array(
					'idventas'=>0,
					'fecha'=>$f,
					'montofinal'=>$m
				);

			return $this->db->insert('ventas',$data);

		}


		public function upVenta($id, $f, $m){
			$data = array(
					
					'fecha'=>$f,
					'montofinal'=>$m
				);

			$this->db->where('idventas', $id);
			return $this->db->update('ventas',$data);

		}

		 public function delVenta($id){
    //DELETE FROM Usuario WHERE $idproveedor = $id
        $this->db->where('idventas', $id);
        return $this->db->delete('ventas');
    	}
	}
?>