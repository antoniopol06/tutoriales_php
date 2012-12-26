<?php

 $expresion="(^([a-z]|[0-9])+.*(\.?([a-z]|[0-9])+)?@([a-z]|[0-9]){2,}(\.[a-z]{2,3})(\.[a-z]{2})?$)";
 $email="pruebagmail.com";
 if(ereg($expresion, $email))
 {
     echo "correcto con la funcion ereg<br/>";
 }else{
     echo "no es correcto el mail<br/>";
 }
 
 if(preg_match($expresion, $email))
 {
     echo "correcto con la funcion pregmatch";
 }else{
     echo "no es correcto el mail";
 }
?>
