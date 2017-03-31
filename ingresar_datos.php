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
   	<a href="index.php"><img src="img\logo2.png" alt="logo2" href="index.php" style="width:217px;height:52px;padding:20px"></a>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  </header>
</article>
<div id="inicio" style="background-color:black; color:white; padding:20px;">
<div id="sidebar">
<ul>
	<li><a href="#"></a>Link 1</li>
	<li><a href="#"></a>Link 2</li>
	<li><a href="#"></a>Link 3</li>
	<li><a href="#"></a>Link 4</li>
	<li><a href="#"></a>Link 5</li>
</div>

<h1>La Silueta</h1>

<button type="submit"><a href="autor.php">Autor</a></button>
<button type="submit"><a href="#editoriales">Editorial</a></button>
<button type="submit"><a href="#libro">Libro</a></button>
<button type="submit"><a href="#tecnica_libro">Caracteristicas Tecnicas del Libro</a></button>
<button type="submit"><a href="#costos">Costos</a></button>
<button type="submit"><a href="#tipo_papel">Tipos de Papel</a></button>
<button type="submit"><a href="#proveedores">Proveedores Editorial</a></button>
<button type="submit"><a href="#bodegas">Bodegas</a></button>
<button type="submit"><a href="#movimientos">Movimientos Bodega</a></button>
<button type="submit"><a href="usuario.php">Crear Usuario</a></button>
</div>

<div id="cuerpo" style="background-color:black; color:white; padding:20px;">
<br><br>

<form name="libro" method="post" action="pruebabusqeda.php">
<table id="libro" border="1" style="width:30%"> <!--Tabla Libro -->
	<tr>
	<td colspan="2"><center><p>Datos Libro</p></td>
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
		</select></td>
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
	<td>Ruta Archivos</td>
	<td><input type="text" name="ruta_archivos" id="ruta_archivos"/></td>
	</tr>
	<tr>
	<tr>
	<td>Precio Venta</td>
	<td><input type="number" name="precio_venta_libro" id="precio_venta_libro"/></td>
	</tr>
	<tr>
	<td>Costo</td>
	<td><input type="number" name="tiraje_libro" id="tiraje_libro"/></td>
	</tr>
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
	<td><input type="submit" name="ingresar" value="Ingresar" size="20"/></td>
	<td><input type="submit" value="Buscar" size="20"/></td>
	<td><input type="submit" value="Eliminar" size="20"/></td>
	<td><input type="submit" value="Modificar" size="20"/></td>
	<td><button type="submit"><a href="#inicio">Inicio</a></button></td>
	</tr>
	
</table>
</form><br><br>


<form name="autor" method="post" action="datos_autor.php">
<table id="autor" border="1" style="width:30%"> <!--Autor -->
	<tr><td colspan="2"><center><p>Datos Autor</p></td></tr>
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
	<td>
	<select name='pais_autor' id='pais_autor'/>
			<?php
				$consulta = "SELECT nombre_pais FROM paises ORDER by nombre_pais";
				$rec=mysql_query($consulta);
				while($row=mysql_fetch_array($rec))
				{
				echo "<option>";
				echo $row['nombre_pais'];
				echo "</option>";
				}
			?>
	</select>
	</td>
	</tr>
	<tr><td>Telefono</td>
	<td><input type="textbox" name="telefono_autor" id="telefono_autor"/></td>
	</tr>
	<tr><td>Reseña</td>
	<td><input type="textbox" name="reseña_autor" id="reseña_autor"/></td>
	</tr>
</table>
<table>
	<tr>
	<td><input type="submit" value="Ingresar" size="20"/></td>
	<td><input type="submit" value="Buscar" size="20"/></td>
	<td><input type="submit" value="Eliminar" size="20"/></td>
	<td><input type="submit" value="Modificar" size="20"/></td>
	<td><button type="submit"><a href="#inicio">Inicio</a></button></td>
	</tr>
	
</table>
</form>
<br><br>

