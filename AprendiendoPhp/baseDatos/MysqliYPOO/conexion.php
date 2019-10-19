<?php

  require 'config.php';

  /**
   *
   */
  class conexion{
    protected $conexion;

    public function __construct(){
      $this->conexion = new mysqli(HOST, USUARIO, CONTRA, DB_NAME);

      if ($this->conexion->connect_errno) {
        echo "fallo al conectar con el servidor " . $this->conexion->connect_error;
        return;
      }
      $this->conexion->set_charset(CHARSET);

    }

  }


 ?>
