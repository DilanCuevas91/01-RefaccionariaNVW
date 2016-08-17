<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('Categoria_model');
		$this->load->model('Productoscategoria_model');
		$this->load->model('Productos_model');
	}

	public function index(){
		$data['contenido'] = 'inicio';
		$data['title'] = 'Página de inicio';
		$this->load->view('plantilla', $data);
	}

	public function quienessomos(){
		//$data['contenido'] = 'class="active"';
		$data['contenido'] = 'quienessomos';
		$data['title'] = 'Página de la empresa';
		$this->load->view('plantilla', $data);
	}

	public function productos(){
		$data['contenido'] = 'productos';
		$data['title'] = 'Página de productos';
		$data['cat']=$this->Categoria_model->getCategorias();
		$this->load->view('plantilla', $data);
	}

	public function productoscategoria(){
		$data['contenido'] = 'productoscategoria';
		$data['title'] = 'Página de productos';
		$data['nombre'] = $this->session->userdata('usuario');
        $data['id'] = $this->session->userdata('id');
		//$data['cat']=$this->Categoria_model->getCategorias();
        $data['producs']=$this->Productos_model->getProductos();
		//$data['producat']=$this->Productoscategoria_model->getProductoscategoria();
		$this->load->view('plantilla', $data);
	}

	/*public function producto(){
		$data['contenido'] = 'producto';
		$data['title'] = 'Página de productos';
		$this->load->view('plantilla', $data);
	}*/

	public function contactanos(){
		$data['contenido'] = 'contactanos';
		$data['title'] = 'Página de contactanos';
		//$data['mensaje'] = 'Comentario enviado con exito!!';
		$this->load->view('plantilla', $data);
	}

	public function login(){
		$data['contenido'] = 'login';
		$data['title'] = 'Iniciar sesión';
		$this->load->view('plantilla', $data);
	}
}



?>