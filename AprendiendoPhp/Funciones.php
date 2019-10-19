<?php
if (isset($_POST["calcular"])) {
  $numero = $_POST["numero"];
  echo " tabla <br> " . tablaMultiplicar($numero);
}

function tablaMultiplicar($numero){
  static $multiplicando = 0;
  $tabla = " ";
  if ($numero == 0) {
    return "Todos los datos dan 0";
  }elseif ($multiplicando == 11) {
    return "Completado";
  }else {
    $tabla .= " ".($numero * $multiplicando);
    $multiplicando++;
    $tabla .= "<br> ". tablaMultiplicar($numero);
    return $tabla;
  }

}

 ?>
