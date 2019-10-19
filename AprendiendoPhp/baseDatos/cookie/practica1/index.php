<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
      if (isset($_COOKIE["Pais_seleccionado"])) {
        if ($_COOKIE["Pais_seleccionado"] == "es") {
            header("location:paglatino.php");
        }else {
            header("location:pagingles.php");
        }
      }
     ?>

    <table  width="25%" border="0" align="center">
      <tr>
        <td colspan="2" align="center"> <h1>Elige idioma</h1> </td>
      </tr>
      <tr>
        <td align="center"> <a href="cookieEle.php?idioma=es"> <img src="img/colombia.jpg" alt="" width="30%"> </a> </td>
        <td align="center"> <a href="cookieEle.php?idioma=en"> <img src="img/eeuu.jpg" alt="" width="150%"> </a> </td>
      </tr>
    </table>
  </body>
</html>