<form name="usuarios" method="post" action="crear_usuario.php">
<table id="usuarios" border="1" style="width:30%"> <!--Usuarios -->
	<tr><td colspan="2"><center><p>Datos Usuario</p></td></tr>
	<tr>
	<td>Numero de Cedula:</td>
	<td><input type="number" name="cedula" id="cedula"/></td>
	</tr>
	<tr><td>Nombre del Usuario:</td>
	<td>
	<input type="text" name="nombre_usuario" id="nombre_usuario"/></td>
	</tr>
	<tr><td>Apellido del Usuario</td>
	<td><input type="text" name="apellido_usuario" id="apellido_usuario"/></td>
	</tr>
	<tr><td>Cuenta de Usuario</td>
	<td><input type="text" name="nombreu" id="nombreu"/></td>
	</tr>
	<tr><td>Contraseña</td>
	<td><input type="password" name="clave" id="clave"/></td>
	</tr>
	<tr><td>Tipo de Usuario</td>
	<td><input type="text" name="tipo" id="tipo"/></td>
	</tr>
</table>
<table>
	<tr>
	<td><input type="submit" value="Ingresar" size="20"/></td>
	<td><input type="submit" value="Buscar" size="20"/></td>
	<td><input type="submit" value="Eliminar" size="20"/></td>
	<td><input type="submit" value="Modificar" size="20"/></td>
	<td><button type="submit"><a href="#inicio">Inicio</a></button></td>
	</tr>
</table>
</form>

<br><br>

