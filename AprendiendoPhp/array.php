<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php

    include 'session.php';

      $carreras = array("Ingenieria" => array("Sistemas" , "civil", "ambiental"),
                        "Medicina" => array("enfermeria" , "ortopedia", "85"),
                        "ciencias" => array("Sistemas" , "civil", "ambiental"));
      foreach ($carreras as $tipoArea => $Areas) {
        echo $tipoArea . ": <br>";
        for ($i=0; $i < count($Areas); $i++) {
            echo $Areas[$i] ."  ". $_SESSION["name"] . " <br>";
        }
        echo "<br>";
      }

    ?>

  </body>
</html>
