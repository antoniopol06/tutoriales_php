<?php
    include('../../include_videotutoriales/configpc.php');
    session_start();
    $html=new Smarty;
    if($_SESSION["usuario"]!="")
    {
        $html->assign("usuario",$_SESSION["usuario"]);
        $html->display("perfil.html");
    }else{
        $html->display("login.html");
    }
?>
