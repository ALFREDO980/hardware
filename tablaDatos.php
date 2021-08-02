<?php 
  include "servidor/conexion.php";
  $conexion = conexion();
  $sql = "SELECT id_dispositvo, nombre, modelo, serie, capacidad, descripcion, imagen 
          FROM t_dispositivo";
  $respuesta = mysqli_query($conexion, $sql);
?>

  <table class="table table-dark table-hover" id="tablaDatos" >
    <thead>
      <th>ID</th>
      <th>Nombre</th>
      <th>Modelo</th>
      <th>Serie</th>
      <th>Capacidad</th>
      <th>Descripcion</th>
      <th>Imagen</th>  
      <th>Editar</th> 
      <th>Eliminar</th> 
    </thead>
    <tbody>
      <?php 
        while($mostrar = mysqli_fetch_array($respuesta)) {  
      ?>
      <tr>
        <td><?php echo $mostrar['id_dispositvo'];?></td>
        <td><?php echo $mostrar['nombre'];?></td>
        <td><?php echo $mostrar['modelo'];?></td>
        <td><?php echo $mostrar['serie'];?></td>
        <td><?php echo $mostrar['capacidad'];?></td>
        <td><?php echo $mostrar['descripcion'];?></td>
        <td><?php echo $mostrar['imagen'];?></td>
        <td>
          <form action="actualizar.php" method="POST">
            <input type="text" hidden name="idDato" value="<?php echo $mostrar['id_dispositvo']?>">
            <button class="btn btn-warning">Editar</button>
          </form>
        </td>
        <td>
          <form action="servidor/eliminarDato.php" method="POST">
            <input type="text" hidden name="idDato" value="<?php echo $mostrar['id_dispositvo']?>">
            <button class="btn btn-danger">Eliminar</button>
          </form>
        </td>
      </tr>
      <?php
          }
        ?>
    </tbody>
    </table>

<script type="text/javascript">
    $(document).ready(function(){
        $('#tablaDatos').DataTable();
    });
</script>
