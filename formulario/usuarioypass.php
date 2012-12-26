<?php
    include('../../include_videotutoriales/configpc.php');
    $html=new Smarty;
    if(!isset($_POST["formulario"]))
    {
        $html->display("usuarioypass.html");
    }else{
        $usuario=$_POST["usuario"];
        $pass=$_POST["pass"];
        $pass=md5($pass);
        $db=new DB_Sql();
        $query="insert into usuarios(usuario,pass) values('$usuario','$pass')";
        $db->query($query);
        $html->display("exito.html");
    }
?>
