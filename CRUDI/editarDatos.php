<?php

include "../config/conexion.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recibir los datos del formulario de edición
    $id = $_POST['id'];
    $id_Trabajador = $_POST['id_Trabajador'];
    $id_Ingrediente = $_POST['id_Ingrediente'];
    $Nombre_Ingrediente = $_POST['Nombre_Ingrediente'];
    $Precio_Ingrediente = $_POST['Precio_Ingrediente'];
    $id_Proveedor = $_POST['id_Proveedor'];
    $Fecha_Entrega = $_POST['Fecha_Entrega'];
    $Cantidad_Ingredientes = $_POST['Cantidad_Ingredientes'];

    // Actualizar los datos en la base de datos (debes proporcionar tus propias consultas)
    $consulta = "UPDATE inventario SET `id_Trabajador`='$id_Trabajador',`id_Ingrediente`='$id_Ingrediente',`Nombre_Ingrediente`='$Nombre_Ingrediente',`Precio_Ingrediente`='$Precio_Ingrediente',`id_Proveedor`='$id_Proveedor',`Fecha_Entrega`='$Fecha_Entrega',`Cantidad_Ingredientes`='$Cantidad_Ingredientes' WHERE id_Inventario = $id";

    if (mysqli_query($conexion, $consulta)) {
        // Redireccionar a alguna página después de la actualización exitosa
        header("location:../Formularios/inventario/index.php");
        exit();
    } else {
        // Mostrar un mensaje de error si la actualización falla
        echo "Error al actualizar el registro: " . mysqli_error($conexion);
    }
}
