<?php

require("conexion1.php");

$nombre_editorial=$_POST['nombre_editorial'];
$direccion_editorial=$_POST['direccion_editorial'];
$ciudad_editorial=$_POST['ciudad_editorial'];
$pais_editorial=$_POST['pais_editorial'];
$telefono_editorial=$_POST['telefono_editorial'];

// echo'Esta corriendo <br>';

if (isset($_POST['nombre_editorial'])&& !empty($_POST['nombre_editorial']) and $_POST['ciudad_editorial'] && $_POST['ciudad_editorial'] and
	$_POST['pais_editorial'] && $_POST['pais_editorial'] and
	$_POST['telefono_editorial'] && $_POST['telefono_editorial']	 )

	{
		$EnlaceBD= $conexion;
			
		mysql_query("INSERT INTO EDITORIAL VALUES (
			'',
			'$nombre_editorial',
			'$direccion_editorial',
			'$ciudad_editorial',
			'$pais_editorial',
			'$telefono_editorial')");
		?>
			<script languaje="javascript">
		    alert("Usuario ingresado correctamente!");
		    location.href = "editorial.php";
		   </script>
		<?php
	}else{
		?>
			<script languaje="javascript">
		    alert("No se han podido ingresar los datos!");
		    location.href = "editorial.php";
		   </script>
		<?php
	}
?>
		
