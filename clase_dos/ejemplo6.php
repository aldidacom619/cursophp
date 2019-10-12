<?php
echo "while ";
echo "<br>";

$cont = 1;
$limite = 5;
$numeros = array(15,85,19,-5,45);

while ($cont <= $limite) 
{
	if ($cont == 3) 
	{
		echo "se sirve el pollo ".$cont;
	}		
	$cont = $cont + 1;
}


?>