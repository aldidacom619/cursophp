<?php
/**
 * 
 */
class Usuarios extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
	}
	function index()
	{
		echo "hola";
	}
	function nuevo()
	{
		$this->load->view("formulario");
	}
	function guardardatos()
	{
		$this->form_validation->set_rules('txtnombrepersona', 'NOMBRE', 'required|alpha|trim|min_length[2]|strtoupper');
		$this->form_validation->set_rules('txtprimer_apellido', 'PRIMER APELLIDO', 'required|alpha|trim|min_length[2]|strtoupper');
		$this->form_validation->set_rules('txtsegundo_apellido', 'SEGUNDO APELLIDO', 'required|alpha|trim|min_length[2]|strtoupper');
		$this->form_validation->set_message('required', 'Debe introducir el campo %s');
		$this->form_validation->set_message('min_length', 'el %s tiene q tener mas caracteres ...!!!!!');
		$this->form_validation->set_message('max_length', 'el %s tiene q tener máximo 8 caracteres ...!!!!!');
		$this->form_validation->set_message('alpha', 'El campo %s tiene que contener solo letras ...!!!!!');
		$this->form_validation->set_message('numeric', 'El campo %s tiene que contener solo numeros ...!!!!!');
		
		if ($this->form_validation->run() == FALSE)
		{
			//redirect("index/$bandera/$ci_persona");
			$this->nuevo(); 
		}
		else
		{
			$comercial = $this->input->post('comercial');
			$descripcion = $this->input->post('descripcion');
			$generico = $this->input->post('generico');
			$unidad = $this->input->post('unidad');			
			$id_prov = $this->input->post('linea');
			$this->index();
		}
	}

}
?>