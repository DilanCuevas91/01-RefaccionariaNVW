<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Abonoclientes_model extends CI_Model{
		public function __construct(){
			parent::__construct();
		}

		public function getabonoclientes($id = null){
        $this->db->select('*');
        $this->db->from('abonoclientes','deudascobrar');
        $this->db->join('deudascobrar', 'deudascobrar.iddeudascobrar = abonoclientes.iddeudascobrar');
        if($id != null){
            $this->db->where('idabonoclientes', $id);
        }
        $sql = $this->db->get();   
        
        if($sql->num_rows() > 0){
            return $sql->result();
        }
    }

		public function addAbonoclientes($f, $a, $idd){
			$data = array(
					'idabonoclientes'=>0,
					'fechaabono'=>$f,
					'cantidadabono'=>$a,
					'iddeudascobrar'=>$idd
					
				);

			return $this->db->insert('abonoclientes',$data);

		}


		public function upAbonocliente($id, $f, $a){
			$data = array(
					'fechaabono'=>$f,
					'cantidadabono'=>$a
				);

			$this->db->where('idabonoclientes', $id);
			return $this->db->update('abonoclientes',$data);

		}

		 public function delAbonocliente($id){
    //DELETE FROM Usuario WHERE $idproveedor = $id
        $this->db->where('idabonoclientes', $id);
        return $this->db->delete('abonoclientes');
   	 }	
	}
?>