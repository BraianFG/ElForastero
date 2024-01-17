-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 17-01-2024 a las 22:57:24
-- Versión del servidor: 10.5.19-MariaDB-cll-lve
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
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `productoID` int(11) NOT NULL,
  `nombreProduc` varchar(255) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` int(11) NOT NULL,
  `imagen` varchar(254) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudades`
--

CREATE TABLE `ciudades` (
  `num` int(11) NOT NULL,
  `ciudad` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estilos`
--

CREATE TABLE `estilos` (
  `body` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `color2` varchar(30) NOT NULL,
  `color3` varchar(30) NOT NULL,
  `navbar` varchar(30) NOT NULL,
  `texto` varchar(30) NOT NULL,
  `fontFamily` varchar(100) NOT NULL,
  `fontFamily2` varchar(100) NOT NULL,
  `placeholder` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `estilos`
--

INSERT INTO `estilos` (`body`, `color2`, `color3`, `navbar`, `texto`, `fontFamily`, `fontFamily2`, `placeholder`) VALUES
('#ededed', '#210000', '#fefefe', '#fefefe', '#000000', 'Arial, Helvetica, sans-serif', 'Arial, Helvetica, sans-serif', '#8f8a8a');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `favoritos`
--

CREATE TABLE `favoritos` (
  `idproducto` int(11) NOT NULL,
  `nombre` varchar(254) NOT NULL,
  `descripcion` varchar(254) NOT NULL,
  `precio` int(6) NOT NULL,
  `imagen` varchar(254) NOT NULL,
  `usuarioID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ip`
--

CREATE TABLE `ip` (
  `num` int(11) NOT NULL,
  `ip` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `localidad`
--

CREATE TABLE `localidad` (
  `id` int(254) NOT NULL,
  `localidad` varchar(254) NOT NULL,
  `codPostal` int(254) NOT NULL,
  `codArea` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensajes`
--

CREATE TABLE `mensajes` (
  `id` int(11) NOT NULL,
  `UsuarioID` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `mensaje` varchar(256) NOT NULL,
  `fecha` date NOT NULL,
  `hora` varchar(10) NOT NULL,
  `MensajeVendedor` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `MercadoPago`
--

CREATE TABLE `MercadoPago` (
  `id` int(11) NOT NULL,
  `AcessToken` varchar(254) NOT NULL,
  `sdk` varchar(254) NOT NULL,
  `comision` int(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `navegador`
--

CREATE TABLE `navegador` (
  `num` int(11) NOT NULL,
  `navegador` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `negocio`
--

CREATE TABLE `negocio` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `logo` varchar(30) NOT NULL,
  `descripcion` varchar(150) NOT NULL,
  `email` varchar(30) NOT NULL,
  `celular` varchar(30) NOT NULL,
  `alert` varchar(100) NOT NULL,
  `whatsapp` varchar(60) NOT NULL,
  `whatsapp2` varchar(60) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `instagram` varchar(60) NOT NULL,
  `telegram` varchar(100) NOT NULL,
  `info` varchar(250) NOT NULL,
  `mediosPago` varchar(254) NOT NULL,
  `registro` varchar(254) NOT NULL,
  `imagenRegistro` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `negocio`
--

INSERT INTO `negocio` (`id`, `nombre`, `logo`, `descripcion`, `email`, `celular`, `alert`, `whatsapp`, `whatsapp2`, `facebook`, `instagram`, `telegram`, `info`, `mediosPago`, `registro`, `imagenRegistro`) VALUES
(0, 'El Forastero', 'logo.svg', 'Ropa de trabajo,Bazar,Regalería y más', 'braianfrediani23@gmail.com', '2346338767 ', 'Gracias por visitarnos', 'https://wa.me/c/5492346338767', 'https://wa.me/message/5MDAP3D7AZLDK1', 'https://facebook.com/ElForasteroTiendaDeRopaDigital/', 'https://www.instagram.com/el_forastero5/', 'https://t.me/CompreEnElForastero ', 'Es una tienda digital que vende ropa de campo,ropa interior,artículos de blanquearía e indumentaria general.Nos encontramos vendiendo desde su celular en la comodidad y seguridad del hogar,una vez acordado la compra le enviamos su producto.', 'https://imgmp.mlstatic.com/org-img/banners/ar/medios/125X125.jpg', 'http://qr.afip.gob.ar/?qr=EREVeOBWV9w4UR3ILt9vWA,,', 'http://www.afip.gob.ar/images/f960/DATAWEB.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `negocio_misitio`
--

CREATE TABLE `negocio_misitio` (
  `title` varchar(100) NOT NULL,
  `descripcion` varchar(300) NOT NULL,
  `favicon` varchar(30) NOT NULL,
  `imagen_sitio` varchar(100) NOT NULL,
  `dominio` varchar(150) NOT NULL,
  `app` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `negocio_misitio`
--

INSERT INTO `negocio_misitio` (`title`, `descripcion`, `favicon`, `imagen_sitio`, `dominio`, `app`) VALUES
('El Forastero', 'Compre de manera fácil y rápida desde la comodidad de tu casa o donde estés y te lo enviamos.\r\n¿Qué esperas para hacer tu primera compra?. ', 'logo.ico', '-9nky6k.jpg', 'https://tiendaelforastero.com.ar', 'ElForastero.apk');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paginas`
--

CREATE TABLE `paginas` (
  `num` int(11) NOT NULL,
  `pagina` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paises`
--

CREATE TABLE `paises` (
  `pais` varchar(254) NOT NULL,
  `num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id` int(11) NOT NULL,
  `UsuarioID` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `prodcutoID` int(11) NOT NULL,
  `nombreProduc` varchar(255) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` int(11) NOT NULL,
  `imagen` varchar(254) NOT NULL,
  `fecha` date NOT NULL,
  `hora` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `cantidad` varchar(30) NOT NULL,
  `precio` int(6) NOT NULL,
  `categoria` varchar(55) NOT NULL,
  `imagen` varchar(254) NOT NULL,
  `imagen01` varchar(254) NOT NULL,
  `imagen02` varchar(254) NOT NULL,
  `modal1` varchar(60) NOT NULL,
  `fecha1` date NOT NULL,
  `hora1` time NOT NULL,
  `fecha2` date NOT NULL,
  `hora2` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reacciones`
--

CREATE TABLE `reacciones` (
  `id` int(11) NOT NULL,
  `idproducto` int(11) NOT NULL,
  `likes` varchar(254) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `referencia`
--

CREATE TABLE `referencia` (
  `num` int(11) NOT NULL,
  `referido` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `so`
--

CREATE TABLE `so` (
  `num` int(11) NOT NULL,
  `so` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `totalCarrito`
--

CREATE TABLE `totalCarrito` (
  `UsuarioID` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `fecha` date NOT NULL,
  `hora` varchar(55) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `totalPedido`
--

CREATE TABLE `totalPedido` (
  `UsuarioID` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `fecha` date NOT NULL,
  `hora` varchar(55) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transferencia`
--

CREATE TABLE `transferencia` (
  `nombre` varchar(254) NOT NULL,
  `apellido` varchar(254) NOT NULL,
  `cuit` varchar(254) NOT NULL,
  `banco` varchar(254) NOT NULL,
  `cbu` varchar(520) NOT NULL,
  `cuenta` varchar(254) NOT NULL,
  `alias` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `transferencia`
--

INSERT INTO `transferencia` (`nombre`, `apellido`, `cuit`, `banco`, `cbu`, `cuenta`, `alias`) VALUES
('Braian Emanuel', 'Frediani Guelffi', '20437996165', 'Brubank S.A.U', '1430001713019856090015', '1301985609001', 'braian.fg.287');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `direccion` varchar(30) NOT NULL,
  `ciudad` varchar(60) NOT NULL,
  `codPostal` int(10) NOT NULL,
  `celular` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_eliminados`
--

CREATE TABLE `usuarios_eliminados` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `direccion` varchar(30) NOT NULL,
  `ciudad` varchar(60) NOT NULL,
  `codPostal` int(10) NOT NULL,
  `celular` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_recuperar`
--

CREATE TABLE `usuarios_recuperar` (
  `password` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `visitas`
--

CREATE TABLE `visitas` (
  `ip` varchar(254) NOT NULL,
  `fecha` varchar(254) NOT NULL,
  `hora` varchar(254) NOT NULL,
  `num` int(254) NOT NULL,
  `pais` varchar(254) NOT NULL,
  `ciudad` varchar(254) NOT NULL,
  `pagina` varchar(254) NOT NULL,
  `navegador` varchar(254) NOT NULL,
  `sistema_operativo` varchar(254) NOT NULL,
  `dispositivo` varchar(254) NOT NULL,
  `referido` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre` (`nombre`),
  ADD KEY `id` (`id`);

--
-- Indices de la tabla `ciudades`
--
ALTER TABLE `ciudades`
  ADD PRIMARY KEY (`num`);

--
-- Indices de la tabla `estilos`
--
ALTER TABLE `estilos`
  ADD UNIQUE KEY `body` (`body`);

--
-- Indices de la tabla `favoritos`
--
ALTER TABLE `favoritos`
  ADD PRIMARY KEY (`idproducto`),
  ADD UNIQUE KEY `nombre` (`nombre`);

--
-- Indices de la tabla `ip`
--
ALTER TABLE `ip`
  ADD PRIMARY KEY (`num`);

--
-- Indices de la tabla `localidad`
--
ALTER TABLE `localidad`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `MercadoPago`
--
ALTER TABLE `MercadoPago`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `navegador`
--
ALTER TABLE `navegador`
  ADD PRIMARY KEY (`num`);

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
-- Indices de la tabla `paginas`
--
ALTER TABLE `paginas`
  ADD PRIMARY KEY (`num`);

--
-- Indices de la tabla `paises`
--
ALTER TABLE `paises`
  ADD PRIMARY KEY (`num`);

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
  ADD UNIQUE KEY `nombre` (`nombre`);

--
-- Indices de la tabla `reacciones`
--
ALTER TABLE `reacciones`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `idproducto` (`idproducto`),
  ADD KEY `id` (`id`);

--
-- Indices de la tabla `referencia`
--
ALTER TABLE `referencia`
  ADD PRIMARY KEY (`num`);

--
-- Indices de la tabla `so`
--
ALTER TABLE `so`
  ADD PRIMARY KEY (`num`);

--
-- Indices de la tabla `totalCarrito`
--
ALTER TABLE `totalCarrito`
  ADD KEY `UsuarioID` (`UsuarioID`),
  ADD KEY `UsuarioID_2` (`UsuarioID`);

--
-- Indices de la tabla `totalPedido`
--
ALTER TABLE `totalPedido`
  ADD UNIQUE KEY `UsuarioID` (`UsuarioID`);

--
-- Indices de la tabla `transferencia`
--
ALTER TABLE `transferencia`
  ADD UNIQUE KEY `cbu` (`cbu`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `id` (`id`);

--
-- Indices de la tabla `usuarios_eliminados`
--
ALTER TABLE `usuarios_eliminados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios_recuperar`
--
ALTER TABLE `usuarios_recuperar`
  ADD UNIQUE KEY `email` (`email`);

--
-- Indices de la tabla `visitas`
--
ALTER TABLE `visitas`
  ADD PRIMARY KEY (`num`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrito`
--
ALTER TABLE `carrito`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ciudades`
--
ALTER TABLE `ciudades`
  MODIFY `num` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ip`
--
ALTER TABLE `ip`
  MODIFY `num` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `localidad`
--
ALTER TABLE `localidad`
  MODIFY `id` int(254) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `MercadoPago`
--
ALTER TABLE `MercadoPago`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `navegador`
--
ALTER TABLE `navegador`
  MODIFY `num` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `paginas`
--
ALTER TABLE `paginas`
  MODIFY `num` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `paises`
--
ALTER TABLE `paises`
  MODIFY `num` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `reacciones`
--
ALTER TABLE `reacciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `referencia`
--
ALTER TABLE `referencia`
  MODIFY `num` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `so`
--
ALTER TABLE `so`
  MODIFY `num` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios_eliminados`
--
ALTER TABLE `usuarios_eliminados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `visitas`
--
ALTER TABLE `visitas`
  MODIFY `num` int(254) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
