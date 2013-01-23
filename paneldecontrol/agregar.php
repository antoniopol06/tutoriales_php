<?php
session_start();
if(empty($_SESSION["admin"]))
{
	header("location: acceso.php");
}else{
$db = new mysqli("localhost", "administrador", "123456", "tutoriales");
$usuario=$_POST["usuario"];
$pass=$_POST["pass"];
$pass=md5($pass);
$query="insert into usuarios(usuario,pass) values('$usuario','$pass')";
$db->query($query);
header("location: index.php");
}
?>