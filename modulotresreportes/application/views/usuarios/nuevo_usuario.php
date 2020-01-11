<div class="row">
  <div class="col-lg-2"></div>
  <div class="col-lg-8">
    <div class="alert alert-warning" role="alert">
    <?php echo validation_errors();?>   
  </div>
<form action="guardar_datos" method="POST">
  <div class="form-row">
    
    <div class="form-group col-md-4">
     <label for="inputAddress">Nombre</label>
    <input type="text" class="form-control" name = "txtnombre" placeholder="Nombre" >
    </div>
    <div class="form-group col-md-8">
     <label for="inputAddress">apellidos</label>
    <input type="text" class="form-control" name = "txtapellidos" placeholder="Apellidos" >
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputAddress">Correo</label>
    <input type="text" class="form-control" name ="txtcorreo" placeholder="Correo">
    </div>
    <div class="form-group col-md-6">
     <label for="inputAddress">Telefono</label>
    <input type="text" class="form-control" name = "txttelefono" placeholder="Telefono" >
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputAddress">Username</label>
    <input type="text" class="form-control" name ="txtusername" placeholder="Username" >
    </div>
    <div class="form-group col-md-6">
     <label for="inputAddress">Contrasenha</label>
    <input type="password" class="form-control" name = "txtpass" placeholder="Contrasenha" >
    </div>
  </div>
  
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>
</div>
  <div class="col-lg-2">
</div>