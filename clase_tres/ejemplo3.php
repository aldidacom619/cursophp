<?php
$A = 44;
$B = 46;
echo "MULTIPLICACION"."<BR>";
echo "NUMERO A IGUAL: ". $A."<BR>";
echo "NUMERO B IGUAL: ". $B."<BR>";
if($A > 0 && $B > 0)
{
	
		$cont=1;
		$suma=0;
		while ($cont<=$B){
			$suma=$suma+$A;
			$cont++;

		}
		echo "El resultado de la multiplicacion es de: ".$suma."<br>";
	
}
else
{
	echo "no es posible realizar la division";
}
?>