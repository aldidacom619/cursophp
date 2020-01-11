var base_url;
var swalaValidacion = '';
function baseurl(enlace)
{ 
  base_url = enlace;  
  //alert(base_url);
}
function nuevoregistro()
{
	//alert("holaa");
	$('#accion').val('nuevo');
	$('#id_registro').val('');
	$('#datosuser').show();
	$('#datousuario').modal('show');
}
function guardarregistro()
{
	if(validarFormulario())
    {
		var enlace = base_url + "usuarios/guardar_datosjs";	
		var datos = $('#formularioregistro').serialize();
		$.ajax({
			type:"POST",
			url:enlace,
			data:datos, //enviar todos los datos del formulario
			success: function(data)
			{
				alert(data);
				window.setTimeout('location.reload()',100);
			}
		});
	}
    else
    {        
       $('#mensajeerror').html(swalaValidacion);
       $('#mensajeerror').show();
       swalaValidacion="";
    }	
}
function validarFormulario(){
    var todook = true;              
    if($('#txtnombre').val()==''){
        todook = false;
        swalaValidacion += "* Completar el nombre <br>";
    }
    if($('#txtapellidos').val()==''){
        todook = false;
        swalaValidacion += "* Completar apellidos <br>";
    }
    if($('#txtcorreo').val()==''){
        todook = false;
        swalaValidacion += "* Completar el correo <br>";
    }
    if($('#txttelefono').val()==''){
        todook = false;
        swalaValidacion += "* Completar el telefono <br>";
    }
    if($('#txtusername').val()==''){
	        todook = false;
	        swalaValidacion += "* Completar el username <br>";
	    }
    if($('#accion').val()=='nuevo')
    {
	    
	    if($('#txtpass').val()==''){
	        todook = false;
	        swalaValidacion += "* Completar la contrasenha <br>";
	    }
	}    
    return todook;
}
function actualizarregistro(id_registro)
{
	//alert(id_registro);
	$('#accion').val('actualizar');
	$('#id_registro').val(id_registro);
	var enlace = base_url + "usuarios/editarjs";	
	$.ajax({
		type:"POST",
		url:enlace,
		data:{id:id_registro}, //enviar datos a php 
		success: function(data)
		{
			var result = JSON.parse(data);
          	$.each(result, function(i, datos) 
          	{
          		 $('#txtnombre').val(datos.nombre);
          		 $('#txtapellidos').val(datos.apellido);
          		 $('#txtcorreo').val(datos.correo);
          		 $('#txttelefono').val(datos.telefono);          		 
          		 $('#txtusername').val(datos.username);  
          	});	          			
          	$('#datosuser').hide();
			$('#datousuario').modal('show');
		}
	});
}

function eliminarregistro(id_registro)
{
	if(confirm('¿Estas seguro de eliminar el registrar?'))
    {
		var enlace = base_url + "usuarios/eliminarjs";	
		$.ajax({
			type:"POST",
			url:enlace,
			data:{id:id_registro}, //enviar datos a php 
			success: function(data)
			{
				alert(data);
				window.setTimeout('location.reload()',100);
			}
		});
	 }
    else
    {
      return false;
    }  
}
