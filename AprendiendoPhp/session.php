<?php


session_start();
$_SESSION["name"] = "jesus";

 ?>

 <!DOCTYPE html>
 <html lang="es" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>

     <?php

     echo "Hola " . $_SESSION["name"];

     $primerarchivo = fopen("arcivo.txt", "a");

     $contenido = "Este es la primera linea del archivo\n";
     fwrite($primerarchivo, $contenido);
     $contenido = "Y esta es la segunda \n";
     fwrite($primerarchivo, $contenido);

     fclose($primerarchivo);

     $lectura = file('arcivo.txt');

     foreach ($lectura as $linea) {
       echo $linea . "<br>";
     }


     if (isset($_COOKIE['datos'])) {
       echo $_COOKIE['datos'];
     }
      ?>

   </body>
 </html>
