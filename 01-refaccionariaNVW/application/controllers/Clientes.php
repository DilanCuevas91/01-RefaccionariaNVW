<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes extends CI_controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->model('Clientes_model');
	}

	public function index(){
		$this->load->view('login');
	}

	public function getClientes($id=null){
		$data['clients']=$this->Clientes_model->getClientes($id);
		$this->load->view('admin/plantilla',$data);
	} 

	public function frmCliente(){
		$this->load->view('frmCliente');
	}

	public function addCliente(){
		$n = $this->input->post('nombre');
		$t = $this->input->post('telefono');
		$e = $this->input->post('email');
		$p = $this->input->post('password');

		$this->Clientes_model->addCliente($n, $t, $e, $p);
		
		//$this->getClientes();
		//$data['contenido'] = 'admin/clientes/clientes';		
		//$this->load->view('admin/plantilla',$data);
		redirect('Backend/clientes');

	}

	public function actualizarcliente($id){
		$data['cliente'] = $this->Clientes_model->getClientes($id);
		$data['contenido'] = 'admin/clientes/actualizarclientes';
		$data['nombre'] = $this->session->userdata('cliente');
           $data['id'] = $this->session->userdata('id');
            $data['cliente'] = $this->Clientes_model->getClientes($id);
		$this->load->view('admin/plantilla', $data);
	}

	public function upCliente(){
		$id = $this->input->post('idclientes');
		$n = $this->input->post('nombre');
		$t = $this->input->post('telefono');
		$e = $this->input->post('email');
		$p = $this->input->post('password');

		$this->Clientes_model->upCliente($id, $n, $t, $e, $p);

		redirect('Backend/clientes');
	}

	public function delCliente($id){
        $this->Clientes_model->delCliente($id);
        
        redirect('Backend/clientes');
    }

	public function upStatus($id, $statu){
		$statu = ($statu == 0) ? 1 : 0;

		$this->Clientes_model->upStatus($id, $statu);

		redirect('Backend/clientes');
	}
	public function upPrivilegios($id, $privilegios){
		$privilegios = ($privilegios == 0) ? 1 : 0;

		$this->Clientes_model->upPrivilegios($id, $privilegios);

		redirect('Backend/clientes');
	}

	public function  login(){
		$emai = $this->input->post('email');
		$pass = $this->input->post('password');

		// Vefiricar en la base de datos si existe el email
		$autentificar = $this->Clientes_model->login($emai, $pass);

		if ($autentificar) {
			$arreglo_usuario = array (
					'idclientes' => $autentificar->idclientes,
					'autentificar' => $autentificar->autentificar,
					'autentificado' => TRUE
				);
			$this->session->set_userdata($arreglo_usuario);
			
			redirect('Backend/index', $data);
		} else {
			redirect('Frontend/index');
		}
		
	}

	public function logueado() {
        if($this->session->userdata('autentificado')){
            $data['nombre'] = $this->session->userdata('usuario');
            $data['id'] = $this->session->userdata('id');
            
            $this->load->view('admin/plantilla', $data);
        }else{
            redirect('cliente/index');
        }
    }
    
    public function cerrarSesion() {
        $arreglo_usuario = array(
            'autentificado' => FALSE
            );
            $this->session->set_userdata($arreglo_usuario);
            redirect('Frontend/index');
    }
}

?>