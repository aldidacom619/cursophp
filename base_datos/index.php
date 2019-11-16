<?php  
include 'cabecera.php';
include 'conexion.php';
$sel = $con->query("SELECT * FROM productos ");
//var_dump($sel);
?>
<div class="row">
	<div class="col-lg-2">
		
	</div>
	<div class="col-lg-8">
		<h3>LISTA PRODUCTOS</h3>
		<table class="table table-bordered">
		  <thead>
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">CATEGORIA</th>
		      <th scope="col">DESCRIPCION</th>
		      <th scope="col">PRECIO</th>
		      <th scope="col">CANTIDAD</th>
		      <th scope="col">ESTADO</th>
		      <th scope="col">OPCIONES</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php 
		  	$con = 1;
		  	while ($f = $sel->fetch_assoc()){?>
		    <tr>
		      <th scope="row"><?php echo $con++;?></th>
		      <td><?php echo $f['codigo_categoria']?></td>
		      <td><?php echo $f['descripcion']?></td>
		      <td><?php echo $f['precio']?></td>
		      <td><?php echo $f['cantidad']?></td>
		      <td><?php echo $f['estado']?></td>
		       <td><a href="editar.php?id=<?php echo $f['id'] ?>" class="btn btn-warning" >editar</a>
		       <a href="eliminar.php?id=<?php echo $f['id'] ?>" class="btn btn-danger" >eliminar</a></td>     
		    </tr>
		  <?php }?>  
		  </tbody>
		</table>
	</div>
	<div class="col-lg-2">		
	</div>
</div>
<?php  include 'pie.php'?>