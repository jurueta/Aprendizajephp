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
			if (isset($_POST["enviar"])) {
				try {
					$usuario = htmlentities(addslashes($_POST["usuario"]));
					$contrasena = htmlentities(addslashes($_POST["contrasena"]));

					$conexion = new PDO("mysql:host=localhost; dbname=company", "root", "");
					$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					$sql = "SELECT * FROM usuario WHERE usuario = :usu AND contrasena = :contra AND estado =1";
					$consulta = $conexion->prepare($sql);
					$consulta->bindValue(":usu", $usuario);
					$consulta->bindValue(":contra", $contrasena);
					$consulta->execute();

					if ($consulta->rowcount()) {
						session_start();
						$_SESSION["usuario"] = $usuario;
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
	 if (!isset($_SESSION["usuario"])) {
	 	include 'formulario.html';
	}else {
		echo "<h1>Hola Jesus</h1>";
	}

	  ?>

<h2>Imagenes de la pagina</h2>
<table border="0" align="center">
	<tr>
		<td> <img src="img/pixelart1.jpg" alt=""> </td>
		<td> <img src="img/pixelart2.jpg" alt=""> </td>
	</tr>
</table>
</body>
</html>
