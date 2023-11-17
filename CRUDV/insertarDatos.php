<?php

include "../config/conexion.php";

$id_Trabajador = $_POST['id_Trabajador'];
    $Nombre_Cliente = $_POST['Nombre_Cliente'];
    $codigo = $_POST['codigo'];
    $Cantidad_Pizzas = $_POST['Cantidad_Pizzas'];
    $Refresco = $_POST['Refresco'];
    $Fecha = $_POST['Fecha'];
    
    $sql = $conexion->query("SELECT * FROM productos WHERE codigo = '$codigo'");
    while ($resultado = $sql->fetch_assoc()) {
        $Precio = $resultado['precio'];
    }
    $Total=$Cantidad_Pizzas * $Precio;

$sql = "INSERT INTO `ventas`( `id_Trabajador`, `Nombre_Cliente`, `codigo`, `Cantidad_Pizzas`, `Refresco`, `Fecha`, `Total`)
    VALUES ('$id_Trabajador','$Nombre_Cliente', '$codigo', '$Cantidad_Pizzas', '$Refresco', '$Fecha', '$Total')";

$resultado = mysqli_query($conexion, $sql);

if ($resultado == TRUE) {
    header("location:../Formularios/ventas/index.php");
} else {
    echo "Datos no insertados";
}
