<?php

require 'nodo.php';

class Lista_simple
{
  private $inicio;
  private $final;

  function __construct(){
     $this->inicio = null;
     $this->final = null;
  }

  function vacia(){
    return $this->inicio == null;
  }

  function agregar_inicio($dato){
    $nuevoNodo = new Nodo($dato);
    if ($this->vacia()) {
      $this->inicio = $nuevoNodo;
      $this->final = $nuevoNodo;
    }else {
      $nuevoNodo->set_siguiente($this->inicio);
      $this->inicio = $nuevoNodo;
    }
  }

  function agregar_final($dato){
    $nuevoNodo = new Nodo($dato);
    if ($this->vacia()) {
      $this->inicio = $nuevoNodo;
      $this->final = $nuevoNodo;
    }else {
      $nuevoNodo->set_siguiente(null);
      $this->final->set_siguiente($nuevoNodo);
      $this->final = $nuevoNodo;
    }
  }

  function mostrar(){
    $nodo = $this->inicio;
    while ($nodo != null) {
      echo $nodo->get_info() . "<br>";
      $nodo = $nodo->get_siguiente();
    }
  }

}


 ?>
