 <html>
<head>
<title>OPERACIONES</title>
</head>
<body>
	<H3>VERIFICAR SI EL NUMERO ES PRIMO O NO</H3>
   <form action = "" method="POST">
   		<label>NUMERO A VERIFICAR:</label><br>
   		<input type="number" name="numeroa" required><br>
   		<input type="submit" name="btnGuardar" value="ENVIAR">
   </form>		

</body>		
</html>
<?php

 if(isset($_POST["numeroa"]))
 {
 	
 	$valorA = $_POST["numeroa"];
 	if(primo($valorA)==1)
 	{
 		echo "EL NUMERO ".$valorA." es primo";
 	} 
 	else
 	{
 		echo "EL NUMERO ".$valorA." NO es primo";
 	}	
    
 }
 else
 {
 	echo  "COMPLETAR EL CAMPO";
 }

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