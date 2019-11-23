 <html>
<head>
<title>OPERACIONES</title>
</head>
<body>
	<H3>OPERACIONES ARITMETICAS</H3>
   <form action = "" method="POST">
   		<label>NUMERO A:</label><br>
   		<input type="number" name="numeroa" required><br>
   		<label>NUMERO B:</label><br>
   		<input type="number" name="numerob" required><br>
   		<label>OPERACION:</label><br>
   		<input type="radio" name="rdoperacion" value="sumar" required >SUMAR
   		<input type="radio" name="rdoperacion" value="restar" required >RESTAR
   		<input type="radio" name="rdoperacion" value="multiplicar" required >MULTIPLICAR
		<input type="radio" name="rdoperacion" value="dividir" required >DIVIDIR<BR><BR>
   		<input type="submit" name="btnGuardar" value="Guardar">
   </form>		

</body>		
</html>
<?php

 if(isset($_POST["numeroa"]) && isset($_POST["numerob"])&& isset($_POST["rdoperacion"]))
 {
 	
 	$valorA = $_POST["numeroa"];
 	$valorB = $_POST["numerob"];
    $funcion = $_POST["rdoperacion"];    
    $resultado = $funcion($valorA,$valorB); //SE ENVIA LOS DATOS A LA FUNCION SELECCIONADA
    echo $resultado;
 }
 else
 {
 	echo  "COMPLETAR LOS CAMPOS Y SELECCIONAR UNA OPERACION";
 }

function sumar($a,$b)
{
	if ($a >= 0 && + $b >= 0)
	{
		return "EL RESULTADO DE LA SUMA ES: ".$a + $b;
	}
	else
	{
		return "NO SE PUEDE REALIZAR LA SUMA VERIFIQUE LOS DATOS";	
	}
}
function restar($a,$b)
{
	if($a >= $b)
	{
		$res = "EL RESULTADO DE LA RESTA ES".$a - $b;
	}	
	else
	{
		$res = "NO SE PUEDE REALIZAR LA RESTA VERIFIQUE LOS DATOS";
	}
	return $res;
}
function multiplicar($a,$b)
{
	return "EL RESULTADO DE LA MULTIPLICACION ES: ". $a * $b;
}
function dividir($a,$b)
{
	if($b != 0)
	{
		return "EL RESULTADO DE LA DIVISION ES: ". ($a / $b);
	}
	else
	{
		return "NO ES POSIBLE DIVIDIR ENTRE CERO ";
	}		
}  
   
?>