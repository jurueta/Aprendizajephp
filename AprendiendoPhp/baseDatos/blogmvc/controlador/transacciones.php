<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    include_once "../modelo/objetoblog.php";
    include_once "../modelo/manejo_objeto.php";
    try {
    $conexion = new PDO("mysql:host=localhost; dbname=blog", "root", "");
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexion->exec("SET CHARACTER SET utf8");




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

        move_uploaded_file($_FILES["imagen"]["tmp_name"], "../imagenes/".$imagen);
        $dato_entrada = new objetoblog();
        $manejo_entrada = new manejo_objeto($conexion);
        $dato_entrada->setTitulo(htmlentities(addslashes($_POST["campo_titulo"])));
        $dato_entrada->setComentario(htmlentities(addslashes($_POST["area_comentarios"])));
        $dato_entrada->setImagen($imagen);
        $dato_entrada->setFecha(date("Y-m-d H:i:s"));

        $manejo_entrada->ingresarContendio($dato_entrada);
        echo "Se ha publicado bien el foro <br>";

      }else {
        echo "No se ha podido cubir la imagen :(";

      }

    }
  } catch (Exception $e) {
    die($e);
  }

     ?>
    <a href="../vista/MostrarBlog.php">Página de visualización del blog</a>
  </body>
</html>
