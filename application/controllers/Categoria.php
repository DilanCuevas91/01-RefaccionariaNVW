<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Categoria extends CI_controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->model('Categoria_model');
	}


	public function getCategorias($id=null){
		$data['cat']=$this->Categoria_model->getCategorias($id);
		$this->load->view('admin/plantilla',$data);
	} 
	public function addCategoria(){
		$n = $this->input->post('nombre');
		$d = $this->input->post('descripcion');
		$this->Categoria_model->addCategoria($n, $d);
		redirect('Backend/categoria');

	}

	public function actualizarcategoria($id){
		$data['cat'] = $this->Categoria_model->getCategorias($id);
		$data['contenido'] = 'admin/categoria/actualizarcategoria';
		$data['nombre'] = $this->session->userdata('cliente');
           $data['id'] = $this->session->userdata('id');
        //$data['cat'] = $this->Categoria_model->getCategorias($id);
		$this->load->view('admin/plantilla', $data);
	}

	public function upCategoria(){
		$id = $this->input->post('idcategoria');
		$n = $this->input->post('nombre');
		$d = $this->input->post('descripcion');

		$this->Categoria_model->upCategoria($id, $n, $d);

		redirect('Backend/categoria');
	}

	public function delCategoria($id){
        $this->Categoria_model->delCategoria($id);
        
        redirect('Backend/categoria');
    }
}

?>