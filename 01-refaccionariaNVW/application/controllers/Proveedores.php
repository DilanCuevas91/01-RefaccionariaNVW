<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Proveedores extends CI_controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->model('Proveedores_model');
	}


	public function getProveedores($id=null){
		$data['provee']=$this->Proveedores_model->getProveedores($id);
		$this->load->view('admin/plantilla',$data);
	} 
	public function addProveedor(){
		$n = $this->input->post('nombre');
		$ap = $this->input->post('apaterno');
		$am = $this->input->post('amaterno');
		$d = $this->input->post('direccion');
		$t = $this->input->post('telefono');
		$e = $this->input->post('email');
		$r = $this->input->post('rfc');

		$this->Proveedores_model->addProveedor($n, $ap, $am, $d, $t, $e, $r);
		redirect('Backend/proveedores');

	}

	public function actualizarproveedores($id){
		$data['provee'] = $this->Proveedores_model->getProveedores($id);
		$data['contenido'] = 'admin/proveedores/actualizarproveedores';
		$data['nombre'] = $this->session->userdata('provee');
           $data['id'] = $this->session->userdata('id');
            $data['provee'] = $this->Proveedores_model->getProveedores($id);
		$this->load->view('admin/plantilla', $data);
	}

	public function upProveedor(){
		$id = $this->input->post('idproveedores');
		$n = $this->input->post('nombre');
		$ap = $this->input->post('apaterno');
		$am = $this->input->post('amaterno');
		$d = $this->input->post('direccion');
		$t = $this->input->post('telefono');
		$e = $this->input->post('email');
		$r = $this->input->post('rfc');

		$this->Proveedores_model->upProveedor($id, $n, $ap, $am, $d, $t, $e, $r);

		redirect('Backend/proveedores');
	}

	public function delProveedor($id){
        $this->Proveedores_model->delProveedor($id);
        
        redirect('Backend/proveedores');
    }
}

?>