-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-04-2016 a las 20:15:10
-- Versión del servidor: 5.5.27
-- Versión de PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `peluqueria4`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `nombre` varchar(50) NOT NULL,
  `cedula` int(11) NOT NULL,
  `telefono` int(20) NOT NULL,
  `fecha_cita` date NOT NULL,
  `id_corte` int(11) NOT NULL,
  `id_peluquera` int(11) NOT NULL,
  `id_salon` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_corte`,`id_cliente`),
  KEY `id_cliente` (`id_cliente`),
  KEY `id_peluquera` (`id_peluquera`),
  KEY `id_salon` (`id_salon`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`nombre`, `cedula`, `telefono`, `fecha_cita`, `id_corte`, `id_peluquera`, `id_salon`, `id_cliente`) VALUES
('Maria Perez', 12169843, 7483647, '2016-04-03', 1, 2, 1, 1),
('Jose Lopez', 16897455, 7483647, '2016-05-15', 2, 1, 2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `corte`
--

CREATE TABLE IF NOT EXISTS `corte` (
  `id_corte` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(50) NOT NULL,
  PRIMARY KEY (`id_corte`),
  KEY `id_corte` (`id_corte`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `corte`
--

INSERT INTO `corte` (`id_corte`, `descripcion`) VALUES
(1, 'Corte Bajo'),
(2, 'Corte Rapado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peluquera`
--

CREATE TABLE IF NOT EXISTS `peluquera` (
  `id_peluquera` int(11) NOT NULL AUTO_INCREMENT,
  `telefono_peluquera` int(11) NOT NULL,
  `nombre_peluquera` varchar(50) NOT NULL,
  PRIMARY KEY (`id_peluquera`),
  KEY `id_peluquera` (`id_peluquera`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `peluquera`
--

INSERT INTO `peluquera` (`id_peluquera`, `telefono_peluquera`, `nombre_peluquera`) VALUES
(1, 414987556, 'Adriana Salgado'),
(2, 414784556, 'Miranda Ramos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salon`
--

CREATE TABLE IF NOT EXISTS `salon` (
  `id_salon` int(11) NOT NULL AUTO_INCREMENT,
  `direccion_salon` text NOT NULL,
  `telefono_salon` int(11) NOT NULL,
  PRIMARY KEY (`id_salon`),
  KEY `id_salon` (`id_salon`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `salon`
--

INSERT INTO `salon` (`id_salon`, `direccion_salon`, `telefono_salon`) VALUES
(1, 'las mercedes', 5998644),
(2, 'altamira', 8715988);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `corte`
--
ALTER TABLE `corte`
  ADD CONSTRAINT `corte_ibfk_1` FOREIGN KEY (`id_corte`) REFERENCES `cliente` (`id_corte`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `peluquera`
--
ALTER TABLE `peluquera`
  ADD CONSTRAINT `peluquera_ibfk_1` FOREIGN KEY (`id_peluquera`) REFERENCES `cliente` (`id_peluquera`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `salon`
--
ALTER TABLE `salon`
  ADD CONSTRAINT `salon_ibfk_1` FOREIGN KEY (`id_salon`) REFERENCES `cliente` (`id_salon`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
