<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>



<form action="cambiodatospersonales.php" enctype="multipart/form-data" method="post">
  <label for="imagen">Imagen:</label> 
  <input id="imagen" name="imagen" size="30" type="file" />
  <input type="submit" value="Cambiar datos" />
</form>


<?php  
include('conexion1.php');

/* lanzamos la consulta para traernos el nombre de la imagen, en nuestro caso 
el campo ruta_imagen se encuentra en la tabla usuarios */ 
$result = mysql_query("SELECT * FROM prueba_ruta"); 
while ($row=mysql_fetch_array($result)) 
{ 
    /*almacenamos el nombre de la ruta en la variable $ruta_img*/ 
    $ruta_img = $row["ruta_imagen"]; 

}
echo $ruta_img;
?>

<div>
   <img src="/img/uploads/autores/<?php echo $ruta_img; ?>" alt="" />
</div>

	
</body>
</html>

