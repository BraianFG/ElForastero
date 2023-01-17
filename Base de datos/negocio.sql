-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 17-01-2023 a las 15:09:27
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
-- Estructura de tabla para la tabla `negocio`
--

CREATE TABLE `negocio` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `celular` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alert` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `whatsapp` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `whatsapp2` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telegram` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `info` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mediosPago` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `registro` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagenRegistro` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `negocio`
--

INSERT INTO `negocio` (`id`, `nombre`, `logo`, `descripcion`, `email`, `celular`, `alert`, `whatsapp`, `whatsapp2`, `facebook`, `instagram`, `telegram`, `info`, `mediosPago`, `registro`, `imagenRegistro`) VALUES
(0, 'El Forastero', 'logo.svg', 'Ropa de trabajo,Bazar,Regalería y más', 'braianfrediani23@gmail.com', '2346338767 ', 'Gracias por visitarnos', 'https://wa.me/c/5492346338767', 'https://wa.me/message/5MDAP3D7AZLDK1', 'https://facebook.com/ElForasteroTiendaDeRopaDigital/', 'https://www.instagram.com/el_forastero5/', 'https://t.me/CompreEnElForastero ', 'Es una tienda digital que vende ropa de campo,ropa interior,artículos de blanquearía e indumentaria general.Nos encontramos vendiendo desde su celular en la comodidad y seguridad del hogar,una vez acordado la compra le enviamos su producto.', 'https://imgmp.mlstatic.com/org-img/banners/ar/medios/468X60.jpg', 'http://qr.afip.gob.ar/?qr=EREVeOBWV9w4UR3ILt9vWA,,', 'http://www.afip.gob.ar/images/f960/DATAWEB.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `negocio`
--
ALTER TABLE `negocio`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre` (`nombre`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
