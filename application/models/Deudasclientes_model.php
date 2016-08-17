<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Deudasclientes_model extends CI_Model{
		public function __construct(){
			parent::__construct();
		}

		public function getDeudasclientes($id = null){
        $this->db->select('*');
        $this->db->from('deudascobrar','clientes');
        $this->db->join('clientes', 'clientes.idclientes = deudascobrar.idclientes');
        if($id != null){
            $this->db->where('iddeudascobrar', $id);
        }
        $sql = $this->db->get();   
        
        if($sql->num_rows() > 0){
            return $sql->result();
        }
    }

	    public function getDeudasclientes2($id = null){
	        $this->db->select('*');
	        $this->db->from('clientes','deudascobrar');
	        $this->db->join('deudascobrar', 'deudascobrar.idclientes = clientes.idclientes');
	        if($id != null){
	            $this->db->where('iddeudascobrar', $id);
	        }
	        $sql = $this->db->get();   
	        
	        if($sql->num_rows() > 0){
	            return $sql->result();
	        }
	    }

		public function addDeudasclientes($n, $f, $c, $cli){
			$data = array(
					'iddeudascobrar'=>0,
					'notacobrar'=>$n,
					'fechadeuda'=>$f,
					'cantidaddeuda'=>$c,
					'idclientes'=>$cli
					
				);

			return $this->db->insert('deudascobrar',$data);

		}


		public function upDeudasclientes($id, $n, $f, $c, $cli){
			$data = array(
					'notacobrar'=>$n,
					'fechadeuda'=>$f,
					'cantidaddeuda'=>$c,
					'idclientes'=>$cli
				);

			$this->db->where('iddeudascobrar', $id);
			return $this->db->update('deudascobrar',$data);

		}

		 public function deldeudascliente($id){
    //DELETE FROM Usuario WHERE $idproveedor = $id
        $this->db->where('iddeudascobrar', $id);
        return $this->db->delete('deudascobrar');
   	 }	
	}
?>