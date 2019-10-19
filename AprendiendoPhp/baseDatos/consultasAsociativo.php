<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php

      require 'coneccion.php';

      $conexion = mysqli_connect($db_host, $db_usuario, $db_contra);

      if (mysqli_connect_errno()) {
          echo "fallo al conectar";
          exit();
      }

      mysqli_select_db($conexion, $db_nombre) or die ("No se pudo encontrar la base de datos");

      mysqli_set_charset($conexion, "utf8");

      $consulta = "SELECT * FROM customers";

      $resultado = mysqli_query($conexion, $consulta);

      while ($fila = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {
        echo $fila['customerName'] . "<br>";
      }

      mysqli_free_result($resultado);
      mysqli_close($conexion);

     ?>

  </body>
</html>
