<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<style>

h1{
	text-align:center;
	color:#00F;
	border-bottom:dotted #A82EFF;
	width:50%;
	margin:auto;


}

table{
	border:1px solid #F00;
	padding:20px 50px;
	margin-top:50px;
  background-color: #2EE2FF;
}

body{
	background-color:#0E1C24;
}


</style>
</head>

<body>
<h1>Login</h1>
<form name="form1" method="post" action="comprobar_login.php">
  <table border="0" align="center">
    <tr>
      <td>Usuario:</td>
      <td><label for="c_art"></label>
      <input type="text" name="usuario" id="c_art"></td>
    </tr>
    <tr>
      <td>Contraseña</td>
      <td><label for="c_art"></label>
      <input type="password" name="contrasena" id="c_art"></td>
    </tr>
    <tr>
      <td align="center"><input type="submit" name="enviar" id="enviar" value="Enviar"></td>
      <td align="center"><input type="reset" name="Borrar" id="Borrar" value="Borrar"></td>
    </tr>
  </table>
</form>
</body>
</html>
