
<?php include "header.php"; ?>
<?php
    session_start();
    $operacion = "";
    if (isset($_SESSION['operacion'])) {
        $operacion = $_SESSION['operacion'];
        unset($_SESSION['operacion']);
    }
?>

    
    <!-- Page Content -->
    <div class="container">
    <div class="card border-0 shadow my-5">
        <div class="card-body p-5">
            <h1 class="font-weight-light">REGISTRO DE LOS DISPOSITIVOS</h1>
            <p class="lead">
                <?php ?>
                <div class="row">
                    <div class="col-sm-6">
                        <form action="servidor/agregarDato.php" method="POST">
                            <label>Nombre:</label>
                            <input type="tex" name="nombre" class="form-control" required>
                            <label>No. de Serie:</label>
                            <input type="text" name="serie" class="form-control" required>
                            <label>Descripcion:</label>
                            <textarea name="descripcion" class="form-control" required></textarea>
                            
                        
                    </div>
                    <div class="col-sm-6">
                        <label>Modelo:</label>
                        <input type="tex" name="modelo" class="form-control" required>
                        <label>Capacidad:</label>
                        <input type="text" name="capacidad" class="form-control" required>
                        <label>Imagen:</label>
                        <input type="file" name="imagen" class="form-control" required>
                            </div>
                            
                    <div class="col-sm-12 mt-3">
                            <button class="btn btn-primary btn-lg btn-block">
                                Registrar
                            </button>  
                            <hr>
                    </form>
                </div>
        </div>
                <div class="row text-center">
                    <div class="col-sm-12">
                        <h3>Tabla de registro de dispositivos</h3>
                        <?php include "tablaDatos.php";?>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-sm-12">
                        <div id="tablaDatos"></div>
                    </div>
                </div>
            </p>
        </div>
    </div>
    </div>
    


<?php include "footer.php"; ?>

<script type="text/javascript">
    $(document).ready(function(){
        $('#tablaDatos').DataTable();
    });
</script>

