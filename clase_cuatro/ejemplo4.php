<?php
class Celular
{
	public $marca;
	public $modelo;
	public $almacenamiento;
	public $color;
	function __construct($marca,$modelo,$almacenamiento,$color)
	{
		$this->marca = $marca;
		$this->modelo = $modelo;
		$this->almacenamiento = $almacenamiento;
		$this->color = $color;
	}
	function llamar()
	{
		echo "El celular realizar llamada";
	}
}

$celu = new Celular("acme","2019","10mb","transparente");

echo "marca del celular: ".$celu->marca."<br>";
echo $celu->llamar()."<br>";
$celu2 = new Celular("samsung","s10","10mgb","negro");

echo "marca del celular: ".$celu2->marca."<br>";
echo $celu2->llamar()."<br>";

?>