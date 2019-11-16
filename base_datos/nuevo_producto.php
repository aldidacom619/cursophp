<?php  
include 'cabecera.php';
include 'conexion.php';
$sel = $con->query("SELECT * FROM  categoria");
//var_dump($sel);
?>
<div class="row">
	<div class="col-lg-2">
		
	</div>
	<div class="col-lg-8">
		<h3>NUEVO PRODUCTOS</h3>
		<form action="" method="post">
		  <div class="form-row">
		    <div class="form-group col-md-4">
		      <label for="inputCity">Categoria</label>
		      <select name = "slCategoria" class="form-control">
		      <?php while ($f = $sel->fetch_assoc()){?>
		   	      <option value="<?php echo $f['codigo']?>"><?php echo $f['nombre_categoria']?></option>		      
			  <?php }?>  		        
		      </select>		      
		    </div>
		    <div class="form-group col-md-8">
		      <label for="inputState">Descripcion</label>
		      <input type="text" class="form-control" name = "txtDescripcion">
		    </div>		    
		  </div>
		  <div class="form-row">
		    <div class="form-group col-md-6">
		      <label for="inputCity">Precio</label>
		      <input type="text" class="form-control" name = "txtPrecio">	      
		    </div>
		    <div class="form-group col-md-6">
		      <label for="inputState">Cantidad</label>
		      <input type="number" class="form-control" name = "txtCantidad">
		    </div>		    
		  </div>
		  <button type="submit" class="btn btn-primary">Guardar</button>
		</form>		
	</div>
	<div class="col-lg-2">		
	</div>
</div>
<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $categoria = $_POST['slCategoria'];
    $descripcion = $_POST['txtDescripcion'];
    $precio = $_POST['txtPrecio'];
    $cantidad = $_POST['txtCantidad'];
     $id = '';
     $estado = 'AC';
    
    $ins = $con->prepare("INSERT INTO productos VALUES (?,?,?,?,?,?)");
    $ins->bind_param("iisdis",$id,$categoria,$descripcion,$precio,$cantidad,$estado);


    if($ins->execute()){
        header("location:index.php");
    }else{
        echo "no guardo";
    }
    $ins->close();
    $con->close();
}
else{
   // header("location:nuevo_producto.php");
}

?>
<?php  include 'pie.php'?>