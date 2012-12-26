<?php
    include('../../include_videotutoriales/configpc.php');
    session_start();
    $html=new Smarty;
    if(!isset($_POST["formulario"]))
    {
        $html->display("login.html");
    }else{
        $usuario=$_POST["usuario"];
        $pass=$_POST["pass"];
        $pass=md5($pass);
        $db=new DB_Sql();
        //query de usuario si es que si creamos la session usuario y vamos a perifl.php , si da error a error.php
        $query="select usuario from usuarios where usuario='$usuario' and pass='$pass'";
        $db->query($query);
        if($db->num_rows()>0)
        {
            $_SESSION["usuario"]=$usuario;
            header("location: perfil.php");
            
        }else{
            $html->display("error.html");
        }
    }

    
?>
