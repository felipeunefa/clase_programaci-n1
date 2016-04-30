-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 27-04-2016 a las 19:40:38
-- Versión del servidor: 10.1.10-MariaDB
-- Versión de PHP: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `Mi_empresa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Cargos`
--

CREATE TABLE `Cargos` (
  `id_cargo` int(11) NOT NULL,
  `nombreCargo` varchar(200) NOT NULL,
  `id_salario` int(11) NOT NULL,
  `estado` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `Cargos`
--

INSERT INTO `Cargos` (`id_cargo`, `nombreCargo`, `id_salario`, `estado`) VALUES
(1, 'Gerente General', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Departamento`
--

CREATE TABLE `Departamento` (
  `id_departamento` int(11) NOT NULL,
  `nombreDep` varchar(11) NOT NULL,
  `id_gerente` int(11) NOT NULL,
  `id_ubicacion` int(11) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `Departamento`
--

INSERT INTO `Departamento` (`id_departamento`, `nombreDep`, `id_gerente`, `id_ubicacion`, `estado`) VALUES
(1, 'Ventas', 1, 1, 1),
(2, 'Cobranza', 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Empleados`
--

CREATE TABLE `Empleados` (
  `id_empleado` int(11) NOT NULL,
  `nombreEmpleado` varchar(200) NOT NULL,
  `apellidoEmpleado` varchar(200) NOT NULL,
  `cedulaEmpleado` int(11) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `id_cargo` int(20) NOT NULL,
  `id_sexo` int(20) NOT NULL,
  `id_salario` int(20) NOT NULL,
  `id_dep` int(20) NOT NULL,
  `estado` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `Empleados`
--

INSERT INTO `Empleados` (`id_empleado`, `nombreEmpleado`, `apellidoEmpleado`, `cedulaEmpleado`, `fecha_nacimiento`, `id_cargo`, `id_sexo`, `id_salario`, `id_dep`, `estado`) VALUES
(1, 'Brenda', 'Sanches', 18944387, '2000-04-06', 1, 1, 1, 1, 1),
(5, 'Javier', 'Montesinos', 24223859, '1991-05-27', 1, 2, 1, 1, 1),
(6, 'Juan', 'Perez', 16144378, '1991-01-10', 1, 2, 1, 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Gerentes`
--

CREATE TABLE `Gerentes` (
  `id_gerente` int(11) NOT NULL,
  `id_empleado` int(11) NOT NULL,
  `id_departamento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `Gerentes`
--

INSERT INTO `Gerentes` (`id_gerente`, `id_empleado`, `id_departamento`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salario`
--

CREATE TABLE `salario` (
  `id_salario` int(11) NOT NULL,
  `montoSalario` int(11) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `salario`
--

INSERT INTO `salario` (`id_salario`, `montoSalario`, `estado`) VALUES
(1, 50000, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sexo`
--

CREATE TABLE `sexo` (
  `id_sexo` int(11) NOT NULL,
  `nombreSexo` varchar(10) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sexo`
--

INSERT INTO `sexo` (`id_sexo`, `nombreSexo`, `estado`) VALUES
(1, 'Femenino', 1),
(2, 'Masculino', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ubicacion`
--

CREATE TABLE `ubicacion` (
  `id_ubicacion` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `estado` varchar(200) NOT NULL,
  `cede` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ubicacion`
--

INSERT INTO `ubicacion` (`id_ubicacion`, `nombre`, `estado`, `cede`) VALUES
(1, 'humbolt', 'Distrito Capital', 'los dos caminos');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Cargos`
--
ALTER TABLE `Cargos`
  ADD PRIMARY KEY (`id_cargo`);

--
-- Indices de la tabla `Departamento`
--
ALTER TABLE `Departamento`
  ADD PRIMARY KEY (`id_departamento`);

--
-- Indices de la tabla `Empleados`
--
ALTER TABLE `Empleados`
  ADD PRIMARY KEY (`id_empleado`),
  ADD KEY `fk_sexo` (`id_sexo`) USING BTREE,
  ADD KEY `fk_salario` (`id_salario`) USING BTREE,
  ADD KEY `fk_cargo` (`id_cargo`) USING BTREE,
  ADD KEY `fk_departament` (`id_dep`) USING BTREE;

--
-- Indices de la tabla `Gerentes`
--
ALTER TABLE `Gerentes`
  ADD PRIMARY KEY (`id_gerente`);

--
-- Indices de la tabla `salario`
--
ALTER TABLE `salario`
  ADD PRIMARY KEY (`id_salario`);

--
-- Indices de la tabla `sexo`
--
ALTER TABLE `sexo`
  ADD PRIMARY KEY (`id_sexo`);

--
-- Indices de la tabla `ubicacion`
--
ALTER TABLE `ubicacion`
  ADD PRIMARY KEY (`id_ubicacion`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Cargos`
--
ALTER TABLE `Cargos`
  MODIFY `id_cargo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `Departamento`
--
ALTER TABLE `Departamento`
  MODIFY `id_departamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `Empleados`
--
ALTER TABLE `Empleados`
  MODIFY `id_empleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `Gerentes`
--
ALTER TABLE `Gerentes`
  MODIFY `id_gerente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `salario`
--
ALTER TABLE `salario`
  MODIFY `id_salario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `sexo`
--
ALTER TABLE `sexo`
  MODIFY `id_sexo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `ubicacion`
--
ALTER TABLE `ubicacion`
  MODIFY `id_ubicacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `Empleados`
--
ALTER TABLE `Empleados`
  ADD CONSTRAINT `Empleados_ibfk_1` FOREIGN KEY (`id_dep`) REFERENCES `Departamento` (`id_departamento`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Empleados_ibfk_2` FOREIGN KEY (`id_salario`) REFERENCES `salario` (`id_salario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Empleados_ibfk_3` FOREIGN KEY (`id_sexo`) REFERENCES `sexo` (`id_sexo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Empleados_ibfk_4` FOREIGN KEY (`id_cargo`) REFERENCES `Cargos` (`id_cargo`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
