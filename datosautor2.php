<?php
	require("conexion1.php");
	
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<div style="background-color:black; color:white; padding:20px;">
<link rel="stylesheet" href="style.css" type="text/css">
<title><br>Prueba Conexion base de datos La Silueta<br></title>
</div>
</head>

<body>
<article>
  
  <header style="background-color:rgb(255, 221, 204)">
  	
   	<a href="index.php"><img src="img\logo2.png" align="right" alt="logo2" href="index.php" style="width:217px;height:52px;padding:20px"></a>
	<span id="headertext">Anaquel de </span>
  </header>
</article>

<div id="sidebar" class="visible">
	<ul>
	<li class=""><a href="">Inicio</a></li>
	<li class=""><a href="">Menu Principal</a></li>
	<li class=""><a href="">Editar</a></li>
	<li class=""><a href="">Salir</a></li>
	</ul><br><br><br><br>
	<ul>
	<li><a href="">Ingresar</a></li>
	<li><a href="">Consultar</a></li>
	</ul>
</div>

<div id="central_titulos" style="background-color:black; color:white; padding:20px;">
<h1>La Silueta</h1>

<button type="submit"><a href="#autor">Autor</a></button>
<button type="submit"><a href="#editoriales">Editorial</a></button>
<button type="submit"><a href="#libro">Libro</a></button>
<button type="submit"><a href="#tecnica_libro">Caracteristicas Tecnicas del Libro</a></button>
<button type="submit"><a href="#costos">Costos</a></button>
<button type="submit"><a href="#tipo_papel">Tipos de Papel</a></button>
<button type="submit"><a href="#proveedores">Proveedores Editorial</a></button>
<button type="submit"><a href="#bodegas">Bodegas</a></button>
<button type="submit"><a href="#movimientos">Movimientos Bodega</a></button>
</div>

<div id="central" style="background-color:black; color:white; padding:20px;">
<br><br>

<?php

	$nombre_autor=$_POST['nombre_autor'];
	$apellido_autor=$_POST['apellido_autor'];
	$seudonimo_autor=$_POST['seudonimo_autor'];
	$email_autor=$_POST['email_autor'];
	$direccion_autor=$_POST['direccion_autor'];
	$ciudad_autor=$_POST['ciudad_autor'];
	$pais_autor=$_POST['pais_autor'];
	$telefono_autor=$_POST['telefono_autor'];
	$reseña_autor=$_POST['reseña_autor'];

	echo'Esta corriendo <br>';

	if($_POST['ingresar'])
	{	
		if (isset($_POST['apellido_autor'])&& !empty($_POST['apellido_autor'])and $_POST['nombre_autor'] && $_POST['nombre_autor'])
		{
			$EnlaceBD= $conexion;
				
			$insert=mysql_query(
				"INSERT INTO AUTOR VALUES 
				('',
				'$nombre_autor',
				'$apellido_autor',
				'$seudonimo_autor',
				'$email_autor',
				'$direccion_autor',
				'$ciudad_autor',
				'$pais_autor',
				'$telefono_autor',
				'$reseña_autor')"
				);
			
			?>
				<script languaje="javascript">
			    alert("Usuario ingresado correctamente!");
			    location.href = "autor.php";
			   </script>
			<?php
		}else{
			echo ('No se pudo realizar la operacion');
		}
	}
	if($_POST['buscar'])
	{	
		if (isset($_POST['nombre_autor'])&& !empty($_POST['nombre_autor']))
			{
				$EnlaceBD= $conexion;
					
				mysql_query("SELECT * FROM AUTOR
				 where nombre_autor LIKE '$nombre_autor'");
				echo ('datos enviados correctamente');
		}else
			{
			?>
				<script languaje="javascript">
			    alert("No se pudo realizar la operacion!");
			    location.href = "index.php";
			   </script>
			?><?php
			}
	}	
?>
	<tbody>
<?php
	
		$query="SELECT * FROM AUTOR where nombre_autor LIKE '$nombre_autor'";
		$result=mysql_query($query);

		while ($registro = mysql_fetch_array($result))
		{
			echo 
			"
			<tr>
				<td width='150'>".$registro['id_autor']."</td>
				<td width='150'>".$registro['nombre_autor']."</td> 
				<td width='150'>".$registro['ciudad_autor']."</td>
				<td width='150'>".$registro['pais_autor']."</td>		
			</tr>"
			;
		}
		$numero = mysql_num_rows($result);
		echo "<thead><th width='150' colspan='7' rowspan='7' align='center'>El total de autores con este nombre son : ".$numero."</th></thead>" ;
?>
	</tbody>

<br><br>
</div>

</body>
</html>


