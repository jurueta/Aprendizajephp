<?php

  $codigo = $_POST["codigo"];
  $nombre = $_POST["nombre"];
  $seccion = $_POST["seccion"];
  $descripcion = $_POST["descripcion"];
  $precio = $_POST["precio"];

  try {
    //Conexion a la base de datos a usar
    $conexion = new PDO("mysql:host=localhost; dbname=company", "root", "");
    //colocando atributios y caracteres
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexion->exec("SET CHARACTER SET utf8");

    //realizando sql de insercion
    $sql = "INSERT INTO products (productCode, productName, productLine, productDescription, buyPrice)
                  VALUES (:cod, :nom, :sec, :des, :pre)";

    $resultado = $conexion->prepare($sql);
    $resultado->execute(array(":cod"=>$codigo, ":nom" =>$nombre, ":sec"=>$seccion, ":des"=>$descripcion, ":pre"=>$precio));

    echo "se  inserto con exito";
    //cerrando para ahorrar recursos
    $resultado->closeCursor();

  } catch (Exception $e) {
    //mostrando el mensaje de excepcion
    echo "Error " . $e->getcode(). " linea " . $e->getline() . " tostring " . $e;

  }finally{
    $conexion = null;
  }


 ?>
