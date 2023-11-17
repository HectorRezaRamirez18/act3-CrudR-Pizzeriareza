-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-11-2023 a las 17:20:04
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_pizzeriareza`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE `inventario` (
  `id_Inventario` int(10) NOT NULL,
  `id_Trabajador` int(10) NOT NULL,
  `id_Ingrediente` int(10) NOT NULL,
  `Nombre_Ingrediente` varchar(100) NOT NULL,
  `Precio_Ingrediente` decimal(10,2) NOT NULL,
  `id_Proveedor` int(10) NOT NULL,
  `Fecha_Entrega` date NOT NULL,
  `Cantidad_Ingredientes` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `inventario`
--

INSERT INTO `inventario` (`id_Inventario`, `id_Trabajador`, `id_Ingrediente`, `Nombre_Ingrediente`, `Precio_Ingrediente`, `id_Proveedor`, `Fecha_Entrega`, `Cantidad_Ingredientes`) VALUES
(1, 3, 1, 'Peperoni', '56.45', 1, '2023-11-15', '1 kg'),
(3, 3, 2, 'Jamón', '123.54', 4, '0000-00-00', '1.4 kg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `idProducto` int(10) NOT NULL,
  `codigo` varchar(10) NOT NULL,
  `nombre_pizza` varchar(100) NOT NULL,
  `ingredientes` varchar(500) NOT NULL,
  `tamano` varchar(50) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `tipo_paquete` varchar(100) NOT NULL,
  `acompanamiento` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idProducto`, `codigo`, `nombre_pizza`, `ingredientes`, `tamano`, `precio`, `tipo_paquete`, `acompanamiento`) VALUES
(1, 'PIZZA-001', 'Pizza de peperoni', 'salsa de tomate, queso y peperoni', 'GRANDE', '99.99', 'REGULAR', 'Refresco de 1.5 litros'),
(3, 'PIZZA-002', 'Pizza hawaiana', 'salsa de tomate, queso, jamón y piña', 'MEDIANA', '134.55', 'REGULAR', 'Refresco de 1.5 litros');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `idVenta` int(11) NOT NULL,
  `id_Trabajador` int(11) NOT NULL,
  `Nombre_Cliente` varchar(150) NOT NULL,
  `codigo` varchar(10) NOT NULL,
  `Cantidad_Pizzas` int(10) NOT NULL,
  `Refresco` varchar(100) NOT NULL,
  `Fecha` date NOT NULL,
  `Total` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`idVenta`, `id_Trabajador`, `Nombre_Cliente`, `codigo`, `Cantidad_Pizzas`, `Refresco`, `Fecha`, `Total`) VALUES
(1, 3, 'Elizabeth Dominguez', 'PIZZA-001', 6, 'Fanta Naranja', '2023-11-14', '599.94'),
(4, 2, 'Monica Muñoz', 'PIZZA-002', 3, 'Coca-Cola', '2023-11-16', '403.65');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD PRIMARY KEY (`id_Inventario`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idProducto`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`idVenta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `inventario`
--
ALTER TABLE `inventario`
  MODIFY `id_Inventario` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `idProducto` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `idVenta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
