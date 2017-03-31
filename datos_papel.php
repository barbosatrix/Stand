<?php

require("conexion1.php");

$id_papel=$_POST['id_papel'];
$nombre_papel=$_POST['nombre_papel'];
$gramaje=$_POST['gramaje'];
$valor_pliego=$_POST['valor_pliego'];

echo'Esta corriendo';

if (isset($_POST['id_papel'])&& !empty($_POST['id_papel'])and $_POST['nombre_papel'] && $_POST['nombre_papel']and $_POST['gramaje'] && $_POST['gramaje']
	and $_POST['valor_pliego'] && $_POST['valor_pliego']
	)
	{
		$EnlaceBD= $conexion;
			
		mysql_query("INSERT INTO PAPEL VALUES (
			'',
			'$nombre_papel',
			'$gramaje',
			'$valor_pliego')");
		echo ('datos enviados correctamente');
	}else{
		echo ('no se han podido ingresar los datos');
	}
?>