<?php

  /**
   *
   */
   include_once 'objetoblog.php';

  class manejo_objeto{

    private $conexion;

    function __construct(PDO $conexion){
      $this->conexion = $conexion;
    }

    function getConexion(){
      return $this->conexion;
    }

    function setConexion($conexion){
      $this->conexion = $conexion;
    }

    function getContenido(){
      $contenido = array();
      $cont = 0;
      $resultado = $this->conexion->query("SELECT * FROM contenido WHERE estado = 1 ORDER BY fecha DESC");

      foreach ($resultado as $dato) {
        $entrada = new objetoblog();
        $entrada->setTitulo($dato["titulo"]);
        $entrada->setFecha($dato["fecha"]);
        $entrada->setComentario($dato["comentario"]);
        $entrada->setImagen($dato["imagen"]);
        $contenido[$cont] = $entrada;
        $cont++;
      }
      return $contenido;
    }

    function ingresarContendio(objetoblog $entrada){

      $entrada = array('tit' => $entrada->getTitulo(),
                       'fec' => $entrada->getFecha(),
                       'com' => $entrada->getComentario(),
                       'img' => $entrada->getImagen());
      $sql = "INSERT INTO contenido(titulo, fecha, comentario, imagen) VALUES(:tit, :fec, :com, :img)";

      $resultado = $this->conexion->prepare($sql);
      $resultado->execute($entrada);
    }

  }


 ?>
