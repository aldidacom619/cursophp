<?php
$array1 = array('DIEGO', 'ALVARO','KAREN');

var_dump($array1);

echo "el valor de la primera posicion del array1 es: ". $array1[0];
echo "<br>";

$persona  = array
		  ('nombre' => 'diego', 
		   'apellido' => 'daza', 
		   'edad' => 29,  	);

var_dump($persona);
echo "<br>";
echo "EL NOMBRE DE LA PERSONA ES: ". $persona['nombre'];
echo "<br>";
echo "EL APELLIDO DE LA PERSONA ES: ". $persona['apellido'];
echo "<br>";
echo "EL EDAD DE LA PERSONA ES: ". $persona['edad'];
echo "<br>";


$array1[3]= 'RAMIRO';

echo "el valor de la primera posicion del array1 es: ". $array1[3];
echo "<br>";


?>