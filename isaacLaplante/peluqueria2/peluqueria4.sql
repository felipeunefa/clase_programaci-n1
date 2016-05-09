-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-05-2016 a las 15:56:22
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
  `id_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `cedula` int(20) NOT NULL,
  `telefono` int(20) NOT NULL,
  `fecha_cita` date NOT NULL,
  `id_corte` int(11) NOT NULL,
  `id_empleada` int(11) NOT NULL,
  `id_salon` int(11) NOT NULL,
  PRIMARY KEY (`id_cliente`),
  UNIQUE KEY `id_cliente` (`id_cliente`),
  KEY `id_corte` (`id_corte`,`id_empleada`,`id_salon`),
  KEY `id_salon` (`id_salon`),
  KEY `id_empleada` (`id_empleada`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nombre`, `cedula`, `telefono`, `fecha_cita`, `id_corte`, `id_empleada`, `id_salon`) VALUES
(1, 'maria perez', 12169843, 2125978411, '2016-05-26', 1, 1, 1),
(2, 'jose lopez', 20458997, 3265484, '2016-06-23', 2, 2, 2),
(3, 'Julieta Ramos', 16897455, 63214578, '2016-06-26', 3, 3, 3),
(4, 'jesus toro', 12345698, 42548754, '2016-08-30', 4, 4, 4),
(5, 'karla guzman', 24587456, 56587457, '2016-05-23', 5, 5, 5),
(6, 'isaac laplante', 19294094, 6547854, '2016-06-28', 6, 6, 6),
(8, 'david gomez', 11111111, 1254698, '2016-07-28', 6, 0, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `corte`
--

CREATE TABLE IF NOT EXISTS `corte` (
  `id_corte` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(50) NOT NULL,
  `enlace` int(11) NOT NULL,
  PRIMARY KEY (`id_corte`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `corte`
--

INSERT INTO `corte` (`id_corte`, `descripcion`, `enlace`) VALUES
(1, 'corte bajo', 1),
(2, 'corte rapado', 1),
(3, 'tinte de cabello', 1),
(4, 'corte de barba', 1),
(5, 'secado de cabello', 1),
(6, 'corte Mcgreidy', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleada`
--

CREATE TABLE IF NOT EXISTS `empleada` (
  `id_empleada` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_empleada` varchar(50) NOT NULL,
  `telefono_empleada` int(20) NOT NULL,
  `enlace` int(11) NOT NULL,
  PRIMARY KEY (`id_empleada`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `empleada`
--

INSERT INTO `empleada` (`id_empleada`, `nombre_empleada`, `telefono_empleada`, `enlace`) VALUES
(1, 'andreina perez', 5421875, 1),
(2, 'johana gullien', 635487, 1),
(3, 'tatiana lopez', 9874561, 1),
(4, 'francis figueredo', 3254589, 1),
(5, 'dayana mendoza', 9854687, 1),
(6, 'heidy lara', 6321456, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salon`
--

CREATE TABLE IF NOT EXISTS `salon` (
  `id_salon` int(11) NOT NULL AUTO_INCREMENT,
  `direccion_salon` varchar(50) NOT NULL,
  `telefono_salon` int(20) NOT NULL,
  `enlace` int(11) NOT NULL,
  PRIMARY KEY (`id_salon`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `salon`
--

INSERT INTO `salon` (`id_salon`, `direccion_salon`, `telefono_salon`, `enlace`) VALUES
(1, 'chacao', 5214524, 1),
(2, 'las mercedes', 4215487, 1),
(3, 'altamira', 8745126, 1),
(4, 'los ruices', 9854621, 1),
(5, 'altamira', 1245036, 1),
(6, 'chacaito', 45216897, 1);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `corte`
--
ALTER TABLE `corte`
  ADD CONSTRAINT `corte_ibfk_1` FOREIGN KEY (`id_corte`) REFERENCES `cliente` (`id_corte`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `empleada`
--
ALTER TABLE `empleada`
  ADD CONSTRAINT `empleada_ibfk_1` FOREIGN KEY (`id_empleada`) REFERENCES `cliente` (`id_empleada`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `salon`
--
ALTER TABLE `salon`
  ADD CONSTRAINT `salon_ibfk_1` FOREIGN KEY (`id_salon`) REFERENCES `cliente` (`id_salon`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
