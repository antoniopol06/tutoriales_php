<?php
session_start();
include('../../include_videotutoriales/configpc.php');
$db = new mysqli("localhost", "administrador", "123456", "tutoriales");
$html=new Smarty;
$usuario=$_POST["usuario"];
$pass=$_POST["pass"];
$pass=md5($pass);
if($usuario=="admin")
{
	$query="select usuario from usuarios where usuario='$usuario' and pass='$pass'";
	$db->query($query);
	if($db->affected_rows==1)
	{
		$_SESSION["admin"]=1;
		header("location: index.php");
	}else{
		$html->display("error.html");
	}
}else{
	$html->display("error.html");
}
?>