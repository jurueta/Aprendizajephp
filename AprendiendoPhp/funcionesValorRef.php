<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php

      //parametro por defecto
      function defecto($value="Hola mundo"){
        echo $value;
      }

      //Funcion por valor que se pasa el dato de la variable a pedir
      function incrementar($valor)
      {
        $valor++;
        return $valor;
      }

      $numero = 5;

      echo incrementar($numero) . "<br>";

      echo $numero . "<br> Por Referencia <br>";

      //Funcion por referencia que pasa en el parametro no solo el contendio sino la variable en si
      function incrementarRef(&$valor)
      {
        $valor++;
        return $valor;
      }

      $numeroRef = 5;

      echo incrementarRef($numeroRef) . "<br>";

      echo $numeroRef;

     ?>

  </body>
</html>
