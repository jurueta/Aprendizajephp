<?php

  try {
    $codigo = $_GET["codigo"];
    $linea = $_GET["linea"];
    //Conexion a la base de datos a usar
    $base = new PDO("mysql:host=localhost; dbname=company", "root", "");
    //colocando atributios y caracteres
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $base->exec("SET CHARACTER SET utf8");

    //realizando consulta
    $consulta = "SELECT * FROM products WHERE productCode = :cod
                 AND productLine = :lne";
    $resultado = $base->prepare($consulta);
    $resultado->execute(array(":cod"=>$codigo, ":lne"=>$linea));

    //Mostrando los datos de la consulta
    while ($fila = $resulatdo->fetch(PDO::FETCH_ASSOC)) {
      echo $fila["productName"] ."<br>";
    }
    //cerrando para ahorrar recursos
    $resulatdo->closeCursor();

  } catch (Exception $e) {
    //mostrando el mensaje de excepcion
    die("error" . $e->getMEssage());
  }finally{
    //para que cada vez que se acabe el proceso se cierre y libere recursos
    $conexion = null;
  }


 ?>
