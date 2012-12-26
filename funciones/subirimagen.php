<?php
$imagen=$_FILES["imagen"];
$nombre=$_FILES["imagen"]["name"];
$archivo="imagenes/".$nombre;
while(file_exists($archivo))
{
    mt_srand (time());
    $numero = mt_rand(0,1000);
    $aux=explode(".",$nombre);
    $tamano = sizeof($aux);
    $extension=$aux[$tamano-1];//coge la extension de la imagen
    $pos=0;
    $nombre="";
    while($pos<$tamano-1)//excluye la extension para crear el nombre de la imagen
    {
        $nombre.=$aux[$pos];
        $pos=$pos+1;
    }
    $nombre=$nombre.$numero.".".$extension;
    $archivo="imagenes/".$nombre;
}
$nombre=$nombre;
if(move_uploaded_file($imagen["tmp_name"], "imagenes/".$nombre))
{
echo "Subido correctamente";
}else{
    echo "Se ha producido un error";
}
?>
