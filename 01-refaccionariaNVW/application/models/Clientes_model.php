<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes_model extends CI_Model{
		public function __construct(){
			parent::__construct();
		}

		public function getClientes($id = null){
        $this->db->select('*');
        $this->db->from('clientes');
        if($id != null){
            $this->db->where('idclientes', $id);
        }
        $sql = $this->db->get();   
        
        if($sql->num_rows() > 0){
            return $sql->result();
        }
    }

		public function login($emai, $pass){
			$this->db->select('*');
			$this->db->from('clientes');
			$this->db->where('email', $emai);
			$this->db->where('password', $pass);
			/* aqui lo que se esta haciendo comparando con la programacion anterior es SELECT * FROM Usuario WHERE username = '$user' AND password = '$pass'*/

			
			$sql = $this->db->get();

			if ($sql->num_rows() > 0) {
				return $sql->row();
			} else {
				return null;
			}
			
		}

		public function addCliente($n, $t, $e, $p){
			$data = array(
					'idclientes'=>0,
					'nombre'=>$n,
					'telefono'=>$t,
					'email'=>$e,
					'password'=>$p
					
				);

			return $this->db->insert('clientes',$data);

		}


		public function upCliente($id, $n, $t, $e, $p){
			$data = array(
					'nombre'=>$n,
					'telefono'=>$t,
					'email'=>$e,
					'password'=>$p
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
