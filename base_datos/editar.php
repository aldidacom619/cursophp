<?php  
include 'cabecera.php';
include 'conexion.php';
$sel = $con->query("SELECT * FROM  categoria");
$id = $_GET['id'];
$prod = $con->query("SELECT * FROM productos WHERE id = '$id'");
$p = $prod->fetch_assoc();
?>
<div class="row">
	<div class="col-lg-2">
	</div>
	<div class="col-lg-8">
		<h3>EDITAR PRODUCTOS</h3>
		<form action="" method="post">
		  <div class="form-row">
		    <div class="form-group col-md-4">
		      <label for="inputCity">Categoria</label>
		      <select name = "slCategoria" class="form-control">
		      <?php while ($f = $sel->fetch_assoc()){?>
		   	      <option value="<?php echo $f['codigo']?>" <?php if($f['codigo'] == $p['codigo_categoria']){echo "selected";}?>><?php echo $f['nombre_categoria']?></option>		      
			  <?php }?>  		        
		      </select>		      
		    </div>
		    <div class="form-group col-md-8">
		      <label for="inputState">Descripcion</label>
		      <input type="text" class="form-control" name = "txtDescripcion" value="<?php echo $p['descripcion'] ?>">
		    </div>		    
		  </div>
		  <div class="form-row">
		    <div class="form-group col-md-6">
		      <label for="inputCity">Precio</label>
		      <input type="text" class="form-control" name = "txtPrecio" value="<?php echo $p['precio'] ?>">	      
		    </div>
		    <div class="form-group col-md-6">
		      <label for="inputState">Cantidad</label>
		      <input type="number" class="form-control" name = "txtCantidad" value="<?php echo $p['cantidad'] ?>">
		    </div>		    
		  </div>
		  <button type="submit" class="btn btn-primary">Editar</button>
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
    $up = $con->prepare("UPDATE productos SET codigo_categoria = ?,descripcion = ?, precio=?, cantidad=? WHERE id = ? ");
    $up->bind_param("isdii",$categoria,$descripcion,$precio,$cantidad,$id);

    if($up->execute()){
        header("location:index.php");
    }else{
        echo "no guardo";
    }
    $up->close();
    $con->close();
}
else{
   // header("location:nuevo_producto.php");
}

?>
<?php  include 'pie.php'?>