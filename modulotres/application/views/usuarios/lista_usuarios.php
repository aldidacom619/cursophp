<div class="row">
  <div class="col-lg-2"></div>
  <div class="col-lg-8">
    <h2>Lista usuarios</h2>
    <a href="<?php echo base_url('usuarios/nuevousuario');?>" class="btn btn-primary">Nuevo</a>
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
            <td><a href="<?php echo base_url('usuarios/editar/'.$fila->id);?>" class="btn btn-warning">editar</a></td>
          </tr>

        <?}?>        
      </tbody>
    </table>
  </div>