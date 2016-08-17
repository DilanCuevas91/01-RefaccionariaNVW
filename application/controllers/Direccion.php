<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Direccion extends CI_controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->model('Direccion_model');
	}


	public function getDirecciones($id=null){
		$data['direc']=$this->Direccion_model->getDirecciones($id);
		$this->load->view('admin/plantilla',$data);
	} 
	public function addDireccion(){
		$e = $this->input->post('estado');
		$ci = $this->input->post('ciudad');
		$co = $this->input->post('codigopostal');
		$col = $this->input->post('colonia');
		$ca = $this->input->post('calle');
		$num = $this->input->post('numero');

		$this->Direccion_model->addDireccion($e, $ci, $co, $col, $ca, $num);
		redirect('Backend/agregarclientes');

	}

	public function actualizardirecciones($id){
		$data['direc'] = $this->Direccion_model->getDirecciones($id);
		$data['contenido'] = 'admin/direccion/actualizardireccion';
		$data['nombre'] = $this->session->userdata('cliente');
           $data['id'] = $this->session->userdata('id');
        //$data['direc'] = $this->Direccion_model->getDirecciones($id);
		$this->load->view('admin/plantilla', $data);
	}

	public function upDireccion(){
		$id = $this->input->post('iddireccion');
		$e = $this->input->post('estado');
		$ci = $this->input->post('ciudad');
		$co = $this->input->post('codigopostal');
		$col = $this->input->post('colonia');
		$ca = $this->input->post('calle');
		$num = $this->input->post('numero');

		$this->Direccion_model->upDireccion($id, $e, $ci, $co, $col, $ca, $num);

		redirect('Backend/direccion');
	}

	public function delDireccion($id){
        $this->Direccion_model->delDireccion($id);
        
        redirect('Backend/direccion');
    }
}

?>