<?php

require("conexion1.php");

$id_libro=$_POST['id_libro'];
$nombre_editorial=$_POST['nombre_editorial'];
$isbn=$_POST['isbn'];
$titulo_libro=$_POST['titulo_libro'];
$autor1=$_POST['autor1'];
$autor2=$_POST['autor2'];
$autor3=$_POST['autor3'];
$ilustrador1=$_POST['ilustrador1'];
$ilustrador2=$_POST['ilustrador2'];
$fecha_libro=$_POST['fecha_libro'];
$edicion=$_POST['edicion_libro'];
$tiraje=$_POST['tiraje_libro'];
$peso=$_POST['peso_libro'];
$alto=$_POST['alto_libro'];
$ancho=$_POST['ancho_libro'];

echo'Esta corriendo';

if (isset($_POST['id_libro'])&& !empty($_POST['id_libro'])and $_POST['nombre_editorial'] && $_POST['nombre_editorial']and $_POST['isbn'] && $_POST['isbn'])
	{
		$EnlaceBD= $conexion;
			
		mysql_query("INSERT INTO LIBRO VALUES (
			'$id_libro',
			SELECT id_editorial FROM editorial where nombre_editorial='$nombre_editorial',
			'$isbn',
			'$titulo_libro',
			'$autor1',
			'$autor2',
			'$autor3',
			'$ilustrador1',
			'$ilustrador2',
			'$fecha_libro,
			'$edicion',
			'$tiraje',
			'$peso',
			'$alto',
			'$ancho'')");
		echo ('datos enviados correctamente');
	}else{
		echo ('no se han podido ingresar los datos');
	}
?>