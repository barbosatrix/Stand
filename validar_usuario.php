<?php
$nombreu = $_POST['nombreu'];   
$clave = $_POST['clave'];
$con = md5($clave);
echo $nombreu;
echo $con;
include('conexion1.php'); 

/*Consulta de mysql con la que indicamos que necesitamos que seleccione
**solo los campos que tenga como nombre_administrador el que el formulario
**le ha enviado*/

$result = mysql_query("SELECT * FROM usuarios WHERE nombreu = '$nombreu'");

//Validamos si el nombre del administrador existe en la base de datos o es correcto
if($row = mysql_fetch_array($result))
{  echo 'usuario correcto validando contraseña';   
//Si el usuario es correcto ahora validamos su contraseña
 if($row['clave'] == $con)
 { echo 'claves iguales';
  //Creamos sesión
  session_start();  
  //Almacenamos el nombre de usuario en una variable de sesión usuario
  $_SESSION['nombreu'] = $nombreu;  
	$tipo = $row['tipo'];
	$_SESSION['valid_tipo'] = $tipo;
  //Redireccionamos a la pagina: index.php
  header("Location: inicio.php");  
 }
 else
 {
  //En caso que la contraseña sea incorrecta enviamos un msj y redireccionamos a login.php
  ?>
   <script languaje="javascript">
    alert("El Nombre y/o Clave de Usuario es Incorrecto!");
    location.href = "index.php";
   </script>
  <?php
            
 }
}
else
{
 //en caso que el nombre de administrador es incorrecto enviamos un msj y redireccionamos a login.php
?>
 <script languaje="javascript">
  alert("El Nombre y/o Clave de Usuario es Incorrecto!");
  location.href = "index.php";
 </script>
<?php   
        
}

//Mysql_free_result() se usa para liberar la memoria empleada al realizar una consulta
mysql_free_result($result);

/*Mysql_close() se usa para cerrar la conexión a la Base de datos y es 
**necesario hacerlo para no sobrecargar al servidor, bueno en el caso de
**programar una aplicación que tendrá muchas visitas ;) .*/
mysql_close();
?>
