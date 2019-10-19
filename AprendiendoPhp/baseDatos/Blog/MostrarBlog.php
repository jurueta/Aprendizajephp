<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>BLOG</h1>
    
    <?php
      $conexion = mysqli_connect("localhost", "root", "", "blog");

      if (mysqli_connect_errno()) {
        echo "Conexion fallida " . mysqli_connect_error();
        exit();
      }

      $consulta = "SELECT * FROM contenido ORDER BY fecha DESC";
      if ($resultado = mysqli_query($conexion, $consulta)) {
          while ($fila = mysqli_fetch_assoc($resultado)) {
            echo "<h3> ". $fila["titulo"] ." </h3>";
            echo "<h4> ". $fila["fecha"] ." </h4>";
            echo "<div style='width:400px'>" . $fila["comentario"] . "</div> <br> <br>";
            echo "<img src='imagen/".$fila["imagen"]."' width=300px> ";
            echo "<hr>";
          }
      }


     ?>

  </body>
</html>
