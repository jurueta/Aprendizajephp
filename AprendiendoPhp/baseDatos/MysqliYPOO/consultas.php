<?php

  require 'conexion.php';
  /**
   *
   */
  class consultas extends conexion{

    function __construct(){
      parent::__construct();
    }


  function buscar($country){
    $resultado = $this->conexion->query("SELECT * FROM customers WHERE country = ?");
    
    $mostrar = $resultado->fetch_all(MYSQLI_ASSOC);
    return $mostrar;
  }
    }

 ?>
