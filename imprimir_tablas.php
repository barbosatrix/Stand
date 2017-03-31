<?php
	require("conexion1.php");
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"
<div style="background-color:black; color:white; padding:20px;">
<title><br>Prueba Conexion base de datos La Silueta<br></title>
</div>
</head>

<body>
<article>
  <header style="background-color:rgb(255, 221, 204)">
   	<img src="img\logo2.png" alt="logo2" style="width:217px;height:52px;padding:20px">
  </header>
</article>
<div style="background-color:black; color:white; padding:20px;">
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

<br><br>

<div class="datagrid">
<table align="center" border="1" cellpadding="2" cellspacing="2">
<thead>
<th colspan="1" rowspan="1" align="center">id</th>
<th colspan="1" rowspan="1" align="center">Nombre</th>
<th colspan="1" rowspan="1" align="center">Pais</th>
<th colspan="1" rowspan="1" align="center">Ciudad</th>
</thead>
<tbody>
<?php

$query="select * from autor";
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
	echo "<thead><th width='150' colspan='7' rowspan='7' align='center'>El total de registros es de: ".$numero."</th></thead>" ;
?>
</tbody>
</table>
<div>
<br>
<br>

<table id="libro" border="1" style="width:30%"> 
	<!--Tabla Libro -->
	<form name="ingreso" method="post" action="pruebabusqeda.php">
	<tr>
	<td colspan="2"><center><p>Datos Libro</p></td>
	</tr>
	<tr>
	<td>Número de Libro:</td>
	<td><input type="number" name="id_libro" id="id_libro"/></td>
	</tr>
	<tr>
	<td>Editorial:</td>
	<td>
	<!--<input type="text" name="id_editorial" id="id_editorial"/>-->
		<select name='nombre_editorial' id='nombre_editorial'/>
			<?php
				$consulta = "SELECT nombre_editorial FROM editorial ORDER by nombre_editorial";
				$rec=mysql_query($consulta);
				while($row=mysql_fetch_array($rec))
				{
				echo "<option>";
				echo $row['nombre_editorial'];
				echo "</option>";
				}
			?>
		</select>
	</td>
	</tr>
	<tr><td>ISBN</td>
	<td><input type="text" name="isbn" id="isbn"/></td>
	</tr>
	<tr>
	<td>Titulo</td>
	<td><input type="text" name="titulo_libro" id="titulo_libro"/></td>
	</tr>
	<tr>
	<td>Autor 1</td>
	<td>
	<!--<input type="number" name="autor1" id="autor1"/>-->
	<select name='autor1' id='autor1'/>
			<?php
				$consulta = "SELECT nombre_autor FROM autor ORDER by nombre_autor";
				$rec=mysql_query($consulta);
				while($row=mysql_fetch_array($rec))
				{
				echo "<option>";
				echo $row['nombre_autor'];
				echo "</option>";
				}
			?>
		</select>
	</td>
	</tr>
	<tr>
	<td>Autor 2</td>
	<td>
	<!--<input type="number" name="autor2" id="autor2"/>-->
	<select name='autor2' id='autor2'>
			<?php
				$consulta = "SELECT nombre_autor FROM autor ORDER by nombre_autor";
				$rec=mysql_query($consulta);
				while($row=mysql_fetch_array($rec))
				{
				echo "<option>";
				echo $row['nombre_autor'];
				echo "</option>";
				}
			?>
	</select>
	</td>
	</tr>
	<tr>
	<td>Autor 3</td>
	<td>
	<!--<input type="number" name="autor3" id="autor3"/>-->
		<select name='autor3' id='autor3'>
			<?php
				$consulta = "SELECT nombre_autor FROM autor ORDER by nombre_autor";
				$rec=mysql_query($consulta);
				while($row=mysql_fetch_array($rec))
				{
				echo "<option>";
				echo $row['nombre_autor'];
				echo "</option>";
				}
			?>
		</select>
	</td>
	</tr>
	<tr>
	<td>Ilustrador 1</td>
	<td>
	<!--<input type="number" name="ilustrador1" id="ilustrador1"/>-->
		<select name='ilustrador1' id='ilustrador1'>
			<?php
				$consulta = "SELECT nombre_autor FROM autor ORDER by nombre_autor";
				$rec=mysql_query($consulta);
				while($row=mysql_fetch_array($rec))
				{
				echo "<option>";
				echo $row['nombre_autor'];
				echo "</option>";
				}
			?>
		</select>
	</td>
	</tr>
	<tr>
	<td>Ilustrador 2</td>
	<td>
	<!--<input type="number" name="ilistrador2" id="ilustrador2"/>-->
		<select name='ilustrador2' id='ilustrador2'>
			<?php
				$consulta = "SELECT nombre_autor FROM autor ORDER by nombre_autor";
				$rec=mysql_query($consulta);
				while($row=mysql_fetch_array($rec))
				{
				echo "<option>";
				echo $row['nombre_autor'];
				echo "</option>";
				}
			?>
		</select>
	</td>
	</tr>
	<tr>
	<td>Fecha</td>
	<td><input type="date" name="fecha_libro" id="fecha_libro"/></td>
	</tr>
	<tr>
	<td>Edicion</td>
	<td><input type="number" name="edicion_libro" id="edicion libro"/></td>
	</tr>
	<tr>
	<td>Tiraje</td>
	<td><input type="number" name="tiraje_libro" id="tiraje_libro"/></td>
	</tr>
	<tr>
	<td>Peso</td>
	<td><input type="number" name="peso_libro" id="peso_libro"/></td>
	</tr>
	<tr>
	<td>Alto</td>
	<td><input type="number" name="alto_libro" id="alto_libro"/></td>
	</tr>
	<tr>
	<td>Ancho</td>
	<td><input type="number" name="ancho_libro" id="ancho_libro"/></td>
	</tr>
	
