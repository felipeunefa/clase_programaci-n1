-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 04-04-2016 a las 00:55:08
-- Versión del servidor: 10.1.10-MariaDB
-- Versión de PHP: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `Registro_Equipos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Computadoras`
--

CREATE TABLE `Computadoras` (
  `id_computadora` int(11) NOT NULL,
  `id_marca` int(11) NOT NULL,
  `modelo` varchar(30) NOT NULL,
  `serie` varchar(50) NOT NULL,
  `id_monitor` int(11) NOT NULL,
  `id_impresora` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Impresoras`
--

CREATE TABLE `Impresoras` (
  `id_impresora` int(11) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `modelo` varchar(50) NOT NULL,
  `serie` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Marca`
--

CREATE TABLE `Marca` (
  `id_marca` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Monitor`
--

CREATE TABLE `Monitor` (
  `id_monitor` int(11) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `modelo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Computadoras`
--
ALTER TABLE `Computadoras`
  ADD PRIMARY KEY (`id_computadora`),
  ADD KEY `fk_marca` (`id_marca`) USING BTREE,
  ADD KEY `fk_impresora` (`id_impresora`) USING BTREE,
  ADD KEY `fk_monitor` (`id_monitor`) USING BTREE;

--
-- Indices de la tabla `Impresoras`
--
ALTER TABLE `Impresoras`
  ADD PRIMARY KEY (`id_impresora`),
  ADD KEY `fk_marca` (`marca`);

--
-- Indices de la tabla `Marca`
--
ALTER TABLE `Marca`
  ADD PRIMARY KEY (`id_marca`);

--
-- Indices de la tabla `Monitor`
--
ALTER TABLE `Monitor`
  ADD PRIMARY KEY (`id_monitor`),
  ADD KEY `fk_marca` (`marca`) USING BTREE;

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Computadoras`
--
ALTER TABLE `Computadoras`
  MODIFY `id_computadora` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `Impresoras`
--
ALTER TABLE `Impresoras`
  MODIFY `id_impresora` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `Marca`
--
ALTER TABLE `Marca`
  MODIFY `id_marca` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `Monitor`
--
ALTER TABLE `Monitor`
  MODIFY `id_monitor` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
