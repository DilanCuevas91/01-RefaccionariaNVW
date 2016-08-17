<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes_model extends CI_Model{
		public function __construct(){
			parent::__construct();
		}

		public function getClientes($id = null){
        $this->db->select('*');
        $this->db->from('clientes','direccion');
        $this->db->join('direccion', 'direccion.iddireccion = clientes.iddireccion');
        $this->db->where('idclientes > 1');
        //$this->dbWHERE table_name = 'mi_tabla' and colum_name NOT IN ('las_que_no_quiero')
        if($id != null){
            $this->db->where('idclientes', $id);
        }
        $sql = $this->db->get();   
        
        if($sql->num_rows() > 0){
            return $sql->result();
        }
    }

		public function login($e, $p){
			$this->db->select('*');
	        $this->db->from('clientes');
	        $this->db->where('emailcliente', $e);
	        $sql=$this->db->get();
	        

	        if ($sql->num_rows() > 0) {
		        	$this->db->select('*');
			        $this->db->from('clientes');
			        $this->db->where('emailcliente', $e);
			        $this->db->where('password', $p);
			        $sql=$this->db->get();
			        if ($sql->num_rows() > 0) {

			        	return $sql = $sql->row();

			        } else {
			        	$this->session->set_flashdata('mensaje','<div style="color:red">La contraseña introducida es incorrecta</div>'); 
			        }

			} else {
				$this->session->set_flashdata('mensaje2','<div style="color:red">El email introducido es incorrecto</div>'); 
			}


	       /* if($sql->num_rows() > 0){
	            return $sql->row();
	        }else{
	            return null;
	            
	        }
			$this->db->where('email', $emai)
					 ->where('password', $pass)
					 ->from('clientes');
			/* aqui lo  que se esta haciendo comparando con la programacion anterior es SELECT * FROM Usuario WHERE username = '$user' AND password = '$pass'*/

			
			/*$sql = $this->db->get();

			if ($sql->num_rows > 0) {
				$sql = $sql->row();
				$this->session->set_userdata('nombre',$sql->nombre);
				$this->session->set_userdata('email',$sql->email);
			} else {
				$this->session->set_flashdata('mensaje','El usuario contraseña es incorrecto'); 
			}*/
			
		}

		public function addCliente($n, $t, $e, $p, $d){
			$data = array(
					'idclientes'=>0,
					'nombrecliente'=>$n,
					'telefono'=>$t,
					'emailcliente'=>$e,
					'password'=>$p,
					'iddireccion'=>$d
					
				);

			return $this->db->insert('clientes',$data);

		}


		public function upCliente($id, $i, $n, $t, $e, $p, $d){
			$data = array(
					'imagencliente'=>$i,
					'nombrecliente'=>$n,
					'telefono'=>$t,
					'emailcliente'=>$e,
					'password'=>$p,
					'iddireccion'=>$d
				);

			$this->db->where('idclientes', $id);
			return $this->db->update('clientes',$data);

		}

		 public function delCliente($id){
    //DELETE FROM Usuario WHERE $idcliente = $id
        $this->db->where('idclientes', $id);
        return $this->db->delete('clientes');
    }

		public function upStatus($id, $privilegio){
			$data = array(
					'status'=>$privilegio
				);

			$this->db->where('idclientes', $id);
			return $this->db->update('clientes', $data);
		}

		public function upPrivilegios($id, $privilegios){
			$data = array(
					'privilegios'=>$privilegios
				);

			$this->db->where('idclientes', $id);
			return $this->db->update('clientes', $data);
		}
	}
?>
