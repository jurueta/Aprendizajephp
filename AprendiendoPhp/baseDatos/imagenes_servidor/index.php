<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      table{
        margin: auto;
        width: 450px;
        border: 2px dotted #6C0F
      }
    </style>
  </head>
  <body>

    <form action="subir_imagen.php" method="post" enctype="multipart/form-data">

      <table>
        <tr>
          <td><label for="imagen">Imagen</label></td>
          <td> <input type="file" name="imagen" value="imagen_sub" size="30"> </td>

        </tr>
        <tr>
          <td colspan="2" > <input type="submit" name="subir_imagen" value="subir imagen"> </td>
        </tr>
      </table>
    </form>

    <form action="mostrar_imagen.php" method="post">
      <table>
        <tr>
          <td><td colspan="2" > <input type="submit" name="mostrar_imagen" value="ver imagenes"> </td></td>
        </tr>
      </table>

      </form>

  </body>
</html>
