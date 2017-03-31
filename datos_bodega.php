<?php

$nombre_bodega=$_POST['nombre_bodega'];
$contacto_bodega=$_POST['contacto_bodega'];
$email_bodega=$_POST['email_bodega'];
$telefono_bodega=$_POST['telefono_bodega'];
$direccion_bodega=$_POST['direccion_bodega'];
$ciudad_bodega=$_POST['ciudad_bodega'];
$pais_bodega=$_POST['barrio_bodega'];

echo'Esta corriendo <br>';

if (isset($_POST['nombre_bodega'])&& !empty($_POST['nombre_bodega'])and $_POST['contacto_bodega'] && $_POST['contacto_bodega'])
	{
		$EnlaceBD= $conexion;
		mysql_select_db('lasilueta',$EnlaceBD) or die ('No se puede seleccionar la base de datos');
			
		mysql_query("INSERT INTO bodegas VALUES (
			'',
			'$nombre_bodega',
			'$contacto_bodega',
			'$email_bodega',
			'$telefono_bodega',
			'$direccion_bodega',
			'$ciudad_bodega',
			'$pais_bodega')");
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