<?php
	 require("conexion1.php");
	 
	 $nombre_autor=$_POST['nombre_autor'];
	 $apellido_autor=$_POST['apellido_autor'];
	 $seudonimo_autor=$_POST['seudonimo_autor'];
	 $pais_autor=$_POST['nacionalidad_autor'];
	
	// $año_autor=$_POST['año_autor'];

	// $email_autor=$_POST['email_autor'];
	// $direccion_autor=$_POST['direccion_autor'];
	// $ciudad_autor=$_POST['ciudad_autor'];
	// $telefono_autor=$_POST['telefono_autor'];
	// $reseña_autor=$_POST['reseña_autor'];
	// $web_autor=$_POST['web_autor'];
	// $celular_autor=$_POST['celular'];
	// $facebook_autor=$_POST['facebook'];
	// $instagram_autor=$_POST['instagram'];
	// $skype_autor=$_POST['skype'];
	// $twitter_autor=$_POST['twitter'];

	// include('conexion1.php'); 

	/*Consulta de mysql con la que indicamos que necesitamos que seleccione
	**solo los campos que tenga como nombre_administrador el que el formulario
	**le ha enviado*/

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
			<li class="title_sidebar">Autores</li>
			<br><br>
			<ul>
			<li class=""><a href="autor.php">Nuevo</a></li>
			<li class=""><a href="consultar_autor.php">Consulta</a></li>
			</ul>
			<div class="busquedas col-lg-10">
				<form name="busqueda" method="post" action="datos_consulta_autor.php" class="" >
					<div class="form-group">
						<label for="Nombre del Autor:" class="control-label">Nombre</label><br>
						<input type="text" class="form-control" name="nombre_autor" placeholder="Nombre del autor"/>
					</div>
					<div class="form-group">	
						<label for="Apellido" class="control-label">Apellido</label>
						<input type="text" class="form-control" name="apellido_autor" placeholder="Apellido"/>
					</div>
					<div class="form-group">
						<label for="Seudonimo" class="control-label">Seudonimo</label>
						<input type="text" name="seudonimo_autor" class="form-control" placeholder="Seudonimo" />
					</div>
					<div class="form-group">
						<label for="Nacionalidad" class="control-label">Nacionalidad</label>
						<input type="text" name="nacionalidad_autor" class="form-control" placeholder="Nacionalidad"/>
					</div>
					<div class="form-group">
						<label for="Año" class="control-label">Año</label>
						<input type="date" name="año_autor" class="form-control" />
					</div>
					<div class="form-group"><button type="submit" class="btn btn-info ">Consultar</button></div>
				</form>
			</div>
			<br>
			<ul>
			<li><a href="inicio.php">Usuario</a></li>
			</ul></ul>
		<img src="img\logo_1.svg" alt="logo_anaquel" class="aside-img col-lg-7 col-lg-offset-1 ">
	</aside>
	<header style="">
	   	<img src="img\logo2.png" alt="logo2" align="right">
	</header>

	<section>
	<div class="main col-lg-10">
		<?php 
		$query="SELECT * FROM autor";
		$resultado = mysql_query($query);
		
			 // '$nombre_autor'");

		//Validamos si el nombre del administrador existe en la base de datos o es correcto
		if($row = mysql_fetch_array($resultado))
		{  // echo 'Usuario existente:<br><br> ';   
		//Si el usuario es correcto ahora validamos su contraseña
		  	
				?>

					<div class="datagrid">
					<table class="table table-striped" align="center">
						<thead>
						<th colspan="1" rowspan="1" align="center">id</th>
						<th colspan="1" rowspan="1" align="center">Nombre</th>
						<th colspan="1" rowspan="1" align="center">Apellido</th>
						<th colspan="1" rowspan="1" align="center">Seudonimo</th>
						<th colspan="1" rowspan="1" align="center">Pais</th>
						<th colspan="1" rowspan="1" align="center">Ciudad</th>
						<th colspan="1" rowspan="1" align="center">Web</th>
						<th colspan="1" rowspan="1" align="center">Intagram</th>
						<th colspan="1" rowspan="1" align="center">Facebook</th>
						<th colspan="1" rowspan="1" align="center">Skype</th>

						</thead>
						<tbody>
						<?php

						// $query="select * from autor";
						$query="SELECT * FROM autor WHERE nombre_autor='".$nombre_autor."'OR apellido_autor='".$apellido_autor."'OR seudonimo_autor='".$seudonimo_autor."'";
						$query.=" OR pais_autor='".$pais_autor."'";
						$result=mysql_query($query);



							while ($registro = mysql_fetch_array($result))
							{
								echo 
								"
								<tr>
									<form action='autor.php'> 
									<td width='150'><a href='actualizar_autor.php?var=".$registro['id_autor']."'>".$registro['id_autor']."</a></td>
									<td width='150'>".$registro['nombre_autor']."</td>
									<td width='150'>".$registro['apellido_autor']."</td> 
									<td width='150'>".$registro['seudonimo_autor']."</td>
									<td width='150'>".$registro['pais_autor']."</td>
									<td width='150'>".$registro['ciudad_autor']."</td>		
									<td width='150'>".$registro['web_autor']."</td>
									<td width='150'>".$registro['instagram_autor']."</td>
									<td width='150'>".$registro['facebook_autor']."</td>
									<td width='150'>".$registro['skype_autor']."</td>
									</form>
								</tr>"
								;
							}
							$numero = mysql_num_rows($result);
							echo "<thead><th width='150' colspan='10' rowspan='7' align='center'>El total de registros es de: ".$numero."</th></thead>" ;
						?>
						</tbody>
					</table>
				<div>
<?php
		 }
		else
		{
		 //en caso que el nombre de administrador es incorrecto enviamos un msj y redireccionamos a login.php
?>
		 <script languaje="javascript">
		  alert("El Usuario no se encuentra registrado!");
		  location.href = "consultar_autor.php";
		 </script>
<?php   
		        
		}

		//Mysql_free_result() se usa para liberar la memoria empleada al realizar una consulta
		mysql_free_result($result);

		/*Mysql_close() se usa para cerrar la conexión a la Base de datos y es 
		**necesario hacerlo para no sobrecargar al servidor, bueno en el caso de
		**programar una aplicación que tendrá muchas visitas ;) .*/
		mysql_close();		

?>
	</div>
	
	
	</section>

	

	<footer>
	</footer>
</body>
</html>

