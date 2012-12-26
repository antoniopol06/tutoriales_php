<?php
/*Conexión a base de datos con mysqli*/
//MYSQL//
$conexion=mysql_connect("localhost","administrador","123456");
mysql_select_db("tutoriales",$conexion);
$query="SELECT * FROM datos";
$resultado= mysql_query($query);
echo "<h1>MYSQL</h1>";
if(mysql_affected_rows ()>0)
{
    echo "Filas afectadas: ".mysql_affected_rows()."<br/>--------------------<br/>";
    while($fila=  mysql_fetch_array($resultado))
    {
        echo "ID: ".$fila["id_dat"]."<br/>";
        echo "DATO: ".$fila["nombre_dat"]."<br/>";
    }
    echo "----------------------------<br/>";
}
mysql_close($conexion);
/*Conexión con a la base de datos*/
//MYSQLI
$bd = new mysqli("localhost", "administrador", "123456", "tutoriales");
$resultado=$bd->query($query);
echo "<h1>MYSQLI</h1>";
if($bd->affected_rows>0)
{
    echo "Filas afectadas: ".$bd->affected_rows."<br/>--------------<br/>";
    while($fila=$resultado->fetch_array())
    {
        echo "ID: ".$fila["id_dat"]."<br/>";
        echo "DATO: ".$fila["nombre_dat"]."<br/>";
    }
    echo "----------------------------<br/>";
}
$db->close;
?>
