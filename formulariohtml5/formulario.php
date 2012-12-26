<?php
    include('../../include_videotutoriales/configpc.php');
    $html=new Smarty;
    if(!isset($_POST["formulario"]))
    {
        $html->display("formulario.html");
    }else{
        $html->display("info.html");
    }

    
?>
