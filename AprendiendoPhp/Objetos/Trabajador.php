<?php
include 'Persona.php';


class Trabajador extends Persona{

  function __construct($id, $nombre, $edad, $estatura)
  {
    parent::__construct($id, $nombre, $edad, $estatura);
  }
}

 ?>
