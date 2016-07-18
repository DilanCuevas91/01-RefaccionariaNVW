<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Comentarios extends CI_controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->model('Comentarios_model');
	}


	public function getComentarios($id=null){
		$data['coments']=$this->Comentarios_model->getComentarios($id);
		$this->load->view('admin/plantilla',$data);
	} 
	public function addComentario(){
		$n = $this->input->post('nombre');
		$e = $this->input->post('email');
		$c = $this->input->post('comentario');

		$this->Comentarios_model->addComentario($n, $e, $c);
		redirect('Backend/comentarios');

	}

	public function delComentario($id){
        $this->Comentarios_model->delComentario($id);
        
        redirect('Backend/comentarios');
    }

    public function upStatus($id, $statu){
		$statu = ($statu == 0) ? 1 : 0;

		$this->Comentarios_model->upStatus($id, $statu);

		redirect('Backend/comentarios');
	}
}

?>