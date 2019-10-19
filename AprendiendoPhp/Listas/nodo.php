<?php
class Nodo {

  private $info;
  private $siguiente;


  function __construct($info) {
    $this->info = $info;
  }

  function get_info(){
    return $this->info;
  }

  function get_siguiente(){
    return $this->siguiente;
  }

  function set_info($info){
    $this->info = $info;
  }

  function set_siguiente($siguiente){
    $this->siguiente = $siguiente;
  }

  function mostrar(){
    return $this->info;
  }

}


 ?>
