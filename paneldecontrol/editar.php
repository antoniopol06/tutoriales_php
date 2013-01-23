<?php
session_start();
if(empty($_SESSION["admin"]))
{
	header("location: acceso.php");
}else{
	$db = new mysqli("localhost", "administrador", "123456", "tutoriales");
	if(empty($_POST))
	{
		include('../../include_videotutoriales/configpc.php');
	    $html=new Smarty;
	    $id=$_GET["id"];
	    $query="select * from usuarios where id='$id'";
	    $res=$db->query($query);
	    if($db->affected_rows==1)
	    {
	    	$fila=$res->fetch_array();
	    	$usuario=array("usuario"=>$fila["usuario"], "pass"=>$fila["pass"], "id"=>$fila["id"]);
	    	$html->assign("usuario",$usuario);
	    	$html->display("editar.html");
	    }else{
	    	$html->display("error.html");
	    }
	}else{
		$id=$_POST["id"];
		$usuario=$_POST["usuario"];
		$passantigua=$_POST["passantigua"];
		$pass=$_POST["pass"];
		$query="Update usuarios set usuario='$usuario'";
		if(!empty($pass))
		{
			$pass=md5($pass);
			$query.=", pass='$pass'";
		}
		$query.="Where id='$id'";
		$db->query($query);
		header("location: index.php");
	}
}
?>