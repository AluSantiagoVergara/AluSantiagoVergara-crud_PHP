-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-11-2024 a las 16:08:50
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `crud`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `usuario_id` int(10) NOT NULL,
  `usuario_nombre` varchar(70) NOT NULL,
  `usuario_apellido` varchar(70) NOT NULL,
  `usuario_email` varchar(100) NOT NULL,
  `usuario_usuario` varchar(30) NOT NULL,
  `usuario_clave` varchar(200) NOT NULL,
  `usuario_foto` varchar(535) NOT NULL,
  `usuario_creado` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `usuario_actualizado` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`usuario_id`, `usuario_nombre`, `usuario_apellido`, `usuario_email`, `usuario_usuario`, `usuario_clave`, `usuario_foto`, `usuario_creado`, `usuario_actualizado`) VALUES
(1, 'Administrador', 'Principal', 'admin@admin.com', 'Administrador', '$2y$10$F0J8k.lFjgGAK6I/tcbhyuMKSaitXy8ENMSBVZWErIoA6.VSU8MQy', '', '2023-07-06 21:48:05', '2023-07-06 21:48:05'),
(4, 'Rocky', 'Balboa', 'rocky@gmail.com', 'TheRocky', '$2y$10$hZ.kQbU9TyvNLAC9YAvOZeNN7kGyrAs.jQGAUc44BXIIHq2sAATX2', 'Rocky_6.jpg', '2024-11-17 00:42:50', '2024-11-17 00:42:50'),
(5, 'Loquesea', 'Nose', 'abc@gmail.com', 'abcdefghijk', '$2y$10$7xNroUV3YqBVw0TlmpOmfOzdZMqXBIondVmPGXk4c2KcfwCg5usN.', '', '2024-11-17 01:21:11', '2024-11-17 01:21:11'),
(6, 'Tus', 'Muertos', 'GGG@gmail.com', 'GuachoForro', '$2y$10$Ukrz1Mx8dyM9nLDvmbMqWuoChhobQJ.JuSId93UDxSvmGfcF3YhwS', 'Tus_5.jpg', '2024-11-17 03:52:14', '2024-11-17 03:52:14'),
(7, 'Nada', 'Importante', 'root@gmail.com', 'root', '$2y$10$/ISEjuUVqQkB4rcKoss63u3zvzBLeAii41A8FOkAGqZx6vBRD/f9C', '', '2024-11-17 04:01:13', '2024-11-17 04:01:13'),
(8, 'Login', 'Predeterminado', 'LP@gmail.com', 'PongaIngresar', '$2y$10$4ZtyoX9wR2VwJOfNEx2b8.me27oARYaowclD2LNm23cTXeUKwrBo2', '', '2024-11-18 00:43:32', '2024-11-18 00:43:32');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usuario_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usuario_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
