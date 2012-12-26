<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="es" xmlns="http://www.w3.org/1999/xhtml">
  <head>
      <link rel="shortcut icon" href="images/favicon.ico"/>
      <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
      <meta name="author" content="Antonio Pol"/>
    <link rel="stylesheet" type="text/css" href="../../css/estilo.css" media="screen" />
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
    <title>Jquery y AJAX</title>
  </head>
    <body>
        <header>
            Video Tutoriales por <span class="ap">Antonio Pol</span>
        </header>
        <section id="contenido">
            <form action="#" method="post">
                <select id="trabajador" name="trabajador" onchange="cargarInfo();">
                <?php
                $db = new mysqli("localhost", "administrador", "123456", "tutoriales");
                $sql="select nombre_tra from trabajadores";
                $resultado=$db->query($sql);
                if($db->affected_rows>0)
                {
                    while($fila=$resultado->fetch_array())
                    {
                        echo "<option value=".$fila["nombre_tra"].">".$fila["nombre_tra"]."</option>";
                    }  
                }
                ?>
                </select><br/>
            </form>
            <br/>
            <section id="info">
            </section>
        </section>
        <script type="text/javascript">
        function cargarInfo(){
	$('#info').html('Cargando...');
 	var trabajador= $('#trabajador').val();
        var url="cargar_info.php";
	$.post(url,{trabajador: trabajador},function (responseText){
	$('#info').html(responseText);
            });
        }
        </script>
    </body>
</html>
