<?php /* Smarty version Smarty-3.0.4, created on 2013-01-30 16:16:47
         compiled from ".\templates\editar.html" */ ?>
<?php /*%%SmartyHeaderCode:152945109395f1546e9-14964873%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '85bc4a8e7edf3d246356588740ec83d5bf10cbea' => 
    array (
      0 => '.\\templates\\editar.html',
      1 => 1359558916,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '152945109395f1546e9-14964873',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Editar</title>
</head>
<body>
	<h1>Editar Usuario: <?php echo (isset($_smarty_tpl->getVariable('usuario')->value['usuario']) ? $_smarty_tpl->getVariable('usuario')->value['usuario'] : null);?>
</h1>
	<form action="editar.php" method="post">
		<label for="usuario">Usuario</label><br/>
		<input type="hidden" id="id" name="id" value="<?php echo (isset($_smarty_tpl->getVariable('usuario')->value['id']) ? $_smarty_tpl->getVariable('usuario')->value['id'] : null);?>
"/>
		<input type="text" name="usuario" id="usuario" value='<?php echo (isset($_smarty_tpl->getVariable('usuario')->value['usuario']) ? $_smarty_tpl->getVariable('usuario')->value['usuario'] : null);?>
'><br/>
		<label for="pass">Pass</label><br/>
		<input type="hidden" name="passantigua" id="passantigua" value="<?php echo (isset($_smarty_tpl->getVariable('usuario')->value['pass']) ? $_smarty_tpl->getVariable('usuario')->value['pass'] : null);?>
"/>
		<input type="password" name="pass" id="pass"><br/>
		<input type="submit" value="Editar Usuario"/>
	</form>
	<form action="salir.php" method="post">
		<input type="submit" value="Salir"/>
	</form>
</body>
</html>