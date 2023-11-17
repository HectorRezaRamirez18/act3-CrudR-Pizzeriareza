<?php

include "../config/conexion.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recibir los datos del formulario de edición
    $id = $_POST['id'];
    $codigo  = $_POST['codigo'];
    $nombre_pizza = $_POST['nombre_pizza'];
    $ingredientes = $_POST['ingredientes'];
    $tamano = $_POST['tamano'];
    $precio = $_POST['precio'];
    $tipo_paquete  = $_POST['tipo_paquete'];
    $acompanamiento  = $_POST['acompanamiento'];

    // Actualizar los datos en la base de datos (debes proporcionar tus propias consultas)
    $consulta = "UPDATE productos SET `codigo`='$codigo',`nombre_pizza`='$nombre_pizza',`ingredientes`='$ingredientes',`tamano`='$tamano',`precio`='$precio',`tipo_paquete`='$tipo_paquete',`acompanamiento`='$acompanamiento' WHERE idProducto = $id";

    if (mysqli_query($conexion, $consulta)) {
        // Redireccionar a alguna página después de la actualización exitosa
        header("location:../Formularios/productos/index.php");
        exit();
    } else {
        // Mostrar un mensaje de error si la actualización falla
        echo "Error al actualizar el registro: " . mysqli_error($conexion);
    }
}
