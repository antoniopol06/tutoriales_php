<?php /* Smarty version Smarty-3.0.4, created on 2013-01-22 17:02:43
         compiled from ".\templates\acceso.html" */ ?>
<?php /*%%SmartyHeaderCode:2605250feb823d62be2-91678611%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '92028c7959a579dacd48ba25cfa5879dec74f003' => 
    array (
      0 => '.\\templates\\acceso.html',
      1 => 1358870554,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2605250feb823d62be2-91678611',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Acceso</title>
</head>
<body>
	<h1>Acceso al panel de control</h1>
	<form action="acceder.php" method="post">
		<label for="usuario">Usuario</label><br/>
		<input type="text" name="usuario" id="usuario"><br/>
		<label for="pass">Pass</label><br/>
		<input type="password" name="pass" id="pass"><br/>
		<input type="submit" value="Entrar"/>
	</form>
</body>
</html>