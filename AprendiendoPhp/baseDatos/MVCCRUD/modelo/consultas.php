<?php

  /**
   *
   */
  class consultas {
    private $db;
    private $parametro;

    function __construct(){
      require_once 'modelo/conexion.php';

      $this->db = conexion::conexiondb();
      $this->parametro = array();
    }

    function get_parametro($empezar_desde, $num_paginas){
      $consulta = $this->db->query("SELECT * FROM parametro LIMIT $empezar_desde, $num_paginas");
      $this->parametro = $consulta->fetchAll(PDO::FETCH_OBJ);
      return $this->parametro;
    }

    function set_parametro(){
      $id = $_POST["id"];
      $nombre = $_POST["nom"];
      $descripcion = $_POST["des"];

      $resultado = $conexion->prepare("UPDATE parametro SET nombre = :nom, descripcion = :des where idparametro = :id");

      $resultado->bindValue(":nom", $nombre);
      $resultado->bindValue(":des", $descripcion);
      $resultado->bindValue(":id", $id);

      $resultado->execute();

      header("location:index.php");
    }


  }

 ?>
