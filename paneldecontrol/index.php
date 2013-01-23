<?php
    session_start();
    if(empty($_SESSION["admin"]))
    {
        header("location: acceso.php");
    }else{
    include('../../include_videotutoriales/configpc.php');
    $db = new mysqli("localhost", "administrador", "123456", "tutoriales");
    $html=new Smarty;
    $usuarios=array();
    $query="select id, usuario from usuarios";
    $res=$db->query($query);
    if($db->affected_rows>0)
    {
        while($fila=$res->fetch_array())
        {
            $usuarios[$fila["id"]]=array("id"=>$fila["id"], "usuario"=>$fila["usuario"]);
        }
    }
    $html->assign("usuarios",$usuarios);
    $html->display("listado.html");
    }
?>
