<?php
echo "while ";
echo "<br>";

$cont = 0;
$limite = 4;
$numeros = array(12,86,12,-5,45);
//$suma2 = $numeros[0] + $numeros[1]+ $numeros[2]+ $numeros[3]+ $numeros[4];

$tamanho = count($numeros);
$suma = 0;
$promedio = 0;
echo "tamanho del vecto: ".$tamanho."<br>";
while ($cont < $tamanho) 
{
	$suma = $suma + $numeros[$cont];
	$cont = $cont + 1;
}
echo "la suma es:". $suma."<br>";
$promedio = $suma/$tamanho;

echo "el promedio es:". $promedio."<br><br><br><br><br>";

echo "<br><br>";
$cont = 0;
$impar = 0;
do{
 $impar = $numeros[$cont];
 if($impar == 12)
 {
 	break;
 }
 else
 {
 	$cont = $cont + 1;
 }
}while ($cont < $tamanho);

echo $impar."--".$cont;

?>