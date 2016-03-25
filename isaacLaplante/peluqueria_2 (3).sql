-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-03-2016 a las 01:13:35
-- Versión del servidor: 5.5.27
-- Versión de PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `peluqueria 2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `nombre` varchar(100) CHARACTER SET utf8 NOT NULL,
  `cedula` int(20) NOT NULL,
  `telefono` int(20) NOT NULL,
  `fecha_cita` date NOT NULL,
  `id_corte` int(11) NOT NULL,
  `id_peluquera` int(11) NOT NULL,
  `id_salon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `corte`
--

CREATE TABLE IF NOT EXISTS `corte` (
  `id_corte` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_corte`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peluquera`
--

CREATE TABLE IF NOT EXISTS `peluquera` (
  `id_peluquera` int(11) NOT NULL AUTO_INCREMENT,
  `telefono_peluquera` int(20) NOT NULL,
  PRIMARY KEY (`id_peluquera`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salon`
--

CREATE TABLE IF NOT EXISTS `salon` (
  `id_salon` int(20) NOT NULL AUTO_INCREMENT,
  `direccion` varchar(100) CHARACTER SET utf16 NOT NULL,
  `telefono` int(20) NOT NULL,
  PRIMARY KEY (`id_salon`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
