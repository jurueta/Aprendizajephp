<?php

  require_once 'modelo/consultas.php';

  $customer = new consultas();
  $arrayCust = $customer->get_customers();

  require_once 'vista/productosvista.php';
 ?>
