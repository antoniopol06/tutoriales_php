<?php
session_start();
echo "Pagina 2 <br/>";
if(isset($_SESSION["carrito"]))
{
$carrito=$_SESSION["carrito"];
foreach($_SESSION["carrito"] as $producto)
{
    if(in_array("camiseta",$producto))
    {
        $carrito[$producto["ref"]]["cantidad"]=2;
    }
}
$_SESSION["carrito"]=$carrito;
foreach ($_SESSION["carrito"] as $producto)
{
    $total=$total+$producto["precio"]*$producto["cantidad"];
    $cantidadtotal=$cantidadtotal+$producto["cantidad"];
}
echo "PRODUCTOS: ".$cantidadtotal."<br/>";
echo "TOTAL: ".$total;
}else{
    echo "carrito vacio";
}
?>
