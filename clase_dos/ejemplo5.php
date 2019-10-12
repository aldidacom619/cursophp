<?php
echo "swich ";
echo "<br>";

$dia = "Lunesd";
if($dia == "Lunes")
{
	echo "dia habil ";
}
if($dia == "miercoles")
{
	echo "dia habil ";
}
if($dia == "viernes")
{
	echo "dia habil ";
}
else
{
	echo "dia no valido";
}

switch ($dia) {
	case 'Lunes':
		echo "dia habil lunes ";
		break;
	case 'miercoles':
		echo "dia habil miercoles ";
		break;
	case 'viernes':
		echo "dia habil viernes ";
		break;	
	default:
		echo "dia no valido";
		break;
}

?>