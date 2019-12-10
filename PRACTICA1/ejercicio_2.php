<?php
	$numero = array (1,2,3,4,5,20,22,13,45,7,9);
	$cont = count($numero)-1;
	var_dump($numero);
	$contador = 0;
	$numeroprimo = array();
	for ($i=0; $i < $cont; $i++) 
	{ 
		if(primo($numero[$i]) == 1)
		{
			$numeroprimo[$contador] =  $numero[$i];
			$contador++;
		}
	}		

	echo "NUMEROS PRIMOS SELECCIONADOS: <BR>";
	var_dump($numeroprimo);
		

function primo($numero)
{
	$x = 0;
	for($i=1;$i<=$numero;$i++)
    {
     	if($numero%$i==0)
     	{
       		$x = $x+1;
    	}
    }
    if($x==2)
    {
     	return 1; //devuelve 1 si es primo
    }
    else
    {
    	return 0; //devuelve 0 si no es primo
    }
}	
?>
