<?php

  $contenido = $_POST["comentarios"];
  $correo = $_POST["email"];
  $asunto = $_POST["asunto"];

  // Para enviar un correo HTML, debe establecerse la cabecera Content-type
  $header = "MIME-Version: 1.0 \r\n";
  $header .= "Content-type: text/html; charset=iso-8859-1 \r\n";

  // Cabeceras adicionales
  //$cabeceras .= 'To: Mary <mary@example.com>, Kelly <kelly@example.com>' . "\r\n";
  //$cabeceras .= 'From: Recordatorio <cumples@example.com>' . "\r\n";
  //$cabeceras .= 'Cc: birthdayarchive@example.com' . "\r\n";
  //$cabeceras .= 'Bcc: birthdaycheck@example.com' . "\r\n";
  $header .= "From: Jesus Urueta <juruetacantillo@gmail.com> \r\n";

  if(mail($correo, $asunto, $contenido, $header)){
    echo "se envio el correo correctamente";
  }else{
    echo "hubo un error";
  }

 ?>
