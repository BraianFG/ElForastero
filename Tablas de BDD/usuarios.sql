-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 17-11-2021 a las 23:13:20
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
(245, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '', '[value-6]', 'Valen47518@gmail.com', '$2y$08$f5UwB3zNl.qNG/aZj3L.uOLF8uhJxKcNSa0jWz9ymayq4bhV.5gEy'),
(341, 'fran', 'martino', '123456789', 'chivilcoy', '', '2346559564', 'franmarper22@gmail.com', '$2y$08$vTCry/CxqB0RQZykKuc7quBW4s9NKv4bhaPFw9BDSaGxdAHAJI4CW'),
(342, 'Jas', 'Fasola', '4801 Parrill Court', 'GRAYSON', '', '2346304227', 'gabsama80@gmail.com', '$2y$08$V.VaWNM3F9WZHzCCkK5ElOYDk1vPgYyESDqqt7uRLjuuCsi7JqyZ2'),
(344, 'María Inés', 'Mandalunis', 'San pedro 30', 'Chivilcoy', '', '2346430889', 'imanda9@hotmail.com', '$2y$08$7bFTYXE8125dG/cqJQ9qp.yFgl2iXndLie1JpjHuaS9P0PbHO4Mo6'),
(346, 'Braian', 'Frediani Guelffi', 'Junin 559', 'Chivilcoy', '6620', '2346338767', 'admin@admin.com', '$2y$08$l6RMXtomt2HzpS/WO41vu.Zb7PF9ddRrteddX6OqU2aawwRQeSbK2'),
(347, 'Juan', 'Tello', 'Áaaaa', 'Lima', '', '954121195', 'juan@gmail.com', '$2y$08$sNA7C0ty6/k9uNr9zIHxUewdoCHDbg312Mg4.Nyf4IbnyvXJOx7tS'),
(348, 'hola', 'Apellido', 'S', 'Sa', '', '86591364', 'correo@gmail.com', '$2y$08$G6/Ywjv79AtyJ2qU3aDqg.Yj3c35IL5zkBSiHXXFaOCHFxPuPmkoi'),
(350, 'Sapo', 'Ñero', 'Baba', 'Orale', '', '31115497', 'delepena@jajaja.com', '$2y$08$mF1hhGVzTIiSW9TPNBhRKOweS.xbwpyg7QS9O/kBxdMjEHjSTVnHe'),
(352, 'Tincho', 'R', 'Alberdi 1030', 'Mosconi', '', '22112345', 'tincho@gmail.com', '$2y$08$xsjdIkAx5NOK0.kUKwh7rOTtkk0m3dOJJpLTz8oh8/bXWBtNMZz9O'),
(355, 'Roberto ', 'Frediani ', 'Av Urquiza 541', 'Chivilcoy ', '', '2346521865', 'robertofrediani22@gmail.com', '$2y$08$yrs035uq81E5X2r9DQplhO1lHq0nvwgAQcv26G3Mkt2f/rftoWnda'),
(356, '', '', '', '', '', '', '', '$2y$08$Ejvm11vms6HCmY..qakqN.ee/4nrvPdZosqPjSXLkb7vZ0oUwNr0e'),
(993, 'Javier', 'Milei', ' Capitalismo', 'CABA', '', '234698768', 'JaviMilei@Hotmail.com', '$2y$08$FuNOV8gaqybFIKz6k.L8HuMRySEwDYDNZsckg7OeeuwDo0NP3Bp3C'),
(995, 'Cosme', 'Fulanito', 'El pino 123', 'Chivilcoy', '6624', '+542346338767', 'a@a.com', '$2y$08$plG8tP7csej6mBbmTe/uhuJItQL3pEK5iNTjwjm2kghOVAKpYrIFS');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=997;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
