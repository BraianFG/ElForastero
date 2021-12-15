-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 15-12-2021 a las 02:57:30
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
  `cantidad` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `precio` int(6) NOT NULL,
  `categoria` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
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
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `cantidad`, `precio`, `categoria`, `imagen`, `imagen01`, `imagen02`, `imagen03`, `imagen04`, `modal1`, `modal2`, `modal3`, `modal4`, `modal5`) VALUES
(1, 'Jean Cartier Lisas', 'Talles unicos', '18 pares ', 230, 'Medias', '/images/pic01.jpg', '/images/pic01-02.jpg', '', '', '', 'modal-group-1', 'modal-group-1-2', '', '', ''),
(3, 'Medias Rombos', 'Talles unicos ', '30 pares ', 330, '', 'images/pic03.jpg', 'images/pic03-02.jpg', '', '', '', 'modal-group-3-1', 'modal-group-3-2', '', '', ''),
(4, 'Remeras con caballos', 'Remeras sublimadas con caballos talles S al XXL.\r\nTela de modal.', '10 unidades', 900, 'Medias', '/images/RemeraCaballo1.jpg', '/images/RemeraCaballo2.jpg', 'images/RemeraCaballo3.jpg', 'images/RemeraCaballo4.jpg', 'images/RemeraCaballo5.jpg', 'modal-group-4', 'modal-group-4-2', 'modal-group-4-3', 'modal-group-4-4', 'modal-group-4-5'),
(8, 'Mates', 'color gris', '8 unidades', 430, '2', '/images/pic029.jpg', '/images/pic029-02.jpg', '/images/pic029-03.jpg', '', '', 'modal-group-8-1', 'modal-group-8-2', 'modal-group-8-3', '', ''),
(9, 'Juego de Cuchillo y tenedor', '', '3 unidades', 1270, '2', '/images/pic011.jpg', '/images/pic011-02.jpg', '', '', '', 'modal-group-9-1', 'modal-group-9-2', '', '', ''),
(10, 'Boxer Zorba ', 'Talles S al XXL', '36 unidades', 430, '3', '/images/pic010.jpg', '/images/pic010-02.jpg', '/images/pic010-03.jpg', '/images/pic010-04.jpg', '', 'modal-group-10-1', 'modal-group-10-2', 'modal-group-10-3', 'modal-group-10-4', ''),
(11, 'Pantalones para trabajo', 'Pantalones para el trabajo,talles 40 al 54', '20 unidades', 2000, '6', '/images/pic021.jpg', '', '', '', '', 'modal-group-11', '', '', '', ''),
(13, 'Robles europeos ', 'Nacidos en este año', '2', 350, '2', '/images/Roble2.jpg', '/images/Roble.jpg', '', '', '', 'modal-group-13', 'modal-group-13-2', '', '', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre` (`nombre`),
  ADD KEY `categoria` (`categoria`),
  ADD KEY `id` (`id`,`categoria`) USING BTREE,
  ADD KEY `categoria_2` (`categoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
