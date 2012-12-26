<?php
    include('../../include_videotutoriales/configpc.php');
    $html=new Smarty;
    if(!isset($_POST["formulario"]))
    {
        $html->display("formulario.html");
    }else{
        $nombre=$_POST["nombre"];
        $apellidos=$_POST["apellidos"];
        $html->assign("nombre",$nombre);
        $html->assign("apellidos",$apellidos);
        $html->display("info.html");
    }

    
?>
