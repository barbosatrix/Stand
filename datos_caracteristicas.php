<?php
$id_libro=$_POST['id_libro_car'];
$papel_paginas1=$_POST['papel_paginas1'];
$$gramaje_paginas1=$_POST['gramaje_paginas1'];
$proveedor_papel1=$_POST['proveedor_papel1'];
$papel_paginas2=$_POST['papel_paginas2'];
$gramaje_paginas2=$_POST['gramaje_paginas2'];
$proveedor_papel2=$_POST['proveedor_papel2'];
$papel_paginas3=$_POST['papel_paginas3'];
$gramaje_paginas3=$_POST['gramaje_paginas3'];
$proveedor_papel3=$_POST['proveedor_papel3'];
$formato_impresion=$_POST['formato_impresion'];
$cantidad_formatos=$_POST['cantidad_formatos'];
$papel_portada=$_POST['papel_portada'];
$gramaje_portada=$_POST['gramaje_portada'];
$proveedor_portada=$_POST['proveedor_portada'];
$formato_portada=$_POST['formato_portada'];
$papel_guarda=$_POST['papel_guarda'];
$gramaje_guarda=$_POST['gramaje_guarda'];
$proveedor_guarda=$_POST['proveedor_guarda'];
$papel_sobrecubierta=$_POST['papel_sobrecubierta'];
$gramaje_sobrecubierta=$_POST['gramaje_sobrecubierta'];
$proveedor_sobrecubierta=$_POST['proveedor_sobrecubierta'];
$encuadernacion=$_POST['encuadernacion'];
$proveedor_encuadernacion=$_POST['proveedor_encuadernacion'];
$caracteristicas_especiales=$_POST['caracteristicas'];
$proveedor_caracteristicas=$_POST['proveedor_caracteristicas'];
$tinta1=$_POST['tinta1'];
$tinta2=$_POST['tinta2'];
$tinta3=$_POST['tinta3'];
$tinta4=$_POST['tinta4'];
$tinta5=$_POST['tinta5'];
$tinta6=$_POST['tinta6'];
$tinta7=$_POST['tinta7'];
$tinta8=$_POST['tinta8'];
$tinta9=$_POST['tinta9'];

echo'Esta corriendo <br>';

if (isset($_POST['apellido_autor'])&& !empty($_POST['apellido_autor'])and $_POST['nombre_autor'] && $_POST['nombre_autor'])
	{
		$EnlaceBD= $conexion;
		mysql_select_db('lasilueta',$EnlaceBD) or die ('No se puede seleccionar la base de datos');
			
		mysql_query("INSERT INTO caracteristicas_tecnicas_libro VALUES (
			'',
			'$id_libro',
			'$papel_paginas1',
			'$gramaje_paginas1',
			'$proveedor_papel1',
			'$papel_paginas2',
			'$gramaje_paginas2',
			'$proveedor_papel2',
			'$papel_paginas3',
			'$gramaje_paginas3',
			'$proveedor_papel3',
			'$formato_impresion',
			'$cantidad_formatos',
			'$papel_portada',
			'$gramaje_portada',
			'$proveedor_portada',
			'$formato_portada',
			'$papel_guarda',
			'$gramaje_guarda',
			'$proveedor_guarda',
			'$papel_sobrecubierta',
			'$gramaje_sobrecubierta',
			'$proveedor_sobrecubierta',
			'$encuadernacion',
			'$proveedor_encuadernacion',
			'$caracteristicas_especiales',
			'$proveedor_caracteristicas',
			'$tinta1',
			'$tinta2',
			'$tinta3',
			'$tinta4',
			'$tinta5',
			'$tinta6',
			'$tinta7',
			'$tinta8',
			'$tinta9'");
		echo ('datos enviados correctamente');
	}else{
		echo ('no se han podido ingresar los datos');
	}
?>