<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>BLOG</h1>

    <?php
      include_once '../modelo/manejo_objeto.php';
        try {
          $conexion = new PDO("mysql:host=localhost; dbname=blog", "root", "");
          $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $conexion->exec("SET CHARACTER SET utf8");

          $manejo = new manejo_objeto($conexion);
          $mostar = $manejo->getContenido();

          foreach ($mostar as $entrada) {
            echo "<h3> ". $entrada->getTitulo() ." </h3>";
            echo "<h4> ". $entrada->getFecha() ." </h4>";
            echo "<div style='width:400px'>" . $entrada->getComentario() . "</div> <br> <br>";
            echo "<img src='../imagenes/".$entrada->getImagen()."' width=300px> ";
            echo "<hr>";
          }
        } catch (Exception $e) {
          die($e);
        }


     ?>
    <a href="formulario.php">Ingresar una nueva entrada al blog</a>
  </body>
</html>
