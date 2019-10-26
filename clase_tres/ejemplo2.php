<?php
$A = 28;
$B = 5;
echo "DIVSION DE DOS NUMEROS SIN UTILIZAR EL SIMBOLO DE DIVISION (/)"."<BR>";
echo "NUMERO A IGUAL: ". $A."<BR>";
echo "NUMERO B IGUAL: ". $B."<BR>";
if($A > 0 && $B > 0)
{
	if($A>=$B)
	{
		$cont=0;
		while ($A>=$B){
			$A=$A-$B;
			$cont++;
		}
		echo "El resultado de la division es de: ".$cont."<br>";
		echo "El resto es igual a: ".$A;
	}
	else
	{
		echo "no es posible realizar la division, A debe ser mayor que B";
	}
}
else
{
	echo "no es posible realizar la division";
}
?>