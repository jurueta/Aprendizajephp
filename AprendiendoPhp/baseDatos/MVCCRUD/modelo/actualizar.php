<?php
  require_once 'conexion.php';

  $conexion = conexion::conexiondb();

  $id = $_POST["id"];
  $nombre = $_POST["nom"];
  $descripcion = $_POST["des"];

  $resultado = $conexion->prepare("UPDATE parametro SET nombre = :nom, descripcion = :des where idparametro = :id");

  $resultado->bindValue(":nom", $nombre);
  $resultado->bindValue(":des", $descripcion);
  $resultado->bindValue(":id", $id);

  $resultado->execute();

  header("location:../index.php");
?>
