<?php
	$numero = array (15,85,96,4,5,74,56,8,4,4,524,77);

	$cont = count($numero)-1;
	//$cont es igual a 12;
	var_dump($numero);
	echo "<br>el tamanho del vector es: ".$cont."<br>";
	for ($i=1; $i <= $cont; $i++) { 
		echo "el valor de la posicion:". $i." es: ".$numero[$i]."<br>";
	}

	echo "<br>";
	$cp=0;
	$ci=0;

	for ($i=0; $i < $cont; $i++) { 
		if($numero[$i] % 2 == 0)
           $cp++;
        else
        	$ci++;
	}
	echo "la cantidad de pares es de: ".$cp."<br/>";
	echo "la cantidad de impares es de: ".$ci;
?>