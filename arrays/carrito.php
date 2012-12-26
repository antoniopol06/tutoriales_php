<?php
session_start();
if(!isset($_SESSION["carrito"]))
{
$carrito["001"]=array("nombre"=>"camiseta","ref"=>"001", "precio"=>25, "talla"=>"L", "cantidad"=>1);
$carrito["002"]=array("nombre"=>"pantalon","ref"=>"002", "precio"=>40, "talla"=>"L", "cantidad"=>1);
$_SESSION["carrito"]=$carrito;
}

$total=0;
$totalcantidad=0;
foreach($_SESSION["carrito"] as $producto)
{
    $total=$total+$producto["precio"]*$producto["cantidad"];
    $totalcantidad=$totalcantidad+$producto["cantidad"];
}
echo "PRODUCTOS: ".$totalcantidad."<br/>";
echo "TOTAL: ".$total;
session_destroy();
?>
