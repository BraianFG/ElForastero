-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 27-12-2021 a las 14:38:37
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
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`id`, `nombre`, `email`, `password`) VALUES
(1, 'admin', 'admin@elforastero.com', '$2y$08$kBK4zpgZBpHKfcckX2kLj.N8JQPE2LLhfoRLAaPU1CC8pAFJRfM1G'),
(9, 'Jose', 'orihuelaconde@eest1chivilcy.edu.ar', '$2y$08$uRXoCSBzpqQeFyiI095XnuANk7m.sWJG5.BlSTPpVMgQEEBlSwsY.'),
(32, 'Tincho', 'tincho@gmail.com', '$2y$08$9.F/9jvPXcXzdW.HXfpl1u01/ZhMjqHxsIzm/C.2SqQUTBI.ovHAe'),
(51, 'Antonella', 'antofrediani5@gmail.com', '$2y$08$dQ9FVsoxSIjFfyZLvfG39OpEkwGjP0YAIKYevhb8NtrWMY1R.96qi'),
(54, 'Marcela', 'marcelaguelffi@gmail.com', '$2y$08$9JhPKzS4iB.01rvIwPi4N.4fggs6KFXLzPzyRTIlB3itm.ZHq.gP.');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
