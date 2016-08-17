<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Ventas_model extends CI_Model{
		public function __construct(){
			parent::__construct();
		}

		public function getVentas($id = null){
        $this->db->select('*');
        //$this->db->from('ventas');
        $this->db->from('ventas','clientes', 'detalleventas');
        $this->db->join('clientes', 'clientes.idclientes = ventas.idclientes');
        $this->db->join('detalleventas', 'detalleventas.idventas = ventas.idventas');

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



    	
    	public function generalXML() {
        $this->load->dbutil();
        // $sql = $this->db->select('*');
        // //$this->db->from('ventas');
        // $sql = $this->db->from('ventas','clientes', 'detalleventas');
        // $sql = $this->db->join('clientes', 'clientes.idclientes = ventas.idclientes');
        // $sql = $this->db->join('detalleventas', 'detalleventas.idventas = ventas.idventas');

        // if($id != null){
        //     $this->db->where('idventas', $id);
        // }
        // $sql = $this->db->get();   
        
        // if($sql->num_rows() > 0){
        //     return $sql->result();
        // }

        /*$sql = $this->db->get('productos');
        $sql = $this->db->where('idproductos', $id);
        $sql = $this->db->where('productos');
        $sql = $this->db->where('productos');*/

       /* $query = $this->db->get_where('productos', array('id' => $id, 'nombreproducto' => $nombreproducto, 'codigoproducto' => $codigoproducto, 'preciolista' => $preciolista,));*/

  //       $this->db->select('idventas, fechaventa, cantidaddetalle, preciomenudeo,nombreproducto, codigoproducto, preciolista');
		// $query = $this->db->get('productos, ventas, detalleventas');

		$this->db->select('fechaventa');
		$this->db->from('ventas');
		$this->db->select('cantidaddetalle, preciomenudeo'); 
		$this->db->from('detalleventas');
		$this->db->select('nombreproducto, codigoproducto, preciolista'); 
		$this->db->from('productos');
		$this->db->select('montofinal');
		//$this->db->join('ventas', 'ventas.idventas = detalleventas.idventas');
		//$this->db->join('productos', 'productos.idproductos = detalleventas.idproductos');
		$query = $this->db->get();

        $config = array(
            'root' => "Ventas",
            //'element' => 'entrada',
            'element' => 'productos',
            'newline' => "\n",
            'tab' => "\t"
        );

        $xml = $this->dbutil->xml_from_result($query, $config);
        return $xml;
    }

    public function generarXLS(){
      //obtener nombres de los campos de la tabla
      $fields = $this->db->field_data('ventas');
      //$this->db->where('ventas.idventas', $idventas);
      //SELECT * FROM estados;
      $query = $this->db->get('ventas');
      //Regresar un arreglo asociativo con los nombres de
      //los campos y los datos de los registros
      return array("fields"=> $fields, "query" => $query);

    }


    // public function tuExcel(){
    //         // Obtener la formula de los campos
    //         $fields=  $this->db->field_data('ciudades');
    //         $query=  $this->db->get('ciudades');
    //         return array ("fields" => $fields, "query" => $query);
    //     }

	}
?>