</table>
	<table>
	<tr>
	<td><input type="submit" value="Ingresar" size="20"/></td>
	<td><input type="submit" value="Buscar" size="20"/></td>
	<td><input type="submit" value="Eliminar" size="20"/></td>
	<td><input type="submit" value="Modificar" size="20"/></td>
	<tr>
	</form>
</table><br>

<table id="autor" border="1" style="width:30%"> 
	<form name="ingreso" method="post" action="procesardatos.php">
	<tr><td colspan="2"><center><p>Datos Autor</p></td></tr>
	<tr>
	<td>Número de Autor:</td>
	<td><input type="number" name="id_autor" id="id_autor"/></td>
	</tr>
	<tr><td>Nombre del Autor:</td>
	<td>
	<input type="text" name="nombre_autor" id="nombre_autor"/></td>
	</tr>
	<tr><td>Apellido</td>
	<td><input type="text" name="apellido_autor" id="apellido_autor"/></td>
	</tr>
	<tr><td>Seudonimo</td>
	<td><input type="text" name="seudonimo_autor" id="seudonimo_autor"/></td>
	</tr>
	<tr><td>Correo electronico</td>
	<td><input type="text" name="email_autor" id="email_autor"/></td>
	</tr>
	<tr><td>Direccion</td>
	<td><input type="text" name="direccion_autor" id="direccion_autor"/></td>
	</tr>
	<tr>
	<td>Ciudad</td>
	<td><input type="text" name="ciudad_autor" id="ciudad_autor"/></td>
	</tr>
	<tr><td>Pais</td>
	<td><input type="text" name="pais_autor" id="pais_autor"/></td>
	</tr>
	<tr><td>Telefono</td>
	<td><input type="textbox" name="telefono_autor" id="telefono_autor"/></td>
	</tr>
	<tr><td>Reseña</td>
	<td><input type="textbox" name="reseña_autor" id="reseña_autor"/></td>
	</tr>
