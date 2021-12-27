-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 27-12-2021 a las 14:37:22
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
