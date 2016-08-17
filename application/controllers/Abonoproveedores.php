<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Abonoproveedores extends CI_controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->model('Abonoproveedores_model');
		$this->load->model('Proveedores_model');
	}


	public function getDeudasproveedores($id=null){
		$data['deudasprovee']=$this->Abonoproveedores_model->getProveedores($id);
		$this->load->view('admin/plantilla',$data);
	} 
	public function addAbonoproveedores(){
		$f = $this->input->post('fecha');
		$a = $this->input->post('abono');
		$idd = $this->input->post('iddeudas');

		$this->Abonoproveedores_model->addAbonoproveedores($f, $a, $idd);
		
		redirect('Backend/deudasproveedores');

	}

	public function actualizarabonoproveedores($id){
		$data['contenido'] = 'admin/abonoproveedores/actualizarabonoproveedores';
		$data['nombre'] = $this->session->userdata('provee');
           $data['id'] = $this->session->userdata('id');
        $data['abonos'] = $this->Abonoproveedores_model->getabonoproveedores($id);
        $data['proveedor']=$this->Proveedores_model->getproveedores();
		$this->load->view('admin/plantilla', $data);
	}

	public function upAbonoproveedores(){
		$id = $this->input->post('idabonoproveedores');
		$f = $this->input->post('fecha');
		$a = $this->input->post('abono');

		$this->Abonoproveedores_model->upAbonoproveedor($id, $f, $a);

		redirect('Backend/abonoproveedores');
	}

	public function delAbonoproveedor($id){
        $this->Abonoproveedores_model->delAbonoproveedor($id);
        
        redirect('Backend/abonoproveedores');
    }
}

?>