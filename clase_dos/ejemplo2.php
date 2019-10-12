<?php
	echo "ARRAY EN PHP";
	echo "<br>";
	$persona = array('DIEGO','12/10/2019',TRUE,12.5,'CADENA','72404619');

	var_dump($persona);
	echo "<br>";

	echo $persona[0];
	echo "<br>";
	echo $persona[1];
	echo "<br>";
	echo $persona[2];
	echo "<br>";
	echo $persona[3];
	echo "<br>";
	echo $persona[4];
	echo "<br>";
	echo $persona[5];
	echo "<br>";
	echo "suma de numero de un array";
	echo "<br>";
	$numeros = array(15,85,19,-5,45);

	$suma = $numeros[0] + $numeros[1];
	$mensaje = "el resulado de la suma es: ";

	echo $mensaje.$suma;
	echo "<br>";
	$suma2 = $numeros[0] + $numeros[1]+ $numeros[2]+ $numeros[3]+ $numeros[4];
	$promedio = $suma2/5;
	$mensaje2 = "el promedio es: ";
	echo $mensaje2.$promedio;
?>