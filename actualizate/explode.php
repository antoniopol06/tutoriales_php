<?php
$linea="pedro:123456";
//desaconsejado OBSOLETO
list($usuario,$pass)=split(":",$linea);
echo $usuario." ".$pass;
//explode
echo "<br/>explode<br/>";
$linea=explode(":",$linea);
echo $linea[0]." ".$linea[1];
?>
