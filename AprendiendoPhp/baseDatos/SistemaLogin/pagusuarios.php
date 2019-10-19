<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
      session_start();

      if (!isset($_SESSION["usuario"])) {
          header("location:login.php");
          echo "adsads";
      }
     ?>
    <h1>Bienvenidos!!!</h1>

    <?php
      echo "<h2>Hola " . $_SESSION["usuario"] . "</h2>";
     ?>
    <p>Sean Bienvenidos a su pagina </p>

    <a href="cerrarsesion.php"> Cerrar Sesion </a>

  </body>
</html>
