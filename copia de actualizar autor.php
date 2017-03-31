<?php

require("conexion1.php");
$link=$conexion;

if (!$link) {
    die("Error al conectar: ".mysql_error());
}
	$id_autor=$_GET["var"];
   	echo 'el id del autor es'.$id_autor;

// $EnlaceBD=mysql_connect('localhost','root','');
	mysql_select_db('lasilueta',$link) or die ('No se puede seleccionar la base de datos');

	$nombre_autor=$_POST['nombre_autor'];
	$apellido_autor=$_POST['apellido_autor'];
	$seudonimo_autor=$_POST['seudonimo_autor'];
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


	// echo 'insert into autor values'.$nombre_autor.','
	// 	  .$apellido_autor.','
	// 	  .$seudonimo_autor.','
	// 	  .$email_autor.','
	// 	  .$direccion_autor.','
	// 	  .$ciudad_autor.','
	// 	  .$pais_autor.','
	// 	  .$telefono_autor.','
	// 	  .$reseña_autor.','
	// 	  .$año_autor.','
	// 	  .$web_autor.','
	// 	  .$celular_autor.','
	// 	  .$facebook_autor.','
	// 	  .$instagram_autor.','
	// 	  .$skype_autor.','
	// 	  .$twitter_autor;'),';
 

	echo '<br>Esta corriendo <br>';

	
	
// ----------

if (is_uploaded_file(@$_FILES["userfile"]["tmp_name"]))
{
	if ($_FILES["userfile"]["type"]=="image/jpeg" || $_FILES["userfile"]["type"]=="image/pjpeg" || $_FILES["userfile"]["type"]=="image/gif" || $_FILES["userfile"]["type"]=="image/bmp" || $_FILES["userfile"]["type"]=="image/png")
	    {
	        # Cogemos la anchura y altura de la imagen
	        $info=getimagesize($_FILES["userfile"]["tmp_name"]);
	        //echo "<BR>".$info[0]; //anchura
	        //echo "<BR>".$info[1]; //altura
	        //echo "<BR>".$info[2]; //1-GIF, 2-JPG, 3-PNG
	        //echo "<BR>".$info[3]; //cadena de texto para el tag <img
	 
	        # Escapa caracteres especiales
	        $imagenEscapes=mysql_real_escape_string(file_get_contents($_FILES["userfile"]["tmp_name"]));
	 
	        # Agregamos la imagen a la base de datos
	        $sql="UPDATE `imagen_autor` SET anchura='".$info[0]."', altura='".$info[1]."', tipo='".$_FILES["userfile"]["type"]."',
	        imagen='".$imagenEscapes."')";

	        $result=mysql_query($sql,$link);
	 
	        # Cogemos el identificador con que se ha guardado
	        $id=mysql_insert_id();
	 
	        # Mostramos la imagen agregada
	        echo "<div class='mensaje'>Imagen agregada con el id ".$id."</div>";
	    }else{
	        echo "<div class='error'>Error: El formato de archivo de la foto tiene que ser JPG, GIF, BMP o PNG.</div>";
	    }
}
// --------
	


	mysql_query("

	UPDATE autor SET 
	nombre_autor='$nombre_autor',
	apellido_autor='$apellido_autor',
	seudonimo_autor='$seudonimo_autor',
	email_autor='$email_autor',
	direccion_autor='$direccion_autor',
	ciudad_autor='$ciudad_autor',
	pais_autor='$pais_autor',
	telefono_autor='$telefono_autor',
	reseña_autor='$reseña_autor',
	ano_autor='$año_autor',
	web_autor='$web_autor',
	celular_autor='$celular_autor',
	facebook_autor='$facebook_autor',
	instagram_autor='$instagram_autor',
	skype_autor='$skype_autor',
	twitter_autor='$twitter_autor',
	id_foto='$id' WHERE id_autor='$id_autor'");
?>
			<script languaje="javascript">
		    alert("Usuario ingresado correctamente!");
		    location.href = "autor.php";
		   </script>
<?php

?>

