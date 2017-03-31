<?php
	require("conexion1.php");
	$link=$conexion;
	if (!$link) {
	    die("Error al conectar: ".mysql_error());
	}

	
	mysql_select_db('lasilueta',$link) or die ('No se puede seleccionar la base de datos');

	$nombre_autor=$_POST['nombre_autor'];
	$apellido_autor=$_POST['apellido_autor'];
	$seudonimo_autor=$_POST['seudonimo_autor'];
	$nacionalidad_autor=$_POST['nacionalidad_autor'];
	
	$email_autor=$_POST['email_autor'];
	$direccion_autor=$_POST['direccion_autor'];
	$ciudad_autor=$_POST['ciudad_autor'];
	$pais_autor=$_POST['pais_autor'];
	$telefono_autor=$_POST['telefono_autor'];
	$año_autor=$_POST['año_autor'];
	$web_autor=$_POST['web_autor'];
	$celular_autor=$_POST['celular'];
	$facebook_autor=$_POST['facebook'];
	$instagram_autor=$_POST['instagram'];
	$skype_autor=$_POST['skype'];
	$twitter_autor=$_POST['twitter'];
	$resena_autor=$_POST['resena_autor'];

	// Recibo los datos de la imagen
	$nombre_img = $_FILES['imagen']['name'];
	$tipo = $_FILES['imagen']['type'];
	$tamano = $_FILES['imagen']['size'];

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
		  .$resena_autor. 		'),';
 

	echo '<br>Esta corriendo <br>';
// ----------

if (is_uploaded_file(@$_FILES["imagen"]["tmp_name"]) &&
	($_FILES['imagen']['size'] <= 200000) )
{
	if ($_FILES["imagen"]["type"]=="image/jpeg" 
	|| $_FILES["imagen"]["type"]=="image/pjpeg"
	|| $_FILES["imagen"]["type"]=="image/gif"
	|| $_FILES["imagen"]["type"]=="image/bmp" 
	|| $_FILES["imagen"]["type"]=="image/png")
	    {
        # Cogemos la anchura y altura de la imagen
        // $info=getimagesize($_FILES["userfile"]["tmp_name"]);
        //echo "<BR>".$info[0]; //anchura
        //echo "<BR>".$info[1]; //altura
        //echo "<BR>".$info[2]; //1-GIF, 2-JPG, 3-PNG
        //echo "<BR>".$info[3]; //cadena de texto para el tag <img
	 
	        # Escapa caracteres especiales
	        // $imagenEscapes=mysql_real_escape_string(file_get_contents($_FILES["userfile"]["tmp_name"]));
	 
	        # Agregamos la imagen a la base de datos

	    	$directorio=$_SERVER['DOCUMENT_ROOT'].'/img/uploads/autores/';
	    	move_uploaded_file($_FILES['imagen']['tmp_name'],$directorio.$nombre_img);
   		} else{
	        //si no cumple con el formato
       		echo "No se puede subir una imagen con ese formato ";
	    }
}
else{
   //si existe la variable pero se pasa del tamaño permitido
   if($nombre_img == !NULL) echo "La imagen es demasiado grande "; 
}
	$sql="INSERT INTO autor values(
		  ''					,
		  '$nombre_autor'		,
		  '$apellido_autor'		,
		  '$seudonimo_autor'	,
		  '$nacionalidad_autor'	,
		  '$email_autor'		,
		  '$direccion_autor'	,
		  '$ciudad_autor'		,
		  '$pais_autor'			,
		  '$telefono_autor'		,
		  '$año_autor'			,
		  '$web_autor'			,
		  '$celular_autor'		,
		  '$facebook_autor'		,
		  '$instagram_autor'	,
		  '$skype_autor'		,
		  '$twitter_autor'		,
		  '$nombre_img',
		  '$resena_autor'	  )";

		 mysql_query($sql,$link);

?>
			<script languaje="javascript">
		    alert("Usuario ingresado correctamente!");
		    location.href = "autor.php";
		   </script>
<?php

?>

