<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

  </head>
  <body>
    <table width="50%" border="0" align="center">
      <tr>
        <td class="primera_fila">Id</td>
        <td class="primera_fila">Nombre</td>
        <td class="primera_fila">descripcion</td>
        <td class="primera_fila">estado</td>
        <td class="sin">&nbsp;</td>
        <td class="sin">&nbsp;</td>
        <td class="sin">&nbsp;</td>
      </tr>

      <?php
      foreach ($arrayCust as $parametro):
       ?>
       <tr>
         <td><?php echo $parametro->idparametro; ?></td>
         <td><?php echo $parametro->nombre; ?></td>
         <td><?php echo $parametro->descripcion; ?></td>
         <td><?php echo $parametro->estado; ?></td>

         <td class="bot"> <a href="modelo/borrar.php?id=<?php echo $parametro->idparametro?>">
                             <input type='button' name='del' id='del' value='Borrar'></td></a>

         <td class='bot'> <a href="vista/editar.php?id=<?php echo $parametro->idparametro?>&
           nom=<?php echo $parametro->nombre?>&des=<?php echo $parametro->descripcion?>">
           <input type='button' name='up' id='up' value='Actualizar'></td></a>
       </tr>

       <?php
     endforeach;
        ?>

  	<tr>
  	<td></td>
          <form class="" action="modelo/insertar.php" method="post">
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
