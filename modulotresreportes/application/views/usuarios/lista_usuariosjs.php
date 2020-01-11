<script type="text/javascript" src="<?php echo  base_url() ?>jsd/usuarios.js"></script>
<div class="row">
  <div class="col-lg-2"></div>
  <div class="col-lg-8">
    <h2>Lista usuarios</h2>
    <button type="button" class="btn btn-primary" onclick="nuevoregistro()">Nuevo Registro</button>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">NOMBRE</th>
          <th scope="col">APELLIDO</th>
          <th scope="col">CORREO</th>
          <th scope="col">TELEFONO</th>
          <th scope="col">USERNAME</th>
          <th scope="col">OPCIONES</th>
        </tr>
      </thead>
      <tbody>
        <?php 
        $n = 1; 
          foreach ($filas as $fila) {?>
          <tr>
            <td><?= $n++;?></td>
            <td><?= $fila->nombre?></td>
            <td><?= $fila->apellido?></td>
            <td><?= $fila->correo?></td>
            <td><?= $fila->telefono?></td>
            <td><?= $fila->username?></td>
            <td><button class="btn btn-warning" onclick="actualizarregistro(<?php echo $fila->id?>)">Editar</button> 
                <button class="btn btn-danger" onclick="eliminarregistro(<?php echo $fila->id?>)">Eliminar</button>
            </td>           
          </tr>

        <?}?>        
      </tbody>
    </table>
  </div>

<div class="modal fade" id="datousuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="alert alert-danger" role="alert" style="display: none" id="mensajeerror"></div>
        <form id="formularioregistro">

          <input type="text" name="accion" id="accion">
          <input type="text" name="id_registro" id="id_registro">
          <div class="form-row">    
          <div class="form-group col-md-4">
           <label for="inputAddress">Nombre</label>
          <input type="text" class="form-control" name = "txtnombre" id = "txtnombre" placeholder="Nombre" >
          </div>
          <div class="form-group col-md-8">
           <label for="inputAddress">apellidos</label>
          <input type="text" class="form-control" name = "txtapellidos" id = "txtapellidos" placeholder="Apellidos" >
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputAddress">Correo</label>
          <input type="text" class="form-control" name ="txtcorreo" id ="txtcorreo" placeholder="Correo">
          </div>
          <div class="form-group col-md-6">
           <label for="inputAddress">Telefono</label>
          <input type="text" class="form-control" name = "txttelefono" id = "txttelefono" placeholder="Telefono" >
          </div>
        </div>
        <div class="form-row" >
          <div class="form-group col-md-6">
            <label for="inputAddress">Username</label>
          <input type="text" class="form-control" name ="txtusername" id ="txtusername" placeholder="Username" >
          </div>
          <div class="form-group col-md-6" id = "datosuser">
           <label for="inputAddress">Contrasenha</label>
          <input type="password" class="form-control" name = "txtpass" id = "txtpass" placeholder="Contrasenha" >
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
      var enlace = "<?php echo  base_url() ?>";
      baseurl(enlace);  
      //accionesformulario();    
      });
</script>