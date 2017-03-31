<?php

require("conexion1.php");

$nombre_proveedor=$_POST['nombre_proveedor'];
$contacto_proveedor=$_POST['contacto_proveedor'];
$email_proveedor=$_POST['email_proveedor'];
$telefono_proveedor=$_POST['telefono_proveedor'];
$direccion_proveedor=$_POST['direccion_proveedor'];
$ciudad_editorial=$_POST['ciudad_editorial'];

// echo'Esta corriendo <br>';

if (isset($_POST['nombre_proveedor'])&& !empty($_POST['nombre_proveedor']) and $_POST['telefono_proveedor'] && $_POST['telefono_proveedor'] and
	$_POST['email_proveedor'] && $_POST['email_proveedor'] and
	$_POST['contacto_proveedor'] && $_POST['contacto_proveedor']	 )

	{
		$EnlaceBD= $conexion;
			
		mysql_query("INSERT INTO Proveedores VALUES (
			'',
			'$nombre_proveedor',
			'$contacto_proveedor',
			'$email_proveedor',
			'$telefono_proveedor',
			'$direccion_proveedor',
			'$ciudad_editorial')");
		?>
			<script languaje="javascript">
		    alert("Proveedor ingresado correctamente!");
		    location.href = "proveedor.php";
		   </script>
		<?php
	}else{
		?>
			<script languaje="javascript">
		    alert("No se han podido ingresar los datos!");
		    location.href = "proveedor.php";
		   </script>
		<?php
	}
?>
		
