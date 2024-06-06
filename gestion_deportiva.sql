-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2024 at 06:30 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gestion_deportiva`
--

-- --------------------------------------------------------

--
-- Table structure for table `atleta`
--

CREATE TABLE `atleta` (
  `id_atleta` int(11) NOT NULL,
  `cedula` varchar(11) NOT NULL,
  `id_disciplina` int(11) NOT NULL,
  `talla_zapato` varchar(3) NOT NULL,
  `talla_franela` varchar(3) NOT NULL,
  `talla_pantalon` varchar(3) NOT NULL,
  `estatura` int(4) NOT NULL,
  `peso` int(4) NOT NULL,
  `federado` tinyint(1) NOT NULL,
  `federacion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `atleta`
--

INSERT INTO `atleta` (`id_atleta`, `cedula`, `id_disciplina`, `talla_zapato`, `talla_franela`, `talla_pantalon`, `estatura`, `peso`, `federado`, `federacion`) VALUES
(1, '30143282', 1, '40', 'S', '10', 173, 60, 0, ''),
(2, '27965006', 1, '23', '2', '3', 21, 123, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `disciplina`
--

CREATE TABLE `disciplina` (
  `id_disciplina` int(11) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `disciplina`
--

INSERT INTO `disciplina` (`id_disciplina`, `nombre`, `descripcion`) VALUES
(1, 'Futbol', 'sadasd'),
(2, 'Basket', 'sadasdasdas'),
(4, 'Padel', 'el padel'),
(5, 'Natacion', 'se nada'),
(6, 'Beisbol', 'basebol'),
(7, 'Futbol sala', 'sala');

-- --------------------------------------------------------

--
-- Table structure for table `ficha_medica`
--

CREATE TABLE `ficha_medica` (
  `id_ficha_medica` int(11) NOT NULL,
  `id_atlteta` int(11) NOT NULL,
  `patologias` text NOT NULL,
  `alergias` text NOT NULL,
  `tipo_sangre` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  `clave` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`idusuario`, `nombre`, `email`, `clave`) VALUES
(1, 'Administrador', 'admin@sige.de', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `atleta`
--
ALTER TABLE `atleta`
  ADD PRIMARY KEY (`id_atleta`),
  ADD UNIQUE KEY `cedula` (`cedula`),
  ADD KEY `id_disciplina` (`id_disciplina`);

--
-- Indexes for table `disciplina`
--
ALTER TABLE `disciplina`
  ADD PRIMARY KEY (`id_disciplina`),
  ADD UNIQUE KEY `nombre` (`nombre`);

--
-- Indexes for table `ficha_medica`
--
ALTER TABLE `ficha_medica`
  ADD PRIMARY KEY (`id_ficha_medica`),
  ADD KEY `id_atlteta` (`id_atlteta`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `atleta`
--
ALTER TABLE `atleta`
  MODIFY `id_atleta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `disciplina`
--
ALTER TABLE `disciplina`
  MODIFY `id_disciplina` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ficha_medica`
--
ALTER TABLE `ficha_medica`
  MODIFY `id_ficha_medica` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `atleta`
--
ALTER TABLE `atleta`
  ADD CONSTRAINT `atleta_ibfk_1` FOREIGN KEY (`id_disciplina`) REFERENCES `disciplina` (`id_disciplina`) ON UPDATE NO ACTION;

--
-- Constraints for table `ficha_medica`
--
ALTER TABLE `ficha_medica`
  ADD CONSTRAINT `ficha_medica_ibfk_1` FOREIGN KEY (`id_atlteta`) REFERENCES `atleta` (`id_atleta`) ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
