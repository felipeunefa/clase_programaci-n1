-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 18, 2016 at 03:48 am
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Registro_Equipos`
--

-- --------------------------------------------------------

--
-- Table structure for table `Computadoras`
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
-- Table structure for table `Impresoras`
--

CREATE TABLE `Impresoras` (
  `id_impresora` int(11) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `modelo` varchar(50) NOT NULL,
  `serie` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Marca`
--

CREATE TABLE `Marca` (
  `id_marca` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Monitor`
--

CREATE TABLE `Monitor` (
  `id_monitor` int(11) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `modelo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Computadoras`
--
ALTER TABLE `Computadoras`
  ADD PRIMARY KEY (`id_computadora`),
  ADD KEY `id_marca` (`id_marca`),
  ADD KEY `id_monitor` (`id_monitor`),
  ADD KEY `id_impresora` (`id_impresora`);

--
-- Indexes for table `Impresoras`
--
ALTER TABLE `Impresoras`
  ADD PRIMARY KEY (`id_impresora`);

--
-- Indexes for table `Marca`
--
ALTER TABLE `Marca`
  ADD PRIMARY KEY (`id_marca`);

--
-- Indexes for table `Monitor`
--
ALTER TABLE `Monitor`
  ADD PRIMARY KEY (`id_monitor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Computadoras`
--
ALTER TABLE `Computadoras`
  MODIFY `id_computadora` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Impresoras`
--
ALTER TABLE `Impresoras`
  MODIFY `id_impresora` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Marca`
--
ALTER TABLE `Marca`
  MODIFY `id_marca` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Monitor`
--
ALTER TABLE `Monitor`
  MODIFY `id_monitor` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
