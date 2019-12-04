function inicio()
{
	var variable1 = "saludos";
	var A = 15;
	var B = 6 + 20;
	if (A > B)
	{
		alert("EL VALOR A "+ A + " ES MAYOR QUE B :"+ B ); 
	}
	else{
		alert("EL VALOR B "+ B + " ES MAYOR QUE A:"+ A ); 
	}
}
function eventos()
{
	$('#txtvalorb').keyup(function(){
		var B = $('#txtvalorb').val();
		$('#resultado').text(B);
		$('#txtvalord').val(B);
	});
	
}

function nuevoregistro()
{
	var A = $('#txtvalora').val();
	var B = $('#txtvalorb').val();
	//alert (A);
	if(A != '' && B != '')
	{
		$('#resultado').text(A + " - "+ B);
		$('#txtvalorc').val(A + " - "+ B);
	}	
	else
	{
		$('#resultado').text("DEBE COMPLETAR LOS CAMPOS");
	}
	
}
function limpiar()
{
	$('#txtvalora').val('');
	$('#txtvalorb').val('');
	$('#txtvalorc').val('');
	$('#txtvalord').val('');
	$('#resultado').text("");
}
