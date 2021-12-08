-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 15-11-2021 a las 13:06:17
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
(1, 'El Forastero', 'admin@elforastero.com', '$2y$08$kBK4zpgZBpHKfcckX2kLj.N8JQPE2LLhfoRLAaPU1CC8pAFJRfM1G'),
(9, 'Jose', 'orihuelaconde@eest1chivilcy.edu.ar', '$2y$08$uRXoCSBzpqQeFyiI095XnuANk7m.sWJG5.BlSTPpVMgQEEBlSwsY.'),
(32, 'Tincho', 'tincho@gmail.com', '$2y$08$9.F/9jvPXcXzdW.HXfpl1u01/ZhMjqHxsIzm/C.2SqQUTBI.ovHAe'),
(35, 'Anto', 'anto@elforastero.com', '$2y$08$TJSAFkSCTk/TU6qxMNQME.eCFVBqD8.aATMqN9KSpoilWoM71WYsu'),
(40, 'francesca', 'franmarper22@gmail.com', '$2y$08$CnJ3m.NIJ/hFj5a6OhrrlOuobDKg8iqAQTaMYbCWLpPalqCMYvn4y'),
(41, 'Ivo', 'ivopalomeque1@gmail.com', '$2y$08$pkwunyfrkleJzPjZkxzWSeNbX9hovWCWZnkICVBG9AIo.l8j7uJX2'),
(42, 'jas fasola', 'gabsama80@gmail.com', '$2y$08$WVlkAc.UFliY4hn1o1fZwugKpjo5Iz2UiidiYBRd1wq8dSYlq3One'),
(43, 'luca', 'guillejuan@gmial.com', '$2y$08$hrlbDvt2NSj689Cshu9/WOhfQtAkdNNc8SgbArFNPm0ZC5yH8ymFO'),
(44, 'Maria Ines Mandalunis', 'imanda9@hotmail.com', '$2y$08$Fdj1THHHqcqkIG2e9dKl9uKLX1qfl4MY11oOtBy3xMJftO.OR5MAK');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `usuarioID` int(11) NOT NULL,
  `productoID` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `carrito`
--

INSERT INTO `carrito` (`usuarioID`, `productoID`, `cantidad`) VALUES
(346, 1, 1),
(353, 1, 1);

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
(2, 'Accesorios'),
(7, 'Calzados'),
(3, 'Lenceria feminina/masculina'),
(1, 'Medias '),
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
  `buttonColor` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `buttonColorPrimary` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fontFamily` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fontFamily2` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `placeholder` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `estilos`
--

