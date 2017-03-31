<?php

require("conexion1.php");
$link=$conexion;

$cedula=$_POST['cedula'];
$nombre=$_POST['nombre_usuario'];
$apellido=$_POST['apellido_usuario'];
$nombreu = $_POST['nombreu'];   
$clave = $_POST['clave'];
$tipo = $_POST['tipo'];
$con = md5($clave);

echo $con;

	$EnlaceBD=$conexion;
	
	mysql_select_db('lasilueta',$EnlaceBD) or die ('No se puede seleccionar la base de datos');

	mysql_query("INSERT INTO usuarios VALUES(
			'',
			'$cedula',
			'$nombre',
			'$apellido',
			'$nombreu',
			'$con',
			'$tipo')");

		echo ('se ingreso');

?>
	<script languaje="javascript">
	    alert("Usuario ingresado correctamente!");
	</script>

<?php
	header("Location: usuario.php");

?>  
   
   
   
   
   
