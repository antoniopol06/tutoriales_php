<?php /* Smarty version Smarty-3.0.4, created on 2012-08-11 13:25:16
         compiled from ".\templates\formulario.html" */ ?>
<?php /*%%SmartyHeaderCode:38325026411c272759-12482361%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f4e8860d905a8126defd559974a9b5c1a8ae6b5f' => 
    array (
      0 => '.\\templates\\formulario.html',
      1 => 1344684289,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '38325026411c272759-12482361',
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
            <form action="formulario.php" method="post" >
                <input type="hidden" name="formulario" id="formulario" value="1"/>
                <label for="nombre">Nombre</label> <input type="text" name="nombre" id="nombre"/><br/>
                <label for="apellidos">Apellidos</label> <input type="text" name="apellidos" id="apellidos"/><br/>
                <input type="submit" value="Enviar"/>
            </form>
            <footer>
            <a href="http://localhost/videotutoriales" alt="volver">Volver al men&uacute; inicio</a>
        </footer>
        </section>
    </body>
</html>
