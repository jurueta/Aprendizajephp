<?php

  /**
   *
   */
  class conexion {

    public static function conexiondb(){
      try {
        $conexion = new PDO("mysql:host=localhost; dbname=company", "root", "");
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conexion->exec("SET CHARACTER SET utf8");

      } catch (Exception $e) {
        die($e);
      }
      return $conexion;
    }
  }


 ?>
