-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-08-2017 a las 19:53:14
-- Versión del servidor: 10.1.25-MariaDB
-- Versión de PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pyt`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subestaciones`
--

CREATE TABLE `subestaciones` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Ubicacion` varchar(50) NOT NULL,
  `Entrada` varchar(30) NOT NULL,
  `Salida` varchar(30) NOT NULL,
  `Potencia` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `subestaciones`
--

INSERT INTO `subestaciones` (`Id`, `Nombre`, `Ubicacion`, `Entrada`, `Salida`, `Potencia`) VALUES
(1, 'Marlin', 'San Luis Jilotepeque', '200', '34', '15'),
(2, 'Shoropin 2', 'Chiquimula', '230', '33.5', '10'),
(3, 'El amatillo', 'Ipala Chiquimula', '250', '25', '20');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `subestaciones`
--
ALTER TABLE `subestaciones`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `subestaciones`
--
ALTER TABLE `subestaciones`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
