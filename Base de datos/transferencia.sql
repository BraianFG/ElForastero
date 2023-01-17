-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 17-01-2023 a las 15:10:57
-- Versión del servidor: 10.5.12-MariaDB-cll-lve
-- Versión de PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `u819747409_elforastero`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transferencia`
--

CREATE TABLE `transferencia` (
  `nombre` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cuit` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banco` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cbu` varchar(520) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cuenta` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alias` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `transferencia`
--

INSERT INTO `transferencia` (`nombre`, `apellido`, `cuit`, `banco`, `cbu`, `cuenta`, `alias`) VALUES
('Braian Emanuel', 'Frediani Guelffi', '2043799616', 'Brubank S.A.U', '1430001713019856090015', '1301985609001', 'braian.fg.287');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `transferencia`
--
ALTER TABLE `transferencia`
  ADD UNIQUE KEY `nombre` (`nombre`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
