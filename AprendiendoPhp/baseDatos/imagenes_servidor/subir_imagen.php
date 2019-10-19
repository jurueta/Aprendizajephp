<?php
  require 'conexion.php';
  //teniendo los datos globales
  $nombre_img = $_FILES["imagen"]["name"];
  $tipo_img = $_FILES["imagen"]["type"];
  $tamanio_img = $_FILES["imagen"]["size"];

  if ($tipo_img == "image/jpeg" || $tipo_img == "image/jpg" || $tipo_img == "image/png") {
    if ($tamanio_img <= 1000000) {
      //Ruta de la carpeta destino de la imagen
      $carpeta_destino = $_SERVER["DOCUMENT_ROOT"] . "/AprendiendoPhp/baseDatos/imagenes_servidor/imagenes_subidas/".$nombre_img;
      //subir la imagen a la cerpeta del servidor escogido
      move_uploaded_file($_FILES["imagen"]["tmp_name"],$carpeta_destino);

      $conexion = conexion::conexiondb();
      $conexion->query("INSERT INTO foto_perfil (ruta) VALUES('$nombre_img')");

      echo "Se subio correctamente la imagen";
    } else {
      echo "El tamaño de la imagen es demasiado grande";
    }
  }else{
    echo "Tipo de imagenes aceptadas jpeg/jpg/png";
  }


 ?>
