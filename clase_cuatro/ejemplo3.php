<html>
<head>
<title>EJEMPLO POST</title>
</head>
<body>
	<H3>ENVIO DATOS POR POST</H3>
   <form action = "" method="POST">
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
 if(isset($_POST["txtNombre"]) && isset($_POST["txtApellido"])&& isset($_POST["txtEdad"]) && isset($_POST["txtClave"]))
 {
 	echo $_POST["txtNombre"]."<br>" ;
 	echo $_POST["txtApellido"]."<br>" ;
    echo $_POST["txtEdad"]."<br>" ;
    echo md5($_POST["txtClave"])."<br><br><br>" ;
  $edad = $_POST["txtEdad"];
  if($edad % 2 == 0)
  {
     echo "la edad es: par";
  } 
  else{
    echo "la edad es: impar";
  }
 }
   
   
?>