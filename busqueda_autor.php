<?php

$cedula=$_POST["cedula"];
$nombre=$_POST["nombre_usuario"];
$apellido=$_POST["apellido_usuario"];
$nombreu = $_POST["nombreu"];   
$clave = $_POST["clave"];
$tipo = $_POST["tipo"];
$con = md5($clave);
include('conexion1.php'); 

/*Consulta de mysql con la que indicamos que necesitamos que seleccione
**solo los campos que tenga como nombre_administrador el que el formulario
**le ha enviado*/

$result = mysql_query("SELECT * FROM usuarios WHERE nombreu = '$nombreu'");

//Validamos si el nombre del administrador existe en la base de datos o es correcto
if($row = mysql_fetch_array($result))
{     
  ?><script languaje="javascript">
    alert("Ya existe una cuenta para este usuario!");
    location.href = "ingresar_datos.php";
   </script><?php
}
else
{
	$insert= mysql_query("INSERT INTO usuarios VALUES('',$cedula,'$nombre','$apellido','$nombreu','$clave','$tipo')");
?> <script languaje="javascript">
  alert("Se ingreso el nuevo usuario a la base de datos!");
  location.href = "ingresar_datos.php";
 </script>
 ?>
 <?php
//Mysql_free_result() se usa para liberar la memoria empleada al realizar una consulta
mysql_free_result($result);

/*Mysql_close() se usa para cerrar la conexión a la Base de datos y es 
**necesario hacerlo para no sobrecargar al servidor, bueno en el caso de
**programar una aplicación que tendrá muchas visitas ;) .*/
mysql_close();

}
  
?>  
   
   
   
   
   
