<?php
session_start();
if(empty($_SESSION["admin"]))
{
	header("location: acceso.php");
}else{
	include('../../include_videotutoriales/configpc.php');
    $db = new mysqli("localhost", "administrador", "123456", "tutoriales");
    $html=new Smarty;
	$id=$_GET["id"];
	$query="select id from usuarios where id='$id'";
	$db->query($query);
	if($db->affected_rows==1)
	{
		$query="Delete from usuarios where id='$id'";
		$db->query($query);
		header("location: index.php");
	}else{
		$html->display("error.html");
	}
}
	
?>