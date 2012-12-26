<?php
$trabajador=$_POST["trabajador"];
$db = new mysqli("localhost", "administrador", "123456", "tutoriales");
$sql="select * from trabajadores where nombre_tra='$trabajador'";
$resultado=$db->query($sql);
if($db->affected_rows>0)
{
    while($fila=$resultado->fetch_array())
    {
        echo "Nombre: ".$trabajador."<br/>";
        echo "Id: ".$fila["id_tra"]."<br/>";
        echo "Num Departamento: ".$fila["departamento_tra"]."<br/>";
        echo "Puesto: ".$fila["puesto"]."<br/>";
    }
}
?>
