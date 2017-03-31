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

	<link rel="stylesheet" href="print.css" type="text/css" media="print" />
</head>

<body>
	<aside class="visible col-lg-2"">
		<br>
		<li class="title_sidebar">Autores</li>
		<br><br>
		<ul>
		<li class=""><a href="autor.php">Nuevo</a></li>
		<li class=""><a href="consultar_autor.php">Consulta</a></li>
		<li class=""><a href="reporte_autor.php">Reporte</a></li></ul><br><br><br><br>
		<ul>
		<li><a href="inicio.php">Salir</a></li>
		</ul>
		</ul><br><br><br><br><br><br>
		<img src="img\logo_1.svg" alt="logo_anaquel" class="aside-img col-lg-7 col-lg-offset-1 ">
		</form>
	</aside>

	<header style="">
	   	<img src="img\logo2.png" alt="logo2" align="right">
	</header>
	
	<section>
	<div class="main  col-lg-10">
		<form name="form" enctype="multipart/form-data" method="post" action="datos_autor.php" class="">
			<div class="form-group rellenar">
				<div class="col-lg-8">
					<div class="form-group">	
						<label for="Nombre del Autor:" class="col-lg-3 control-label">Nombre</label>
						<div class="col-lg-9"><input type="text" class="form-control" name="nombre_autor" placeholder="Nombre del autor"/></div>
					</div><br>
					<div class="form-group">	
						<label for="Apellido" class="col-lg-3 control-label">Apellido</label>
						<div class="col-lg-9"><input type="text" class="form-control" name="apellido_autor" placeholder="Apellido"/></div>
					</div><br>
					<div class="form-group">
						<label for="Seudonimo" class="col-lg-3 control-label">Seudonimo</label>
						<div class="col-lg-9"><input type="text" name="seudonimo_autor" class="form-control" placeholder="Seudonimo" /></div>
					</div><br>
					<div class="form-group">
						<label for="Nacionalidad" class="col-lg-3 control-label">Nacionalidad</label>
						<div class="col-lg-9"><input type="text" name="nacionalidad_autor" class="form-control" placeholder="Nacionalidad"/></div>
					</div><br>
					<div class="form-group">
						<label for="Año" class="col-lg-3 control-label">Año</label>
						<div class="col-lg-3"><input type="date" name="año_autor" class="form-control" /></div>
						<label for="Web" class="col-lg-2 control-label">Web</label>
						<div class="col-lg-4"><input type="text" name="web_autor" class="form-control" placeholder="Pagina Web"/></div>
					</div><br>
					<div class="form-group">
						<label for="Correo electronico" class="col-lg-3 control-label">Email</label>
						<div class="col-lg-9"><input type="text" name="email_autor" class="form-control" placeholder="Email"/></div>
					</div><br>
					<div class="form-group">
						<label for="Direccion" class="col-lg-3 control-label">Direccion</label>
						<div class="col-lg-9"><input type="text" name="direccion_autor" class="form-control" placeholder="Direccion"/></div>
					</div><br>
					<div class="form-group">
						<label for="Pais" class="col-lg-3 control-label">Pais</label>
						<div class="col-lg-3"><select name='pais_autor' class="form-control" placeholder="Pais">
									<?php
										$consulta = "SELECT nombre_pais FROM paises ORDER by nombre_pais";
										$rec=mysql_query($consulta);
										while($row=mysql_fetch_array($rec))
										{
										echo "<option>";
										echo $row['nombre_pais'];
										echo "</option>";
										}
									?></select>
						</div>
						<label for="Ciudad" class="col-lg-2 control-label">Ciudad</label>
						<div class="col-lg-4"><input type="text" name="ciudad_autor" class="form-control" class="col-lg-2" placeholder="Nacionalidad"/></div>
					</div><br>
					<div class="form-group">
						<label for="Telefono" class="col-lg-3 control-label">Telefono</label>
						<div class="col-lg-3"><input type="number" name="telefono_autor" class="form-control" placeholder="Telefono"/></div>
						<label for="Celular" class="col-lg-2 control-label">Celular</label>
						<div class="col-lg-4"><input type="number" name="celular" class="form-control" placeholder="Celular"/></div>
					</div><br>
				</div>
				<div class="form-group col-lg-4">
					<div class="col-lg-offset-3 foto">
						<table border="1" background="img/foto.png" alt="" class="recuadrofoto">
						<td>
						
						</td>
						</table>
					</div>
					<div class="form-group">
						<div class="col-lg-3">
						<input name="imagen" type="file" class="btn btn-lg"></input></div>
					</div><br>
					<div class="form-group">
						<label for="Ciudad" class="col-lg-5 control-label">Facebook</label>
						<div class="col-lg-7"><input type="text" name="facebook" class="form-control" placeholder="Facebook"/></div>
					</div><br>				
					<div class="form-group">
						<label for="instagram" class="col-lg-5 control-label">Instagram</label>
						<div class="col-lg-7"><input type="text" name="instagram" class="form-control" placeholder="Instagram"/></div>
					</div><br>
					<div class="form-group">
						<label for="skype" class="col-lg-5 control-label">Skype</label>
						<div class="col-lg-7"><input type="text" name="skype" class="form-control" placeholder="Skype"/></div>
					</div><br>
					<div class="form-group">
						<label for="Casa" class="col-lg-5 control-label">Twitter</label>
						<div class="col-lg-7"><input type="text" name="twitter" class="form-control" placeholder="Twitter"/></div>
					</div><br>
				</div><br>
			</div>
			<div class="rellenar2">
				<div class="form-group">
					<label for="reseña" class="col-lg-2 control-label">Reseña</label>
					<div class="col-lg-10"><textarea name="resena_autor" class="form-control" rows="10" placeholder="Escribe una pequeña reseña del libro"></textarea></div>
				</div>
				<div class="btn-group col-lg-offset-10 btn-group-md">
					<button type="submit" value="guardar" class="btn btn-md btn-final ">Guardar</button>
					<button type="submit" value="actualizar" class="btn btn-md btn-final">Actualizar</button>
					<button class="btn btn-md btn-final" ><a href="#inicio">Inicio</a></button>
				</div>
			</div>
		</form>
	</div><!-- fin main -->
	</section>

	

	<footer>
	</footer>
</body>
</html>

