<?php
	require("conexion1.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title>Prueba Conexion base de datos La Silueta</title>
	<meta charset="UTF-8">
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css" type="text/css">
	<link rel="stylesheet" href="formularios.css" type="text/css">
</head>

<body>
	<aside class="visible col-lg-3">
		<br>
		<li class="title_sidebar">Usuario</li>
		<br><br>
		<ul>
		<li class=""><a href="Ingresar_datos.php">Guardar</a></li>
		<li class=""><a href="Busqueda_datos.php">Buscar</a></li>
		</ul><br><br><br><br>
		<ul>
		<li><a href="inicio.php">Usuario</a></li>
		</ul>
	</aside>

	<header style="">
	   	<img src="img\logo2.png" alt="logo2" align="right">
	</header>
	
	<section>
	<div class="main col-lg-9">
		<form name="usuarios" method="post" action="crear_usuario.php">
		<div class="rellenar" id="usuarios" class="">
			<!-- <div class="form-group">
				<label class="form-control container" style="text-align:center;">Datos Usuario</label>
			</div> -->
			<div class="form-group">
				<label class="col-lg-3 control-label">Cédula:</label>
				<div class="col-lg-6"><input type="number" name="cedula" id="cedula" class="form-control"/></div><br>
			</div>
			<div class="form-group">
				<label class="col-lg-3 control-label">Usuario:</label>
				<div class="col-lg-6"><input type="text" name="nombre_usuario" id="nombre_usuario" class="form-control"/></div><br>
			</div>
			<div class="form-group">
				<label class="col-lg-3 control-label">Apellido</label>
				<div class="col-lg-6"><input class="form-control" type="text" name="apellido_usuario" id="apellido_usuario"/></div><br>
			</div>
			<div class="form-group">
				<label class="col-lg-3 control-label">Usuario</label>
				<div class="col-lg-6"><input class="form-control" type="text" name="nombreu" id="nombreu"/>
				</div><br>
			</div>
			<div class="form-group">
				<label class="col-lg-3 control-label">Contraseña</label>
				<div class="col-lg-6"><input class="form-control" type="password" name="clave" id="clave"/>
				</div><br>
			</div>
			<div class="form-group">	
				<label class="col-lg-3 control-label">Tipo Usuario</label>
				<div class="col-lg-6"><input class="form-control" type="text" name="tipo" id="tipo"/>
				</div><br>
			</div>
			<div class="botones form-group " style="margin-left:15px;">
				<button class="btn btn-md btn-final "type="submit" value="Ingresar" size="20">Ingresar</button>
				<button class="btn btn-md btn-final"type="submit" value="Buscar" size="20">Buscar</button>
				<button class="btn btn-md btn-final"type="submit" value="Eliminar" size="20">Eliminar</button>
				<button class="btn btn-md btn-final"type="submit" value="Modificar" size="20">Modificar</button>
				<button class="btn btn-md btn-final"type="submit"><a href="#inicio">Inicio</a></button>
			</div>
		</div>
	</div>
	</section>

	<footer>
		<h2>
		Segunda Seccion
		<br>
		</h2>
	</footer>
</body>
</html>



