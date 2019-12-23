
<div class="row">
  <div class="col-lg-2"></div>
  <div class="col-lg-8">
    <strong>EDITAR</strong>
    <div class="alert alert-warning" role="alert">
    <?php echo validation_errors();?>   
  </div>
  
<form action='<?= base_url()?>usuarios/editar_datos' method="POST">
  <div class="form-row">
    <input type="hidden" name="iduser" value="<?= $filas[0]->id;?>">
    <div class="form-group col-md-4">
     <label for="inputAddress">Nombre</label>
    <input type="text" class="form-control" name = "txtnombre" value="<? echo $filas[0]->nombre;?>" placeholder="Nombre" >
    </div>
    <div class="form-group col-md-8">
     <label for="inputAddress">apellidos</label>
    <input type="text" class="form-control" name = "txtapellidos" value="<? echo $filas[0]->apellido;?>" placeholder="Apellidos" >
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputAddress">Correo</label>
    <input type="text" class="form-control" name ="txtcorreo" value="<? echo $filas[0]->correo;?>" placeholder="Correo">
    </div>
    <div class="form-group col-md-6">
     <label for="inputAddress">Telefono</label>
    <input type="text" class="form-control" name = "txttelefono" value="<? echo $filas[0]->telefono;?>" placeholder="Telefono" >
    </div> 
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputAddress">Username</label>
    <input type="text" class="form-control" name ="txtusername" value="<? echo $filas[0]->username;?>" placeholder="Username" >
    </div>    
  </div>
  
  <button type="submit" class="btn btn-primary">Editar</button>
</form>
</div>
  <div class="col-lg-2">
</div>