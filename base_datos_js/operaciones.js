function validacionformulario()
{
   var enlace = "consultasjs.php?operacion=categoria";
    $.ajax({
        type: "GET",
        url: enlace,
        success: function (data) {
            
            $('#slCategoria').html(data);
            //$('#txtDescripcion').val(data);
            //$('#tdescripcion').text(data);            
        }
    });
    listas();
}
function listas()
{
	var enlace = "consultasjs.php?operacion=listas";
    $.ajax({
        type: "GET",
        url: enlace,       
        success: function (data) {
            
            //alert(data);
            $('#tabladatos').html(data);
            //$('#tdescripcion').text(data);            
        }
    });
}
function nuevousario()
{
  $('#accion').val('nuevo');
  $('#id_registro').val('');
  $('#datosusuario').modal('show');
}
function actualizarregistro(id_registro)
{
//	alert(id_registro);
	$('#accion').val('actualizar');
    $('#id_registro').val(id_registro);
	var enlace = "consultasjs.php?operacion=seleccionar_registro";
	$.ajax({
            type: "GET",
            url: enlace,
            data: {id:id_registro},
            success: function(data) 
            {
            	//alert(data);
            	//var result = JSON.parse(data);
            	datos = $.parseJSON(data);
                //$.each(result, function(i, datos){
                        $('#slCategoria option[value="'+datos.codigo_categoria+'"]').prop('selected','selected');
                        $('#txtDescripcion').val(datos.descripcion);
                        $('#txtPrecio').val(datos.precio);
                        $('#txtCantidad').val(datos.cantidad);                        
                 //   });
                    $('#datosusuario').modal('show');             	           			
            }
        });
}
function guardarregistro()
{
	//alert('hola');
  /*if(validardatos())
  {*/
        var enlace = "consultasjs.php?operacion=guardar";
        var datos = $('#formularioregistro').serialize();
        $.ajax({
            type: "GET",
            url: enlace,
            data: datos,
            success: function(data)  
             {
                alert(data);
                $('#datosusuario').modal('hide');
                listas();
                //window.setTimeout('location.reload()', 100);    
             }
        });
  /* }
    else
    {
      
      $('#validacionforestudiante').text("Verificar: "+alertaValidacion);
      $('#validacionforestudiante').show();
      alertaValidacion="";
    }*/
}
function eliminar(id_registro)
{
	  if(confirm('¿Estas seguro de el registro?'))
    {
       var enlace = "consultasjs.php?operacion=eliminar_registro";
		$.ajax({
	            type: "GET",
	            url: enlace,
	            data: {id:id_registro},
	            success: function(data) 
	            {
	            	alert(data);	               
	            	listas();
                	//window.setTimeout('location.reload()', 100);    	            	           			
	            }
	       });
    }
    else
    {
      return false;
    }    
}