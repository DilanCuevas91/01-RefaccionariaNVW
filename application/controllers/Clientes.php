<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes extends CI_controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->model('Clientes_model');
		$this->load->model('Direccion_model');

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

		// $this->form_validation->set_error_delimiters('<div style="color:red">', '</div>');
		// if ($this->form_validation->run('clientes_validation') == FALSE) {
			

		// 	$data['contenido'] = 'admin/clientes/clientes';
		// 	$data['nombre'] = $this->session->userdata('nombre');
  //           $data['id'] = $this->session->userdata('id');
	 //        $data['clients']=$this->Clientes_model->getClientes();
	 //        $data['direc']=$this->Direccion_model->getDirecciones();
		// 	$this->load->view('admin/plantilla', $data);
		// 	//redirect('Backend/clientes');

		// 	$this->load->view('admin/plantilla', $data);
		// }else{

		$n = $this->input->post('nombre');
		$t = $this->input->post('telefono');
		$e = $this->input->post('email');
		$p = $this->input->post('password');
		$d = $this->input->post('direccion');

		$this->Clientes_model->addCliente($n, $t, $e, $p, $d);
		
		//$this->getClientes();
		//$data['contenido'] = 'admin/clientes/clientes';		
		//$this->load->view('admin/plantilla',$data);
		redirect('Backend/clientes');

		//}

	}

	public function actualizarcliente($id){
		$this->load->model('Direccion_model');
		$data['contenido'] = 'admin/clientes/actualizarclientes';
		$data['nombre'] = $this->session->userdata('cliente');
           $data['id'] = $this->session->userdata('id');
            $data['cliente'] = $this->Clientes_model->getClientes($id);
        $data['direc']=$this->Direccion_model->getDirecciones();
		$this->load->view('admin/plantilla', $data);
	}

	public function upCliente(){
		$id = $this->input->post('idclientes');
		$i = $this->input->post('imagen');
		$n = $this->input->post('nombre');
		$t = $this->input->post('telefono');
		$e = $this->input->post('email');
		$p = $this->input->post('password');
		$d = $this->input->post('direccion');

		$this->Clientes_model->upCliente($id, $i, $n, $t, $e, $p, $d);

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

	/*public function validar(){
		$data['e']= $this->input->post('email');
		$data['p'] = $this->input->post('password');
		$this->form_validation->set_rules('email','Email','required|valid_email');
		$this->form_validation->set_rules('password', 'Password','required');
		$this->form_validation->set_error_delimiters('<div style="color:white">', '</div>');
		if ($this->form_validation->run() == FALSE) {
			

			$data['contenido'] = 'login';
			$data['title'] = 'Iniciar sesión';
			$this->load->view('plantilla', $data);
		}else{
			redirect('Clientes/login',$data); 
		}
	}*/

	public function  login(){
		$this->form_validation->set_error_delimiters('<div style="color:red">', '</div>');
		if ($this->form_validation->run('login') == FALSE) {
			

			$data['contenido'] = 'login';
			$data['title'] = 'Iniciar sesión';
			$this->load->view('plantilla', $data);
		}else{
			
			//$e = $this->security->xss_clean(strip_tags($this->input->post('email')));
			//$e = md5($this->security->xss_clean(strip_tags($this->input->post('password'))));
			$e = $this->input->post('email');
			$p = $this->input->post('password');

			// Vefiricar en la base de datos si existe el email
			$usuario = $this->Clientes_model->login($e, $p);
			
			if($usuario){
	            $arreglo_usuario = array(
	                		'idclientes' => $usuario->idclientes,
	                		'imagencliente' => $usuario->imagencliente,
	                        'nombrecliente'=> $usuario->nombrecliente,
	                        'telefono'=> $usuario->telefono,
	                        'emailcliente'=> $usuario->emailcliente,
	                		'password'=> $usuario->password,
	                		'status'=> $usuario->status,
	                		'privilegios'=> $usuario->privilegios,
	                        'autentificado' =>TRUE
	        );
	        $this->session->set_userdata($arreglo_usuario);
	        redirect('Clientes/logueado');
	            
	        }  else {
	        	
	        	//$this->session->set_flashdata('mensaje','El usuario contraseña es incorrecto'); 
	            redirect('Frontend/login');
	        }
		}
		

			
    		



		/*redirect('Backend/index', $data);

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
		}*/
	}
	

	public function logueado() {
        if($this->session->userdata('autentificado')){

            //$data['nombre'] = $this->session->userdata('nombre');
            //$data['email'] = $this->session->userdata('email');
            $config   =  array ( 
	        'start_day'     =>  'domingo' , 
	        'month_type'    =>  'largo' , 
	        'day_type'      =>  'corto' 
			);
			$data['calendario'] = $this->load->library('calendar', $config);
            $data['contenido'] = 'admin/inicio';
            
            redirect('Frontend');
            //$this->load->view('admin/plantilla', $data);
            //redirect('Frontend');
        }else{
            redirect('cliente/index');
        }
    }
    
    public function cerrarSesion() {
        	$arreglo_usuario = array('autentificado' => FALSE);
            $this->session->set_userdata($arreglo_usuario);
            $this->session->sess_destroy();
            redirect('Frontend/login');

    		//redirect('Admin/login');
    }
}

?>