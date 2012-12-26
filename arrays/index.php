<?php

for($i=0;$i<=65;$i++)
{
    $numeros[$i]=$i;
}

$elementos=sizeof($numeros)-1;
srand (time());
$aleatorio = rand(0,$elementos);
echo $aleatorio;

?>
