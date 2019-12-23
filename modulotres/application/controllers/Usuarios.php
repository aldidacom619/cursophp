<?php
/**
 * 
 */
class Usuarios extends CI_controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->_is_logued_in();
		$this->load->model('Usuarios_model');
		$this->load->helper('form');
		$this->load->library('form_validation');
	}
	function _is_logued_in()
	{
		$is_logued_in = $this->session->userdata('is_logued_in');
		if($is_logued_in != TRUE)
		{
			redirect('loguen');
		}
	}
	function index()
	{
		//echo $this->session->userdata('id');
		//http://127.0.0.1:8080/cursophp/modulotres/usuarios
		$filas['filas']= $this->Usuarios_model->getusuarios();
		$dato['nombre'] = "DIEGO";
		$dato['apellido'] = "DAZA";
		$this->load->view("inicio/cabecera",$dato);
		$this->load->view("usuarios/lista_usuarios",$filas);
		$this->load->view("inicio/pie");
	}
	function saludo()
	{
		echo "saludo";
	}
	function nombre($nombre)
	{
		$mensaje = $this->recupera_nombre($nombre);
		echo $mensaje;
	}
	function recupera_nombre($nombre)
	{
		return "el nombre del amigo es: ".$nombre;
	}
	function datos($a,$b)
	{
		$suma = $this->suma($a,$b);
		$multiplicar = $this->multiplicar($a,$b);
		echo "la suma es: ".$suma."<br>";
		echo "la multiplicacion es: ".$multiplicar;
	}
	function suma($a,$b)
	{
		return $a+$b;
	}
	function multiplicar($a,$b)
	{
		return $a*$b;
	}
	function nuevousuario()
	{
		$dato['nombre'] = "DIEGO";
		$dato['apellido'] = "DAZA";
		$this->load->view("inicio/cabecera",$dato);
		$this->load->view("usuarios/nuevo_usuario");
		$this->load->view("inicio/pie");
	}
	function guardar_datos()
	{	
		
		$this->form_validation->set_rules('txtnombre','Nombre','required|alpha');
		$this->form_validation->set_message('required','El campo %s es Obligatorio');
		$this->form_validation->set_message('alpha','El campo %s no debe tener numeros');
		if($this->form_validation->run()==false)
		{
			$this->inicio();
		}
		else
		{
			$nombre = $this->input->post('txtnombre');
			$apellido = $this->input->post('txtapellidos');
			$correo = $this->input->post('txtcorreo');
			$telefono = $this->input->post('txttelefono');
			$usuario = $this->input->post('txtusername');
			$clave = md5($this->input->post('txtpass'));
			$estado = 'AC';
			$insertar = $this->Usuarios_model->guardar_usuario($nombre,$apellido,$correo,$telefono,$usuario,$clave,$estado);
			if($insertar > 0)
			{
				$this->index();
			}
			else
			{
				$this->inicio();
			}
			
		}
	}
	function editar($id_usuario)
	{
		/*$filas = $this->Usuarios_model->getusuario_id($id_usuario);
		var_dump($filas);*/
		$filas['filas']= $this->Usuarios_model->getusuario_id($id_usuario);
		$dato['nombre'] = "DIEGO";
		$dato['apellido'] = "DAZA";
		$this->load->view("inicio/cabecera",$dato);
		$this->load->view("usuarios/editar_usuarios",$filas);
		$this->load->view("inicio/pie");
	}
	function editar_datos()
	{
		$id = $this->input->post('iduser');
		$this->form_validation->set_rules('txtnombre','Nombre','required|alpha');
		$this->form_validation->set_message('required','El campo %s es Obligatorio');
		$this->form_validation->set_message('alpha','El campo %s no debe tener numeros');
		if($this->form_validation->run()==false)
		{
			$this->editar($id);
		}
		else
		{
			$id = $this->input->post('iduser');
			$nombre = $this->input->post('txtnombre');
			$apellido = $this->input->post('txtapellidos');
			$correo = $this->input->post('txtcorreo');
			$telefono = $this->input->post('txttelefono');
			$usuario = $this->input->post('txtusername');
			$update = $this->Usuarios_model->modificarusuario($id,$nombre,$apellido,$correo,$telefono,$usuario);
			$this->index();
		}
	}
}
?>