INSERT INTO `estilos` (`body`, `color2`, `color3`, `navbar`, `texto`, `buttonColor`, `buttonColorPrimary`, `fontFamily`, `fontFamily2`, `placeholder`) VALUES
(' #f4f4f4', '#154360', '#FDFEFE', ' #fff', ' #333', '#1b2631 ', '#fff', '\'Manrope\' , sans-serif', '\'Leckerli One\' , cursive', '#333');

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
(0, 'El Forastero', '/images/logo.svg ', 'Tienda de ropa y más desde internet ', 'braianfrediani23@gmail.com', '2346338767 ', 'Descuento por pagos en contado  ', 'https://wa.me/c/5492346338767', 'https://wa.me/message/5MDAP3D7', '', '', 'https://t.me/CompreEnElForastero ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `negocio_misitio`
--

CREATE TABLE `negocio_misitio` (
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `favicon` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre_sitio` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen_sitio` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titulo_sitio` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `negocio_misitio`
--

INSERT INTO `negocio_misitio` (`title`, `descripcion`, `favicon`, `nombre_sitio`, `imagen_sitio`, `titulo_sitio`) VALUES
('El Forastero', 'Puedes comprarlo de forma fácil y rápida desde la comodidad de tu casa o donde estés, te lo enviaremos y entraremos en la web para realizar la compra.', '/images/logo.ico', '', '/images/logo.jpg', 'El Forastero');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id` int(11) NOT NULL,
  `usuarioID` int(11) NOT NULL,
  `fecha` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `cantidad`, `precio`, `categoria`, `imagen`, `imagen01`, `imagen02`, `imagen03`, `imagen04`, `modal1`, `modal2`, `modal3`, `modal4`, `modal5`) VALUES
(1, 'Medias  Jean Cartier lisas', 'talles unicos', '24 pares', 210, 1, 'images/pic01.jpg', 'images/pic01-02.jpg', '', '', '', 'modal-group--1', 'modal-group-1-2', '', '', ''),
(2, 'Medias Rython', 'talles unicos   ', '12 pares  ', 210, 1, 'images/pic02.jpg', 'images/pic02-02.jpg', '', '', '', 'modal-group-2-1', 'modal-group-2-2', '', '', ''),
(3, 'Medias Rombos', 'Talles unicos', '30 pares ', 300, 1, 'images/pic03.jpg', 'images/pic03-02.jpg ', '', '', '', 'modal-group-3-1', 'modal-group-3-2', '', '', ''),
(4, 'Portatermos', 'Colores y cantidad disponibles en la imagen', '3', 1000, 2, '/images/portatermo2.jpg', '/images/portatermo1.jpg', '', '', '', 'modal-group-4', '', '', '', ''),
(5, 'Remeras Bordadas', 'Talles', '6', 800, 4, '/images/RemeraBordada.jpg', '/images/RemeraBordada1.jpg', '/images/RemeraBordada2.jpg', '', '', 'modal-group-5-1', 'modal-group-5-2', 'modal-group-5-3', '', ''),
(6, 'Remeras para niños', 'Talles 2 al 16', '16 Unidades', 300, 3, '/images/pic024-01.jpg', '/images/pic024-02.jpg', '/images/pic024-03.jpg', '/images/pic024-04.jpg', '/images/pic024-05.jpg', 'modal-group-6-1', 'modal-group-6-2', 'modal-group-6-3', 'modal-group-6-4', 'modal-group-6-5'),
(7, 'Cuchillos verijeros', '14 cm de largo de hoja', '13 unidades', 550, 2, '/images/pic030-01.jpg', '/images/pic030-02.jpg', '', '', '', 'modal-group-7-1', 'modal-group-7-2', '', '', ''),
(8, 'Mates', 'color gris', '8 unidades', 400, 2, '/images/pic029.jpg', '/images/pic029-02.jpg', '/images/pic029-03.jpg', '', '', 'modal-group-8-1', 'modal-group-8-2', 'modal-group-8-3', '', ''),
(9, 'Juego de Cuchillo y tenedor', '', '3 unidades', 1250, 2, '/images/pic011.jpg', '/images/pic011-02.jpg', '', '', '', 'modal-group-9-1', 'modal-group-9-2', '', '', ''),
(10, 'Boxer Zorba ', 'Talles S al XXL', '36 unidades', 400, 3, '/images/pic010.jpg', '/images/pic010-02.jpg', '/images/pic010-03.jpg', '/images/pic010-04.jpg', '', 'modal-group-10-1', 'modal-group-10-2', 'modal-group-10-3', 'modal-group-10-4', ''),
(11, 'Pantalones para trabajo', 'Pantalones para el trabajo,talles 40 al 54', '20 unidades', 1600, 6, '/images/pic021.jpg', '', '', '', '', 'modal-group-11', '', '', '', ''),
(12, 'Cuellos de polar', 'Color negro', '13 unidades', 200, 5, '/images/pic07.jpg', '/images/pic07-02.jpg', '', '', '', 'modal-group-12', 'modal-group-12-2', '', '', '');

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
  `celular` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `direccion`, `ciudad`, `celular`, `email`, `password`) VALUES
