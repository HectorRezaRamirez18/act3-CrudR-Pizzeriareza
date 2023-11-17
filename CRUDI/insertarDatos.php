<?php

include "../config/conexion.php";

    $id_Trabajador = $_POST['id_Trabajador'];
    $id_Ingrediente = $_POST['id_Ingrediente'];
    $Nombre_Ingrediente = $_POST['Nombre_Ingrediente'];
    $Precio_Ingrediente = $_POST['Precio_Ingrediente'];
    $id_Proveedor = $_POST['id_Proveedor'];
    $Fecha_Entrega = $_POST['Fecha_Entrega'];
    $Cantidad_Ingredientes = $_POST['Cantidad_Ingredientes'];

$sql = "INSERT INTO `inventario`(`id_Trabajador`, `id_Ingrediente`, `Nombre_Ingrediente`, `Precio_Ingrediente`, `id_Proveedor`, `Fecha_Entrega`, `Cantidad_Ingredientes`) VALUES ('$id_Trabajador','$id_Ingrediente', '$Nombre_Ingrediente', '$Precio_Ingrediente', '$id_Proveedor', '$Fecha_Entrega', '$Cantidad_Ingredientes')";

$resultado = mysqli_query($conexion, $sql);

if ($resultado == TRUE) {
    header("location:../Formularios/inventario/index.php");
} else {
    echo "Datos no insertados";
}
