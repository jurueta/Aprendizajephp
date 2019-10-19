<?php

  /**
   *
   */
  class consultas{
    private $db;
    private $customers;

    function __construct(){
      require_once 'modelo/conexion.php';

      $this->db = conexion::conexiondb();
      $this->customers = array();
    }

    function get_customers(){
      $consulta = $this->db->query("SELECT * FROM customers");
      $this->customers = $consulta->fetchAll(PDO::FETCH_ASSOC);
      return $this->customers;
    }


  }

 ?>
