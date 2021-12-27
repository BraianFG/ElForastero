-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 27-12-2021 a las 14:46:17
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
(7, 'Camisas'),
(9, 'Chombas'),
(8, 'Gorros/as'),
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
(0, 'El Forastero', '/images/logo.svg ', 'Tienda de ropa y más desde internet ', 'braianfrediani23@gmail.com', '2346338767 ', '¡Felices fiestas!', 'https://wa.me/c/5492346338767', 'https://wa.me/message/5MDAP3D7AZLDK1', 'https://facebook.com/ElForasteroTiendaDeRopaDigital/', 'https://www.instagram.com/el_forastero5/', 'https://t.me/CompreEnElForastero ');

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
('El Forastero  ', 'Compre de manera fácil y rápida desde la comodidad de tu casa o donde estés y te lo enviamos.\r\n¿Qué esperas para hacer tu primera compra?.', '/images/logo.ico ', '/images/logo.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id` int(11) NOT NULL,
  `UsuarioID` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prodcutoID` int(11) NOT NULL,
  `nombreProduc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `hora` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`id`, `UsuarioID`, `nombre`, `apellido`, `prodcutoID`, `nombreProduc`, `cantidad`, `precio`, `fecha`, `hora`) VALUES
(512, 346, 'Braian ', 'Frediani Guelffi', 2, '02. CAMISAS DE VESTIR', 1, 1600, '2021-12-24', '00:17:23'),
(513, 346, 'Braian ', 'Frediani Guelffi', 3, '03. MEDIAS ROMBOS', 1, 330, '2021-12-24', '00:17:24'),
(514, 346, 'Braian ', 'Frediani Guelffi', 4, '04. REMERAS CON CABALLOS', 1, 900, '2021-12-24', '00:17:25'),
(515, 346, 'Braian ', 'Frediani Guelffi', 5, '05. GORROS DE GRÁFA', 1, 600, '2021-12-24', '00:17:26'),
(516, 346, 'Braian ', 'Frediani Guelffi', 2, '02. CAMISAS DE VESTIR', 1, 1600, '2021-12-24', '00:33:00'),
(517, 346, 'Braian ', 'Frediani Guelffi', 3, '03. MEDIAS ROMBOS', 1, 330, '2021-12-24', '00:33:01'),
(518, 346, 'Braian ', 'Frediani Guelffi', 2, '02. CAMISAS DE VESTIR', 1, 1600, '2021-12-24', '00:33:48');

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
(1, 'Jean Cartier Lisas', 'Talles unicos', '18 pares ', 230, 'Medias', 'JeanCartierLisas02.jpg', 'JeanCartierLisas01.jpg', '', '', '', 'modal-group-1', 'modal-group-1-2', '', '', ''),
(2, 'Camisas de vestir ', 'Camisas mangas largas,talles S al XXL.\r\n', '11 Unidades', 1600, 'Camisas', 'Camisas1.jpg', 'Camisas2.jpg', 'Camisas3.jpg', 'Camisas4.jpg', '', 'modal-group-2', 'modal-group-2-2', 'modal-group-2-3', 'modal-group-2-4', ''),
(3, 'Medias Rombos', 'Talles unicos ', '30 pares ', 330, 'Medias', 'MediasRombos.jpg', 'MediasRombos2.jpg', 'pic03.jpg', '', '', 'modal-group-3-1', 'modal-group-3-2', 'modal-group-3-3', '', ''),
(4, 'Remeras con caballos', 'Remeras sublimadas con caballos talles S al XXL.\r\nTela de modal.', '10 unidades', 900, 'Remeras', 'RemeraCaballo1.jpg', 'RemeraCaballo2.jpg', 'RemeraCaballo3.jpg', 'RemeraCaballo4.jpg', 'RemeraCaballo5.jpg', 'modal-group-4', 'modal-group-4-2', 'modal-group-4-3', 'modal-group-4-4', 'modal-group-4-5'),
(5, 'Gorros de gráfa', 'Colores marrón,gris y azul', '10 unidades', 600, 'Gorros/as', 'Gorro1.jpg', 'Gorro2.jpg', 'Gorro3.jpg', 'Gorro4.jpg', '', 'modal-group-5', 'modal-group-5-2', 'modal-group-5-3', 'modal-group-5-4', ''),
(6, 'Gorras ', 'Gorras,talles unicos ajustables a la circunferencia de la cabeza.', '12 unidades', 870, 'Gorros/as', 'Gorra1.jpg', 'Gorra2.jpg', '', '', '', 'modal-group-6', 'modal-group-6-2', '', '', ''),
(7, 'Pantalones cargos', 'Pantalones cargos para el trabajo,talles 40 al 52,colores beige,marrón y verde oscuro', '30 unidades', 2220, 'Ropa de trabajo', 'PantalonCargo1.jpg', '', '', '', '', 'modal-group-7', '', '', '', ''),
(8, 'Mates', 'color gris', '8 unidades', 430, '2', 'pic029.jpg', 'pic029-02.jpg', 'pic029-03.jpg', '', '', 'modal-group-8-1', 'modal-group-8-2', 'modal-group-8-3', '', ''),
(9, 'Juego de Cuchillo y tenedor', '', '3 unidades', 1270, '2', 'pic011.jpg', 'pic011-02.jpg', '', '', '', 'modal-group-9-1', 'modal-group-9-2', '', '', ''),
(10, 'Boxer Zorba ', 'Talles S al XXL', '36 unidades', 430, '3', 'pic010.jpg', 'pic010-02.jpg', 'pic010-03.jpg', 'pic010-04.jpg', '', 'modal-group-10-1', 'modal-group-10-2', 'modal-group-10-3', 'modal-group-10-4', ''),
(11, 'Pantalones para trabajo', 'Pantalones para el trabajo,talles 40 al 54', '20 unidades', 2000, '6', 'PantalonTrabajo.jpg', '', '', '', '', 'modal-group-11', '', '', '', ''),
(12, 'Chombas pampas', 'Chombas pampas Fratello,tela de pique,talles S al XXL.\r\nColores blanco , bordó , negro y gris.\r\n', '11 Unidades ', 2150, 'Chombas', 'Chomba1.jpg', 'Chomba2.jpg', 'Chomba3.jpg', 'Chomba4.jpg', '', 'modal-group-12', 'modal-group-12-2', 'modal-group-12-3', 'modal-group-12-4', ''),
(13, 'Robles europeos ', 'Nacidos en este año', '2 plantas', 350, '2', 'Roble.jpg', 'Roble2.jpg', '', '', '', 'modal-group-13', 'modal-group-13-2', '', '', ''),
(14, 'Portatermos', '', '2 Unidades', 1100, 'Accesorios', 'portatermo2.jpg', 'portatermo1.jpg', '', '', '', 'modal-group-14', 'modal-group-14-1', '', '', ''),
(15, 'Remeras para niños', 'Talles 2 al 16,tela de modal diseño ranglan.\r\n', '12 unidades', 430, 'Remeras', 'pic024-01.jpg', 'pic024-02.jpg', 'pic024-03.jpg', 'pic024-04.jpg', 'pic024-05.jpg', 'modal-group-15', 'modal-group-15-2', 'modal-group-15-3', 'modal-group-15-4', 'modal-group-15-5'),
(16, 'Cajitas para saquitos de té', 'Cajitas para guardar saquitos de te,matecocido o café.', '5 Unidades', 530, 'Medias', 'Cajita1.jpg', 'Cajita2.jpg', 'Cajita3.jpg', '', '', 'modal-group-16', 'modal-group-16-2', 'modal-group-16-3', '', ''),
(17, 'Medias Rython', 'Talles unicos', '12 unidades', 230, 'Medias', 'MediasRython.jpg', '', '', '', '', 'modal-group-17', '', '', '', ''),
(18, 'Soquetes Elemento para damas', 'Talles unicos para damas ', '12 pares', 240, 'Medias', 'ElementoDamas.jpg', '', '', '', '', 'modal-group-18', '', '', '', ''),
(19, 'Soquetes Elemento ', 'Soquetes Elemento para Caballeros talles unicos.', '12 pares', 240, 'Medias', 'ElementoCaballero.jpg', '', '', '', '', 'modal-group-19', '', '', '', ''),
(20, 'Medias Ryhon para niños', 'Medias largas Rython para niños talles 1,2 y 3.', '30 pares ', 240, 'Medias', 'MediasRythonNios.jpg', 'MediasRythonNios2.jpg', 'MediasRythonNios3.jpg', '', '', 'modal-group-20', 'modal-group-20-2', 'modal-group-20-3', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `totalCarrito`
--

CREATE TABLE `totalCarrito` (
  `UsuarioID` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  `hora` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `totalCarrito`
--

INSERT INTO `totalCarrito` (`UsuarioID`, `nombre`, `apellido`, `fecha`, `hora`, `total`) VALUES
(346, 'Braian ', 'Frediani Guelffi', '2021-12-24', '13:17:37', 230),
(1030, 'Gustsvo Adolffo', 'Frediani', '2021-12-25', '00:13:10', 2460);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `totalPedido`
--

CREATE TABLE `totalPedido` (
  `UsuarioID` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  `hora` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `totalPedido`
--

INSERT INTO `totalPedido` (`UsuarioID`, `nombre`, `apellido`, `fecha`, `hora`, `total`) VALUES
(346, 'Braian ', 'Frediani Guelffi', '2021-12-24', '00:17:26', 3430);

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
(346, 'Braian ', 'Frediani Guelffi', 'Junin 559', 'Chivilcoy', '6620', '2346338767', 'admin@admin.com', '$2y$08$efI3SQlsoCwZxDXZmZe3CueVtfkx7kH73r8F2IMM7YNSus/M21dR2'),
(355, 'Roberto ', 'Frediani ', 'Av Urquiza 541', 'Chivilcoy ', '', '2346521865', 'robertofrediani22@gmail.com', '$2y$08$yrs035uq81E5X2r9DQplhO1lHq0nvwgAQcv26G3Mkt2f/rftoWnda'),
(1003, 'Faustina ', 'Rios ', 'Balcarce 379', 'Chivilcoy ', '6620', '2346330549', 'lpsdibercionxd@gnail.com', '$2y$08$aiYNwhT7t3yCgpIFuChihui8WUTsK69bRPjMWJwFMHRciyz3HEFgi'),
(1030, 'Gustsvo Adolffo', 'Frediani', 'Junin 559', 'Chivilcoy', '6620', '2346482017', 'gustavofrediani36@gmail.com', '$2y$08$QzvaOJG2rKYQdTV94/pC4.aW1IJu1.11XxASMvpz9GkSqD00gdaC6');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id` int(11) NOT NULL,
  `UsuarioID` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mensaje` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  `hora` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MensajeVendedor` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuarioID` (`usuarioID`),
  ADD KEY `productoID` (`productoID`,`usuarioID`) USING BTREE;

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
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`);

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
-- Indices de la tabla `totalCarrito`
--
ALTER TABLE `totalCarrito`
  ADD PRIMARY KEY (`UsuarioID`),
  ADD KEY `UsuarioID` (`UsuarioID`),
  ADD KEY `UsuarioID_2` (`UsuarioID`);

--
-- Indices de la tabla `totalPedido`
--
ALTER TABLE `totalPedido`
  ADD PRIMARY KEY (`UsuarioID`);

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
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT de la tabla `carrito`
--
ALTER TABLE `carrito`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=528;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=465;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=519;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1031;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
