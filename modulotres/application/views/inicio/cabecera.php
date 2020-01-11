<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
  <link rel="stylesheet" href="<?php echo base_url()?>recursos/bootstrap-4.3.1/dist/css/bootstrap.min.css">
  <script src="<?php echo base_url()?>recursos/jsd/jquery.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Menu</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('loguen/salir');?>">Cerrar Session</a>        
      </li>     
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('usuarios');?>">Usuarios</a>        
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('usuarios/listajs');?>">Usuarios con JS</a>        
      </li>
       <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('reportes');?>">Reportes</a>        
      </li>
    </ul>
  </div>
</nav>
<center><h1>CRUD CON PHP CODEIGNITER<br><?php echo $nombre." ".$apellido;?></h1></center>
