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

		// // cargar imagen
		// $i = url_title(convert_accented_characters($_FILES['userfile']['name'])), '-', TRUE;
		// $i_mod = str_replace('jpg', '' , $i);
		// $i_mod .= '.jpg'; 
		// $config['max_size'] = 2000;
		// $config['quality'] = '90%';
		// $config['upload_path'] = './images/img';
		// $config['allowed_types'] = 'jpg|jpeg|png';
		// $config['file_name']  = $i_mod;

		// $this->load->library('upload', $config);
		// $this->upload->do_upload();


		// // Procesar imagen 
		// $config2['source_image'] = './images/img' . $i_mod;
		// $config2['width']         = 75;
		// $config2['height']       = 50;

		// $this->load->library('image_lib', $config2);

		// if(!$this->image_lib->resize()){
		// 	echo $this->image_lib->display_errors();
		// }// }else{

		// // 	//$this->visualizar_imagen($i_mod);
		// // }


		$i = $this->input->post('imagen');
		$n = $this->input->post('nombre');
		$c = $this->input->post('codigo');
		$m = $this->input->post('marca');
		$u = $this->input->post('unidadmedida');
		$p = $this->input->post('preciolista');
		$s = $this->input->post('stock');
		$pro = $this->input->post('proveedores');
		$cat = $this->input->post('categoria');

		$this->Productos_model->addProducto($i_mod, $n, $c, $m, $u, $p, $s, $pro, $cat);
		redirect('Backend/productos');



	}

	// public function visualizar_imagen($i_mod){
	// 	$data['contenido'] = 'admin/productos/productos';
	// 	$data['nombre'] = $this->session->userdata('usuario');
 //        $data['id'] = $this->session->userdata('id');
 //        $data['imagen'] = $i_mod;
 //        $data['producs']=$this->Productos_model->getProductos();
	// 	$this->load->view('admin/plantilla', $data);
	// }

	public function actualizarproductos($id){
		$data['producs'] = $this->Productos_model->getProductos($id);
		$data['contenido'] = 'admin/productos/actualizarproductos';
		$data['nombre'] = $this->session->userdata('producs');
           $data['id'] = $this->session->userdata('id');
            $data['producs'] = $this->Productos_model->getProductos($id);
            $data['cat']=$this->Productos_model->getcategorias();
            $data['proveedor']=$this->Productos_model->getproveedores();
		$this->load->view('admin/plantilla', $data);
	}

	public function upProducto(){
		$id = $this->input->post('idproductos');
		$i = $this->input->post('imagen');
		$n = $this->input->post('nombre');
		$c = $this->input->post('codigo');
		$m = $this->input->post('marca');
		$u = $this->input->post('unidadmedida');
		$p = $this->input->post('preciolista');
		$s = $this->input->post('stock');
		$pro = $this->input->post('proveedores');
		$cat = $this->input->post('categoria');


		$this->Productos_model->upProducto($id, $i, $n, $c, $m, $u, $p, $s, $pro, $cat);

		redirect('Backend/productos');
	}

	public function delProducto($id){
        $this->Productos_model->delProducto($id);
        
        redirect('Backend/productos');
    }

}

?>