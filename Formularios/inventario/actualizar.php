<?php
require_once("../../config/conexion.php");
?>

<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Actualizar</title>
    <link rel="stylesheet" href="<?php echo base_url; ?>css/bootstrap.min.css">

<body>

    <!-- CODIGO DE NAVBAR RESPONSIVA -->
    <header>
        <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
            <div class="container">
                <a class="navbar-brand" href="<?php echo base_url; ?>">
                    <h1>PR</h1>
                </a>
                <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#mi-menu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="mi-menu">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url; ?>">INICIO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url; ?>Formularios/productos/index.php">PIZZAS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url; ?>Formularios/inventario/index.php">INVENTARIO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url; ?>Formularios/ventas/index.php">VENTAS</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- FIN CODIGO DE NAVBAR RESPONSIVA -->

    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">ACTUALIZAR INVENTARIO</h5>
                        <form action="<?php echo base_url; ?>CRUDI/editarDatos.php" method="post">
                            <?php
                            include_once("../../config/conexion.php");

                            $sql = "SELECT * FROM inventario WHERE id_Inventario =" . $_REQUEST['Id'];
                            $resultado = $conexion->query($sql);

                            $row = $resultado->fetch_assoc();
                            ?>
                            <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $row['id_Inventario'] ?>">
                            <div class="mb-3">
                                <label for="id_Trabajador" class="form-label">id Trabajador</label>
                                <input type="text" class="form-control" name="id_Trabajador" id="id_Trabajador" placeholder="id Trabajador" value="<?php echo $row['id_Trabajador'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="id_Ingrediente" class="form-label">id Ingrediente</label>
                                <input type="text" class="form-control" id="id_Ingrediente" name="id_Ingrediente" placeholder="id Ingrediente" value="<?php echo $row['id_Ingrediente'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="Nombre_Ingrediente" class="form-label">Nombre ingrediente</label>
                                <input type="text" class="form-control" name="Nombre_Ingrediente" id="Nombre_Ingrediente" placeholder="Nombre ingrediente" value="<?php echo $row['Nombre_Ingrediente'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="Precio_Ingrediente" class="form-label">Precio ingrediente</label>
                                <input type="text" class="form-control" name="Precio_Ingrediente" id="Precio_Ingrediente" placeholder="Precio ingrediente" value="<?php echo $row['Precio_Ingrediente'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="id_Proveedor" class="form-label">id Proveedor</label>
                                <input type="text" class="form-control" name="id_Proveedor" id="id_Proveedor" placeholder="id Proveedor" value="<?php echo $row['id_Proveedor'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="Fecha_Entrega" class="form-label">Fecha de entrega</label>
                                <input type="date" class="form-control" name="Fecha_Entrega" id="Fecha_Entrega" placeholder="Fecha de entrega" value="<?php echo $row['Fecha_Entrega'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="Cantidad_Ingredientes" class="form-label">Cantidad de ingredientes</label>
                                <input type="text" class="form-control" name="Cantidad_Ingredientes" id="Cantidad_Ingredientes" placeholder="Cantidad de ingredientes" value="<?php echo $row['Cantidad_Ingredientes'] ?>">
                            </div>
                            <div class="text-center">
                                <a href="../inventario/index.php" type="submit" class="btn btn-outline-secondary">Cancelar</a>
                                <button type="submit" class="btn btn-outline-primary">Actualizar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="<?php echo base_url; ?>js/bootstrap.min.js"></script>

</body>

</html>