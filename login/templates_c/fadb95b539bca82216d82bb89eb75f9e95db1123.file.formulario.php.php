<?php /* Smarty version Smarty-3.0.4, created on 2012-08-11 23:52:40
         compiled from "formulario.php" */ ?>
<?php /*%%SmartyHeaderCode:318935026d4288c19b7-28592682%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fadb95b539bca82216d82bb89eb75f9e95db1123' => 
    array (
      0 => 'formulario.php',
      1 => 1344721950,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '318935026d4288c19b7-28592682',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<<?php ?>?php
    include('../../include_videotutoriales/configpc.php');
    $html=new Smarty;
    if(!isset($_POST["formulario"]))
    {
        $html->display("formulario.php");
    }else{
        $nombre=$_POST["nombre"];
        $apellidos=$_POST["apellidos"];
        $html->assign("nombre",$nombre);
        $html->assign("apellidos",$apellidos);
        $html->display("info.html");
    }
    
?<?php ?>>
