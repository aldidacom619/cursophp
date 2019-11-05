<?

function suma_vector($vector)
{
	$sum = 0;
	foreach ($vector as $valor) {
		$sum = $sum + $valor;
	}
	return $sum;
}
function promedio_vector($suma,$cantidad)
{
	$promedio = $suma / $cantidad;
	return $promedio;
}
function suma_pares($vector)
{
	$sum_par = 0;
	foreach ($vector as $valor) 
	{
		if($valor % 2 == 0){
           $sum_par = $sum_par + $valor;
		}        
	}
	return $sum_par;
}
function suma_impares($vector)
{
	$sum_impar = 0;
	foreach ($vector as $valor) 
	{
		if($valor % 2 != 0){
           $sum_impar = $sum_impar + $valor;
		}        
	}
	return $sum_impar;
}
function suma_par_impar($vector,$accion)
{
	$suma = 0;
	foreach ($vector as $valor) 
	{
		switch ($accion) {
			case 'par':
				if($valor % 2 == 0)
				{
	           		$suma = $suma + $valor;
				} 
				break;
			case 'impar':
				if($valor % 2 != 0)
				{
	           		$suma = $suma + $valor;
				} 
			 break;
			default:
				$suma = $suma + $valor;
				break;
		}
	}
	return $suma;
}

$vector = array (15,85,96,4,5,74,56,8,4,4,524,4,77,55);

$sumatoria_vec = suma_vector($vector);
$tamanho_vec = count($vector);
$promedio = promedio_vector($sumatoria_vec,$tamanho_vec);

$suma_pares = suma_pares($vector);
$suma_impares = suma_impares($vector);

$suma_pares = suma_par_impar($vector,"parr");
$suma_impares = suma_par_impar($vector,"impar");
$suma_todos = suma_par_impar($vector,"default");

echo "La suma es: ".$sumatoria_vec."<br>";
echo "El promedio es:". $promedio."<br>";
echo "El suma de pares es:". $suma_pares."<br>";
echo "El suma de impares es:". $suma_impares."<br>";
echo "El suma de impares es:". $suma_todos."<br>";

?>