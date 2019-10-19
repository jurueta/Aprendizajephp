<?php
  require "consultas.php";

  $pais = $_GET["codigo"];

  $consultar = new consultas();

  $mostar = $consultar->buscar($pais);

  foreach ($mostar as $dato) {

    echo $dato["customerName"] . "<br>";
  }
 ?>
