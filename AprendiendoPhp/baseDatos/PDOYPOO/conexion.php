<?php

  require 'config.php';
  /**
   *
   */
  class conexion{
    protected $conexion;

    function __construct(){

      try {
        $this->conexion = new PDO("mysql:host=localhost; dbname=company", "root", "");
        $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->conexion->exec("SET CHARACTER SET utf8");

      } catch (Exception $e) {
        echo $e;
      }

    }
  }


 ?>
