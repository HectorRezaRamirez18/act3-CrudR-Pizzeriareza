<?php

include "../config/conexion.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recibir los datos del formulario de edición
    $id = $_POST['id'];
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

    // Actualizar los datos en la base de datos (debes proporcionar tus propias consultas)
    $consulta = "UPDATE `ventas` SET `id_Trabajador`='$id_Trabajador',`Nombre_Cliente`='$Nombre_Cliente',`codigo`='$codigo',`Cantidad_Pizzas`='$Cantidad_Pizzas',`Refresco`='$Refresco',`Fecha`='$Fecha',`Total`='$Total' WHERE idVenta = $id";

    if (mysqli_query($conexion, $consulta)) {
        // Redireccionar a alguna página después de la actualización exitosa
        header("location:../Formularios/ventas/index.php");
        exit();
    } else {
        // Mostrar un mensaje de error si la actualización falla
        echo "Error al actualizar el registro: " . mysqli_error($conexion);
    }
}
