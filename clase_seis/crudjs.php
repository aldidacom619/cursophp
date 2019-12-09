<?php 
include 'cabecera.php';
include 'conexion.php';
$sel = $con->query("SELECT *FROM productos p, categoria c where p.codigo_categoria = c.codigo");

 ?>
<script type="text/javascript" src="operaciones2.js"></script>
<div class="row">
  <div class="col-lg-2"></div>
  <div class="col-lg-8">
    <h2>CRUD JS</h2>
    <button type="button" class="btn btn-primary" onclick="nuevoregistro()">Nuevo Registro</button>
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
        $n = 1;
         while ($f = $sel->fetch_assoc()){?>
          <tr>
            <th scope="row"><?php echo $n++;?></th>
            <td><?php echo $f['nombre_categoria']?></td>
            <td><?php echo $f['descripcion']?></td>
            <td><?php echo $f['precio']?></td>
            <td><?php echo $f['cantidad']?></td>
            <td><?php echo $f['estado']?></td>
            <td><button class="btn btn-warning" onclick="actualizarregistro(<?php echo $f['id']?>)">Editar</button> 
              <button class="btn btn-danger" onclick="eliminarregistro(<?php echo $f['id']?>)">Eliminar</button>
              </td>
          </tr>
        <?}?>
        
      </tbody>
    </table>

    
  </div>
  <div class="col-lg-2">
    
  </div>
</div>
<div class="modal fade" id="datousuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formularioregistro">
          <input type="hidden" name="accion" id="accion">
          <input type="hidden" name="id_registro" id="id_registro">
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="inputState">Categoria</label>
              <select class="form-control" name="slCategoria" id="slCategoria">
              
              </select>
            </div>
              <div class="form-group col-md-8">
               <label for="inputAddress">Descripcion</label>
              <input type="text" class="form-control" name = "txtDescripcion" id = "txtDescripcion" placeholder="Descripcion" required>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputAddress">Precio</label>
              <input type="text" class="form-control" name ="txtPrecio" id ="txtPrecio" placeholder="Precio" required>
              </div>
              <div class="form-group col-md-6">
               <label for="inputAddress">Cantidad</label>
              <input type="number" class="form-control" name = "txtCantidad" id = "txtCantidad" placeholder="Cantidad" required>
              </div>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" onclick="guardarregistro()">Enviar</button>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">

  $(document).ready(function(){
      inicio();
  });
</script>
<?php include 'pie.php'?>







