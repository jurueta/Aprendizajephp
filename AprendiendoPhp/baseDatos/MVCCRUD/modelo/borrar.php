<?php

  require 'conexion.php';
  $id = $_GET["id"];

  $resultado = $conexion->prepare("UPDATE parametro SET estado = 0 where idparametro = :id ");
  $resultado->bindValue(":id", $id);
  $resultado->execute();

  header("location:index.php");
 ?>
