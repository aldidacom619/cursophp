<!DOCTYPE html>
<html>
<head>
	<title>POST</title>
</head>
<body>
	<form action="" method="post">
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
   if(isset($_POST["nombre"]) and isset($_POST["apellido"]) and isset($_POST["edad"]))
   {
	  $edad =  $_POST["edad"];
	 echo "el nombre es: ". $_POST["nombre"]." ".$_POST["apellido"]." ".$edad;   	
	
   }
   else
   {
     echo "no hay nada";
   }

?>