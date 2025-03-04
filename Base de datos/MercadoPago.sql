-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 17-01-2023 a las 15:09:04
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
-- Estructura de tabla para la tabla `MercadoPago`
--

CREATE TABLE `MercadoPago` (
  `id` int(11) NOT NULL,
  `AcessToken` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdk` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comision` int(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `MercadoPago`
--

INSERT INTO `MercadoPago` (`id`, `AcessToken`, `sdk`, `comision`) VALUES
(1, '0', '0', 8);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `MercadoPago`
--
ALTER TABLE `MercadoPago`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `MercadoPago`
--
ALTER TABLE `MercadoPago`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
