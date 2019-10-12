<!DOCTYPE html>
<html>
<head>
	<title>GET</title>
</head>
<body>
	<form action="" method="get">
	<label>nombre:</label><br>
	<input type="text" name="nombre" id="nombre"><br>
	<label>apellido:</label><br>
	<input type="text" name="apellido" id="apellido"><br>
	<label>edad:</label><br>
	<input type="text" name="edad" id="edad"><br><br>
	<input type="submit" name="boton" value="Enviar">
</form>

</body>
</html>

<br><br><br><br>
<?php
	//echo "el nombre es: ". $_GET["nombre"];
?>

<br>
<?php
//$edad = 0 ;
   if(isset($_GET["nombre"]) and isset($_GET["apellido"]) and isset($_GET["edad"]))
   {
	  $edad =  $_GET["edad"];
	 echo "el nombre es: ". $_GET["nombre"]." ".$_GET["apellido"]." ".$edad;   	
	
   }
   else
   {
     echo "no hay nada";
   }

?>