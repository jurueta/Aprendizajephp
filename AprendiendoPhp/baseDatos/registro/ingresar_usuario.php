<?php

  try {

      $usuario = htmlentities(addslashes($_POST["usuario"]));
      $contrasena = htmlentities(addslashes($_POST["contrasena"]));

      $contra_cifrada = password_hash($contrasena, PASSWORD_DEFAULT);

      $conexion = new PDO("mysql:host=localhost; dbname=company", "root", "");
      $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = "INSERT INTO usuario (usuario, contrasena) VALUES(:usu, :contra)";
      $insercion = $conexion->prepare($sql);
      $insercion->bindValue(":usu", $usuario);
      $insercion->bindValue(":contra", $contra_cifrada);
      $insercion->execute();

      echo "Se registro con exito";

  } catch (Exception $e) {
      die($e);
  }


 ?>