</table>
<br><br>
<table>
<tr>
<td><input type="submit" value="Ingresar" size="20"/></td>
<td><input type="submit" value="Buscar" size="20"/></td>
<td><input type="submit" value="Eliminar" size="20"/></td>
<td><input type="submit" value="Modificar" size="20"/></td>
<tr>
</form>
</table>








<table id="tecnica_libro" border="1"><!--Tabla Tecnica de Libro -->
	<form name="ingreso" method="post" action="procesardatos.php">
	<tr><td colspan="2"><center><p>Caracteristicas Tecnicas del Libro</p></td></tr>
	<tr>
		<td>Id Caracteristicas:</td>
		<td><input type="number" name="id_autor" id="id_autor"/></td>
		</tr>
		<tr>
		<td>Titulo del Libro:</td>
		<td><input type="text" name="nombre_autor" id="nombre_autor"/></td>
		</tr>
		<tr><td>Papel Paginas</td>
		<td><input type="text" name="apellido_autor" id="id_autor"/></td>
		</tr>
		<tr>
		<td>Gramaje Paginas</td>
		<td><input type="text" name="seudonimo_autor" id="nombre_autor"/></td>
		</tr>
		<tr>
		<td>Proveedor Papel Paginas</td>
		<td><input type="mail" name="nacionalidad_autor" id="nombre_autor"/></td>
		</tr>
		<tr>
		<td>Papel Paginas 2</td>
		<td><input type="mail" name="email_autor" id="nombre_autor"/></td>
		</tr>
		<tr>
		<td>Gramaje Paginas 2</td>
		<td><input type="text" name="direccion_autor" id="id_autor"/></td>
		</tr>
		<tr>
		<td>Proveedor Papel Paginas 2</td>
		<td><input type="text" name="ciudad_autor" id="nombre_autor"/></td>
		</tr>
		<tr>
		<td>Papel Paginas 3</td>
		<td><input type="text" name="pais_autor" id="id_autor"/></td>
		</tr>
		<tr>
		<td>Gramaje Paginas 3</td>
		<td><input type="number" name="telefono_autor" id="nombre_autor"/></td>
		</tr>
		<tr>
		<td>Proveedor Papel Paginas 3</td>
		<td><input type="textbox" name="reseña_autor" id="id_autor"/></td>
		</tr>
		<tr>
		<td>Formato Impresion Paginas</td>
		<td><input type="textbox" name="reseña_autor" id="id_autor"/></td>
		</tr>
		<tr>
		<td>Cantidad Formatos por Libro</td>
		<td><input type="textbox" name="reseña_autor" id="id_autor"/></td>
		</tr>
		<tr>
		<td>Papel Portada</td>
		<td><input type="textbox" name="reseña_autor" id="id_autor"/></td>
		</tr>
		<tr>
		<td>Gramaje Portada</td>
		<td><input type="textbox" name="reseña_autor" id="id_autor"/></td>
		</tr>
		<tr>
		<td>Proveedor Papel Portada</td>
		<td><input type="textbox" name="reseña_autor" id="id_autor"/></td>
		</tr>
		<tr>
		<td>Formato impresion Portada</td>
		<td><input type="textbox" name="reseña_autor" id="id_autor"/></td>
		</tr>
		<tr>
		<td>Papel guardas</td>
		<td><input type="textbox" name="reseña_autor" id="id_autor"/></td>
		</tr>
		<tr>
		<td>Gramaje Guardas</td>
		<td><input type="textbox" name="reseña_autor" id="id_autor"/></td>
		</tr>
		<tr>
		<td>Proveedor Papel Guardas</td>
		<td><input type="textbox" name="reseña_autor" id="id_autor"/></td>
		</tr>
		<tr>
		<td>Papel Sobrecubierta</td>
		<td><input type="textbox" name="reseña_autor" id="id_autor"/></td>
		</tr>
		<tr>
		<td>Gramaje Papel Sobrecubierta</td>
		<td><input type="textbox" name="reseña_autor" id="id_autor"/></td>
		</tr>
		<tr>
		<td>Proveedor Papel sobrecubierta</td>
		<td><input type="textbox" name="reseña_autor" id="id_autor"/></td>
		</tr>
		<tr>
		<td>Encuadernacion</td>
		<td><input type="textbox" name="reseña_autor" id="id_autor"/></td>
		</tr>
		<tr>
		<td>Proveedor Encuadernacion</td>
		<td><input type="textbox" name="reseña_autor" id="id_autor"/></td>
		</tr>
		<tr>
		<td>Caracteristicas Especiales</td>
		<td><input type="textbox" name="reseña_autor" id="id_autor"/></td>
		</tr>
		<tr>
		<td>Proveedor Caracteristicas Especiales</td>
		<td><input type="textbox" name="reseña_autor" id="id_autor"/></td>
		</tr>
		<tr>
		<td>Tinta 1</td>
		<td><input type="textbox" name="reseña_autor" id="id_autor"/></td>
		</tr>
		<tr>
		<td>Tinta 2</td>
		<td><input type="textbox" name="reseña_autor" id="id_autor"/></td>
		</tr>
		<tr>
		<td>Tinta 3</td>
		<td><input type="textbox" name="reseña_autor" id="id_autor"/></td>
		</tr>
	</table>		
	<table>
	<tr>
	<td><input type="submit" value="Ingresar" size="20"/></td>
	<td><input type="submit" value="Buscar" size="20"/></td>
	<td><input type="submit" value="Eliminar" size="20"/></td>
	<td><input type="submit" value="Modificar" size="20"/></td>
	<tr>
	</form>
	</table>
