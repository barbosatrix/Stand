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
	<aside class="visible col-lg-2">
		<br>
		<li class="title_sidebar">Editorial</li>
		<br><br>
		<ul>
		<li class=""><a href="Ingresar_datos.php">Guardar</a></li>
		<li class=""><a href="Busqueda_datos.php">Buscar</a></li>
		</ul><br><br><br><br>
		<ul>
		<li><a href="inicio.php">Salir</a></li>
		</ul></ul><br><br><br><br><br><br>
		<img src="img\logo_1.svg" alt="logo_anaquel" class="aside-img col-lg-7 col-lg-offset-1 ">z
	</aside>

	<header style="">
	   	<img src="img\logo2.png" alt="logo2" align="right">
	</header>
	
	<section>
	<div class="main col-lg-10">
		<form name="usuarios" method="post" action="datos_editorial.php">
		<div class="rellenar" id="editorial" class="">
			<!-- <div class="form-group">
				<label class="form-control container" style="text-align:center;">Datos Usuario</label>
			</div> -->
			<div class="form-group">
				<label class="col-lg-3 control-label">Nombre Editorial:</label>
				<div class="col-lg-6"><input type="text" name="nombre_editorial" id="cedula" class="form-control"/></div><br>
			</div>
			<div class="form-group">
				<label class="col-lg-3 control-label">Direccion:</label>
				<div class="col-lg-6"><input type="text" name="direccion_editorial" id="nombre_usuario" class="form-control"/></div><br>
			</div>
			<div class="form-group">
				<label class="col-lg-3 control-label">Ciudad</label>
				<div class="col-lg-6"><input class="form-control" type="text" name="ciudad_editorial" id="apellido_usuario"/></div><br>
			</div>
			<div class="form-group">
				<label class="col-lg-3 control-label">Pais</label>
				<div class="col-lg-6"><input class="form-control" type="text" name="pais_editorial" id="nombreu"/>
				</div><br>
			</div>
			<div class="form-group">
				<label class="col-lg-3 control-label">Telefono</label>
				<div class="col-lg-6"><input class="form-control" type="number" name="telefono_editorial" id="clave"/>
				</div><br>
			</div>
			<div class="form-group">	
				<label class="col-lg-3 control-label">Otro</label>
				<div class="col-lg-6"><input class="form-control" type="text" name="otro" id="tipo"/>
				</div><br>
			</div>
			<div class="botones form-group " style="margin-left:15px;">
				<button class="btn btn-md btn-final col-lg-offset-5 "type="submit" value="Ingresar" size="20">Ingresar</button>
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



