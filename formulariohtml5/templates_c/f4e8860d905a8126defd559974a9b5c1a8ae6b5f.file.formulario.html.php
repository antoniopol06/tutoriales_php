<?php /* Smarty version Smarty-3.0.4, created on 2012-08-26 10:57:32
         compiled from ".\templates\formulario.html" */ ?>
<?php /*%%SmartyHeaderCode:184305039e4fc3d6e65-13138431%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f4e8860d905a8126defd559974a9b5c1a8ae6b5f' => 
    array (
      0 => '.\\templates\\formulario.html',
      1 => 1345971449,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '184305039e4fc3d6e65-13138431',
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
    <title>Formulario HTML5</title>
    <style>
        #email:valid{
        border:1px solid green;
        }

        #email:invalid{
        border: 3px solid red;
        }
}
}
    </style>
  </head>
    <body>
        <header>
            Video Tutoriales por <span class="ap">Antonio Pol</span>
        </header>
        <section id="contenido">
            <form action="formulario.php" method="post" >
                <input type="hidden" name="formulario" id="formulario" value="1"/>
                <label for="email">Email</label> <input type="email" name="email" id="email" placeholder="Ponga aquí su email" required/><br/>
                <label for="numero">Numero</label> <input type="number" name="numero" id="numero"/><br/>
                <label for="rango">Rango</label> 0<input type="range" min="0" max="10" name="rango" id="rango">10<br/>
                <label for="fecha">Fecha</label> <input type="date" name="fecha" id="fecha"/><br/>
                
                <input type="submit" value="Enviar"/>
            </form>
            <footer>
            <a href="http://localhost/videotutoriales" alt="volver">Volver al men&uacute; inicio</a>
        </footer>
        </section>
    </body>
</html>
