<?php
echo "variables de tipo array";
echo "<br>";
$persona	 = array('DIEGO','DAZA',2019,"78720504","ORH+");

echo "valor en la posicion 0: ".$persona[0];

echo "ASIGNACION DE VALORES A UN ARRAY";
echo "<br>";

$persona[5]= "SABADO";
$persona[6]= "TARDE";


var_dump($persona);


foreach ($persona as $valor) {
	echo $valor."<br>";	
}
echo "<br><br><br><br>";

foreach ($persona as $clave => $valor) {
	echo "El valor: ".$valor. " La clave". $clave."<br>";	
}
?>