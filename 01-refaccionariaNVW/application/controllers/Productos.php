<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Productos extends CI_controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->model('Productos_model');
	}


	public function getProductos($id=null){
		$data['producs']=$this->Productos_model->getProductos($id);
		$this->load->view('admin/plantilla',$data);
	} 
	public function addProducto(){
		$n = $this->input->post('nombre');
		$m = $this->input->post('marca');
		$u = $this->input->post('unidadmedida');
		$p = $this->input->post('preciolista');
		$s = $this->input->post('stock');

		$this->Productos_model->addProducto($n, $m, $u, $p, $s);
		redirect('Backend/productos');

	}

	public function actualizarproductos($id){
		$data['producs'] = $this->Productos_model->getProductos($id);
		$data['contenido'] = 'admin/productos/actualizarproductos';
		$data['nombre'] = $this->session->userdata('producs');
           $data['id'] = $this->session->userdata('id');
            $data['producs'] = $this->Productos_model->getProductos($id);
		$this->load->view('admin/plantilla', $data);
	}

	public function upProducto(){
		$id = $this->input->post('idproductos');
		$n = $this->input->post('nombre');
		$m = $this->input->post('marca');
		$u = $this->input->post('unidadmedida');
		$p = $this->input->post('preciolista');
		$s = $this->input->post('stock');


		$this->Productos_model->upProducto($id, $n, $m, $u, $p, $s);

		redirect('Backend/productos');
	}

	public function delProducto($id){
        $this->Productos_model->delProducto($id);
        
        redirect('Backend/productos');
    }
}

?>