<form name="tecnica_libro" method="post" action="procesardatos.php">
<table id="tecnica_libro" border="1"><!--Tabla Tecnica de Libro -->
	<tr><td colspan="2"><center><p>Caracteristicas Tecnicas del Libro</p></td></tr>
	<tr>
		<td>Id Libro:</td>
		<td>
		<select name='id_libro_car' id='id_libro_car'>
			<?php
				$consulta = "SELECT id_libro FROM libro ORDER by id_libro";
				$rec=mysql_query($consulta);
				while($row=mysql_fetch_array($rec))
				{
				echo "<option>";
				echo $row['id_libro'];
				echo "</option>";
				}
			?>
		</select>
		</td>
		</tr>
		<tr>
		<td>Titulo del Libro:</td>
		<td>
		<select name='titulo_ct' id='titulo_ct'>
			<?php
				$consulta = "SELECT titulo_libro FROM libro ORDER by titulo_libro";
				$rec=mysql_query($consulta);
				while($row=mysql_fetch_array($rec))
				{
				echo "<option>";
				echo $row['titulo_libro'];
				echo "</option>";
				}
			?>
		</select>
		</td>
		</tr>
		<tr><td>Papel Paginas</td>
		<td>
		<select name='papel_paginas1' id='papel_paginas1'>
			<?php
				$consulta = "SELECT nombre_papel FROM papel ORDER by nombre_papel";
				$rec=mysql_query($consulta);
				while($row=mysql_fetch_array($rec))
				{
				echo "<option>";
				echo $row['nombre_papel'];
				echo "</option>";
				}
			?>
		</select>
		</td>
		</tr>
		<tr>
		<td>Gramaje Paginas</td>
		<td><input type="text" name="gramaje_paginas1" id="nombre_autor"></td>
		</tr>
		<tr>
		<td>Proveedor Papel Paginas</td>
		<td>
		<select name='proveedor_papel1' id='proveedor_papel1'>
			<?php
				$consulta = "SELECT nombre_proveedor FROM proveedores ORDER by nombre_proveedor";
				$rec=mysql_query($consulta);
				while($row=mysql_fetch_array($rec))
				{
				echo "<option>";
				echo $row['nombre_proveedor'];
				echo "</option>";
				}
			?>
		</select>
		</td>
		</tr>
		<tr>
		<td>Papel Paginas 2</td>
		<td>
		<select name='papel_paginas2' id='papel_paginas2'>
			<?php
				$consulta = "SELECT nombre_papel FROM papel ORDER by nombre_papel";
				$rec=mysql_query($consulta);
				while($row=mysql_fetch_array($rec))
				{
				echo "<option>";
				echo $row['nombre_papel'];
				echo "</option>";
				}
			?>
		</select>
		</td>
		</tr>
		<tr>
		<td>Gramaje Paginas 2</td>
		<td><input type="text" name="gramaje_paginas2" id="gramaje_paginas2"></td>
		</tr>
		<tr>
		<td>Proveedor Papel Paginas 2</td>
		<td>
		<select name='proveedor_papel2' id='proveedor_papel2'/>
			<?php
				$consulta = "SELECT nombre_proveedor FROM proveedores ORDER by nombre_proveedor";
				$rec=mysql_query($consulta);
				while($row=mysql_fetch_array($rec))
				{
				echo "<option>";
				echo $row['nombre_proveedor'];
				echo "</option>";
				}
			?>
		</select>
		</td>
		</tr>
		<tr>
		<td>Papel Paginas 3</td>
		<td>
		<select name='papel_paginas3' id='papel_paginas3'>
			<?php
				$consulta = "SELECT nombre_papel FROM papel ORDER by nombre_papel";
				$rec=mysql_query($consulta);
				while($row=mysql_fetch_array($rec))
				{
				echo "<option>";
				echo $row['nombre_papel'];
				echo "</option>";
				}
			?>
		</select>
		</td>
		</tr>
		<tr>
		<td>Gramaje Paginas 3</td>
		<td><input type="number" name="gramaje_paginas3" id="gramaje_paginas3"/></td>
		</tr>
		<tr>
		<td>Proveedor Papel Paginas 3</td>
		<td>
		<select name='proveedor_papel3' id='proveedor_papel3'>
			<?php
				$consulta = "SELECT nombre_proveedor FROM proveedores ORDER by nombre_proveedor";
				$rec=mysql_query($consulta);
				while($row=mysql_fetch_array($rec))
				{
				echo "<option>";
				echo $row['nombre_proveedor'];
				echo "</option>";
				}
			?>
		</select>
		</td>
		</tr>
		<tr>
		<td>Formato Impresion Paginas</td>
		<td>
		<select name='formato_impresion' id='formato_impresion'>
			<?php
				$consulta = "SELECT nombre_formato FROM forato_impresion ORDER by nombre_formato";
				$rec=mysql_query($consulta);
				while($row=mysql_fetch_array($rec))
				{
				echo "<option>";
				echo $row['nombre_formato'];
				echo "</option>";
				}
			?>
		</select>
		</td>
		</tr>
		<tr>
		<td>Cantidad Formatos por Libro</td>
		<td><input type="number" name="cantidad_formatos" id="cantidad_formatos"/></td>
		</tr>
		<tr>
		<td>Papel Portada</td>
		<td>
		<select name='papel_portada' id='papel_portada'>
			<?php
				$consulta = "SELECT nombre_papel FROM papel ORDER by nombre_papel";
				$rec=mysql_query($consulta);
				while($row=mysql_fetch_array($rec))
				{
				echo "<option>";
				echo $row['nombre_papel'];
				echo "</option>";
				}
			?>
		</select>
		</td>
		</tr>
		<tr>
		<td>Gramaje Portada</td>
		<td><input type="number" name="gramaje_portada" id="gramaje_portada"/></td>
		</tr>
		<tr>
		<td>Proveedor Papel Portada</td>
		<td>
		<select name='proveedor_portada' id='proveedor_portada'>
			<?php
				$consulta = "SELECT nombre_proveedor FROM proveedores ORDER by nombre_proveedor";
				$rec=mysql_query($consulta);
				while($row=mysql_fetch_array($rec))
				{
				echo "<option>";
				echo $row['nombre_proveedor'];
				echo "</option>";
				}
			?>
		</select>
		</td>
		</tr>
		<tr>
		<td>Formato impresion Portada</td>
		<td>
		<select name='formato_portada' id='formato_portada'>
			<?php
				$consulta = "SELECT nombre_formato_impresion FROM formato_impresion ORDER BY nombre_formato_impresion";
				$rec=mysql_query($consulta);
				while($row=mysql_fetch_array($rec))
				{
				echo "<option>";
				echo $row['nombre_formato_impresion'];
				echo "</option>";
				}
			?>
		</select>
		</td></tr>
		<tr>
		<td>Papel guardas</td>
		<td>
		<select name='papel_guarda' id='papel_guarda'>
			<?php
				$consulta = "SELECT nombre_papel FROM papel ORDER by nombre_papel";
				$rec=mysql_query($consulta);
				while($row=mysql_fetch_array($rec))
				{
				echo "<option>";
				echo $row['nombre_papel'];
				echo "</option>";
				}
			?>
		</select>
		</td>
		</tr>
		<tr>
		<td>Gramaje Guardas</td>
		<td><input type="number" name="gramaje_guarda" id="gramaje_guarda"/></td>
		</tr>
		<tr>
		<td>Proveedor Papel Guardas</td>
		<td>
		<select name='proveedor_guarda' id='proveedor_guarda'>
			<?php
				$consulta = "SELECT nombre_proveedor FROM proveedores ORDER by nombre_proveedor";
				$rec=mysql_query($consulta);
				while($row=mysql_fetch_array($rec))
				{
				echo "<option>";
				echo $row['nombre_proveedor'];
				echo "</option>";
				}
			?>
		</select>
		</td>
		</tr>
		<tr>
		<td>Papel Sobrecubierta</td>
		<td>
		<select name='papel_sobrecubierta' id='papel_sobrecubierta'>
			<?php
				$consulta = "SELECT nombre_papel FROM papel ORDER by nombre_papel";
				$rec=mysql_query($consulta);
				while($row=mysql_fetch_array($rec))
				{
				echo "<option>";
				echo $row['nombre_papel'];
				echo "</option>";
				}
			?>
		</select>
		</td>
		</tr>
		<tr>
		<td>Gramaje Papel Sobrecubierta</td>
		<td><input type="number" name="gramaje_sobrecubierta" id="gramaje_sobrecubierta"/></td>
		</tr>
		<tr>
		<td>Proveedor Papel sobrecubierta</td>
		<td>
		<select name='proveedor_sobrecubierta' id='proveedor_sobrecubierta'>
			<?php
				$consulta = "SELECT nombre_proveedor FROM proveedores ORDER by nombre_proveedor";
				$rec=mysql_query($consulta);
				while($row=mysql_fetch_array($rec))
				{
				echo "<option>";
				echo $row['nombre_proveedor'];
				echo "</option>";
				}
			?>
		</select>
		</td>
		</tr>
		<tr>
		<td>Encuadernacion</td>
		<td>
		<select name='encuadernacion' id='encuadernacion'>
			<?php
				$consulta = "SELECT tipo_encuadernacion FROM encuadernacion ORDER by tipo_encuadernacion";
				$rec=mysql_query($consulta);
				while($row=mysql_fetch_array($rec))
				{
				echo "<option>";
				echo $row['tipo_encuadernacion'];
				echo "</option>";
				}
			?>
		</select>
		</td>
		</tr>
		<tr>
		<td>Proveedor Encuadernacion</td>
		<td>
		<select name='proveedor_encuadernacion' id='proveedor_encuadernacion'>
			<?php
				$consulta = "SELECT nombre_proveedor FROM proveedores ORDER by nombre_proveedor";
				$rec=mysql_query($consulta);
				while($row=mysql_fetch_array($rec))
				{
				echo "<option>";
				echo $row['nombre_proveedor'];
				echo "</option>";
				}
			?>
		</select>
		</td>
		</tr>
		<tr>
		<td>Caracteristicas Especiales</td>
		<td><input type="textbox" name="caracteristicas" id="caracteristicas"/></td>
		</tr>
		<tr>
		<td>Proveedor Caracteristicas Especiales</td>
		<td>
		<select name='proveedor_caracteristicas' id='proveedor_caracteristicas'>
			<?php
				$consulta = "SELECT nombre_proveedor FROM proveedores ORDER by nombre_proveedor";
				$rec=mysql_query($consulta);
				while($row=mysql_fetch_array($rec))
				{
				echo "<option>";
				echo $row['nombre_proveedor'];
				echo "</option>";
				}
			?>
		</select>
		</td>
		</tr>
		<tr>
		<td>Tinta 1</td>
		<td>
		<select name='tinta1' id='tinta1'>
			<?php
				$consulta = "SELECT nombre_tinta FROM tintas ORDER by nombre_tinta";
				$rec=mysql_query($consulta);
				while($row=mysql_fetch_array($rec))
				{
				echo "<option>";
				echo $row['nombre_tinta'];
				echo "</option>";
				}
			?>
		</select>
		</td>
		</tr>
		<tr>
		<td>Tinta 2</td>
		<td>
		<select name='tinta2' id='tinta2'>
			<?php
				$consulta = "SELECT nombre_tinta FROM tintas ORDER by nombre_tinta";
				$rec=mysql_query($consulta);
				while($row=mysql_fetch_array($rec))
				{
				echo "<option>";
				echo $row['nombre_tinta'];
				echo "</option>";
				}
			?>
		</select>
		</td>
		</tr>
		<tr>
		<td>Tinta 3</td>
		<td>
		<select name='tinta3' id='tinta3'>
			<?php
				$consulta = "SELECT nombre_tinta FROM tintas ORDER by nombre_tinta";
				$rec=mysql_query($consulta);
				while($row=mysql_fetch_array($rec))
				{
				echo "<option>";
				echo $row['nombre_tinta'];
				echo "</option>";
				}
			?>
		</select>
		</td>
		</tr>
		<tr>
		<td>Tinta 4</td>
		<td>
		<select name='tinta4' id='tinta4'>
			<?php
				$consulta = "SELECT nombre_tinta FROM tintas ORDER by nombre_tinta";
				$rec=mysql_query($consulta);
				while($row=mysql_fetch_array($rec))
				{
				echo "<option>";
				echo $row['nombre_tinta'];
				echo "</option>";
				}
			?>
		</select>
		</td>
		</tr>
		
		<tr>
		<td>Tinta 5</td>
		<td>
		<select name='tinta5' id='tinta5'>
			<?php
				$consulta = "SELECT nombre_tinta FROM tintas ORDER by nombre_tinta";
				$rec=mysql_query($consulta);
				while($row=mysql_fetch_array($rec))
				{
				echo "<option>";
				echo $row['nombre_tinta'];
				echo "</option>";
				}
			?>
		</select>
		</td>
		</tr>
		
		<tr>
		<td>Tinta 6</td>
		<td>
		<select name='tinta6' id='tinta6'>
			<?php
				$consulta = "SELECT nombre_tinta FROM tintas ORDER by nombre_tinta";
				$rec=mysql_query($consulta);
				while($row=mysql_fetch_array($rec))
				{
				echo "<option>";
				echo $row['nombre_tinta'];
				echo "</option>";
				}
			?>
		</select>
		</td>
		</tr>
		
		<tr>
		<td>Tinta 7</td>
		<td>
		<select name='tinta7' id='tinta7'>
			<?php
				$consulta = "SELECT nombre_tinta FROM tintas ORDER by nombre_tinta";
				$rec=mysql_query($consulta);
				while($row=mysql_fetch_array($rec))
				{
				echo "<option>";
				echo $row['nombre_tinta'];
				echo "</option>";
				}
			?>
		</select>
		</td>
		</tr>
		
		
		<tr>
		<td>Tinta 8</td>
		<td>
		<select name='tinta8' id='tinta8'>
			<?php
				$consulta = "SELECT nombre_tinta FROM tintas ORDER by nombre_tinta";
				$rec=mysql_query($consulta);
				while($row=mysql_fetch_array($rec))
				{
				echo "<option>";
				echo $row['nombre_tinta'];
				echo "</option>";
				}
			?>
		</select>
		</td>
		</tr>
		
		<tr>
		<td>Tinta 9</td>
		<td>
		<select name='tinta9' id='tinta9'>
			<?php
				$consulta = "SELECT nombre_tinta FROM tintas ORDER by nombre_tinta";
				$rec=mysql_query($consulta);
				while($row=mysql_fetch_array($rec))
				{
				echo "<option>";
				echo $row['nombre_tinta'];
				echo "</option>";
				}
			?>
		</select>
		</td>
		</tr>
