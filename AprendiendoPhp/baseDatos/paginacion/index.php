<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php

        try {
        // se coloca el numero de paginas, se comprueba a cual pagina se esta yendo y se realiza calculo para sabes desde donde se empieza
            $num_paginas = 5;
            if (isset($_GET["pagina"])) {
              $pagina = $_GET["pagina"];
            }else {
              $pagina = 1;
            }
            $empezar_desde = ($pagina-1) * $num_paginas;
            //se Realiza conexion con la base de datos y se realiza consulta
            $conexion = new PDO("mysql:host=localhost; dbname=company", "root" , "");
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conexion->exec("SET CHARACTER SET utf8");
            $resultado = $conexion->query("SELECT count(*) as numero FROM customers")->fetch(PDO::FETCH_ASSOC);
            //se calcula la cantidad de paginas a mostrar y se redondea
            $cantidad_paginas = ceil($resultado["numero"] / $num_paginas);
            //se realiza consulta a mostrar en la pagina y se muestra
            $resultado = $conexion->query("SELECT * FROM customers LIMIT $empezar_desde, $num_paginas")->fetchAll(PDO::FETCH_OBJ);

            foreach ($resultado as $valor) {
              echo $valor->customerName . "<br>";
            }
        } catch (Exception $e) {
          //muestra el tipo de error
          die($e);
        }
        //coloca la cantidad de paginas que pueden ir en la pagina y da el link para ir
        for ($i=0; $i < $cantidad_paginas ; $i++) {
          echo "<a href='?pagina=". ($i+1) ." '>". ($i+1) ."</a> ";
        }
     ?>
  </body>
</html>
