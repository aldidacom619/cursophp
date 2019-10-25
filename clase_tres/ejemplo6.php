<?php
	echo "foreach <br><br>";

	$personas = array('DIEGO','RUDY','IVER','ROGER','DAMIAN','HENRY');

	foreach ($personas as $valor) {
		echo $valor."<br>";
	}
	echo "<br><br><br><br>";
	
	$numero = array (15,85,96,4,5,74,56,8,4,4,524,4,77,55);
	$cp=0;
	$ci=0;
	foreach ($numero as $valor) {
		if($valor % 2 == 0)
           $cp++;
        else
           $ci++;
	}

	echo "la cantidad de pares es de: ".$cp."<br/>";
	echo "la cantidad de impares es de: ".$ci;
	
?>