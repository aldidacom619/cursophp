<?php  
include 'conexion.php';
if($_GET){
	if(isset($_GET['operacion']))
	{
		switch ($_GET['operacion']) {
			case 'categoria':
			  $option = "";
				$sel = $con->query("SELECT * FROM  categoria");
				while ($f = $sel->fetch_assoc()){
		   	      $option.="<option value = '".$f['codigo']."'>". $f['nombre_categoria']."</option>";	
			    }
			    echo $option;
				break;
			case 'seleccionar_registro':
				$id = $_GET['id'];
				$prod = $con->query("SELECT * FROM productos WHERE id = $id");
				$p = $prod->fetch_assoc();
				echo json_encode($p);
				break;
			case 'prueba':
				$var = $_GET['prueba'];
 				echo $var;
				break;
			case 'guardar':
				$accion = $_GET['accion'];
				$id_registro = $_GET['id_registro'];
				$categoria = $_GET['slCategoria'];
    			$descripcion = $_GET['txtDescripcion'];
			    $precio = $_GET['txtPrecio'];
			    $cantidad = $_GET['txtCantidad'];
			    if($accion == 'nuevo')
			    {
			    	$respuesta = guardar($con,$categoria,$descripcion,$precio,$cantidad);
			    }
			    else
			    {
			    	$respuesta = actualizar($con,$id_registro,$categoria,$descripcion,$precio,$cantidad);
			    }
 				//echo $accion ."- ".	$id_registro ."- ".$categoria."- ".$descripcion."- ".$precio ."- ".$cantidad;
 				echo $respuesta;
				break;	
			case 'eliminar_registro':
				$id = $_GET['id'];
				$respuesta = eliminar($con,$id);
				echo $respuesta;
				break;	
			case 'listas':
				
				$prod = $con->query("SELECT * FROM productos");
				echo armartabla($prod);
				break;
			default:
				# code...
				break;
		}
		//echo "prueba";
	}
}

function guardar($con,$categoria,$descripcion,$precio,$cantidad)
{
	 $id = '';
     $estado = 'AC';
    
    $ins = $con->prepare("INSERT INTO productos VALUES (?,?,?,?,?,?)");
    $ins->bind_param("iisdis",$id,$categoria,$descripcion,$precio,$cantidad,$estado);


    if($ins->execute()){
        return "REGISTRO GUARDADO";
    }else{
        return "NO SE REGISTRO";
    }
    $ins->close();
    $con->close();
}
	
function actualizar($con,$id,$categoria,$descripcion,$precio,$cantidad)
{
	$up = $con->prepare("UPDATE productos SET codigo_categoria = ?,descripcion = ?, precio=?, cantidad=? WHERE id = ? ");
    $up->bind_param("isdii",$categoria,$descripcion,$precio,$cantidad,$id);

    if($up->execute()){
          return "REGISTRO ACTUALIZADO";
    }else{
          return "NO SE ACTUALIZO";
    }
    $up->close();
    $con->close();
}	   
function eliminar($con,$id)
{
	$del = $con -> prepare("DELETE FROM productos WHERE id = ? ");
	$del->bind_param("i",$id);
	if ($del->execute()) {
	    return "REGISTRO ELIMINADO";
	}else{
	    return "REGISTRO NO ELIMINADO";
	}

	$del->close();
	$con->close();
}   
function armartabla($datos)
{
	//echo $datos;
	$con = 1;
	$tabla = '<thead>
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">CATEGORIA</th>
		      <th scope="col">DESCRIPCION</th>
		      <th scope="col">PRECIO</th>
		      <th scope="col">CANTIDAD</th>
		      <th scope="col">ESTADOs</th>
		      <th scope="col">OPCIONES</th>
		    </tr>
		  </thead>
		  <tbody>';
		  	while ($f = $datos->fetch_assoc()){
		  $tabla.=  '<tr>
		      <th scope="row">'.$con++.'</th>';
		  $tabla.= '<td>'.$f['codigo_categoria'].'</td>
		      <td>'.$f['descripcion'].'</td>
		      <td>'.$f['precio'].'</td>
		      <td>'.$f['cantidad'].'</td>
		      <td>'.$f['estado'].'</td>
		       <td>';
		    $tabla.=  "<button class='btn btn-warning' onclick='actualizarregistro(".$f['id'].")'>Editar</button><br>";
		    $tabla.=  "<button class='btn btn-danger' onclick='eliminar(".$f['id'].")'>Eliminar</button>";
		     $tabla.='</tr>';
		  }
		   $tabla.='</tbody>';
  return $tabla;

}

?>
