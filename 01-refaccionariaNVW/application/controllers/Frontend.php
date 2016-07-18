<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend extends CI_Controller{

	public function index(){
		$data['contenido'] = 'inicio';
		$data['title'] = 'Página de inicio';
		$this->load->view('plantilla', $data);
	}

	public function quienessomos(){
		$data['contenido'] = 'quienessomos';
		$data['title'] = 'Página de la empresa';
		$this->load->view('plantilla', $data);
	}

	public function productos(){
		$data['contenido'] = 'productos';
		$data['title'] = 'Página de productos';
		$this->load->view('plantilla', $data);
	}

	/*public function producto(){
		$data['contenido'] = 'producto';
		$data['title'] = 'Página de productos';
		$this->load->view('plantilla', $data);
	}*/

	public function contactanos(){
		$data['contenido'] = 'contactanos';
		$data['title'] = 'Página de contactanos';
		$this->load->view('plantilla', $data);
	}

	public function login(){
		$data['contenido'] = 'login';
		$data['title'] = 'Iniciar sesión';
		$this->load->view('plantilla', $data);
	}
}



?>