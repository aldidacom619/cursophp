<?php
echo "OPERADOR SWITCH";
echo "<br>";
$dia = "LUNES";

echo $dia;
echo "<br>";
echo "<br>";

if($dia == "LUNES")
{
	echo "EL DIA ES LUNES";
}
if($dia == "MARTES")
{
	echo "EL DIA ES MARTES";
}
if($dia == "MIERCOLES")
{
	echo "EL DIA ES MIERCOLES";
}
if($dia == "JUEVES")
{
	echo "EL DIA ES JUEVES";
}
else
{
	echo "<br>";
	echo "NO ES UN DIA DE LA SEMANA";
}
echo "<br>------------------------";
echo "<br>";
if($dia == "LUNES" || $dia == "MARTES")
{
	echo "EL DIA ES HABIL";
}
{
	echo "EL DIA ES NO HABIL";
}
?>