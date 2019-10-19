<!DOCTYPE html>
<html lang="es" >
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<?php
  $variable = "jesus";

  echo "Hola mundo <br>";
  echo  "hola  $variable como vas <br>";

  function dameDatos(){
  static $cont;
   $cont++;
   echo $cont;
  }

  echo $variable."<br>";
  dameDatos();
  dameDatos();
  dameDatos();
  dameDatos();
  dameDatos();
  echo $variable;

 ?>

  </body>
</html>
