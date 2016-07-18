<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Backend extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('Clientes_model');
		$this->load->model('Comentarios_model');
		$this->load->model('Proveedores_model');
		$this->load->model('Ventas_model');
		$this->load->model('Productos_model');
		//$this->load->model('Ventas_model');
	}

	public function index(){
		$data['contenido'] = 'admin/inicio';
		//$data['nombre'] = $this->session->userdata('usuario');
          //  $data['id'] = $this->session->userdata('id');
		$this->load->view('admin/plantilla', $data);
	}

	public function clientes(){
		$data['contenido'] = 'admin/clientes/clientes';
		$data['nombre'] = $this->session->userdata('nombre');
            $data['id'] = $this->session->userdata('id');
        $data['clients']=$this->Clientes_model->getClientes();
		$this->load->view('admin/plantilla', $data);
	}
	public function agregarclientes(){
		$data['contenido'] = 'admin/clientes/agregarclientes';
		$data['nombre'] = $this->session->userdata('usuario');
            $data['id'] = $this->session->userdata('id');
		$this->load->view('admin/plantilla', $data);
	}
	public function actualizarcliente(){
		$data['contenido'] = 'admin/productos/actualizarclientes';
		$data['nombre'] = $this->session->userdata('usuario');
            $data['id'] = $this->session->userdata('id');
		$this->load->view('admin/plantilla', $data);
	}

	public function ventas(){
		$data['contenido'] = 'admin/ventas/ventas';
		$data['nombre'] = $this->session->userdata('usuario');
            $data['id'] = $this->session->userdata('id');
        $data['vents']=$this->Ventas_model->getVentas();
		$this->load->view('admin/plantilla', $data);
	}
	/*public function agregarventas(){
		$data['contenido'] = 'admin/ventas/agregarventas';
		$data['nombre'] = $this->session->userdata('usuario');
            $data['id'] = $this->session->userdata('id');
		$this->load->view('admin/plantilla', $data);
	}
	public function actualizarventas(){
		$data['contenido'] = 'admin/ventas/actualizarventas';
		$data['nombre'] = $this->session->userdata('usuario');
            $data['id'] = $this->session->userdata('id');
		$this->load->view('admin/plantilla', $data);
	}*/

	public function productos(){
		$data['contenido'] = 'admin/productos/productos';
		$data['nombre'] = $this->session->userdata('usuario');
            $data['id'] = $this->session->userdata('id');
        $data['producs']=$this->Productos_model->getProductos();
		$this->load->view('admin/plantilla', $data);
	}
	public function agregarproductos(){
		$data['contenido'] = 'admin/productos/agregarproductos';
		$data['nombre'] = $this->session->userdata('usuario');
            $data['id'] = $this->session->userdata('id');
		$this->load->view('admin/plantilla', $data);
	}
	public function actualizarproductos(){
		$data['contenido'] = 'admin/productos/actualizarproductos';
		$data['nombre'] = $this->session->userdata('usuario');
            $data['id'] = $this->session->userdata('id');
		$this->load->view('admin/plantilla', $data);
	}

	public function comentarios(){
		$data['contenido'] = 'admin/comentarios/comentarios';
		$data['nombre'] = $this->session->userdata('usuario');
            $data['id'] = $this->session->userdata('id');
        $data['coments']=$this->Comentarios_model->getComentarios();
		$this->load->view('admin/plantilla', $data);
	}
	public function agregarcomentarios(){
		$data['contenido'] = 'admin/comentarios/agregarcomentarios';
		$data['nombre'] = $this->session->userdata('usuario');
            $data['id'] = $this->session->userdata('id');
		$this->load->view('admin/plantilla', $data);
	}
	/*public function actualizarcomentarios(){
		$data['contenido'] = 'admin/comentarios/actualizarcomentarios';
		$data['nombre'] = $this->session->userdata('usuario');
            $data['id'] = $this->session->userdata('id');
		$this->load->view('admin/plantilla', $data);
	}*/

	public function proveedores(){
		$data['contenido'] = 'admin/proveedores/proveedores';
		$data['nombre'] = $this->session->userdata('usuario');
            $data['id'] = $this->session->userdata('id');
        $data['provee']=$this->Proveedores_model->getProveedores();
		$this->load->view('admin/plantilla', $data);
	}
	public function agregarproveedores(){
		$data['contenido'] = 'admin/proveedores/agregarproveedores';
		$data['nombre'] = $this->session->userdata('usuario');
            $data['id'] = $this->session->userdata('id');
		$this->load->view('admin/plantilla', $data);
	}
	public function actualizarproveedores(){
		$data['contenido'] = 'admin/proveedores/actualizarproveedores';
		$data['nombre'] = $this->session->userdata('usuario');
            $data['id'] = $this->session->userdata('id');
		$this->load->view('admin/plantilla', $data);
	}
	
}



?>