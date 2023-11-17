<?php

include "../config/conexion.php";

$codigo  = $_POST['codigo'];
    $nombre_pizza = $_POST['nombre_pizza'];
    $ingredientes = $_POST['ingredientes'];
    $tamano = $_POST['tamano'];
    $precio = $_POST['precio'];
    $tipo_paquete  = $_POST['tipo_paquete'];
    $acompanamiento  = $_POST['acompanamiento'];

$sql = "INSERT INTO `productos`(`codigo`, `nombre_pizza`, `ingredientes`, `tamano`, `precio`, `tipo_paquete`, `acompanamiento`) VALUES ('$codigo','$nombre_pizza','$ingredientes','$tamano', '$precio', '$tipo_paquete', '$acompanamiento')";

$resultado = mysqli_query($conexion, $sql);

if ($resultado == TRUE) {
    header("location:../Formularios/productos/index.php");
} else {
    echo "Datos no insertados";
}
