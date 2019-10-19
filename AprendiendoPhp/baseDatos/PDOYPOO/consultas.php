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
      $sql = "SELECT * FROM customers WHERE country = :cou";

      $resultado = $this->conexion->prepare($sql);

      $resultado->execute(array(":cou"=>$country));

      $mostrar = $resultado->fetchAll(PDO::FETCH_ASSOC);

      $resultado->closeCursor();

      $this->conexion = null;

      return $mostrar;
    }

  }


 ?>
