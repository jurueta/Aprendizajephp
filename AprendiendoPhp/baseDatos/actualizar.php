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
    $nombre = $_GET["nombre"];
    $seccion = $_GET["seccion"];
    $descripcion = $_GET["descripcion"];
    $precio = $_GET["precio"];

    $conexion = mysqli_connect($db_host, $db_usuario, $db_contra);

    if (mysqli_connect_errno()) {
      echo "fallo al conectar";
      exit();
    }

    mysqli_select_db($conexion, $db_nombre) or die ("No se pudo encontrar la base de datos");

    mysqli_set_charset($conexion, "utf8");

    $consulta = "UPDATE products SET productName = '$nombre', productLine = '$seccion',
                productDescription = '$descripcion', buyPrice = '$precio' WHERE productCode = '$codigo'";

    $resultado = mysqli_query($conexion, $consulta);

    if ($resultado) {
        echo "Se ha ingresado los datos con exito";

    }else {
      echo "Error en los datos";
    }

   ?>

  </body>
</html>
