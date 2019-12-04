function inicio()
{
	//alert("holaa");
	var enlace = "consultasjs.php?operacion=categoria";
	$.ajax({
		type:"GET",
		url: enlace,
		success: function(data){
			//alert(data);
			$('#slCategoria').html(data);
		}
	});
}

function nuevoregistro()
{
	//alert("holaa");
	$('#datousuario').modal('show');
}