<?php
	$numero = array (12,12,2,12,12,2,5,13,9,2,13,2);
	
	$numero = array (1,2,3,4,3);

	$cont = count($numero)-1;
	//$cont es igual a 12;
	var_dump($numero);
	$a = 0; 
	
	$num = 0;
	for ($i=0; $i <= $cont; $i++) { 
		$x = 0; 
		for ($j=$i; $j <= $cont; $j++) { 
			if($numero[$i] == $numero[$j])
			{
				$x++; 
			}
		}		
		if($x >= $a)
		{
			$a = $x;
		
			$num = $numero[$i];
		}		
	}
	if($a>1)
	{
		echo "<br> EL NUMERO QUE MAS SE REPITE ES:".$num;
	}	
	else
	{
		echo "<br> NINGUN NUMERO SE REPITE";
	}
	



?>