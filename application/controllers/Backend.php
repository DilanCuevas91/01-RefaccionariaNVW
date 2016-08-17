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
		$this->load->model('Deudasproveedores_model');
		$this->load->model('Abonoproveedores_model');
		$this->load->model('Direccion_model');
		$this->load->model('Categoria_model');
		$this->load->model('Deudasclientes_model');
		$this->load->model('Abonoclientes_model');
		$this->load->model('Detalleventas_model');		
		//$this->load->model('Ventas_model');
	}
	
	public function index(){
		$config   =  array ( 
        'start_day'     =>  'domingo' , 
        'month_type'    =>  'largo' , 
        'day_type'      =>  'corto' 
		);
		$data['calendario'] = $this->load->library('calendar', $config);
		$this->benchmark->mark("inicio");
		$data['contenido'] = 'admin/inicio';
		$data['nombre'] = $this->session->userdata('usuario');
          $data['id'] = $this->session->userdata('id');
		$this->load->view('admin/plantilla', $data);
		$this->benchmark->mark("fin");
	}

	public function clientes(){
		$data['contenido'] = 'admin/clientes/clientes';
		$data['nombre'] = $this->session->userdata('nombre');
            $data['id'] = $this->session->userdata('id');
        $data['clients']=$this->Clientes_model->getClientes();
        $data['direc']=$this->Direccion_model->getDirecciones();
		$this->load->view('admin/plantilla', $data);
	}
	public function agregarclientes(){
		$data['contenido'] = 'admin/clientes/agregarclientes';
		$data['nombre'] = $this->session->userdata('usuario');
            $data['id'] = $this->session->userdata('id');
        $data['direc']=$this->Direccion_model->getDirecciones();
        //$data['dir']=$this->Direccion_model->addDireccion($e, $ci, $co, $col, $ca, $num);
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
        $data['detalle']=$this->Detalleventas_model->getDetalleventas();
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
        //$data['imagen'] = $i_mod;
        $data['producs']=$this->Productos_model->getProductos();
		$this->load->view('admin/plantilla', $data);
	}
	public function agregarproductos(){
		$data['contenido'] = 'admin/productos/agregarproductos';
		$data['nombre'] = $this->session->userdata('usuario');
            $data['id'] = $this->session->userdata('id');
            $data['cat']=$this->Productos_model->getcategorias();
            $data['proveedor']=$this->Productos_model->getproveedores();
		$this->load->view('admin/plantilla', $data);
	}
	public function actualizarproductos(){
		$data['contenido'] = 'admin/productos/actualizarproductos';
		$data['nombre'] = $this->session->userdata('usuario');
            $data['id'] = $this->session->userdata('id');
		$this->load->view('admin/plantilla', $data);
	}




	public function categoria(){
		$data['contenido'] = 'admin/categoria/categoria';
		$data['nombre'] = $this->session->userdata('usuario');
        $data['id'] = $this->session->userdata('id');
        $data['cat']=$this->Categoria_model->getCategorias();
		$this->load->view('admin/plantilla', $data);
	}
	public function agregarcategoria(){
		$data['contenido'] = 'admin/categoria/agregarcategoria';
		$data['nombre'] = $this->session->userdata('usuario');
        $data['id'] = $this->session->userdata('id');
        $data['cat']=$this->Categoria_model->getcategorias();
        //$data['proveedor']=$this->Productos_model->getproveedores();
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



	public function deudasproveedores(){
		$data['contenido'] = 'admin/deudasproveedores/deudasproveedores';
		$data['nombre'] = $this->session->userdata('usuario');
            $data['id'] = $this->session->userdata('id');
        $data['deudasprovee']=$this->Deudasproveedores_model->getDeudasproveedores();
		$this->load->view('admin/plantilla', $data);
	}
	public function agregardeudasproveedores(){
		$data['contenido'] = 'admin/deudasproveedores/agregardeudasproveedores';
		$data['nombre'] = $this->session->userdata('usuario');
            $data['id'] = $this->session->userdata('id');
        $data['proveedor']=$this->Proveedores_model->getproveedores();
		$this->load->view('admin/plantilla', $data);
	}
	public function actualizardeudasproveedores(){
		$data['contenido'] = 'admin/deudasproveedores/actualizardeudasproveedores';
		$data['nombre'] = $this->session->userdata('usuario');
            $data['id'] = $this->session->userdata('id');
        $data['proveedor']=$this->Proveedores_model->getproveedores();
		$this->load->view('admin/plantilla', $data);
	}
	



	public function abonoproveedores(){
		$data['contenido'] = 'admin/abonoproveedores/abonoproveedores';
		$data['nombre'] = $this->session->userdata('usuario');
            $data['id'] = $this->session->userdata('id');
        $data['abonoprovee']=$this->Abonoproveedores_model->getabonoproveedores();
		$this->load->view('admin/plantilla', $data);
	}
	public function agregarabonoproveedores($id){
		$data['contenido'] = 'admin/abonoproveedores/agregarabonoproveedores';
		$data['nombre'] = $this->session->userdata('usuario');
            $data['id'] = $this->session->userdata('id');
        $data['deudaspagar']=$this->Deudasproveedores_model->getDeudasproveedores2($id);
        //$data['abonoprovee']=$this->Abonoproveedores_model->getabonoproveedores($id);
        //$data['proveedor']=$this->Proveedores_model->getproveedores();
		$this->load->view('admin/plantilla', $data);
	}
	public function actualizarabonoproveedores(){
		$data['contenido'] = 'admin/abonoproveedores/actualizarabonoproveedores';
		$data['nombre'] = $this->session->userdata('usuario');
            $data['id'] = $this->session->userdata('id');
        $data['proveedor']=$this->Proveedores_model->getproveedores();
		$this->load->view('admin/plantilla', $data);
	}



	public function direccion(){
		$data['contenido'] = 'admin/direccion/direccion';
		$data['nombre'] = $this->session->userdata('usuario');
            $data['id'] = $this->session->userdata('id');
        $data['direc']=$this->Direccion_model->getDirecciones();
		$this->load->view('admin/plantilla', $data);
	}
	public function agregardireccion(){
		$data['contenido'] = 'admin/direccion/agregardireccion';
		$data['nombre'] = $this->session->userdata('usuario');
            $data['id'] = $this->session->userdata('id');
        $data['direc']=$this->Direccion_model->getDirecciones();
		$this->load->view('admin/plantilla', $data);
	}




	public function deudasclientes(){
		$data['contenido'] = 'admin/deudasclientes/deudasclientes';
		$data['nombre'] = $this->session->userdata('usuario');
            $data['id'] = $this->session->userdata('id');
        $data['deudascli']=$this->Deudasclientes_model->getDeudasclientes();
		$this->load->view('admin/plantilla', $data);
	}
	public function agregardeudasclientes(){
		$data['contenido'] = 'admin/deudasclientes/agregardeudasclientes';
		$data['nombre'] = $this->session->userdata('usuario');
            $data['id'] = $this->session->userdata('id');
        $data['cliente']=$this->Clientes_model->getClientes();
		$this->load->view('admin/plantilla', $data);
	}





	public function abonoclientes(){
		$data['contenido'] = 'admin/abonoclientes/abonoclientes';
		$data['nombre'] = $this->session->userdata('usuario');
            $data['id'] = $this->session->userdata('id');
        $data['abono']=$this->Abonoclientes_model->getabonoclientes();
		$this->load->view('admin/plantilla', $data);
	}
	public function agregarabonoclientes($id){
		$data['contenido'] = 'admin/abonoclientes/agregarabonoclientes';
		$data['nombre'] = $this->session->userdata('usuario');
            $data['id'] = $this->session->userdata('id');
        $data['deudascobrar']=$this->Deudasclientes_model->getDeudasclientes2($id);
        //$data['abono']=$this->Abonoclientes_model->getabonoclientes($id);
        //$data['cliente']=$this->Clientes_model->getClientes();
		$this->load->view('admin/plantilla', $data);
	}
	public function actualizarabonoclientes(){
		$data['contenido'] = 'admin/abonoclientes/actualizarabonoclientes';
		$data['nombre'] = $this->session->userdata('usuario');
            $data['id'] = $this->session->userdata('id');
        $data['cliente']=$this->Clientes_model->getClientes();
		$this->load->view('admin/plantilla', $data);
	}




	// public function productoscategoria(){
	// 	$data['contenido'] = 'productoscategoria';
	// 	$data['title'] = 'Página de productos';
	// 	$data['nombre'] = $this->session->userdata('usuario');
 //        $data['id'] = $this->session->userdata('id');
	// 	//$data['cat']=$this->Categoria_model->getCategorias();
 //        $data['producs']=$this->Productos_model->getProductos();
	// 	//$data['producat']=$this->Productoscategoria_model->getProductoscategoria();
	// 	$this->load->view('plantilla', $data);
	// }

}



?>