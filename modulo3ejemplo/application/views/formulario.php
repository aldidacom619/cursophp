<!DOCTYPE html>
<html>
<head>
	<title>Formulario</title>
</head>
<body>
<h1>formulario</h1>
 <?php echo validation_errors('<div class="errors">','</div>'); ?><br>
<form action="guardardatos" method="POST">
	<fieldset>
		<legend>Datos persona</legend>
	<label>NOMBE:</label><br>
	<input type="text" name="txtnombrepersona" value = "<?php set_value('txtnombrepersona')?>" placeholder="nombre persona"><br>
	<label>PRIMER APELLIDO:</label><br>
	<input type="text" name="txtprimer_apellido" placeholder="primer apellido"><br>
	<label>SEGUNDO APELLIDO:</label><br>
	<input type="text" name="txtsegundo_apellido" placeholder="segundo apellido"><br>
	</fieldset>
	<fieldset>
		<legend>Sexo</legend>
	<label>SEXO:</label><br>
	<input type="radio" name="rdsexo" value="M">Masculino
	<input type="radio" name="rdsexo" value="F">Femenino
	<br>
	<label>Fecha Nacimiento</label><br>
	<input type="date" name="dtNacimiento"><br>
	</fieldset>
	<fieldset><legend>Datos Usuarios</legend>
		<label>Usuario</label><br>
		<input type="text" name="username"><br>
		<label>Clave</label><br>
		<input type="password" name="clave">		
	</fieldset>
	<br>
	<input type="submit" name="" value="Enviar">
	<input type="reset" name="" value="limpiar">
</form>
</body>
</html>