<?php

    require 'conexion.php';

    $conexion = conexion::conexiondb();

    $nombre = $_POST["nom"];
    $descripcion = $_POST["des"];

    $resultado = $conexion->prepare("INSERT INTO parametro(nombre, descripcion) VALUES (:nom, :des)");
    $resultado->bindValue(":nom", $nombre);
    $resultado->bindValue(":des", $descripcion);
    $resultado->execute();
    header("location:index.php");
 ?>