</table>		
<table>
	<tr>
	<td><input type="submit" value="Ingresar" size="20"/></td>
	<td><input type="submit" value="Buscar" size="20"/></td>
	<td><input type="submit" value="Eliminar" size="20"/></td>
	<td><input type="submit" value="Modificar" size="20"/></td>
	<td><button type="submit"><a href="#inicio">Inicio</a></button></td>
	</tr>
	</form>
</table>

<br><br>

<table id="costos" border="1"><!--Costos-->
	<tr><td colspan="2"><center><p>Costos del Libro</p></td></tr>
	<tr>
	<td>Titulo del Libro:</td>
	<td>
	<select name="titulo_lb_costo" id="titulo_lb_costos">
		<?php
		$consulta = "Select titulo_libro from libro order by titulo_libro";
		$rec=mysql_query($consulta); 
		while($row=mysql_fetch_array($rec)){
		echo "<option>".$row['titulo_libro']."</option>";
		}
		?>
	</select>
	</td>
	</tr>
	<tr>
	<td>Fecha de Impresion:</td>
	<td><input type="date" name="fecha_costo" id="fecha_costo">
	</td>
	</tr>
	<tr><td>Costo Papel Portada</td>
	<td><input type="number" name="costo_portada" id="costo_portada"/></td>
	</tr>
	<tr>
	<td>Costo Papel Guardas</td>
	<td><input type="number" name="costo_planchas" id="costo_planchas"/></td>
	</tr>
	<tr>
	<td>Costo Papel Interior</td>
	<td><input type="number" name="costo_papel_interior1" id="costo_papel_interior1"/></td>
	</tr>
	<tr>
	<td>Costo Papel Interior 2</td>
	<td><input type="number" name="costo_papel_interior2" id="costo_papel_interior2"/></td>
	</tr>
	<tr>
	<td>Costo Papel Sobrecubierta</td>
	<td><input type="number" name="costo_papel_sobrecubierta" id="costo_papel_sobrecubierta"/></td>
	</tr>
	<tr>
	<td>Costo Planchas</td>
	<td><input type="number" name="costo_planchas" id="costo_planchas"/></td>
	</tr>
	<tr>
	<td>Costo tintas</td>
	<td><input type="number" name="costo_tintas" id="costo_tintas"/></td>
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
	<td><input type="text" name="costo_termosellado" id="costo_termosellado"/></td>
	</tr>
	<tr>
	<td>Costo Extras</td>
	<td><input type="number" name="costo_extras" id="costo_extras"/></td>
	</tr>
