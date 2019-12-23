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
	$('#accion').val('nuevo');
	$('#id_registro').val('');
	$('#datousuario').modal('show');
}
function guardarregistro()
{
	//alert("registrar");
	var enlace = "consultasjs.php?operacion=guardar";
	//var datos = $('#txtCantidad').val();// sintaxis para recuperar valor del formulario
	var datos = $('#formularioregistro').serialize();
	$.ajax({
		type:"GET",
		url:enlace,
		//data:{cantidad:datos}, //enviar datos a php 
		data:datos, //enviar todos los datos del formulario
		success: function(data)
		{
			alert(data);
			window.setTimeout('location.reload()',100);
		}
	});

}
function actualizarregistro(id_registro)
{
	//alert(id_registro);
	$('#accion').val('actualizar');
	$('#id_registro').val(id_registro);
	var enlace = "consultasjs.php?operacion=seleccionar_registro";
	$.ajax({
		type:"GET",
		url:enlace,
		data:{id:id_registro}, //enviar datos a php 
		success: function(data)
		{
			//alert(data);
			datos = $.parseJSON(data);
			$('#slCategoria option[value="'+datos.codigo_categoria+'"]').prop('selected','selected');
			$('#txtDescripcion').val(datos.descripcion);
			$('#txtPrecio').val(datos.precio);
			$('#txtCantidad').val(datos.cantidad);
			$('#datousuario').modal('show');
		}
	});

}
function eliminarregistro(id_registro)
{
	var enlace = "consultasjs.php?operacion=eliminar";
	$.ajax({
		type:"GET",
		url:enlace,
		data:{id:id_registro}, //enviar datos a php 
		success: function(data)
		{
			alert(data);
			window.setTimeout('location.reload()',100);
		}
	});
}