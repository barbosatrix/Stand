<?php
	require("conexion1.php")
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css\login.css" type="text/css"/>
	<!--link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/now-alt" type="text/css"/-->
	<meta charset="UTF-8">
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<!-- <link rel="stylesheet" href="style.css" type="text/css">
	<link rel="stylesheet" href="formularios.css" type="text/css">
 -->
	<link rel="stylesheet" href="print.css" type="text/css" media="print" />


	<title>ANAQUEL</title>
</head>
<body style="color:#0000EE;background-color:#0D5C62;">

<article>
  <header style="background-color:;">
   	<img class="logo" src="img\logo2.png" alt="logo2" align="right" ><br><!--style="width:217px;height:52px;padding:20px-->
  </header>
</article>
<br>
<div class="head-logo container">
	<br>
	<div class="col-lg-2 col-lg-offset-5 col-md-offset-4 col-md-4 col-sm-offset-4 col-sm-3 col-xs-offset-4 col-xs-5">
	<center><img src="img\logo_1.svg" alt="logo_anaquel" class="logo-principal "></center>
	</div>
	<br>
	<!--style="width:217px;height:52px;padding:20px"z
	<!--<button type="submit"><a href="Ingresar_datos.php">Ingreso</a></button><br>
	<button type="submit"><a href="Busqueda_datos.php">Busqueda y Modificacion</a></button><br><br>
	<button type="submit"><a href="imprimir_tablas.php">Imprimir Tablas</a></button>-->
	<div class="col-lg-5"></div>
</div>

<div class="ingreso container" >
	<div class="col-lg-offset-4 col-lg-4 col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6 col-xs-offset-1 col-xs-10">
		<form action="validar_usuario.php" class="formulario" method="post"><br><br><br>
			<div class="form-group">
				<label class="label-control">USUARIO</label>
				<input name="nombreu" class="form-control" required="required">
			</div>
			<div class="form-group">
				<label class="label-control">CONTRASE&Ntilde;A</label>
				<input type="password" class="form-control" name="clave" required="required">
			</div><br><br><br>
			<button name="iniciar" type="submit" value="Ingresar" class='btn ingreso_boton col-lg-5 col-lg-offset-3' style=cursor:pointer;>Ingresar</button><br><br><br>
			<label for="version" class="col-lg-offset-10">V 0.1</label>
		</form><br><br>
	</div>
</div>


<div style="color:white">
<br>
<br>
</h2>
</div>
</body>
</html>