</table>

	<table border="0">
	<tr>
		<td><input type="submit" value="Ingresar" size="20"/></td>
		<td><input type="submit" value="Buscar" size="20"/></td>
		<td><input type="submit" value="Eliminar" size="20"/></td>
		<td><input type="submit" value="Modificar" size="20"/></td>
		<td><button type="submit"><a href="#inicio">Inicio</a></button></td>
	</tr>
	</form>
	</table>

<br><br>

<table id="editoriales" border="1"><!--Tipos de editoriales-->
	<form name="ingreso_editorial" method="post" action="datos_editorial.php">
	<tr><td colspan="2"><center><p>Editoriales</p></td></tr>
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
	<td>
	<select name='pais_editorial' id='pais_editorial'/>
			<?php
				$consulta = "SELECT nombre_pais FROM paises ORDER by nombre_pais";
				$rec=mysql_query($consulta);
				while($row=mysql_fetch_array($rec))
				{
				echo "<option>";
				echo $row['nombre_pais'];
				echo "</option>";
				}
			?>
	</select>
	</td>
	</tr>
	<tr>
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
	<td><button type="submit"><a href="#inicio">Inicio</a></button></td>
	</tr>
	</form>
	</table>

<br><br>

<form name="bodegas" method="post" action="datos_bodegas.php">
<table id="bodegas" border="1" style="width:30%"> <!-- Bodegas -->
	
	<tr><td colspan="2"><center><p>Bodegas</p></td></tr>
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
	<td>
	<select name='pais_bodega' id='pais_bodega'/>
		<?php
			$consulta = "SELECT nombre_pais FROM paises ORDER by nombre_pais";
			$rec=mysql_query($consulta);
			while($row=mysql_fetch_array($rec))
			{
			echo "<option>";
			echo $row['nombre_pais'];
			echo "</option>";
			}
		?>
	</select>
	</td>
	</tr>
