<?php /* Smarty version Smarty-3.0.4, created on 2012-08-12 00:01:34
         compiled from ".\templates\info.html" */ ?>
<?php /*%%SmartyHeaderCode:208915026d63e388b48-17568830%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0cef1247228d69607513e0d98c3a7fa7614a0837' => 
    array (
      0 => '.\\templates\\info.html',
      1 => 1344722482,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '208915026d63e388b48-17568830',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php echo '<?xml';?> version="1.0" encoding="utf-8"<?php echo '?>';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="es" xmlns="http://www.w3.org/1999/xhtml">
  <head>
      <link rel="shortcut icon" href="images/favicon.ico"/>
      <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
      <meta name="author" content="Antonio Pol"/>
    <link rel="stylesheet" type="text/css" href="../css/estilo.css" media="screen" />
    <title>Formulario y recoger Variables</title>
  </head>
    <body>
        <header>
            Video Tutoriales por <span class="ap">Antonio Pol</span>
        </header>
        <section id="contenido">
            Bienvenido <?php echo $_smarty_tpl->getVariable('nombre')->value;?>
 <?php echo $_smarty_tpl->getVariable('apellidos')->value;?>

            <footer>
            <a href="http://localhost/videotutoriales" alt="volver">Volver al men&uacute; inicio</a>
        </footer>
        </section>
        
    </body>
</html>