(245, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]', 'Valen47518@gmail.com', '$2y$08$f5UwB3zNl.qNG/aZj3L.uOLF8uhJxKcNSa0jWz9ymayq4bhV.5gEy'),
(341, 'fran', 'martino', '123456789', 'chivilcoy', '2346559564', 'franmarper22@gmail.com', '$2y$08$vTCry/CxqB0RQZykKuc7quBW4s9NKv4bhaPFw9BDSaGxdAHAJI4CW'),
(342, 'Jas', 'Fasola', '4801 Parrill Court', 'GRAYSON', '2346304227', 'gabsama80@gmail.com', '$2y$08$V.VaWNM3F9WZHzCCkK5ElOYDk1vPgYyESDqqt7uRLjuuCsi7JqyZ2'),
(344, 'María Inés', 'Mandalunis', 'San pedro 30', 'Chivilcoy', '2346430889', 'imanda9@hotmail.com', '$2y$08$7bFTYXE8125dG/cqJQ9qp.yFgl2iXndLie1JpjHuaS9P0PbHO4Mo6'),
(346, 'Braian', 'Frediani Guelffi', 'Junin 559', 'Chivilcoy', '2346338767', 'admin@admin.com', '$2y$08$l6RMXtomt2HzpS/WO41vu.Zb7PF9ddRrteddX6OqU2aawwRQeSbK2'),
(347, 'Juan', 'Tello', 'Áaaaa', 'Lima', '954121195', 'juan@gmail.com', '$2y$08$sNA7C0ty6/k9uNr9zIHxUewdoCHDbg312Mg4.Nyf4IbnyvXJOx7tS'),
(348, 'hola', 'Apellido', 'S', 'Sa', '86591364', 'correo@gmail.com', '$2y$08$G6/Ywjv79AtyJ2qU3aDqg.Yj3c35IL5zkBSiHXXFaOCHFxPuPmkoi'),
(350, 'Sapo', 'Ñero', 'Baba', 'Orale', '31115497', 'delepena@jajaja.com', '$2y$08$mF1hhGVzTIiSW9TPNBhRKOweS.xbwpyg7QS9O/kBxdMjEHjSTVnHe'),
(352, 'Tincho', 'R', 'Alberdi 1030', 'Mosconi', '22112345', 'tincho@gmail.com', '$2y$08$xsjdIkAx5NOK0.kUKwh7rOTtkk0m3dOJJpLTz8oh8/bXWBtNMZz9O'),
(353, 'Pepe', 'Fulano', 'Siempre Viva 123', 'Springfield', '238580568', 'a@a.com', '$2y$08$x3.J3AP6YVT8JNj6YndzpOUM4qyWm2sTsJmDxmmSd4UYQDyiO2.dW'),
(355, 'Roberto ', 'Frediani ', 'Av Urquiza 541', 'Chivilcoy ', '2346521865', 'robertofrediani22@gmail.com', '$2y$08$yrs035uq81E5X2r9DQplhO1lHq0nvwgAQcv26G3Mkt2f/rftoWnda');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `UsuarioID` int(11) NOT NULL,
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

INSERT INTO `ventas` (`UsuarioID`, `mensaje`, `fecha`, `hora`, `estado`, `MensajeVendedor`, `total`, `vendedor`) VALUES
(346, 'Hola, ¿Cómo estás?, dejo asentada mi compra en el sitio, espero el envío lo más pronto posible.', '2021-11-15', '02:58:53', '', '', 630, 'El Forastero'),
(352, 'Hola,  braian dame un producto gratis jajja', '2021-11-14', '02:16:04', 'Espeando dinero', ' Nunca XD', 0, ''),
(353, '¿Cuándo me tráes el pedido?', '2021-11-14', '02:20:00', 'Venta rechazada', 'Cuando se me antoje  ', 0, '');

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
  ADD PRIMARY KEY (`usuarioID`,`productoID`),
  ADD KEY `usuarioID` (`usuarioID`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre` (`nombre`),
  ADD UNIQUE KEY `modal` (`id`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuarioID` (`usuarioID`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre` (`nombre`),
  ADD KEY `categoriaID` (`categoria`);

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
  ADD KEY `UsuarioID` (`UsuarioID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=465;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=445;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=356;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD CONSTRAINT `carrito_ibfk_1` FOREIGN KEY (`productoID`) REFERENCES `productos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `carrito_ibfk_2` FOREIGN KEY (`usuarioID`) REFERENCES `usuarios` (`id`);

--
-- Filtros para la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `pedidos_ibfk_1` FOREIGN KEY (`usuarioID`) REFERENCES `usuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
