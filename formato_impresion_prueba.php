<?php
require("conexion1.php");

  $id_autor=1;
  // $_GET["var"];
  $consulta = "SELECT * FROM autor Where id_autor='".$id_autor."'";
  $rec=mysql_query($consulta);
  $autor=mysql_fetch_array($rec);//Se guarda el resultado de la consulta. desde aqui se imprimira
  $ruta=$autor['ruta_foto'];
  // echo $ruta;
  // $consulta2="SELECT imagen FROM imagen_autor Where id='".$autor['id_foto']."'"; 
  // $rec2=mysql_query($consulta2);
  // $imagen=mysql_fetch_array($rec2)

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Formato Impresion</title>
<link rel="stylesheet" href="printprueba.css" type="text/css">
</head>

<body>
<table width="1099" height="527" border="0">
  <tr>
    <td>&nbsp;</td>
    <td colspan="2"><strong>Ficha Autor: </strong> <?php echo $autor['nombre_autor']," ".$autor['apellido_autor']?> - La Silueta </td>
  </tr>
  <tr>
    <td width="385" height="390"><table align="center" width="385" height="270" border="1">
      <tr>
        <td height="264" style="text-align: center"><?php  echo "<img src='/img/uploads/autores/".$ruta."'
                   width='320' height='310'/>";?></td>
      </tr>
    </table></td>
    <td colspan="2" class="reseña" valign="top" style="padding: 20px;padding-top:50px;"><div><strong>Reseña</strong> <?php echo $autor['resena_autor']?></div></td>
  </tr>
  <tr>
    <td><table align="center" width="80%" border="1">
      <tr>
        <td colspan="2">FICHA DEL AUTOR</td>
        </tr>
      <tr>
        <td width="51%">NOMBRE</td>
        <td width="49%"><?php echo $autor['nombre_autor']?></td>
      </tr>
      <tr>
        <td>APELLIDO</td>
        <td><?php echo $autor['apellido_autor']?></td>
      </tr>
      <tr>
        <td>SEUDONIMO</td>
        <td><?php echo $autor['seudonimo_autor']?></td>
      </tr>
      <tr>
        <td>NACIONALIDAD</td>
        <td><?php echo $autor['nacionalidad_autor']?></td>
      </tr>
      <tr>
        <td>EMAIL</td>
        <td><?php echo $autor['email_autor']?></td>
      </tr>
      <tr>
        <td>DIRECCION</td>
        <td><?php echo $autor['direccion_autor']?></td>
      </tr>
      <tr>
        <td>CIUDAD</td>
        <td><?php echo $autor['ciudad_autor']?></td>
      </tr>
      <tr>
        <td>PAIS</td>
        <td><?php echo $autor['pais_autor']?></td>
      </tr>
      <tr>
        <td>TELEFONO</td>
        <td><?php echo $autor['telefono_autor']?></td>
      </tr>
      <tr>
        <td>AÑO</td>
        <td><?php echo $autor['año_autor']?></td>
      </tr>
      <tr>
        <td>WEB</td>
        <td><?php echo $autor['web_autor']?></td>
      </tr>
      <tr>
        <td>CELULAR</td>
        <td><?php echo $autor['celular_autor']?></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table></td>
    <td width="297" align="center" valign="top" class="medio"><table class="redes" width="80%" border="1">
      <tr>
        <td colspan="2">REDES</td>
        </tr>
      <tr>
        <td width="45%">FACEBOOK</td>
        <td width="55%"><?php echo $autor['facebook_autor']?></td>
      </tr>
      <tr>
        <td>INSTAGRAM</td>
        <td><?php echo $autor['instagram_autor']?></td>
      </tr>
      <tr>
        <td>SKYPE</td>
        <td><?php echo $autor['skype_autor']?></td>
      </tr>
      <tr>
        <td>TWITTER</td>
        <td><?php echo $autor['twitter_autor']?></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table></td>
    <td width="403">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><img src="img/LaSIluetaLogo_direccion-05.svg" align="right" alt="" width="400" height="200"/></td>
  </tr>
</table>
</body>
</html>
