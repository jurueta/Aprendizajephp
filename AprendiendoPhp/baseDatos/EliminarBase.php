<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
    require 'coneccion.php';

    $codigo = $_GET["codigo"];

    $conexion = mysqli_connect($db_host, $db_usuario, $db_contra);

    if (mysqli_connect_errno()) {
      echo "fallo al conectar";
      exit();
    }

    mysqli_select_db($conexion, $db_nombre) or die ("No se pudo encontrar la base de datos");

    mysqli_set_charset($conexion, "utf8");

    $consulta = "DELETE FROM products WHERE productCode='$codigo'";

    mysqli_query($conexion, "set foreign_key_checks = 0");

    $resultado = mysqli_query($conexion, $consulta);

    if ($resultado) {
      if (mysqli_affected_rows() == 0) {
        echo "Ese registro no se encuentra";
      }else {
        echo "Se ha borrado con exito";
      }
    }else {

      echo "no se encuentra el dato a borrar";
    }

   ?>

  </body>
</html>
