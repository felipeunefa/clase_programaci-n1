-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 24, 2016 at 11:21 pm
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mi_casa`
--

-- --------------------------------------------------------

--
-- Table structure for table `caracteristicas`
--

CREATE TABLE `caracteristicas` (
  `id_caracteristicas` int(11) NOT NULL,
  `num_cuartos` int(11) NOT NULL,
  `num_baños` int(11) NOT NULL,
  `num_estacionamiento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `caracteristicas`
--

INSERT INTO `caracteristicas` (`id_caracteristicas`, `num_cuartos`, `num_baños`, `num_estacionamiento`) VALUES
(1, 2, 1, 1),
(2, 4, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `casa`
--

CREATE TABLE `casa` (
  `id_casa` int(11) NOT NULL,
  `nombreCasa` varchar(50) NOT NULL,
  `numero` int(11) NOT NULL,
  `id_propietario` int(11) NOT NULL,
  `id_servicios` int(11) NOT NULL,
  `id_caracteristicas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `casa`
--

INSERT INTO `casa` (`id_casa`, `nombreCasa`, `numero`, `id_propietario`, `id_servicios`, `id_caracteristicas`) VALUES
(3, 'Mirafina', 2012, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `propietarios`
--

CREATE TABLE `propietarios` (
  `id_propietario` int(11) NOT NULL,
  `nombrePropietario` varchar(40) NOT NULL,
  `apellido` varchar(40) NOT NULL,
  `cedula` int(11) NOT NULL,
  `telefono` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `propietarios`
--

INSERT INTO `propietarios` (`id_propietario`, `nombrePropietario`, `apellido`, `cedula`, `telefono`) VALUES
(1, 'Juan', 'Perez', 123456789, 414123456),
(2, 'Omar', 'Carrasquel', 987654321, 631460711);

-- --------------------------------------------------------

--
-- Table structure for table `servicios`
--

CREATE TABLE `servicios` (
  `id_servicios` int(11) NOT NULL,
  `nombreServicio` varchar(50) NOT NULL,
  `precio` float NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `servicios`
--

INSERT INTO `servicios` (`id_servicios`, `nombreServicio`, `precio`, `status`) VALUES
(1, 'Agua', 1500, 1),
(2, 'Electricidad', 2000, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `caracteristicas`
--
ALTER TABLE `caracteristicas`
  ADD PRIMARY KEY (`id_caracteristicas`);

--
-- Indexes for table `casa`
--
ALTER TABLE `casa`
  ADD PRIMARY KEY (`id_casa`),
  ADD UNIQUE KEY `fk_servicio` (`id_servicios`),
  ADD UNIQUE KEY `fk_caracteristicas` (`id_caracteristicas`),
  ADD UNIQUE KEY `fk_propietario` (`id_propietario`);

--
-- Indexes for table `propietarios`
--
ALTER TABLE `propietarios`
  ADD PRIMARY KEY (`id_propietario`);

--
-- Indexes for table `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id_servicios`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `caracteristicas`
--
ALTER TABLE `caracteristicas`
  MODIFY `id_caracteristicas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `casa`
--
ALTER TABLE `casa`
  MODIFY `id_casa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `propietarios`
--
ALTER TABLE `propietarios`
  MODIFY `id_propietario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id_servicios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
