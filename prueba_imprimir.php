<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<title>Prueba Conexion base de datos La Silueta</title>
	<meta charset="UTF-8">
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="printprueba.css" type="text/css" media="print"/>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="style.css" type="text/css"/>
	<link rel="stylesheet" href="formularios.css" type="text/css"/>

</head>
<body>

	<section>
	<div class="main  col-lg-10">
		<form name='form' enctype="multipart/form-data" method='post' action='datos_actualizar_autor.php?var=<?php echo $id_autor?>'>
			<div class="form-group rellenar">
				<div class="col-lg-8">
					<div class="form-group">	
						<label for="Nombre del Autor:" class="col-lg-3 control-label">Nombre</label>
						<div class="col-lg-9"><input type="text" class="form-control" name="nombre_autor" placeholder="Nombre del autor" 
						value=<?php echo $autor['nombre_autor']?> ></input></div>
					</div><br>
					<div class="form-group">	
						<label for="Apellido" class="col-lg-3 control-label">Apellido</label>
						<div class="col-lg-9"><input type="text" class="form-control" name="apellido_autor" placeholder="Apellido"
						value=<?php echo $autor['apellido_autor']?> ></input></div>
					</div><br>
					<div class="form-group">
						<label for="Seudonimo" class="col-lg-3 control-label">Seudonimo</label>
						<div class="col-lg-9"><input type="text" name="seudonimo_autor" class="form-control" placeholder="Seudonimo"
						value=<?php echo $autor['seudonimo_autor']?> ></input></div>
					</div><br>
					<div class="form-group">
						<label for="Nacionalidad" class="col-lg-3 control-label">Nacionalidad</label>
						<div class="col-lg-9"><input type="text" name="nacionalidad_autor" class="form-control" placeholder="Nacionalidad"
						value=<?php echo $autor['nombre_autor']?> ></input></div>
					</div><br>
					<div class="form-group">
						<label for="Año" class="col-lg-3 control-label">Año</label>
						<div class="col-lg-3"><input type="date" name="año_autor" class="form-control"
						value=<?php echo $autor['año_autor']?> ></input></div>
						<label for="Web" class="col-lg-2 control-label">Web</label>
						<div class="col-lg-4"><input type="text" name="web_autor" class="form-control" placeholder="Pagina Web"
						value=<?php echo $autor['web_autor']?> ></input></div>
					</div><br>
					<div class="form-group">
						<label for="Correo electronico" class="col-lg-3 control-label">Email</label>
						<div class="col-lg-9"><input type="text" name="email_autor" class="form-control" placeholder="Email"
						value=<?php echo $autor['email_autor']?> ></input></div>
					</div><br>
					<div class="form-group">
						<label for="Direccion" class="col-lg-3 control-label">Direccion</label>
						<div class="col-lg-9"><input type="text" name="direccion_autor" class="form-control" placeholder="Direccion"
						value=<?php echo $autor['direccion_autor']?> ></input></div>
					</div><br>
					<div class="form-group">
						<label for="Pais" class="col-lg-3 control-label">Pais</label>
						<div class="col-lg-3"><select name='pais_autor' class="form-control" placeholder="Pais" >
									<?php
										$consulta = "SELECT nombre_pais FROM paises ORDER by nombre_pais";
										$rec=mysql_query($consulta);
										while($row=mysql_fetch_array($rec))
										{
										echo "<option>";
										echo $row['nombre_pais'];
										echo "</option>";
										}
										echo "<option selected>".$autor['pais_autor']."</option>";
									?></select>
						</div>
						<label for="Ciudad" class="col-lg-2 control-label">Ciudad</label>
						<div class="col-lg-4"><input type="text" name="ciudad_autor" class="form-control" class="col-lg-2" placeholder="Nacionalidad"
						value=<?php echo $autor['ciudad_autor']?> ></input></div>
					</div><br>
					<div class="form-group">
						<label for="Telefono" class="col-lg-3 control-label">Telefono</label>
						<div class="col-lg-3"><input type="number" name="telefono_autor" class="form-control" placeholder="Telefono"
						value=<?php echo $autor['telefono_autor']?> ></input></div>
						<label for="Celular" class="col-lg-2 control-label">Celular</label>
						<div class="col-lg-4"><input type="number" name="celular" class="form-control" placeholder="Celular"
						value=<?php echo $autor['celular_autor']?> ></input></div>
					</div><br>
				</div>
				<div class="form-group col-lg-4">
					<div class="col-lg-offset-3 foto">
						<table border="1" background="img/foto.png" alt="" class="recuadrofoto">
						<td>
						<!-- <img src="/img/uploads/autores/<?php echo $ruta_img; ?>" alt="" /> -->
						<?php  echo "<img src='/img/uploads/autores/".$ruta."'
									 width='320' height='310'/>";?>
						</td>
						</table>
					</div>
					<div class="form-group">
						<div class="col-lg-12">
						<?php echo "<input name='imagen' type='file' value='".$ruta."' class='btn btn-lg'>"?>
						</input>
						</div>
					</div>
					<br>
					<div class="form-group">
						<label for="Ciudad" class="col-lg-5 control-label">Facebook</label>
						<div class="col-lg-7"><input type="text" name="facebook" class="form-control" placeholder="Facebook"
						value=<?php echo $autor['facebook_autor']?> ></input></div>
					</div><br>				
					<div class="form-group">
						<label for="instagram" class="col-lg-5 control-label">Instagram</label>
						<div class="col-lg-7"><input type="text" name="instagram" class="form-control" placeholder="Instagram"
						value=<?php echo $autor['instagram_autor']?> ></input></div>
					</div><br>
					<div class="form-group">
						<label for="skype" class="col-lg-5 control-label">Skype</label>
						<div class="col-lg-7"><input type="text" name="skype" class="form-control" placeholder="Skype"
						value=<?php echo $autor['skype_autor']?> ></input></div>
					</div><br>
					<div class="form-group">
						<label for="Casa" class="col-lg-5 control-label">Twitter</label>
						<div class="col-lg-7"><input type="text" name="twitter" class="form-control" placeholder="Twitter"
						value=<?php echo $autor['twitter_autor']?> ></input></div>
					</div><br>
				</div><br>
			</div>
			<div class="rellenar2">
				<div class="form-group">
					<label for="reseña" class="col-lg-2 control-label">Reseña</label>
					<div class="col-lg-10 reseña"><textarea name="reseña_autor" class="form-control" rows="10" placeholder="Escribe una pequeña reseña del autor"><?php echo $autor['resena_autor']?></textarea></div>
				</div>
				<div class="btn-group  col-lg-offset-2">
						<button type="submit" value="guardar" class="btn btn-md btn-final ">Guardar</button>
						<button type="submit" value="actualizar" class="btn btn-md btn-final">Actualizar</button>
						<button class="btn btn-md btn-final"><a href="#inicio">Inicio</a></button>
				</div></form>
				<form action="">
				<div class="btn-group col-lg-offset-6">
						<button type="" value="guardar" class="btn btn-md btn-final onclick="JavaScript:windows:print() ">Imprimir Reseña</button>
						<button type="" value="actualizar" class="btn btn-md btn-final">Enviar Reseña</button>
				</div>
				</form>
			</div>
		</form>
	</div><!-- fin main -->
	</section>
	
</body>
</html>