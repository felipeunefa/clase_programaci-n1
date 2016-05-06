-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-05-2016 a las 20:25:41
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 7.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `factura`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `Nombre` varchar(15) NOT NULL,
  `Apellido` varchar(15) NOT NULL,
  `Direccion` varchar(15) NOT NULL,
  `telefono` int(20) NOT NULL,
  `Id_detalle_de_factura` int(11) NOT NULL,
  `id_numfactura` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `Nombre`, `Apellido`, `Direccion`, `telefono`, `Id_detalle_de_factura`, `id_numfactura`) VALUES
(1, 'yorgenis', 'paracare', 'pastora', 1234567890, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalles_de_factura`
--

CREATE TABLE `detalles_de_factura` (
  `id_detalles_de_factura` int(11) NOT NULL,
  `nit` int(11) NOT NULL,
  `estado` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `detalles_de_factura`
--

INSERT INTO `detalles_de_factura` (`id_detalles_de_factura`, `nit`, `estado`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `numfactura`
--

CREATE TABLE `numfactura` (
  `id_numfactura` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `estado` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `numfactura`
--

INSERT INTO `numfactura` (`id_numfactura`, `fecha`, `estado`) VALUES
(1, '2016-05-06', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`),
  ADD KEY `Id_detalle_de_factura` (`Id_detalle_de_factura`),
  ADD KEY `id_numfactura` (`id_numfactura`);

--
-- Indices de la tabla `detalles_de_factura`
--
ALTER TABLE `detalles_de_factura`
  ADD PRIMARY KEY (`id_detalles_de_factura`);

--
-- Indices de la tabla `numfactura`
--
ALTER TABLE `numfactura`
  ADD PRIMARY KEY (`id_numfactura`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `detalles_de_factura`
--
ALTER TABLE `detalles_de_factura`
  MODIFY `id_detalles_de_factura` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `numfactura`
--
ALTER TABLE `numfactura`
  MODIFY `id_numfactura` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
