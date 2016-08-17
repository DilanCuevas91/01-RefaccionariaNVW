<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Deudasproveedores extends CI_controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->model('Deudasproveedores_model');
		$this->load->model('Proveedores_model');
	}


	public function getDeudasproveedores($id=null){
		$data['deudasprovee']=$this->Deudasproveedores_model->getProveedores($id);
		$this->load->view('admin/plantilla',$data);
	} 
	public function addDeudasproveedores(){
		$n = $this->input->post('nota');
		$c = $this->input->post('cantidad');
		$f = $this->input->post('fecha');
		$p = $this->input->post('proveedores');

		$this->Deudasproveedores_model->addDeudasproveedores($n, $c, $f, $p);
		redirect('Backend/deudasproveedores');

	}

	public function actualizardeudasproveedores($id){
		$data['contenido'] = 'admin/deudasproveedores/actualizardeudasproveedores';
		$data['nombre'] = $this->session->userdata('cliente');
           $data['id'] = $this->session->userdata('id');
        $data['deudasprovee'] = $this->Deudasproveedores_model->getDeudasproveedores($id);
        $data['proveedor']=$this->Proveedores_model->getproveedores();
		$this->load->view('admin/plantilla', $data);
	}

	public function upDeudasproveedores(){
		$id = $this->input->post('iddeudaspagar');
		$n = $this->input->post('nota');
		$c = $this->input->post('cantidad');
		$f = $this->input->post('fecha');
		$p = $this->input->post('proveedores');

		$this->Deudasproveedores_model->upDeudasproveedor($id, $n, $c, $f, $p);

		redirect('Backend/deudasproveedores');
	}

	public function deldeudasproveedores($id){
        $this->Deudasproveedores_model->deldeudasproveedor($id);
        
        redirect('Backend/deudasproveedores');
    }
}

?>