<?php

$mysqli = new mysqli('localhost', 'root','','lasilueta');


/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

$consulta = "SELECT id_autor,nombre_autor FROM autor ORDER by nombre_autor";

if ($resultado = $mysqli->query($consulta)) {

    /* obtener el array de objetos */
    while ($fila = $resultado->fetch_row()) {
		echo ("$fila[1] \n");	
    }

    /* liberar el conjunto de resultados */
    $resultado->close();
}

/* cerrar la conexión */
$mysqli->close();
?>
