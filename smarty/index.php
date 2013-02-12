<?php
include('Smarty/libs/Smarty.class.php');
$categorias[0]["url"]="noticias.php";
$categorias[0]["categoria"]="Noticias";
$categorias[1]["url"]="deportes.php";
$categorias[1]["categoria"]="Deportes";
$titulo="Mi Web";
$html=new Smarty;
$html->assign("categorias", $categorias);
$html->assign("titulo",$titulo);
$html->display("index.html");
?>
