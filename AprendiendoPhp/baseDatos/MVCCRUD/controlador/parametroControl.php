<?php

  require_once 'modelo/consultas.php';

  $parametro = new consultas();
  require_once 'modelo/paginacion.php';
  $arrayCust = $parametro->get_parametro($empezar_desde, $num_paginas);
  require_once 'vista/parametrovista.php';
  
 ?>
