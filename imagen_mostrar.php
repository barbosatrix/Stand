<?php
########## imagen_mostrar.php ##########
# debe recibir el id de la imagen a mostrar
# http://www.lawebdelprogramador.com
 
# Conectamos con MySQL
require("conexion1.php");

$link=$conexion;
if (!$link) {
    die("Error al conectar: ".mysql_error());
}
 
# Seleccionamos la base de datos
$db_selected=$db;
if (!$db_selected) {
    die ("No se puede conectar con la base de datos: ".mysql_error());
}
 
# Buscamos la imagen a mostrar
@$result=mysql_query("SELECT * FROM `imagen_autor` WHERE id=".$_GET["id"],$link);
@$row=mysql_fetch_array($result);
 
# Mostramos la imagen
header("Content-type:".$row["tipo"]);
echo $row["imagen"];
?>