<?php
$bd = new mysqli("localhost", "administrador", "123456", "tutoriales");
$query="select id_tra, nombre_tra, departamento_tra from trabajadores";
$res=$bd->query($query);
if($res->num_rows>0)
{
	while($fila=$res->fetch_array())
	{
		$trabajadores[$fila["id_tra"]]=array("nombre"=>$fila["nombre_tra"], "departamento"=>$fila["departamento_tra"]);
	}
}

foreach($trabajadores as $trabajador)
{
	if(in_array("20",$trabajador))
	{
		echo array_search("2", $trabajador);
	}
}
?>