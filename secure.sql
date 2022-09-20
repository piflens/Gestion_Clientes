-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-09-2022 a las 22:07:58
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `secure`
--
CREATE DATABASE IF NOT EXISTS `secure` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `secure`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_cli` int(15) NOT NULL,
  `nom_cli` varchar(30) DEFAULT NULL,
  `ape_cli` varchar(30) DEFAULT NULL,
  `rut` varchar(15) DEFAULT NULL,
  `seguro` varchar(50) DEFAULT NULL,
  `edad` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cli`, `nom_cli`, `ape_cli`, `rut`, `seguro`, `edad`) VALUES
(1, 'Felipe', 'Salinas', '20377971-2', 'Seguros Hogar', 22),
(2, 'Cristian ', 'Vallejo', '14238293-3', 'Seguros Automovil', 49),
(3, 'Leticia', 'Gonzalez', '22382981-2', 'Seguros Hogar', 48),
(5, 'Eduardo', 'Contreras', '14819232-3', 'Seguros Automovil', 50);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cli`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cli` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
