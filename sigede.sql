-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2024 at 08:19 PM
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
-- Database: `sigede`
--

-- --------------------------------------------------------

--
-- Table structure for table `atleta`
--

CREATE TABLE `atleta` (
  `ID_ATLETA` int(11) NOT NULL,
  `CEDULA` varchar(13) DEFAULT NULL,
  `NOMBRE` varchar(50) DEFAULT NULL,
  `APELLIDO` varchar(50) DEFAULT NULL,
  `FEDERADO` tinyint(1) DEFAULT NULL,
  `TIPO` tinyint(1) DEFAULT NULL,
  `CORREO` varchar(50) DEFAULT NULL,
  `TELEFONO` varchar(13) DEFAULT NULL,
  `TALLA_ZAPATO` varchar(2) DEFAULT NULL,
  `TALLA_FRANELA` varchar(2) DEFAULT NULL,
  `TALLA_PANTALON` varchar(2) DEFAULT NULL,
  `ESTATURA` varchar(5) DEFAULT NULL,
  `PESO` varchar(3) DEFAULT NULL,
  `SEXO` varchar(1) DEFAULT NULL,
  `FECHA_NAT` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `atleta`
--

INSERT INTO `atleta` (`ID_ATLETA`, `CEDULA`, `NOMBRE`, `APELLIDO`, `FEDERADO`, `TIPO`, `CORREO`, `TELEFONO`, `TALLA_ZAPATO`, `TALLA_FRANELA`, `TALLA_PANTALON`, `ESTATURA`, `PESO`, `SEXO`, `FECHA_NAT`) VALUES
(2, '30143282', 'Cristian Rojas', NULL, NULL, NULL, NULL, NULL, '41', 'S', '12', '174', '55', NULL, NULL),
(3, '29612312', 'Miguelangel Montaño', NULL, NULL, NULL, NULL, NULL, '42', 'M', 'L', '180', '70', NULL, NULL),
(4, '27935005', 'Oscar Anderson', NULL, NULL, NULL, NULL, NULL, '41', 'M', 'L', '160', '78', NULL, NULL),
(5, '27335452', 'Laura Quintero', NULL, NULL, NULL, NULL, NULL, '38', 'M', 'M', '160', '50', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `atletas_asigna_evento`
--

CREATE TABLE `atletas_asigna_evento` (
  `ID_EVENTO` int(11) NOT NULL,
  `ID_ATLETA` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `atleta_asigna_disciplina`
--

CREATE TABLE `atleta_asigna_disciplina` (
  `ID_DISCIPLINA` int(11) NOT NULL,
  `ID_ATLETA` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `atleta_asigna_disciplina`
--

INSERT INTO `atleta_asigna_disciplina` (`ID_DISCIPLINA`, `ID_ATLETA`) VALUES
(1, 2),
(3, 3),
(4, 4),
(4, 5);

-- --------------------------------------------------------

--
-- Table structure for table `convocatoria`
--

CREATE TABLE `convocatoria` (
  `ID_EVENTO` int(11) NOT NULL,
  `ID_CONVOCATORIA` int(11) NOT NULL,
  `INFORMACION_EQUIPO` text DEFAULT NULL,
  `FECHA_INICIO` date DEFAULT NULL,
  `FECHA_FIN` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `disciplina_asigna_evento`
--

CREATE TABLE `disciplina_asigna_evento` (
  `ID_EVENTO` int(11) NOT NULL,
  `ID_DISCIPLINA` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `disciplina_deportiva`
--

CREATE TABLE `disciplina_deportiva` (
  `ID_DISCIPLINA` int(11) NOT NULL,
  `NOMBRE_DISCIPLINA` varchar(50) DEFAULT NULL,
  `DESCRIPCION` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `disciplina_deportiva`
--

INSERT INTO `disciplina_deportiva` (`ID_DISCIPLINA`, `NOMBRE_DISCIPLINA`, `DESCRIPCION`) VALUES
(1, 'Futbol', 'futbol campo ja'),
(2, 'Baloncesto', 'basquet'),
(3, 'Futbol sala', 'equipo de futbol sala'),
(4, 'Beisbol', 'basebol');

-- --------------------------------------------------------

--
-- Table structure for table `evento`
--

CREATE TABLE `evento` (
  `ID_EVENTO` int(11) NOT NULL,
  `TIPO_EVENTO` text DEFAULT NULL,
  `INVITACIONES` text DEFAULT NULL,
  `DESCRIPCION` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ficha_medica`
--

CREATE TABLE `ficha_medica` (
  `ID_ATLETA` int(11) NOT NULL,
  `TIPO_SANGRE` varchar(3) DEFAULT NULL,
  `ALERGIAS` text DEFAULT NULL,
  `PATOLOGIAS` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ficha_medica`
--

INSERT INTO `ficha_medica` (`ID_ATLETA`, `TIPO_SANGRE`, `ALERGIAS`, `PATOLOGIAS`) VALUES
(2, 'B+', '', ''),
(3, 'B+', '', ''),
(4, 'O-', '', ''),
(5, 'B+', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `suspension`
--

CREATE TABLE `suspension` (
  `ID_ATLETA` int(11) NOT NULL,
  `ESTADO_DE_SUSPENSION` tinyint(1) DEFAULT NULL,
  `FECHA_DE_INICIO` date DEFAULT NULL,
  `FECHA_DE_FIN` date DEFAULT NULL,
  `CAUSA` text DEFAULT NULL
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
  ADD PRIMARY KEY (`ID_ATLETA`);

--
-- Indexes for table `atletas_asigna_evento`
--
ALTER TABLE `atletas_asigna_evento`
  ADD PRIMARY KEY (`ID_EVENTO`,`ID_ATLETA`),
  ADD KEY `FK_PARTICIPAN2` (`ID_ATLETA`);

--
-- Indexes for table `atleta_asigna_disciplina`
--
ALTER TABLE `atleta_asigna_disciplina`
  ADD PRIMARY KEY (`ID_DISCIPLINA`,`ID_ATLETA`),
  ADD KEY `FK_PERTENECE2` (`ID_ATLETA`);

--
-- Indexes for table `convocatoria`
--
ALTER TABLE `convocatoria`
  ADD PRIMARY KEY (`ID_EVENTO`,`ID_CONVOCATORIA`);

--
-- Indexes for table `disciplina_asigna_evento`
--
ALTER TABLE `disciplina_asigna_evento`
  ADD PRIMARY KEY (`ID_EVENTO`,`ID_DISCIPLINA`),
  ADD KEY `FK_PARTICIPA2` (`ID_DISCIPLINA`);

--
-- Indexes for table `disciplina_deportiva`
--
ALTER TABLE `disciplina_deportiva`
  ADD PRIMARY KEY (`ID_DISCIPLINA`);

--
-- Indexes for table `evento`
--
ALTER TABLE `evento`
  ADD PRIMARY KEY (`ID_EVENTO`);

--
-- Indexes for table `ficha_medica`
--
ALTER TABLE `ficha_medica`
  ADD PRIMARY KEY (`ID_ATLETA`);

--
-- Indexes for table `suspension`
--
ALTER TABLE `suspension`
  ADD PRIMARY KEY (`ID_ATLETA`);

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
  MODIFY `ID_ATLETA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `disciplina_deportiva`
--
ALTER TABLE `disciplina_deportiva`
  MODIFY `ID_DISCIPLINA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `atletas_asigna_evento`
--
ALTER TABLE `atletas_asigna_evento`
  ADD CONSTRAINT `FK_PARTICIPAN` FOREIGN KEY (`ID_EVENTO`) REFERENCES `evento` (`ID_EVENTO`),
  ADD CONSTRAINT `FK_PARTICIPAN2` FOREIGN KEY (`ID_ATLETA`) REFERENCES `atleta` (`ID_ATLETA`);

--
-- Constraints for table `atleta_asigna_disciplina`
--
ALTER TABLE `atleta_asigna_disciplina`
  ADD CONSTRAINT `FK_PERTENECE` FOREIGN KEY (`ID_DISCIPLINA`) REFERENCES `disciplina_deportiva` (`ID_DISCIPLINA`),
  ADD CONSTRAINT `FK_PERTENECE2` FOREIGN KEY (`ID_ATLETA`) REFERENCES `atleta` (`ID_ATLETA`);

--
-- Constraints for table `convocatoria`
--
ALTER TABLE `convocatoria`
  ADD CONSTRAINT `FK_ID_evento` FOREIGN KEY (`ID_EVENTO`) REFERENCES `evento` (`ID_EVENTO`);

--
-- Constraints for table `disciplina_asigna_evento`
--
ALTER TABLE `disciplina_asigna_evento`
  ADD CONSTRAINT `FK_PARTICIPA` FOREIGN KEY (`ID_EVENTO`) REFERENCES `evento` (`ID_EVENTO`),
  ADD CONSTRAINT `FK_PARTICIPA2` FOREIGN KEY (`ID_DISCIPLINA`) REFERENCES `disciplina_deportiva` (`ID_DISCIPLINA`);

--
-- Constraints for table `ficha_medica`
--
ALTER TABLE `ficha_medica`
  ADD CONSTRAINT `FK_OBTIENE` FOREIGN KEY (`ID_ATLETA`) REFERENCES `atleta` (`ID_ATLETA`) ON UPDATE CASCADE;

--
-- Constraints for table `suspension`
--
ALTER TABLE `suspension`
  ADD CONSTRAINT `FK_PUEDE_SER2` FOREIGN KEY (`ID_ATLETA`) REFERENCES `atleta` (`ID_ATLETA`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
