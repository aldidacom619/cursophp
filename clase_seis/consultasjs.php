<?php
include 'conexion.php';
if($_GET)
{
	if(isset($_GET['operacion']))
	{
		switch ($_GET['operacion']) {
			case 'categoria':
				//echo "CATEGORIA";
				$option  = "";
				$sel = $con->query("SELECT *FROM categoria");
				while($f = $sel->fetch_assoc()){
					$option.= "<option value=". $f['codigo'].">". $f['nombre_categoria']."</option>";
					//echo $option;
				}
				echo $option;
				break;

			default:
				# code...
				break;
		}
	}
}
?>