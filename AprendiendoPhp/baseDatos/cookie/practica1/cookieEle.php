<?php

  setcookie("Pais_seleccionado", $_GET["idioma"], time()+86400);

  header("location:index.php");

 ?>
