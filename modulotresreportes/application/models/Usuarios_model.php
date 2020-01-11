<?php
/**
 * 
 */
class Usuarios_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}
	function guardar_usuario($nombre,$apellido,$correo,$telefono,$usuario,$clave,$estado)
	{
		$data = array(
		'nombre' => $nombre, 
		'apellido' => $apellido,
		'correo' => $correo,
		'telefono' => $telefono,
		'username' => $usuario,
		'clave' => $clave,
		'estado' => $estado,
		);
		$this->db->insert('usuarios',$data);
		return $this->db->insert_id();
	}
	function getusuarios()
	{
		$query = $this->db->query("select *from usuarios");
		return $query->result();
	}
	function getusuario_id($id)
	{
		$query = $this->db->query("select *from usuarios where id = ".$id);
		return $query->result();
	}
	function getcredenciales($usuario,$clave)
	{
		$query = $this->db->query("select *from usuarios where username='".$usuario."' and clave = '".$clave."'");
		return $query->result();
	}

	function modificarusuario($id,$nombre,$apellido,$correo,$telefono,$username)
	{
		$data = array(
			'nombre' => $nombre,
			'apellido' => $apellido,
			'correo' => $correo,
			'telefono' => $telefono,
			'username' => $username);
	    $this->db->where('id',$id);
	    return $this->db->update('usuarios',$data);
	}
	function eliminarusuario($id)
	{
		$this->db->where('id',$id);
		return  $this->db->delete('usuarios');
	}
}
?>