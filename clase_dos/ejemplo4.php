<?php
echo "OPERADOR ";
echo "<br>";
$nota = 60;

if($nota>=0 && $nota <= 50)
{
	echo "reprobado";
}
else if ($nota>=51 && $nota <= 70)
{
	echo "SUFICIENTE";
}
else
{
	echo "nota no valida";
}

/*|| OR 
&& AND
'0 - 50 REPROBADO
51 - 70 SUFICIENTE
71- 90  BÙENO
91 - 100 EXCELENTE'*/
?>