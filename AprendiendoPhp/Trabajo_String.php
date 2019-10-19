<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

    <style media="screen">

     .color{
       text-align:center;
       color:#0000FF;
       font-style: italic;
       font-size: 100px;
       margin: 0 auto;
     }

    </style>

  </head>
  <body>

    <?php

     echo "<p class = 'color'> hola </p>";

     $palabra1 = "Jesus";
     $Palabra2 = "jesus";

      if ($palabra1 == $Palabra2) {
        echo "<p class = 'color'> no es igual</p>";
      }else{
        echo "<p class = 'color'> es igual</p>";
      }


     ?>

  </body>
</html>
