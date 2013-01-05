<?php /* Smarty version Smarty-3.0.4, created on 2013-01-05 12:22:04
         compiled from ".\templates\listado.html" */ ?>
<?php /*%%SmartyHeaderCode:1388350e80cdcf0b354-73471445%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cdd0c6ec9965644df71ec6eb0e96d6a8a7d89367' => 
    array (
      0 => '.\\templates\\listado.html',
      1 => 1357384920,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1388350e80cdcf0b354-73471445',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Listado</title>
</head>
<body>
	<h1>Agregar Usuario</h1>
	<form action="agregar.php" method="post">
		<label for="usuario">Usuario</label><br/>
		<input type="text" name="usuario" id="usuario"><br/>
		<label for="pass">Pass</label><br/>
		<input type="password" name="pass" id="pass"><br/>
		<input type="submit" value="Agregar Usuario"/>
	</form>
	<h1>Listado</h1>
	<?php  $_smarty_tpl->tpl_vars['usuario'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('usuarios')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['usuario']->key => $_smarty_tpl->tpl_vars['usuario']->value){
?>
		<p><?php echo (isset($_smarty_tpl->tpl_vars['usuario']->value['usuario']) ? $_smarty_tpl->tpl_vars['usuario']->value['usuario'] : null);?>
</p>
	<?php }} else { ?>
		<p>No existen usuarios actualmente</p>
	<?php } ?>
</body>
</html>