<?php
class Persona{

  protected $id;
  protected $nombre;
  protected $edad;
  protected $estatura;

  protected static $salario = 25000;

  function __construct($id, $nombre, $edad, $estatura){
    $this->id = $id;
    $this->nombre = $nombre;
    $this->edad = $edad;
    $this->estatura = $estatura;
  }

  function get_id(){
   return $this->id;
  }

  function mostrar_nombre_salario(){
    return "Nombre : " . $this->nombre . " Salario : " . self::$salario;
  }


}


  ?>
