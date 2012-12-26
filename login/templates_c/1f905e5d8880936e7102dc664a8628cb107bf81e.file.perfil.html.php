<?php /* Smarty version Smarty-3.0.4, created on 2012-08-19 17:44:07
         compiled from ".\templates\perfil.html" */ ?>
<?php /*%%SmartyHeaderCode:19383503109c792afb2-83284051%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f905e5d8880936e7102dc664a8628cb107bf81e' => 
    array (
      0 => '.\\templates\\perfil.html',
      1 => 1345391008,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19383503109c792afb2-83284051',
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
    <title>Utilizaci&oacute;n de Sesiones para loguearse</title>
  </head>
    <body>
        <header>
            Video Tutoriales por <span class="ap">Antonio Pol</span>
        </header>
        <section id="contenido">
            Bienvenido <?php echo $_smarty_tpl->getVariable('usuario')->value;?>
. <a href="salir.php" title="Salir">Salir</a>.
            <footer>
            <a href="http://localhost/videotutoriales" alt="volver">Volver al men&uacute; inicio</a>
        </footer>
        </section>
        
    </body>
</html>
