<?php

  /**
   *
   */
  class objetoblog{

    //Propiedades de la clase
    private $titulo;
    private $comentario;
    private $imagen;
    private $fecha;

    function __construct(){
    }
    //metodos de acceso
    function getTitulo(){
      return $this->titulo;
    }

    function setTitulo($titulo){
      $this->titulo = $titulo;
    }
    function getComentario(){
      return $this->comentario;
    }

    function setComentario($comentario){
      $this->comentario = $comentario;
    }
    function getImagen(){
      return $this->imagen;
    }

    function setImagen($imagen){
      $this->imagen = $imagen;
    }
    function getFecha(){
      return $this->fecha;
    }

    function setFecha($fecha){
      $this->fecha = $fecha;
    }

  }


 ?>