<br><br>

<table id="costos" border="1"><!--Costos-->
	<tr><td colspan="2"><center><p>Costos del Libro</p></td></tr>
	<tr>
	<td>Id_Costos:</td>
	<td><input type="number" name="id_costos" id="id_costos"/></td>
	</tr>
	<tr>
	<td>Titulo del Libro:</td>
	<td><input type="text" name="nombre_libro" id="nombre_libro"/></td>
	</tr>
	<tr><td>Costo Papel</td>
	<td><input type="number" name="costo_papel" id="costo_papel"/></td>
	</tr>
	<tr>
	<td>Costo Planchas</td>
	<td><input type="number" name="costo_planchas" id="costo_planchas"/></td>
	</tr>
	<tr>
	<td>Costo Impresion</td>
	<td><input type="number" name="costo_impresion" id="costo_impresion"/></td>
	</tr>
	<tr>
	<td>Costo Encuadernacion</td>
	<td><input type="number" name="costo_encuadernacion" id="costo_encuadernacion"/></td>
	</tr>
	<tr>
	<td>Costo Termosellado</td>
	<td><input type="text" name="costo_impresion" id="costo_impresion"/></td>
	</tr>
	<td>Costo Extras</td>
	<td><input type="number" name="costo_extras" id="costo_extras"/></td>
	</tr>
	<tr>
</table>

	<table border="0">
	<tr>
		<td><input type="submit" value="Ingresar" size="20"/></td>
		<td><input type="submit" value="Buscar" size="20"/></td>
		<td><input type="submit" value="Eliminar" size="20"/></td>
		<td><input type="submit" value="Modificar" size="20"/></td>
	</tr>
	</form>
	</table>

<br>
<br>

<table id="editoriales" border="1"><!--Tipos de Papel-->
	<form name="ingreso_editorial" method="post" action="datos_editorial.php">
	<tr><td colspan="2"><center><p>Editoriales</p></td></tr>
	<tr>
	<td>Id Editorial:</td>
	<td><input type="number" name="id_editorial" id="id_editorial"/></td>
	</tr>
	<tr>
	<td>Nombre Editorial:</td>
	<td><input type="text" name="nombre_editorial" id="nombre_editorial"/></td>
	</tr>
	<tr>
	<td>Direccion:</td>
	<td><input type="text" name="direccion_editorial" id="direccion_editorial"/></td>
	</tr>
	<tr>
	<td>Ciudad:</td>
	<td><input type="text" name="ciudad_editorial" id="ciudad_editorial"/></td>
	</tr>
	<tr>
	<td>Pais:</td>
	<td><input type="text" name="pais_editorial" id="pais_editorial"/></td>
	</tr>
	<td>Telefono:</td>
	<td><input type="number" name="telefono_editorial" id="telefono_editorial"/></td>
	</tr>
