-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 27-12-2021 a las 14:38:29
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
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `id` int(11) NOT NULL,
  `usuarioID` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `productoID` int(11) NOT NULL,
  `nombreProduc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `carrito`
--

INSERT INTO `carrito` (`id`, `usuarioID`, `nombre`, `apellido`, `productoID`, `nombreProduc`, `cantidad`, `precio`, `fecha`, `hora`) VALUES
(280, 1004, 'Tincho', 'Menganoo', 2, '02. CAMISAS DE VESTIR', 1, 1600, '2021-12-20', '22:43:47'),
(281, 1004, 'Tincho', 'Menganoo', 3, '03. MEDIAS ROMBOS', 1, 330, '2021-12-20', '22:43:51'),
(282, 1004, 'Tincho', 'Menganoo', 2, '02. CAMISAS DE VESTIR', 1, 1600, '2021-12-20', '22:44:16'),
(284, 1004, 'Tincho', 'Menganoo', 1, '01. JEAN CARTIER LISAS', 1, 230, '2021-12-20', '22:45:48'),
(285, 1004, 'Tincho', 'Menganoo', 2, '02. CAMISAS DE VESTIR', 1, 1600, '2021-12-20', '22:45:50'),
(522, 346, 'Braian ', 'Frediani Guelffi', 1, '01. JEAN CARTIER LISAS', 1, 230, '2021-12-24', '13:17:21'),
(524, 1030, 'Gustsvo Adolffo', 'Frediani', 10, '010. BOXER ZORBA', 1, 430, '2021-12-25', '00:12:43'),
(526, 1030, 'Gustsvo Adolffo', 'Frediani', 2, '02. CAMISAS DE VESTIR', 1, 1600, '2021-12-25', '00:13:04'),
(527, 1030, 'Gustsvo Adolffo', 'Frediani', 10, '010. BOXER ZORBA', 1, 430, '2021-12-25', '00:13:10');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuarioID` (`usuarioID`),
  ADD KEY `productoID` (`productoID`,`usuarioID`) USING BTREE;

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrito`
--
ALTER TABLE `carrito`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=528;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
