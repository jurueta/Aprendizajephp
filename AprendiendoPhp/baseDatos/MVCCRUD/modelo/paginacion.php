<?php
 require_once 'modelo/conexion.php';

 $conexion = conexion::conexiondb();

 $num_paginas = 3;
 if (isset($_GET["pagina"])) {
   $pagina = $_GET["pagina"];
 }else {
   $pagina = 1;
 }
 $empezar_desde = ($pagina-1) * $num_paginas;

 $resultado = $conexion->query("SELECT count(*) as numero FROM parametro WHERE estado = 1")->fetch(PDO::FETCH_ASSOC);

 //se calcula la cantidad de paginas a mostrar y se redondea
 $cantidad_paginas = ceil($resultado["numero"] / $num_paginas);

 ?>
