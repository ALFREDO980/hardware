<?php 
  $idDato = $_POST['idDato'];
   include "conexion.php";
   $conexion = conexion();
   session_start();
   $imagen = $_POST['imagen'];

   $sql = "DELETE FROM t_dispositivo WHERE id_dispositvo = '$idDato'";
   $respuesta = mysqli_query($conexion, $sql);
   $nombreArchivo = mysqli_fetch_row($respuesta)[0];
   $rutaDeArchivo = "../archivos/" . $imagen;
    if($respuesta){
      header("location:../index.php");
    }else{
      echo "vale verch";
    }
    ?>  
    <?php
    

    //obtenemos el nombre del archivo y formamos la ruta de donde se encuentra
    //para poder localizarlo y eliminarlo
   
    
    

    

    //eliminar el registro del archivo en bd

    $sql = "DELETE FROM t_registro WHERE id_registro = '$imagen'";
    $respuesta = mysqli_query($conexion, $sql);

    if ($respuesta) {
        if (unlink($rutaDeArchivo)) {
            $_SESSION['operacion'] = "delete";
        } else {
            $_SESSION['operacion'] = "error2";
        }
    } else {
        $_SESSION['operacion'] = "error2";
    }

    header("location:../index.php");