<?php 
include 'cabecera.php';?>
<script type="text/javascript" src="operaciones.js"></script>
<div class="row">
    <div class="col-lg-2"></div>
    <div class="col-lg-8">
    <h2>OPERACIONES JS</h2>
      <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputAddress">VALOR A</label>
        <input type="text" class="form-control" name ="txtvalora" id ="txtvalora" >
      </div>
      <div class="form-group col-md-6">
         <label for="inputAddress">VALOR B</label>
          <input type="text" class="form-control" name = "txtvalorb" id = "txtvalorb" >
      </div>
      
    <button type="button" class="btn btn-primary" onclick="nuevoregistro()">RESULTADO</button>  
    <button type="button" class="btn btn-primary" onclick="limpiar()">LIMPIAR</button> </div> 
  </div>
  <div class="col-lg-2"></div>
</div><br>
<div class="row">
  <div class="col-lg-2"></div>
  <div class="col-lg-8">
    <div class="alert alert-info" role="alert" id = "resultado"> 
    </div><br>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputAddress">VALOR C</label>
        <input type="text" class="form-control" name ="txtvalorc" id ="txtvalorc" >
      </div>
      <div class="form-group col-md-6">
         <label for="inputAddress">VALOR D</label>
          <input type="text" class="form-control" name = "txtvalord" id = "txtvalord" >
      </div>
</div>
  <div class="col-lg-2"></div> 
</div>
<script type="text/javascript">
  $(document).ready(function(){
      //inicio();
      eventos();
  });
</script>
<?php include 'pie.php'?>







