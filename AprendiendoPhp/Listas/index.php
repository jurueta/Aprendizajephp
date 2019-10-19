<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title >Nuevo Proyecto</title>
  </head>
  <body>
    
    <?php
      require 'ListaSimple.php';

      $lista = new Lista_simple();

      $lista->agregar_final(23);
      $lista->agregar_final(24);
      $lista->agregar_final(25);
      $lista->agregar_final(26);
      $lista->mostrar();

     ?>

  </body>
</html>
