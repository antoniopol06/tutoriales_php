<?php
$db=new mysqli("localhost","administrador","123456","tutoriales");
$limite=$_POST["limite"];
$query="SELECT id from productos";
$res=$db->query($query);
$total=$res->num_rows;
/*vamos a mostrar los productos de 4 en 4*/
$paginas=ceil($total/4);
$query="SELECT id, producto from productos limit $limite, 4";
$res=$db->query($query);
if($res->num_rows>0)
{
    while($fila=$res->fetch_array())
    {
        $productos[$fila["id"]]=$fila["producto"];
    }
}
if(empty($productos))
{
    echo "No hay productos posibilidad 2";
}else{
if($limite>0)
{
    $limit=$limite-4;
    echo "<aside class=\"anterior\" onclick=\"cargarproductos(".$limit.")\">Anterior</aside>";
}else{
     echo "<aside></aside>";
}
foreach($productos as $producto)
{
    echo "<article class=\"producto\">".$producto."</article>";
}
if($limite<$total-4)
{
    $limit=$limite+4;
    echo "<aside class=\"siguiente\" onclick=\"cargarproductos(".$limit.")\">Siguiente</aside>";
}else{
     echo "<aside ></aside>";
}
}

?>
