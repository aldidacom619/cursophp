<?php
/**
 * 
 */
class Loguen extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Usuarios_model');
		$this->load->helper('form');
	}
	function index($error = ""){
		$data['error'] = $error;
		$this->load->view('loguen/loguen',$data);
	}
	function validaruser()
	{
		$usuario = $this->input->post('txtusername');
		$clave = md5($this->input->post('txtpass'));
		$login = $this->Usuarios_model->getcredenciales($usuario,$clave);
		//var_dump($login);
		//echo $usuario."  ".$clave; 
		if($login)
		{
			$data = array(
			   'is_logued_in' => TRUE,
			   'id' => $login[0]->id,
			   'nombre' => $login[0]->nombre." ".$login[0]->apellido);	

			$this->session->set_userdata($data);
			redirect('Usuarios');
		}
		else
		{
			$error = "Usuario no registrado";
			$this->index($error);
		}
	}
}
?>