</table>
<table>
	<tr>
		<td><input type="submit" value="Ingresar" size="20"/></td>
		<td><input type="submit" value="Buscar" size="20"/></td>
		<td><input type="submit" value="Eliminar" size="20"/></td>
		<td><input type="submit" value="Modificar" size="20"/></td>
		<td><button type="submit"><a href="#inicio">Inicio</a></button></td>
	</tr>
</table>
</form>

<br><br>

<form name="papeles" method="post" action="datos_papel.php">
<table id="tipo_papel" border="1"><!--Tipos de Papel-->
	
	<tr><td colspan="2"><center><p>Tipos de Papel</p></td></tr>
	<tr>
	<td>Nombre:</td>
	<td><input type="text" name="nombre_papel" id="nombre_papel"/></td>
	</tr>
	<tr><td>Gramaje</td>
	<td><input type="number" name="gramaje" id="gramaje"/> gr</td>
	</tr>
	<tr>
	<td>Valor del pliego</td>
	<td><input type="number" name="valor_pliego" id="valor_pliego"/></td>
	</tr>
	<tr>
	<td>Valor resma</td>
	<td><input type="number" name="valor_resma" id="valor_resma"/></td>
	</tr>
</table>
<table border="0">
	<tr>
		<td><input type="submit" value="Ingresar" size="20"/></td>
		<td><input type="submit" value="Buscar" size="20"/></td>
		<td><input type="submit" value="Eliminar" size="20"/></td>
		<td><input type="submit" value="Modificar" size="20"/></td>
		<td><button type="submit"><a href="#inicio">Inicio</a></button></td>
	</tr>	
