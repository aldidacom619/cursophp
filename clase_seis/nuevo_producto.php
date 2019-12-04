<?php include 'cabecera.php';
include 'conexion.php';
$sel = $con->query("SELECT *FROM categoria");
//var_dump($sel);
?>
<div class="row">
  <div class="col-lg-2"></div>
  <div class="col-lg-8">
<form action="" method="POST">
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputState">Categoria</label>
      <select class="form-control" name="slCategoria">
       <?php while ($f = $sel->fetch_assoc()){?>
          <option value=<?php echo $f['codigo']?>><?php echo $f['nombre_categoria']?></option>
      <?php } ?>
      </select> 
    </div>
    <div class="form-group col-md-8">
     <label for="inputAddress">Descripcion</label>
    <input type="text" class="form-control" name = "txtDescripcion" placeholder="Descripcion" required>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputAddress">Precio</label>
    <input type="text" class="form-control" name ="txtPrecio" placeholder="Precio" required>
    </div>
    <div class="form-group col-md-6">
     <label for="inputAddress">Cantidad</label>
    <input type="number" class="form-control" name = "txtCantidad" placeholder="Cantidad" required>
    </div>
  </div>
  
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>
</div>
  <div class="col-lg-2">
</div>
<?php include 'pie.php'?>
  
<?php
 if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $categoria = $_POST['slCategoria'];
    $descripcion = $_POST['txtDescripcion'];
    $precio = $_POST['txtPrecio'];
    $cantidad = $_POST['txtCantidad'];
    $id = "";
    $estado = "AC";
    //echo $descripcion."  -- ".$categoria."  -- ".$precio."  -- ".$cantidad;
   $ins = $con->prepare("INSERT INTO productos VALUES (?,?,?,?,?,?)");
   $ins->bind_param("iisdis",$id,$categoria,$descripcion,$precio,$cantidad,$estado);

   if($ins->execute())
   {
      header("location:index.php");
   }
   else
    {
       echo "no guardo";
    }
    $ins->close();
    $con->close();

 }
 else
{
}
  

?>
