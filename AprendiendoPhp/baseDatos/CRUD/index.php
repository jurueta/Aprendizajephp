
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>CRUD</title>
<link rel="stylesheet" type="text/css" href="hoja.css">


</head>

<body>

  <?php

    require 'conexion.php';

    $num_paginas = 3;
    if (isset($_GET["pagina"])) {
      $pagina = $_GET["pagina"];
    }else {
      $pagina = 1;
    }
    $empezar_desde = ($pagina-1) * $num_paginas;
    //se Realiza conexion con la base de datos y se realiza consulta
    $conexion = new PDO("mysql:host=localhost; dbname=celulares", "root" , "");
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexion->exec("SET CHARACTER SET utf8");
    $resultado = $conexion->query("SELECT count(*) as numero FROM parametro WHERE estado = 1")->fetch(PDO::FETCH_ASSOC);
    //se calcula la cantidad de paginas a mostrar y se redondea
    $cantidad_paginas = ceil($resultado["numero"] / $num_paginas);

    $consulta = $conexion->query("SELECT * FROM parametro WHERE estado = 1 LIMIT $empezar_desde, $num_paginas")->fetchAll(PDO::FETCH_OBJ);
   ?>

<h1>CRUD<span class="subtitulo">Con borrado logico</span></h1>

  <table width="50%" border="0" align="center">
    <tr >
      <td class="primera_fila">Id</td>
      <td class="primera_fila">Nombre</td>
      <td class="primera_fila">descripcion</td>
      <td class="primera_fila">estado</td>
      <td class="sin">&nbsp;</td>
      <td class="sin">&nbsp;</td>
      <td class="sin">&nbsp;</td>
    </tr>

    <?php
    foreach ($consulta as $parametro):
     ?>
     <tr>
       <td><?php echo $parametro->idparametro; ?></td>
       <td><?php echo $parametro->nombre; ?></td>
       <td><?php echo $parametro->descripcion; ?></td>
       <td><?php echo $parametro->estado; ?></td>

       <td class="bot"> <a href="borrar.php?id=<?php echo $parametro->idparametro?>">
                           <input type='button' name='del' id='del' value='Borrar'></td></a>

       <td class='bot'> <a href="editar.php?id=<?php echo $parametro->idparametro?>&
         nom=<?php echo $parametro->nombre?>&des=<?php echo $parametro->descripcion?>">
         <input type='button' name='up' id='up' value='Actualizar'></td></a>
     </tr>

     <?php
   endforeach;
      ?>

	<tr>
	<td></td>
        <form class="" action="insertar.php" method="post">
          <td><input type='text' name='nom' size='10' class='centrado'></td>
          <td><input type='text' name='des' size='10' class='centrado'></td>
          <td></td>
          <td class='bot'><input type='submit' name='cr' id='cr' value='Insertar'></td></tr>
        </form>

  </table>

<p>&nbsp;</p>
  <div align="center">
  <?php
  for ($i=0; $i < $cantidad_paginas ; $i++) {
    echo "<a href='?pagina=". ($i+1) ." '>". ($i+1) ."</a> &nbsp;";
  }
   ?>
  </div>
</body>
</html>
