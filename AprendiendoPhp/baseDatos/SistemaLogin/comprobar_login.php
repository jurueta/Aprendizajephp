<?php

    try {
      $usuario = htmlentities(addslashes($_POST["usuario"]));
      $contrasena = htmlentities(addslashes($_POST["contrasena"]));

      $conexion = new PDO("mysql:host=localhost; dbname=company", "root", "");
      $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = "SELECT * FROM usuario WHERE usuario = :usuario AND contrasena = :contrasena AND estado = 1";
      $consulta = $conexion->prepare($sql);
      $consulta->bindValue(":usuario", $usuario);
      $consulta->bindValue(":contrasena", $contrasena);
      $consulta->execute();

      if ($consulta->rowcount()) {

        session_start();
        $_SESSION["usuario"] = $_POST["usuario"];
        header("location:pagusuarios.php");
      }else {
        header("location:login.php");
      }

    } catch (Exception $e) {
      die($e);
    }


 ?>
