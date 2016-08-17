<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Abonoclientes extends CI_controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->model('Abonoclientes_model');
		$this->load->model('Clientes_model');
	}


	public function getDeudasclientes($id=null){
		$data['deudascli']=$this->Abonoclientes_model->getabonoclientes($id);
		$this->load->view('admin/plantilla',$data);
	} 
	public function addAbonoclientes(){
		$f = $this->input->post('fecha');
		$a = $this->input->post('abono');
		$idd = $this->input->post('iddeudas');

		$this->Abonoclientes_model->addAbonoclientes($f, $a, $idd);
		
		redirect('Backend/deudasclientes');

	}

	public function actualizarabonoclientes($id){
		$data['contenido'] = 'admin/abonoclientes/actualizarabonoclientes';
		$data['nombre'] = $this->session->userdata('usuario');
           $data['id'] = $this->session->userdata('id');
        $data['abonos'] = $this->Abonoclientes_model->getabonoclientes($id);
        $data['cliente']=$this->Clientes_model->getClientes();
		$this->load->view('admin/plantilla', $data);
	}

	public function upAbonoclientes(){
		$id = $this->input->post('idabonoclientes');
		$f = $this->input->post('fecha');
		$a = $this->input->post('abono');

		$this->Abonoclientes_model->upAbonocliente($id, $f, $a);

		redirect('Backend/abonoclientes');
	}

	public function delAbonocliente($id){
        $this->Abonoclientes_model->delAbonocliente($id);
        
        redirect('Backend/abonoclientes');
    }
}

?>