<?php
	function recuperarare($valor1, $valor2)
	{
		return ($valor1 * $valor2)/2;
	}
	function calculatvector($numeros)
	{
		
		$tamanho = count($numeros);
		$suma = 0;
		$promedio = 0;
		$cont = 0;		
		while ($cont < $tamanho) 
		{
			$suma = $suma + $numeros[$cont];			
			$cont = $cont + 1;
		}
		return $suma;
	}
	$lado1 = 15;
	$lado2 = 20;

	echo recuperarare($lado1,$lado2)."<br>";
	echo recuperarare(15,55)."<br>";
	echo recuperarare($lado1,$lado2)."<br>";
	echo recuperarare($lado1,$lado2)."<br>";
	echo recuperarare($lado1,$lado2)."<br>";
	echo recuperarare($lado1,$lado2)."<br>";
	echo "EJECUTAR function<br>";
	$numeros = array(15,85,19,-5,45);
	echo calculatvector($numeros);
?>
