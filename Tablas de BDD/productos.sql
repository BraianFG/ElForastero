-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 07-11-2021 a las 20:48:07
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
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mercado_pago` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cantidad` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `precio` int(6) NOT NULL,
  `promocion` int(11) NOT NULL,
  `precio_promocion` int(6) NOT NULL,
  `categoria` int(11) NOT NULL,
  `imagen` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen01` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen02` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen03` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen04` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `modal1` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `modal2` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `modal3` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `modal4` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `modal5` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre` (`nombre`),
  ADD UNIQUE KEY `mercado_pago` (`id`),
  ADD UNIQUE KEY `mercado_pago_2` (`mercado_pago`),
  ADD KEY `categoriaID` (`categoria`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
