-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 15-12-2021 a las 02:54:33
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
(32, 'Tincho', 'tincho@gmail.com', '$2y$08$9.F/9jvPXcXzdW.HXfpl1u01/ZhMjqHxsIzm/C.2SqQUTBI.ovHAe');

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
  `cantidad` int(11) NOT NULL,
  `precio` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `carrito`
--

INSERT INTO `carrito` (`id`, `usuarioID`, `nombre`, `apellido`, `productoID`, `cantidad`, `precio`, `fecha`, `hora`) VALUES
(26, 346, 'Braian', 'Frediani Guelffi', 10, 1, 430, '2021-12-14', '21:36:14'),
(27, 346, 'Braian', 'Frediani Guelffi', 10, 1, 430, '2021-12-14', '21:36:14'),
(28, 346, 'Braian', 'Frediani Guelffi', 9, 1, 1270, '2021-12-14', '21:36:14'),
(29, 346, 'Braian', 'Frediani Guelffi', 11, 1, 2000, '2021-12-14', '21:36:18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`) VALUES
(5, 'Abrigos'),
(3, 'Accesorios'),
(1, 'Medias'),
(2, 'Plantas'),
(4, 'Remeras'),
(6, 'Ropa de trabajo');

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
(' #f4f4f4', '#900C3F', '#fff', ' #fff', ' #17202a ', '\'Manrope\' , sans-serif', '\'Leckerli One\' , cursive', '#333');

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
  `telegram` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `negocio`
--

INSERT INTO `negocio` (`id`, `nombre`, `logo`, `descripcion`, `email`, `celular`, `alert`, `whatsapp`, `whatsapp2`, `facebook`, `instagram`, `telegram`) VALUES
(0, 'El Forastero', '/images/logo.svg ', 'Tienda de ropa y más desde internet ', 'braianfrediani23@gmail.com', '2346338767 ', '¡Felices fiestas!', 'https://wa.me/c/5492346338767', 'https://wa.me/message/5MDAP3D7', 'https://facebook.com/ElForasteroTiendaDeRopaDigital/', 'https://www.instagram.com/el_forastero5/', 'https://t.me/CompreEnElForastero ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `negocio_misitio`
--

CREATE TABLE `negocio_misitio` (
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `favicon` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen_sitio` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `negocio_misitio`
--

INSERT INTO `negocio_misitio` (`title`, `descripcion`, `favicon`, `imagen_sitio`) VALUES
('El Forastero  ', 'Puedes comprarlo de forma fácil y rápida desde la comodidad de tu casa o donde estés, te lo enviaremos y entraremos en la web para realizar la compra.', '/images/logo.ico ', '/images/logo.jpg');

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ciudad` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `codPostal` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `celular` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `direccion`, `ciudad`, `codPostal`, `celular`, `email`, `password`) VALUES
(346, 'Braian', 'Frediani Guelffi', ' Junin 559', 'Chivilcoy', '6620', '2346338767', 'admin@admin.com', '$2y$08$EpPVTv4NEm5MmT8r.hgPkeSQmh1JY/JaGE0t9kjQ/E2S4ZQypOUJW'),
(355, 'Roberto ', 'Frediani ', 'Av Urquiza 541', 'Chivilcoy ', '', '2346521865', 'robertofrediani22@gmail.com', '$2y$08$yrs035uq81E5X2r9DQplhO1lHq0nvwgAQcv26G3Mkt2f/rftoWnda');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `UsuarioID` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mensaje` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  `hora` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MensajeVendedor` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` int(11) NOT NULL,
  `vendedor` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`UsuarioID`, `nombre`, `apellido`, `mensaje`, `fecha`, `hora`, `estado`, `MensajeVendedor`, `total`, `vendedor`) VALUES
(346, 'Braian', 'Frediani Guelffi', 'Hola, ¿Cómo estás?, dejo asentada mi compra en el sitio, espero el envío lo más pronto posible.', '2021-12-14', '19:16:58', '', '', 2120, 'El Forastero');

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
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre` (`nombre`),
  ADD KEY `id` (`id`);

--
-- Indices de la tabla `estilos`
--
ALTER TABLE `estilos`
  ADD UNIQUE KEY `body` (`body`);

--
-- Indices de la tabla `negocio`
--
ALTER TABLE `negocio`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre` (`nombre`);

--
-- Indices de la tabla `negocio_misitio`
--
ALTER TABLE `negocio_misitio`
  ADD UNIQUE KEY `title` (`title`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre` (`nombre`),
  ADD KEY `categoria` (`categoria`),
  ADD KEY `id` (`id`,`categoria`) USING BTREE,
  ADD KEY `categoria_2` (`categoria`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `id` (`id`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`UsuarioID`),
  ADD KEY `UsuarioID` (`nombre`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT de la tabla `carrito`
--
ALTER TABLE `carrito`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=465;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1003;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD CONSTRAINT `carrito_ibfk_1` FOREIGN KEY (`productoID`) REFERENCES `productos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `carrito_ibfk_2` FOREIGN KEY (`usuarioID`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
