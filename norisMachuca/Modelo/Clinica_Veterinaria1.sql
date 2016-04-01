-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 01-04-2016 a las 04:39:50
-- Versión del servidor: 10.1.10-MariaDB
-- Versión de PHP: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `Clinica Veterinaria1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Clientes familia`
--

CREATE TABLE `Clientes familia` (
  `idCliente` int(11) NOT NULL,
  `Nombre y Apellido` varchar(90) NOT NULL,
  `Cuenta Bancaria` varchar(28) NOT NULL,
  `Telefono` varchar(17) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Paciente mascota`
--

CREATE TABLE `Paciente mascota` (
  `idMascota` int(11) NOT NULL,
  `idCliente` int(11) NOT NULL,
  `alias mascota` varchar(45) NOT NULL,
  `Especie` varchar(35) NOT NULL,
  `Raza` varchar(45) NOT NULL,
  `color Pelo` varchar(35) NOT NULL,
  `Fecha de nacimiento` datetime NOT NULL,
  `vacunaciones` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Pesos`
--

CREATE TABLE `Pesos` (
  `idMascota` int(11) NOT NULL,
  `Fecha` datetime NOT NULL,
  `Peso` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Vacunas`
--

CREATE TABLE `Vacunas` (
  `idMascota` int(11) NOT NULL,
  `Fecha` datetime NOT NULL,
  `Enfermedad` varchar(50) NOT NULL,
  `Fecha Proxima` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Clientes familia`
--
ALTER TABLE `Clientes familia`
  ADD PRIMARY KEY (`idCliente`);

--
-- Indices de la tabla `Paciente mascota`
--
ALTER TABLE `Paciente mascota`
  ADD PRIMARY KEY (`idMascota`),
  ADD UNIQUE KEY `idCliente_2` (`idCliente`),
  ADD KEY `idCliente` (`idCliente`),
  ADD KEY `idCliente_3` (`idCliente`);

--
-- Indices de la tabla `Pesos`
--
ALTER TABLE `Pesos`
  ADD PRIMARY KEY (`idMascota`);

--
-- Indices de la tabla `Vacunas`
--
ALTER TABLE `Vacunas`
  ADD PRIMARY KEY (`idMascota`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Clientes familia`
--
ALTER TABLE `Clientes familia`
  MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `Paciente mascota`
--
ALTER TABLE `Paciente mascota`
  MODIFY `idMascota` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `Pesos`
--
ALTER TABLE `Pesos`
  MODIFY `idMascota` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `Vacunas`
--
ALTER TABLE `Vacunas`
  MODIFY `idMascota` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `Paciente mascota`
--
ALTER TABLE `Paciente mascota`
  ADD CONSTRAINT `Paciente mascota_ibfk_1` FOREIGN KEY (`idCliente`) REFERENCES `Paciente mascota` (`idCliente`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