</table>
</form>

<br><br>
	
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
		<td><button type="submit"><a href="#inicio">Inicio</a></button></td>
	</tr>
	</table>
</form>	

<br><br>

<table id="movimientos" border="1"><!--Movimientos-->
	<tr><td colspan="2"><center><p>Movimientos Bodegas</p></td></tr>
	<tr>
	<td>Tipo de Movimiento:</td>
	<td><select name="tipo_movimiento">
		<option>Entrada</option>
		<option>Traslado</option>
	</select>
	<!--input type="text" name="tipo_movimiento" id="tipo_movimiento"/--></td>
	</tr>
	<tr><td>Bodega Salida</td>
	<td>
	<select name='bodega_in' id='bodega_in'/>
			<?php
				$consulta = "SELECT nombre_bodega FROM bodegas ORDER by nombre_bodega";
				$rec=mysql_query($consulta);
				while($row=mysql_fetch_array($rec))
				{
				echo "<option>";
				echo $row['nombre_bodega'];
				echo "</option>";
				}
			?>
	</select>
	</td>
	</tr>
	<tr>
	<tr><td>Bodega Entrada</td>
	<td>
	<select name='bodega_out' id='bodega_out'/>
		<?php
			$consulta = "SELECT nombre_bodega FROM bodegas ORDER by nombre_bodega";
			$rec=mysql_query($consulta);
			while($row=mysql_fetch_array($rec))
			{
			echo "<option>";
			echo $row['nombre_bodega'];
			echo "</option>";
			}
		?>
	</select>
	</td>
	</tr>
	<tr>
	<td>Fecha</td>
	<td><input type="date" name="costo_planchas" id="costo_planchas"/></td>
	</tr>
	<tr>
	<td>Responsable</td>
	<td><input type="number" name="costo_impresion" id="costo_impresion"/></td>
	</tr>
	<tr>
	<td>Libro</td>
	<td>
	<select name='titulo_libro' id='titulo_libro'>
			<?php
				$consulta = "SELECT titulo_libro FROM libro ORDER by titulo_libro";
				$rec=mysql_query($consulta);
				while($row=mysql_fetch_array($rec))
				{
				echo "<option>";
				echo $row['titulo_libro'];
				echo "</option>";
				}
			?>
		</select>
	</td>
	</tr>
	<tr>
</table>

	<table border="0">
	<tr>
		<td><input type="submit" value="Ingresar" size="20"/></td>
		<td><input type="submit" value="Buscar" size="20"/></td>
		<td><input type="submit" value="Eliminar" size="20"/></td>
		<td><input type="submit" value="Modificar" size="20"/></td>
		<td><button type="submit"><a href="#inicio">Inicio</a></button></td>
	</tr>
	</form>
	</table>
<br>


<table border="1"><!--Tabla Adicional-->
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
<br><br>
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


