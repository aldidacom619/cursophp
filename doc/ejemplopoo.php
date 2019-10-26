<?php

class Persona
{
	public $age;
	public $name;
	function __construct($name,$age)
	{
		$this->name = $name;
		$this->age = $age;
	}
	public function correr()
	{
		echo ' Estoy corriendo<br> ';
	}
}
class Hombre extends Persona
{
	public $edad;
	function __construct($edad)
	{
		$this->edad = $edad;	
	}
}
$perso = new Persona('DIEGO',10);
echo $perso->name;
$perso->correr();
$perso2 = new Persona('alvaro',10);
echo "\n";
echo $perso2->name." ";
$perso2->correr();
echo "<br>";
$hom = new Hombre(15);
echo $hom->edad;
$hom->correr();
?>