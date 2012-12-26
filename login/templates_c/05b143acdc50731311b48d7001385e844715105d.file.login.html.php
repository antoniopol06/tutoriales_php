<?php /* Smarty version Smarty-3.0.4, created on 2012-08-19 17:42:11
         compiled from ".\templates\login.html" */ ?>
<?php /*%%SmartyHeaderCode:183185031095349ac55-74114864%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '05b143acdc50731311b48d7001385e844715105d' => 
    array (
      0 => '.\\templates\\login.html',
      1 => 1345390923,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '183185031095349ac55-74114864',
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
           <form action="formulariologin.php" method="post" >
                <input type="hidden" name="formulario" id="formulario" value="1"/>
                <label for="usuario">Usuario</label> <input type="text" name="usuario" id="usuario"/><br/>
                <label for="pass">Pass</label> <input type="text" name="pass" id="pass"/><br/>
                <input type="submit" value="Entrar"/>
            </form>
            <footer>
            <a href="http://localhost/videotutoriales" alt="volver">Volver al men&uacute; inicio</a>
        </footer>
        </section>
        
    </body>
</html>
