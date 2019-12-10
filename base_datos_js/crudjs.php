<?php  include 'cabecera.php';?>
<script type="text/javascript" src="operaciones.js"></script>
<div class="row">
	<div class="col-lg-2">
	</div>
	<div class="col-lg-8">
		<h3>EJERCICIOS JS</h3>
		<button class="btn btn-primary" onclick="nuevousario()">NUEVO REGISTRO</button><br>
		<table class="table table-bordered" id="tabladatos">		
		</table>
	</div>
	<div class="col-lg-2">		
	</div>
</div>
<div class="modal fade" id="datosusuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">REGISTRO</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formularioregistro">
        	<input type="hidden" name="accion" id="accion">
        	<input type="hidden" name="id_registro" id="id_registro">
          <div class="form-row">
		    <div class="form-group col-md-4">
		      <label for="inputCity">Categoria</label>
		      <select name = "slCategoria" id = "slCategoria" class="form-control">		     		        
		      </select>		      
		    </div>
		    <div class="form-group col-md-8">
		      <label for="inputState" id="tdescripcion">Descripcion</label>
		      <input type="text" class="form-control" name = "txtDescripcion" id = "txtDescripcion">
		    </div>		    
		  </div>
		  <div class="form-row">
		    <div class="form-group col-md-6">
		      <label for="inputCity">Precio</label>
		      <input type="text" class="form-control" name = "txtPrecio" id = "txtPrecio">	      
		    </div>
		    <div class="form-group col-md-6">
		      <label for="inputState">Cantidad</label>
		      <input type="number" class="form-control" name = "txtCantidad" id = "txtCantidad">
		    </div>		    
		  </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" onclick='guardarregistro()'>Enviar</button>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
      validacionformulario();     
    });
</script>
<?php  include 'pie.php'?>