</table>
	<table>
	<tr>
	<td><input type="submit" value="Ingresar" size="20"/></td>
	<td><input type="submit" value="Buscar" size="20"/></td>
	<td><input type="submit" value="Eliminar" size="20"/></td>
	<td><input type="submit" value="Modificar" size="20"/></td>
	</tr>
	</form>
	</table>
<br><br>

<table id="bodegas" border="1" style="width:30%"> 
	<form name="ingreso" method="post" action="procesardatos.php">
	<tr><td colspan="2"><center><p>Bodegas</p></td></tr>
	<tr>
	<td>Número de Bodega:</td>
	<td><input type="number" name="id_bodega" id="id_bodega"/></td>
	</tr>
	<tr><td>Nombre Bodega:</td>
	<td><input type="text" name="nombre_bodega" id="nombre_bodega"/></td>
	</tr>
	<tr><td>Contacto</td>
	<td><input type="text" name="contacto_bodega" id="contacto_bodega"/></td>
	</tr>
	<tr><td>Correo electronico</td>
	<td><input type="mail" name="email_bodega" id="email_bodega"/></td>
	</tr>
	<tr><td>Telefono</td>
	<td><input type="number" name="telefono_bodega" id="telefono_bodega"/></td>
	</tr>
	<tr><td>Direccion</td>
	<td><input type="text" name="direccion_bodega" id="direccion_bodega"/></td>
	</tr>
	<tr>
	<td>Ciudad</td>
	<td><input type="text" name="ciudad_bodega" id="ciudad_bodega"/></td>
	</tr>
	<tr><td>Pais</td>
	<td><input type="number" name="pais_bodega" id="pais_bodega"/></td>
	</tr>
</table>
	<table>
	<tr>
		<td><input type="submit" value="Ingresar" size="20"/></td>
		<td><input type="submit" value="Buscar" size="20"/></td>
		<td><input type="submit" value="Eliminar" size="20"/></td>
		<td><input type="submit" value="Modificar" size="20"/></td>
	</tr>
	</form>
	</table>
<br><br>

<table id="tipo_papel" border="1"><!--Tipos de Papel-->
	<form name="papeles" method="post" action="datos_papel.php">
	<tr><td colspan="2"><center><p>Tipos de Papel</p></td></tr>
	<tr>
	<td>Id del Papel:</td>
	<td><input type="number" name="id_papel" id="id_papel"/></td>
	</tr>
	<tr>
	<td>Nombre:</td>
	<td><input type="text" name="nombre_papel" id="nombre_papel"/></td>
	</tr>
	<tr><td>Gramaje</td>
	<td><input type="number" name="gramaje" id="gramaje"/>gr</td>
	</tr>
	<tr>
	<td>Valor del pliego</td>
	<td><input type="number" name="valor_pliego" id="valor_pliego"/></td>
	</tr>
	<tr>
</table>
	<table border="0">
	<tr>
		<td><input type="submit" value="Ingresar" size="20"/></td>
		<td><input type="submit" value="Buscar" size="20"/></td>
		<td><input type="submit" value="Eliminar" size="20"/></td>
		<td><input type="submit" value="Modificar" size="20"/></td>
	<tr>
	</form>
	</table>
	<br>
	<br>
	
