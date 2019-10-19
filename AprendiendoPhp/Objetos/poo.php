<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php

    include 'Trabajador.php';

    $trabajador = new Trabajador(123, "Jesus", 12,1.78);
    echo $trabajador->mostrar_nombre_salario();

     ?>

  </body>
</html>
