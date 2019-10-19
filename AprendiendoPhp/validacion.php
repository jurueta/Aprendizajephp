<?php

if (isset($_POST["enviando"])) {
   $usuario = $_POST["nombre_usuario"];
   $clave = $_POST["clave_usuario"];

   if ($usuario == "Urueta01" && $clave == 1192773681) {
     echo "Bienvenido";
   }else {
     echo "Clave o contraseña son incorrectas";
   }
}

 ?>
