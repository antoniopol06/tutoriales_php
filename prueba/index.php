<?php
$salida="<?php
    echo 'hola mundo';
    \$variable=1;
    echo \$variable;
    ?>";
$fp=fopen("prueba.php",w);
fwrite($fp,$salida);
fclose($fp);

?>