<table id="proveedores" border="1"><!--Tabla Proveedores-->
	<tr><td colspan="2"><center><p>Proveedores</p></td></tr>
	<tr>
		<td>Id Proveedor:</td>
		<td><input type="number" name="id_autor" id="id_autor"/></td>
		</tr>
		<tr>
		<td>Nombre Proveedor:</td>
		<td><input type="text" name="nombre_autor" id="nombre_autor"/></td>
		</tr>
		<tr><td>Contacto del Proveedor</td>
		<td><input type="text" name="apellido_autor" id="id_autor"/></td>
		</tr>
		<tr>
		<td>Correo electronico</td>
		<td><input type="text" name="seudonimo_autor" id="nombre_autor"/></td>
		</tr>
		<tr>
		<td>Telefono</td>
		<td><input type="mail" name="nacionalidad_autor" id="nombre_autor"/></td>
		</tr>
		<tr>
		<td>Direccion</td>
		<td><input type="mail" name="email_autor" id="nombre_autor"/></td>
		</tr>
		<tr>
		<td>Ciudad</td>
		<td><input type="text" name="direccion_autor" id="id_autor"/></td>
	</tr>
</table>
		
	<table border="0">
	<tr>
		<td><input type="submit" value="Ingresar" size="20"/></td>
		<td><input type="submit" value="Buscar" size="20"/></td>
		<td><input type="submit" value="Eliminar" size="20"/></td>
		<td><input type="submit" value="Modificar" size="20"/></td>
	</tr>
	</form>
	</table>
		
<br><br>

<table id="movimientos" border="1"><!--Movimientos-->
	<tr><td colspan="2"><center><p>Movimientos Bodegas</p></td></tr>
	<tr>
	<td>Id_Movimiento:</td>
	<td><input type="number" name="id_movimiento" id="id_movimiento"/></td>
	</tr>
	<tr>
	<td>Tipo de Movimiento:</td>
	<td><input type="text" name="tipo_movimiento" id="tipo_movimiento"/></td>
	</tr>
	<tr><td>Bodega Salida</td>
	<td><input type="text" name="bodega_salida" id="bodega_salida"/></td>
	</tr>
	<tr>
	<tr><td>Bodega Entrada</td>
	<td><input type="text" name="bodega_entrada" id="bodega_entrada"/></td>
	</tr>
	<tr>
	<td>Fecha</td>
	<td><input type="number" name="costo_planchas" id="costo_planchas"/></td>
	</tr>
	<tr>
	<td>Responsable</td>
	<td><input type="number" name="costo_impresion" id="costo_impresion"/></td>
	</tr>
	<tr>
	<td>Libro</td>
	<td><input type="number" name="costo_encuadernacion" id="costo_encuadernacion"/></td>
	</tr>
	<tr>
</table>

	<table border="0">
	<tr>
		<td><input type="submit" value="Ingresar" size="20"/></td>
		<td><input type="submit" value="Buscar" size="20"/></td>
		<td><input type="submit" value="Eliminar" size="20"/></td>
		<td><input type="submit" value="Modificar" size="20"/></td>
	</tr>
	</form>
	</table>

<br>
<br>




<table border="1">
	<tr>
	<form name="ingreso" method="post" action="procesardatos.php">
	<tr>	<!-- Titulos  -->
	<td><center>
		<table border="1" style="width:30%">
			<tr><td><center>Referencias Libros</center></td></tr>
		</table>
		</center>
	</td>
	<td><center>
		<table border="1" style="width:30%">
			<tr><td><center>Autores</center></td></tr>
		</table>
		</center>		
	</td>	
	<td><center>
		<table border="1" style="width:30%">
			<tr><td><center>Caracterisricas Tecnicas Libro</center></td></tr>
		</table>
		</center>		
	</td>	
	<td><center>
		<table border="1" style="width:30%">
			<tr><td><center>Tipos de Papel</center></td></tr>
		</table>
		</center>		
	</td>	
	<td><center>
		<table border="1" style="width:30%">
			<tr><td><center> Proveedores</center></td></tr>
		</table>
	</td>
</table>
<br>
<br>
</div>
<div style="background-color:rgb(128,128,128);color:white">
Segunda Seccion
<br>
<br>
<br>
<br>
</h2>
</div>
</body>
</html>


