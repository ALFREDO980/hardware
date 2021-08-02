<?php

$idDato = $_POST['id_dispositivo'];
include "servidor/conexion.php";
$conexion = conexion();
$sql = "SELECT id_dispositvo, 
                nombre,
                modelo,
                serie,
                capacidad,
                descripcion,
                imagen
        FROM t_dispositivo
        WHERE id_dispositvo = '$idDato'";
$respuesta = mysqli_query($conexion, $sql);

$datos = mysqli_fetch_array($respuesta);
?>

<?php include "header.php"; ?>
    
    <!-- Page Content -->
    <div class="container">
    <div class="card border-0 shadow my-5">
        <div class="card-body p-5">
            <h1 class="font-weight-light">Editar Registros</h1>
            <p class="lead">
                <?php ?>
                <div class="row">
                    <div class="col-sm-6">
                        <form action="servidor/actualizarDatos.php" method="POST">
                            <label>Nombre:</label>
                            <input type="tex" name="nombre" class="form-control" required 
                            value="<?php echo $datos['nombre']?>">
                            <label>No. de Serie:</label>
                            <input type="text" name="serie" class="form-control" required 
                            value="<?php echo $datos['serie']?>">
                            <label>Descripcion:</label>
                            <textarea name="descripcion" class="form-control" required
                            value="<?php echo $datos['descripcion']?>"></textarea>
                            
                        
                    </div>
                    <div class="col-sm-6">
                        <label>Modelo:</label>
                        <input type="tex" name="modelo" class="form-control" required
                        value="<?php echo $datos['modelo']?>">
                        <label>Capacidad:</label>
                        <input type="text" name="capacidad" class="form-control" required
                        value="<?php echo $datos['capacidad']?>">
                        <label>Imagen:</label>
                        <input type="file" name="imagen" class="form-control" required
                        value="<?php echo $datos['descripcion']?>">
                            </div>
                            
                    <div class="col-sm-12 mt-3">
                            <button class="btn btn-warning btn-lg btn-block">
                                Actualizar
                            </button>  
                            <hr>
                    </form>
                </div>
        </div>
        </div>
            </p>
        </div>
    </div>
    </div>
    


<?php include "footer.php"; ?>


