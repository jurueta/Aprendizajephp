<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      require 'conexion.php';

      $conexion = conexion::conexiondb();
      foreach ($conexion->query("SELECT ruta FROM foto_perfil WHERE idfoto = 1") as $row) {
            $nombre_img = $row["ruta"];
        }
    ?>

    <img src="imagenes_subidas/<?php echo $nombre_img?>" alt="Foto" width="50%">
  </body>
</html>
