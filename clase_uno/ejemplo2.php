<?php
	$variable1 = "HOLA COMO ESTAS?";
	$variable2 = "BUENAS TARDES";
	$variable3 = "SALUDOS CORDIALES";

	echo $variable1." ESPACIO ".$variable2;

	$variable4 = $variable1." ESPACIO ".$variable2 . " ". $variable3;
	echo "<BR>";
	echo $variable4;
	echo "<BR>";
	echo "<BR>";
	echo "<BR>";
	echo "<BR>";
	echo "<BR>";
	//VARIABLES NUMERICAS
	echo "VARIABLES NUMERICAS";
	echo "<BR>";
	$numero = 15;
	$numero2 = 10;
	$numero3 = 50;
	$numero4 = -60;

	$suma = $numero + $numero2;
	echo "<BR>";
	echo "EL RESULTADO DE LA SUMA ES: ".$suma;

	$suma = $numero + $numero4;
	echo "<BR>";
	echo "EL RESULTADO DE LA SUMA ES: ".$suma;

	echo "<BR>";
	//VARIABLES DECIMAL
	echo "VARIABLES DECIMAL";
	echo "<BR>";
	$numero = 15.845454;
	$numero2 = 10.44575;
	$numero3 = 0.5845784;
	$numero4 = -60.7544;

	$suma = $numero + $numero2;
	echo "<BR>";
	echo "EL RESULTADO DE LA SUMA DECIMAL ES: ".$suma;

	$suma = $numero + $numero4;
	echo "<BR>";
	echo "EL RESULTADO DE LA SUMA DECIMAL ES: ".$suma;
	echo "<BR>";
	echo "VARIABLE CONSTANTE";
	echo "<BR>";
	//variables constantes
	define('PI', 3.14);

	echo PI;

	

?>