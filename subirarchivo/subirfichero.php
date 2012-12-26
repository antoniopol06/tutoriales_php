<?php
$directorio = "pdfs/";
$fichero=$_FILES["fichero"];
if($fichero["type"]=="application/pdf")
{
    if (move_uploaded_file($fichero["tmp_name"], $directorio.$fichero["name"])){
         echo "Exito al subir el fichero";
    }else{
        echo "Error al copiar el fichero ".$fichero["name"];
    }
}else{
    echo "El documento debe ser pdf";
}

?>
