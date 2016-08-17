<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Comentarios_model extends CI_Model{
		public function __construct(){
			parent::__construct();
		}

		public function getComentarios($id = null){
        $this->db->select('*');
        $this->db->from('comentarios');
        if($id != null){
            $this->db->where('idcomentarios', $id);
        }
        $sql = $this->db->get();   
        
        if($sql->num_rows() > 0){
            return $sql->result();
        }
    }

		public function addComentario($n, $e, $c, $cli){
			//$data['mensaje'] = "Comentario enviado con exito!!!";
			$data = array(
					'idcomentarios'=>0,
					'nombrecomentario'=>$n,
					'emailcomentario'=>$e,
					'comentario'=>$c,
					'idclientes'=>$cli
					
				);

			return $this->db->insert('comentarios',$data);

		}

		 public function delComentario($id){
    //DELETE FROM Usuario WHERE $idcomentarios = $id
        $this->db->where('idcomentarios', $id);
        return $this->db->delete('comentarios');
    }

		public function upStatus($id, $privilegio){
			$data = array(
					'status'=>$privilegio
				);

			$this->db->where('idcomentarios', $id);
			return $this->db->update('comentarios', $data);
		}
	}
?>