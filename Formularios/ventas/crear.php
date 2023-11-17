<?php
require_once("../../config/conexion.php");
?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrar</title>
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
                        <h5 class="card-title text-center">REGISTRAR VENTA</h5>
                        <form action="<?php echo base_url; ?>CRUDV/insertarDatos.php" method="POST">
                        <div class="mb-3">
                                <label for="id_Trabajador" class="form-label">id Trabajador</label>
                                <input type="text" class="form-control" name="id_Trabajador" id="id_Trabajador" placeholder="id Trabajador" >
                            </div>
                            <div class="mb-3">
                                <label for="Nombre_Cliente" class="form-label">Nombre cliente</label>
                                <input type="text" class="form-control" id="Nombre_Cliente" name="Nombre_Cliente" placeholder="Nombre del cliente" >
                            </div>
                            <div class="mb-3">
                                <label for="codigo" class="form-label">Código</label>
                                <input type="text" class="form-control" name="codigo" id="codigo" placeholder="Código">
                            </div>
                            <div class="mb-3">
                                <label for="Cantidad_Pizzas" class="form-label">Cantidad de pizzas</label>
                                <input type="number" class="form-control" name="Cantidad_Pizzas" id="Cantidad_Pizzas" placeholder="Cantidad de pizzas">
                            </div>
                            <div class="mb-3">
                                <label for="Refresco" class="form-label">Refresco</label>
                                <input type="text" class="form-control" id="Refresco" name="Refresco" placeholder="Refresco">
                            </div>
                            <div class="mb-3">
                                <label for="Fecha" class="form-label">Fecha</label>
                                <input type="date" class="form-control" name="Fecha" id="Fecha" placeholder="Fecha">
                            </div>
                            <div class="text-center">
                                <a href="<?php echo base_url; ?>Formularios/ventas/index.php" type="submit" class="btn btn-outline-secondary">Cancelar</a>
                                <button type="submit" class="btn btn-outline-primary">Guardar</button>
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