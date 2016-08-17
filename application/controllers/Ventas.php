<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Ventas extends CI_controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->model('Ventas_model');
	}


	public function getVentas($id=null){
		$data['vents']=$this->Ventas_model->getVentas($id);
		$this->load->view('admin/plantilla',$data);
	} 
	public function addVenta(){
		$f = $this->input->post('fecha');
		$m = $this->input->post('montofinal');

		$this->Ventas_model->addVenta($n, $m, $u, $p, $s);
		redirect('Backend/ventas');

	}

	/*public function actualizarventas($id){
		$data['vents'] = $this->Ventas_model->getVentas($id);
		$data['contenido'] = 'admin/ventas/actualizarventas';
		$data['nombre'] = $this->session->userdata('vents');
           $data['id'] = $this->session->userdata('id');
            $data['vents'] = $this->Ventas_model->getVentas($id);
		$this->load->view('admin/plantilla', $data);
	}

	public function upProducto(){
		$id = $this->input->post('idproductos');
		$n = $this->input->post('nombre');
		$m = $this->input->post('marca');
		$u = $this->input->post('unidadmedida');
		$p = $this->input->post('preciolista');
		$s = $this->input->post('stock');


		$this->Ventas_model->upProducto($id, $n, $m, $u, $p, $s);

		redirect('Backend/ventas');
	}*/

	public function delVenta($id){
        $this->Ventas_model->delVenta($id);
        
        redirect('Backend/ventas');	
    }

    public function generar(){
		switch($for = $this->input->post('formato')){
                case 'xml':
                    $xml = $this->Ventas_model->generalXML('ventas');
                    $this->load->helper('download');
                    $nombre = 'Reporte-Ventas'."-".date("d_m_Y - H_i_s").'.xml';
                    force_download($nombre,$xml);
                    break;
                case 'xls':
                      $this->load->helper('mysql_to_excel_helper');
                      to_excel($this->Ventas_model->generarXLS(),"Miexcel");
                    break;
            }
            redirect('Backend/ventas');
        }


        // public function tuExcel(){
        //     $this->load->helper('mysql_to_excel');
        //     to_excel($this->ciudades_model->tuExcel(), "miExcel");
        // }
}

?>