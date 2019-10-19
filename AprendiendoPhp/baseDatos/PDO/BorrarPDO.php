<?php

  $codigo = $_GET["codigo"];

  try {
    //Conexion a la base de datos a usar
    $conexion = new PDO("mysql:host=localhost; dbname=company", "root", "");
    //colocando atributios y caracteres y configurando para poder eliminar
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexion->exec("SET CHARACTER SET utf8");
    $conexion->exec("set foreign_key_checks=0");

    //realizando sql de eliminacion
    $sql = "DELETE FROM products WHERE productCode = :cod";
    $resultado = $conexion->prepare($sql);
    $resultado->execute(array(":cod"=>$codigo));

    echo "Se ha eliminado con exito";
    //cerrando para ahorrar recursos
    $resulatdo->closeCursor();
  } catch (Exception $e) {
    //mostrando el mensaje de excepcion
    echo $e;
  }finally{
    //Para liberar memoria
    $conexion = null;
  }


 ?>
