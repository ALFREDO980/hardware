<?php
  
  $nombre = $_POST['nombre'];
  $modelo = $_POST['modelo'];
  $serie = $_POST['serie'];
  $capacidad = $_POST['capacidad'];
  $descripcion = $_POST['descripcion'];
  $imagen = $_POST['imagen'];
  include "conexion.php";
  $conexion = conexion();

  $sql = "INSERT INTO t_dispositivo (nombre, modelo, serie, capacidad, descripcion, imagen)
          VALUES ( '$nombre', 
                    '$modelo', 
                    '$serie', 
                    '$capacidad', 
                    '$descripcion',
                    '$imagen')";
            $respuesta = mysqli_query($conexion, $sql);

  if($respuesta){
    header("location:../index.php");
  }else{
    echo "No jalo algo anda mal...";
  }


?> 