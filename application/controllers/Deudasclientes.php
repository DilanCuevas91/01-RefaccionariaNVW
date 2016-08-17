<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Deudasclientes extends CI_controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->model('Deudasclientes_model');
		$this->load->model('Clientes_model');
	}


	public function getDeudasclientes($id=null){
		$data['deudascli']=$this->Deudasclientes_model->getDeudasclientes($id);
		$this->load->view('admin/plantilla',$data);
	} 
	public function addDeudasclientes(){
		$n = $this->input->post('nota');
		$f = $this->input->post('fecha');
		$c = $this->input->post('cantidad');
		$cli = $this->input->post('clientes');

		$this->Deudasclientes_model->addDeudasclientes($n, $f, $c, $cli);
		redirect('Backend/deudasclientes');

	}

	public function actualizardeudasclientes($id){
		$data['contenido'] = 'admin/deudasclientes/actualizardeudasclientes';
		$data['nombre'] = $this->session->userdata('cliente');
           $data['id'] = $this->session->userdata('id');
        $data['deudascli'] = $this->Deudasclientes_model->getDeudasclientes($id);
        $data['cliente']=$this->Clientes_model->getClientes();
		$this->load->view('admin/plantilla', $data);
	}

	public function upDeudasclientes(){
		$id = $this->input->post('iddeudascobrar');
		$n = $this->input->post('nota');
		$f = $this->input->post('fecha');
		$c = $this->input->post('cantidad');
		$cli = $this->input->post('clientes');

		$this->Deudasclientes_model->upDeudasclientes($id, $n, $f, $c, $cli);

		redirect('Backend/deudasclientes');
	}

	public function deldeudasclientes($id){
        $this->Deudasclientes_model->deldeudascliente($id);
        
        redirect('Backend/deudasclientes');
    }
}

?>