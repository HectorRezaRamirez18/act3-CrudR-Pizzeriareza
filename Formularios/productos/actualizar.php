<?php
include_once("../../config/conexion.php")
?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Actualizar</title>
    <link rel="stylesheet" href="<?php echo base_url; ?>css/bootstrap.min.css">
</head>

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
                        <h5 class="card-title text-center">ACTUALIZAR PRODUCTO</h5>
                        <form action="../../CRUDP/editarDatos.php" method="post">
                            <?php
                            include_once("../../config/conexion.php");

                            $sql = "SELECT * FROM productos WHERE idProducto =" . $_REQUEST['Id'];
                            $resultado = $conexion->query($sql);

                            $row = $resultado->fetch_assoc();
                            ?>
                            <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $row['idProducto'] ?>">

                            <!-- TRAER DATOS CATEGORIAS -->

                            <div class="mb-3">
                                <label for="codigo" class="form-label">Código</label>
                                <input type="text" class="form-control" name="codigo" id="codigo" placeholder="Código" value="<?php echo $row['codigo'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="nombre_pizza" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="nombre_pizza" name="nombre_pizza" placeholder="Nombre de la pizza" value="<?php echo $row['nombre_pizza'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="ingredientes" class="form-label">Ingredientes</label>
                                <input type="text" class="form-control" name="ingredientes" id="ingredientes" placeholder="Ingredientes" value="<?php echo $row['ingredientes'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="tamano" class="form-label">Tamaño</label>
                                <input type="text" class="form-control" name="tamano" id="tamano" placeholder="Tamaño" value="<?php echo $row['tamano'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="precio" class="form-label">Precio</label>
                                <input type="text" class="form-control" name="precio" id="precio" placeholder="Precio" value="<?php echo $row['precio'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="tipo_paquete" class="form-label">Paquete</label>
                                <input type="text" class="form-control" name="tipo_paquete" id="tipo_paquete" placeholder="Tipo de paquete" value="<?php echo $row['tipo_paquete'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="acompanamiento" class="form-label">Acompañamiento</label>
                                <input type="text" class="form-control" name="acompanamiento" id="acompanamiento" placeholder="Acompañamiento" value="<?php echo $row['acompanamiento'] ?>">
                            </div>
                            <div class="text-center">
                                <a href="../productos/index.php" type="submit" class="btn btn-outline-secondary">Cancelar</a>
                                <button type="submit" class="btn btn-outline-primary">Actualizar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="<?php echo base_url; ?>js/bootstrap.min.js"></script>
    <script src="../../js/fontawesome.js"></script>

</body>

</html>