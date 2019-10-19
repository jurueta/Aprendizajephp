<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php

      require 'coneccion.php';
      //realizar la conexion
    $conexion = mysqli_connect($db_host,$db_usuario,$db_contra);

    //Conprobar si se raliza la conexion
    if (mysqli_connect_errno()) {
      echo "se genero un error al conectar con la base de datos ";
      exit();

    }

    mysqli_select_db($conexion, $db_nombre) or die ("no se encuentra la base de datos"); // para buscar la base de datos creada y si no se enceuntra lanza el die

    mysqli_set_charset($conexion, "utf8"); // se usa para resetear el testo y añade los caracteres de latin

    $consultas = "SELECT * FROM customers";

    $datos = mysqli_query($conexion, $consultas); // para realizar la consuta

    //$fila = mysqli_fetch_row($datos) devuelve un array con los datos de la primera fila


      while(($fila = mysqli_fetch_row($datos))) {
        foreach ($fila as $valor) {
          echo $valor . " | ";
        }
        echo "<br>";

      }

      while(($fila = mysqli_fetch_array($datos))) {
        foreach ($fila as $valor) {
          echo $valor . " | ";
        }
        echo "<br>";

      }



      mysqli_close($conexion);

     ?>

  </body>
</html>
