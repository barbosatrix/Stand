<?php

require("conexion1.php");

$NM_editorial=$_POST['nombre_editorial'];

echo'Esta corriendo';

if (isset($_POST['nombre_editorial']) && $_POST['nombre_editorial'])
	{
		$EnlaceBD= $conexion;
		mysql_select_db('lasilueta',$EnlaceBD) or die ('No se puede seleccionar la base de datos');
			
		mysql_query("INSERT INTO editorial VALUES ('','$NM_editorial','','','','')");
		echo ('datos enviados correctamente');
	}else{
		echo ('no se han podido ingresar los datos');
	}

?>