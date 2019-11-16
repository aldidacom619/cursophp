<?php  
include 'cabecera.php';
include 'conexion.php';
$sel = $con->query("SELECT * FROM categoria ");
//var_dump($sel);
?>
<div class="row">
	<div class="col-lg-2">
		
	</div>
	<div class="col-lg-8">
		<h3>LISTA CATEGORIA</h3>
		<table class="table table-bordered">
		  <thead>
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">CATEGORIA</th>		      
		      <th scope="col">OPCIONES</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php 
		  	$con = 1;
		  	while ($f = $sel->fetch_assoc()){?>
		    <tr>
		      <th scope="row"><?php echo $con++;?></th>
		      <td><?php echo $f['nombre_categoria']?></td>
		       <td><a href="editar.php?id=<?php echo $f['codigo'] ?>" class="btn btn-warning" >editar</a>
		       <a href="eliminar.php?id=<?php echo $f['codigo'] ?>" class="btn btn-danger" >eliminar</a></td>     
		    </tr>
		  <?php }?>  
		  </tbody>
		</table>
	</div>
	<div class="col-lg-2">		
	</div>
</div>
<?php  include 'pie.php'?>