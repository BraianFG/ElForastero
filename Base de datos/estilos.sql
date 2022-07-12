-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 12-07-2022 a las 04:15:34
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
-- Estructura de tabla para la tabla `estilos`
--

CREATE TABLE `estilos` (
  `body` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `color2` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color3` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `navbar` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `texto` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fontFamily` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fontFamily2` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `placeholder` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `estilos`
--

INSERT INTO `estilos` (`body`, `color2`, `color3`, `navbar`, `texto`, `fontFamily`, `fontFamily2`, `placeholder`) VALUES
('#ededed', '#1c0b03', '#fefefe', '#fefefe', '#000000', '\'Manrope\' , sans-serif', '\'Leckerli One\' , cursive', '#8f8a8a');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estilos`
--
ALTER TABLE `estilos`
  ADD UNIQUE KEY `body` (`body`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
