<?php
  $idDato = $_POST['id_dispositvo'];
  $nombre = $_POST['nombre'];
  $modelo = $_POST['modelo'];
  $serie = $_POST['serie'];
  $capacidad = $_POST['capacidad'];
  $descripcion = $_POST['descripcion'];
  $imagen = $_POST['imagen'];

  include "../servidor/conexion.php";
  $conexion = conexion();
  $sql = "UPDATE t_dispositivo
          SET nombre = '$nombre',
              modelo = '$modelo',
              serie = '$serie',
              capacidad = '$capacidad',
              descripcion = '$descripcion',
              imagen = '$imagen'
          WHERE id_dispositvo ='$idDato'";
  $respuesta = mysqli_query($conexion, $sql);

  if($respuesta){
    header("location:../index.php");
  }else{
    echo "no se pudo";
  }