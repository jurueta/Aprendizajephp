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

    //Conexion a la base de datos con los datos requeridos
    $conexion = mysqli_connect($db_host, $db_usuario, $db_contra);

    //comprobaccion sui todo salio bien
    if (mysqli_connect_errno()) {
      echo "fallo al conectar";
      exit();
    }

    //selecciona base y cambiar los caracteres a utf8
    mysqli_select_db($conexion, $db_nombre) or die ("No se pudo encontrar la base de datos");

    mysqli_set_charset($conexion, "utf8");

    //creando insercion preparada
    $consulta = "INSERT INTO products(productCode, productName, productLine, productDescription, buyPrice)
                 VALUES (?, ?, ?, ?, ?)";

    //preparando la consulat para trabajar con el dato tipo stmt
    $resultado = mysqli_prepare($conexion, $consulta);

    //uniendo los parametris y escogiedo los tipos de datos
    mysqli_stmt_bind_param($resultado, "ssssd", $codigo, $nombre, $seccion, $descripcion, $precio);

    //ejecutando la insercion y comprobando que todo salio correcto
    if (mysqli_stmt_execute($resultado)) {

      echo "agregado correctamente";

    }else {
      echo "Error en la insercion";
    }


   ?>

  </body>
</html>
