<html>
<head>
<title>EJEMPLO GET</title>
</head>
<body>
	<H3>ENVIO DATOS POR GET</H3>
   <form action = "" method="GET">
   		<label>Nombre:</label><br>
   		<input type="text" name="txtNombre"><br>
   		<label>Apellido:</label><br>
   		<input type="text" name="txtApellido"><br>
   		<label>Edad:</label><br>
   		<input type="text" name="txtEdad"><br>
   		<label>Clave:</label><br>
   		<input type="password" name="txtClave"><br>
   		<input type="submit" name="btnGuardar" value="Guardar">
   </form>		

</body>		
</html>
<?php
 if(isset($_GET["txtNombre"]) && isset($_GET["txtApellido"])&& isset($_GET["txtEdad"]) && isset($_GET["txtClave"]))
 {
 	echo $_GET["txtNombre"]."<br>" ;
 	echo $_GET["txtApellido"]."<br>" ;
    echo $_GET["txtEdad"]."<br>" ;
    echo $_GET["txtClave"]."<br>" ;
 }
   
   
?>