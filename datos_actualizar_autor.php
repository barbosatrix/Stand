<?php
	require("conexion1.php");
	$link=$conexion;
	if (!$link) {
	    die("Error al conectar: ".mysql_error());
	}
	$id_autor=$_GET["var"];
   	echo 'el id del autor es'.$id_autor;
   	header("Content-Type: text/html;charset=utf-8");

	
	mysql_select_db('lasilueta',$link) or die ('No se puede seleccionar la base de datos');
	mysql_query("SET NAMES 'utf8'");

	$nombre_autor=$_POST['nombre_autor'];
	$apellido_autor=$_POST['apellido_autor'];
	$seudonimo_autor=$_POST['seudonimo_autor'];
	$nacionalidad_autor=$_POST['nacionalidad_autor'];
	$email_autor=$_POST['email_autor'];
	$direccion_autor=$_POST['direccion_autor'];
	$ciudad_autor=$_POST['ciudad_autor'];
	$pais_autor=$_POST['pais_autor'];
	$telefono_autor=$_POST['telefono_autor'];
	$reseña_autor=$_POST['reseña_autor'];

	$año_autor=$_POST['año_autor'];
	$web_autor=$_POST['web_autor'];
	$celular_autor=$_POST['celular'];
	$facebook_autor=$_POST['facebook'];
	$instagram_autor=$_POST['instagram'];
	$skype_autor=$_POST['skype'];
	$twitter_autor=$_POST['twitter'];
	
	echo $twitter_autor;
	// Recibo los datos de la imagen
	$nombre_img = $_FILES['imagen']['name'];
	$tipo = $_FILES['imagen']['type'];
	$tamano = $_FILES['imagen']['size'];

	echo $nombre_img;

	echo 'insert into autor values'
		  .$nombre_autor. 		','
		  .$apellido_autor. 	','
		  .$seudonimo_autor. 	','
		  .$nacionalidad_autor.	','
		  .$email_autor. 		','
		  .$direccion_autor. 	','
		  .$ciudad_autor. 		','
		  .$pais_autor. 		','
		  .$telefono_autor. 	','
		  .$año_autor. 			','
		  .$web_autor. 			','
		  .$celular_autor. 		','
		  .$facebook_autor. 	','
		  .$instagram_autor. 	','
		  .$skype_autor. 		','
		  .$twitter_autor. 		','
		  .$nombre_img;			','
		  .$reseña_autor. 		'),';


	echo  $reseña_autor;
	echo '<br>Esta corriendo <br>';
	
 
//Si existe imagen y tiene un tamaño correcto
if (($nombre_img == !NULL) && ($_FILES['imagen']['size'] <= 200000)) 
{
   //indicamos los formatos que permitimos subir a nuestro servidor
   if (($_FILES["imagen"]["type"] == "image/gif")
   || ($_FILES["imagen"]["type"] == "image/jpeg")
   || ($_FILES["imagen"]["type"] == "image/jpg")
   || ($_FILES["imagen"]["type"] == "image/png"))
   {
      // Ruta donde se guardarán las imágenes que subamos
      $directorio = $_SERVER['DOCUMENT_ROOT'].'/img/uploads/autores/';
      // Muevo la imagen desde el directorio temporal a nuestra ruta indicada anteriormente
      move_uploaded_file($_FILES['imagen']['tmp_name'],$directorio.$nombre_img);
      echo 'dentro del if'.$nombre_img;

      $sql= "UPDATE autor SET 
      ruta_foto			='$nombre_img'			
	  where id_autor		='$id_autor'			";

	$link=$conexion;
	$db_selected=mysql_select_db("lasilueta",$link);
	$result = mysql_query($sql,$link);

    } 
    else 
    {
       //si no cumple con el formato
       echo "No se puede subir una imagen con ese formato ";
    }
} 
else 
{
   //si existe la variable pero se pasa del tamaño permitido
   if($nombre_img == !NULL) echo "La imagen es demasiado grande "; 
}

	$sql= "UPDATE autor SET 
	nombre_autor		='$nombre_autor'		,
	apellido_autor		='$apellido_autor'		,
	seudonimo_autor		='$seudonimo_autor'		,
	nacionalidad_autor 	='$nacionalidad_autor.'	,
	email_autor			='$email_autor'			,
	direccion_autor		='$direccion_autor'		,
	ciudad_autor		='$ciudad_autor'		,
	pais_autor			='$pais_autor'			,
	telefono_autor		='$telefono_autor'		,
	año_autor			='$año_autor'			,
	web_autor			='$web_autor'			,
	celular_autor		='$celular_autor'		,
	facebook_autor		='$facebook_autor'		,
	instagram_autor		='$instagram_autor'		,
	skype_autor			='$skype_autor'			,
	twitter_autor		='$twitter_autor'		,
	resena_autor		='$reseña_autor'		
	where id_autor		='$id_autor'			";

	echo 'al final de la sentencia sql'.$nombre_img;



	
	

  $link=$conexion;
  $db_selected=mysql_select_db("lasilueta",$link);
  $result = mysql_query($sql,$link);




?>
			<script languaje="javascript">
		    alert("Usuario actualizado correctamente!");
		    location.href = "consultar_autor.php";
		   </script>
<?php

?>

