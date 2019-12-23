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
			case 'seleccionar_registro':
				$id = $_GET['id'];
				//$id = 18;
				$prod = $con->query("SELECT *FROM productos where id = '$id'");
				$p = $prod->fetch_assoc();
				echo json_encode($p);
				break;
			case 'guardar':
				//$cantidad = $_GET['cantidad'];//recuperamos el valor enviado desde ajax
				$accion = $_GET['accion'];
				$id_registro = $_GET['id_registro'];
				$categoria = $_GET['slCategoria'];
				$descripcion = $_GET['txtDescripcion'];
				$precio = $_GET['txtPrecio'];
				$cantidad = $_GET['txtCantidad'];//recuperamos el valor enviado desde ajax
				//echo "la accion es: ".$accion." la cantidad es: ".$cantidad;
				if($accion == 'nuevo')
				{
					$resultado = guardar($con,$categoria,$descripcion,$precio,$cantidad);
				}
				else
				{
					$resultado = actualizar($con,$categoria,$descripcion,$precio,$cantidad,$id_registro);
				}
				echo $resultado;
				break;
			case 'eliminar':
				$id = $_GET['id'];
				$resultado = eliminar($con,$id);
				echo $resultado;
				break;
			default:
				# code...
				break;
		}
	}
}
function guardar($con,$categoria,$descripcion,$precio,$cantidad)
{
   $id = "";
   $estado = "AC";   
   $ins = $con->prepare("INSERT INTO productos VALUES (?,?,?,?,?,?)");
   $ins->bind_param("iisdis",$id,$categoria,$descripcion,$precio,$cantidad,$estado);

   if($ins->execute())
   {
      return "REGISTRO GUARDADO";
   }
   else
    {
      return "REGISTRO NO GUARDADO";
    }
    $ins->close();
    $con->close();	
}
function actualizar($con,$categoria,$descripcion,$precio,$cantidad,$id)
{
	 $ins = $con->prepare("UPDATE productos SET codigo_categoria = ?,   descripcion = ?, precio = ?, cantidad = ? WHERE id = ? ");
   $ins->bind_param("isdii",$categoria,$descripcion,$precio,$cantidad,$id);

   if($ins->execute())
   {
      return "REGISTRO ACTUALIZADO";
   }
   else
    {
       return "REGISTRO NO ACTUALIZADO";
    }
    $ins->close();
    $con->close();
}
function eliminar($con,$id)
{
	$del = $con->prepare("DELETE FROM productos WHERE id = ? ");
   $del->bind_param("i",$id);

   if($del->execute())
   {
       return "REGISTRO ELIMINADO";
   }
   else
    {
        return "REGISTRO NO ELIMINADO";
    }
    $del->close();
    $con->close();
}
?>