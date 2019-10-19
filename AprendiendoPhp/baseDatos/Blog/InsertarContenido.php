<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php


      $titulo = $_POST["campo_titulo"];
      $fecha = date("Y-m-d H:i:s");
      $comentario = $_POST["area_comentarios"];

      $conexion = mysqli_connect("localhost", "root", "", "blog");

      if (mysqli_connect_errno()) {
        echo "Conexion fallida " . mysqli_connect_error();
        exit();
      }

      if ($_FILES["imagen"]["error"]) {
          switch ($_FILES["imagen"]["error"]) {
            case 1://El fichero subido excede la directiva upload_max_filesize
              echo "EL archivo subido supera excede las directivas";
              break;
            case 2://El fichero subido excede la directiva MAX_FILE_SIZE especificada en el formulario HTML.
                echo "el archivo excede el tamaño";
              break;
            case 3://El fichero fue sólo parcialmente subido
                  echo "El archivo esta corrupto o no se subio correctamente";
                break;
            case 4://No se subió ningún fichero
                  echo "No se ha subido ningun archivo";
                break;
          }
      }else {

        if (isset($_FILES["imagen"]["name"]) && $_FILES["imagen"]["error"] == UPLOAD_ERR_OK) {
          $imagen = $_FILES["imagen"]["name"];
          move_uploaded_file($_FILES["imagen"]["tmp_name"], "imagen/".$imagen);
          $consulta = "INSERT INTO contenido(titulo, fecha, comentario, imagen) VALUES('" .$titulo. "', '" .$fecha. "', '" .$comentario. "', '" .$imagen."')";
          mysqli_query($conexion, $consulta);
          mysqli_close($conexion);

          echo "Se ha publicado bien el foro";

        }else {
          echo "No se ha podido cubir la imagen :(";

        }

      }

    ?>
  </body>
</html>
