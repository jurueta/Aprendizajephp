<?php

    require 'coneccion.php';

      $buscar = $_GET["codigo"];

      //conectando al servidor
      $conexion = mysqli_connect($db_host, $db_usuario, $db_contra);

      //Comprobando si la conexion fue exitosa
      if (mysqli_connect_errno()) {
        echo "fallo al conectar";
        exit();
      }

      //seleccionado base de datos y cambiando los caranteres a utf8
      mysqli_select_db($conexion, $db_nombre) or die ("No se pudo encontrar la base de datos");

      mysqli_set_charset($conexion, "utf8");

      //realizando consulta
      $consulta = "SELECT productName FROM products where productCode = ? ";

      //realizando consulta preparada
      $resultado = mysqli_prepare($conexion, $consulta);

      //Uniendo el resultado de con el parametro a pedir
      mysqli_stmt_bind_param($resultado, "s", $buscar);

      //ejecutando y comprobando si la consulta fue exitosa
      if (mysqli_stmt_execute($resultado)) {

        //Creando el resultset y mostrando los resultados
        mysqli_stmt_bind_result($resultado, $nombre);

        while (mysqli_stmt_fetch($resultado)) {
          echo $nombre;
        }

      }else {
        echo "Se genero un error al ejecutar la consulta";
      }








 ?>
