<?php /* Smarty version Smarty-3.1.13, created on 2013-02-10 17:43:15
         compiled from ".\templates\index.html" */ ?>
<?php /*%%SmartyHeaderCode:307405117cd01373159-32094029%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '06f2fd8d9a960ed1fa3c26ccfad67689d23fc229' => 
    array (
      0 => '.\\templates\\index.html',
      1 => 1360514561,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '307405117cd01373159-32094029',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5117cd01408ba9_30626497',
  'variables' => 
  array (
    'titulo' => 0,
    'categorias' => 0,
    'categoria' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5117cd01408ba9_30626497')) {function content_5117cd01408ba9_30626497($_smarty_tpl) {?><!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
	<link rel="stylesheet" href="css/estilo.css"/>
</head>
<body>
<h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
<?php  $_smarty_tpl->tpl_vars['categoria'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['categoria']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categorias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['categorias']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->key => $_smarty_tpl->tpl_vars['categoria']->value){
$_smarty_tpl->tpl_vars['categoria']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['categorias']['iteration']++;
?>
	<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['categorias']['iteration']%2==0){?>
	<a class="par" href="<?php echo $_smarty_tpl->tpl_vars['categoria']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['categoria']->value['categoria'];?>
"><?php echo $_smarty_tpl->tpl_vars['categoria']->value['categoria'];?>
</a><br/>
	<?php }else{ ?>
	<a class="impar" href="<?php echo $_smarty_tpl->tpl_vars['categoria']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['categoria']->value['categoria'];?>
"><?php echo $_smarty_tpl->tpl_vars['categoria']->value['categoria'];?>
</a><br/>
	<?php }?>
	
<?php } ?>
</body>
</html><?php }} ?>