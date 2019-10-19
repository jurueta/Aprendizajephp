<?php
 require 'consultas.php';
 if (!isset($_SESSION["customers"])) {
    $_SESSION["customers"] = new consultas();
 }

 ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

    $arraymos = $_SESSION["customers"]->buscar();

    foreach ($arraymos as $dato) {
      echo $dato["customerName"] . "<br>";
    }

     ?>
  </body>
</html>
