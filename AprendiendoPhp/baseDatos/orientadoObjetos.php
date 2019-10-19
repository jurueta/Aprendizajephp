<?php

  $conexion = new mysqli("localhost", "root", "", "company");

  if ($conexion->connect_errno) {
      echo "fallo la conexion ". $conexion->connect_errno;
      exit();
  }

  $conexion->set_charset("utf8");

  $consulta = "SELECT * FROM customers";

  $resultado = $conexion->query($consulta);

  if ($conexion->connect_errno) {
      die($conexion->error);
  }

  while ($fila = $resultado->fetch_assoc()) {
          echo $fila["customerName"] . "<br>";
  }

  $resultado->free_result();
  $conexion->close();
 ?>
