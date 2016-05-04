-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 01-05-2016 a las 14:03:41
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 7.0.5

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
  `id_perfisferico` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `Computadoras`
--

INSERT INTO `Computadoras` (`id_computadora`, `id_marca`, `modelo`, `serie`, `id_perfisferico`) VALUES
(1, 2, 'Think Vision', 'a-850', 2),
(2, 1, 'Pavillion', 'Dv6405', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Marca`
--

CREATE TABLE `Marca` (
  `id_marca` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `Marca`
--

INSERT INTO `Marca` (`id_marca`, `nombre`) VALUES
(1, 'HP'),
(2, 'Lenovo'),
(3, 'Compac'),
(4, 'Epson'),
(5, 'Samsung'),
(6, 'Asus');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Perisferico`
--

CREATE TABLE `Perisferico` (
  `id_perfisferico` int(11) NOT NULL,
  `id_marca` int(11) NOT NULL,
  `descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `Perisferico`
--

INSERT INTO `Perisferico` (`id_perfisferico`, `id_marca`, `descripcion`) VALUES
(1, 1, 'Impresora Laser'),
(2, 4, 'Impresora Multifuncional XP-410'),
(3, 1, 'Impresora Deskjet'),
(4, 4, 'Scanner'),
(5, 4, 'Impresora'),
(6, 1, 'Scanner'),
(7, 3, 'Monitor'),
(8, 5, 'Monitor');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Computadoras`
--
ALTER TABLE `Computadoras`
  ADD PRIMARY KEY (`id_computadora`),
  ADD KEY `fk_marca` (`id_marca`) USING BTREE,
  ADD KEY `fk_perisferico` (`id_perfisferico`);

--
-- Indices de la tabla `Marca`
--
ALTER TABLE `Marca`
  ADD PRIMARY KEY (`id_marca`);

--
-- Indices de la tabla `Perisferico`
--
ALTER TABLE `Perisferico`
  ADD PRIMARY KEY (`id_perfisferico`),
  ADD KEY `fk_perisferico` (`id_marca`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Computadoras`
--
ALTER TABLE `Computadoras`
  MODIFY `id_computadora` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `Marca`
--
ALTER TABLE `Marca`
  MODIFY `id_marca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `Perisferico`
--
ALTER TABLE `Perisferico`
  MODIFY `id_perfisferico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `Computadoras`
--
ALTER TABLE `Computadoras`
  ADD CONSTRAINT `Computadoras_ibfk_1` FOREIGN KEY (`id_marca`) REFERENCES `Marca` (`id_marca`),
  ADD CONSTRAINT `Computadoras_ibfk_2` FOREIGN KEY (`id_perfisferico`) REFERENCES `Perisferico` (`id_perfisferico`);

--
-- Filtros para la tabla `Perisferico`
--
ALTER TABLE `Perisferico`
  ADD CONSTRAINT `Perisferico_ibfk_1` FOREIGN KEY (`id_marca`) REFERENCES `Marca` (`id_marca`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
