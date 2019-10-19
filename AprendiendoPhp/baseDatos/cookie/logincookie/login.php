<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<style>

h1,h2{
	text-align:center;
	color:#00F;
	border-bottom:dotted #A82EFF;
	width:50%;
	margin:auto;
}

a{
	text-align:center;
	color:#00F;
	width:50%;
}

table{
	border:1px solid #F00;
	padding:10px 50px;
	margin-top:50px;
  background-color: #2EE2FF;
}

body{
	background-color:#0E1C24;
}

img{
	width: 30%;
}


</style>
</head>

<body>

	<?php

			$autenticado = false;

			if (isset($_POST["enviar"])) {
				try {
					$usuario = htmlentities(addslashes($_POST["usuario"]));
					$contrasena = htmlentities(addslashes($_POST["contrasena"]));

					$conexion = new PDO("mysql:host=localhost; dbname=company", "root", "");
					$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					$sql = "SELECT * FROM usuario WHERE usuario = :usu AND estado =1";
					$consulta = $conexion->prepare($sql);
					$consulta->bindValue(":usu", $usuario);
					$consulta->execute();
					$resultado = $consulta->fetch(PDO::FETCH_ASSOC);

					if (password_verify($contrasena, $resultado["contrasena"])) {

							$autenticado = true;
							if (isset($_POST["recordar"])) {
								setcookie("usuariolog",$usuario,time()+86400);

							}
					}else {
						//header("location:login.php");
						echo "Usuario o contraseña incorrectos";
					}
				} catch (Exception $e) {
					die($e);
				}
			}
	 ?>

	 <?php
	 if (!$autenticado) {
	 		if (!isset($_COOKIE["usuariolog"])) {
	 			include 'formulario.html';
	 		}
	 }

	  ?>

<h2>Imagenes de la pagina</h2>
<table border="0" align="center">
	<tr>
		<td> <img src="img/pixelart1.jpg" alt=""> </td>
		<td> <img src="img/pixelart2.jpg" alt=""> </td>
	</tr>
</table>

	<?php

		if ($autenticado || isset($_COOKIE["usuariolog"])) {
				include 'zonaregistrado.php';
		}

 	?>

</body>
</html>
