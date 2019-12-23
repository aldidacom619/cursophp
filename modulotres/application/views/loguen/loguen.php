<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
  <link rel="stylesheet" href="<?php echo base_url()?>recursos/bootstrap-4.3.1/dist/css/bootstrap.min.css">
  <script src="<?php echo base_url()?>recursos/jsd/jquery.js"></script>
</head>
<body>
<center><h1>CRUD CON PHP CODEIGNITER<br></h1></center>


<div class="row">
  <div class="col-lg-4"></div>
  <div class="col-lg-4">
    <div class="alert alert-warning" role="alert">
    <?php echo $error;?>   
  </div>
<form action='<?= base_url()?>loguen/validaruser' method="POST">
  <div class="form-row">    
      <label for="inputAddress">Username</label>
    <input type="text" class="form-control" name ="txtusername" placeholder="Username" >
   <label for="inputAddress">Contrasenha</label>
    <input type="password" class="form-control" name = "txtpass" placeholder="Contrasenha" >   
  </div>  
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
</div>
  <div class="col-lg-4">
</div>


</body>
<footer>
  <script src="<?php echo base_url()?>recursos/jsd/jquery.min.js"></script>
  <script src="<?php echo base_url()?>recursos/bootstrap-4.3.1/dist/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url()?>recursos/bootstrap-4.3.1/dist/js/popper.min.js"></script>
</footer>
</html>
