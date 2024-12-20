-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-11-2024 a las 16:59:17
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
-- Base de datos: `tienda_web`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `id` int(11) NOT NULL,
  `usuario_id` int(11) DEFAULT NULL,
  `producto` varchar(255) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `metodo_pago` enum('tarjeta','paypal','transferencia') NOT NULL,
  `fecha_compra` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre_producto` varchar(100) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `precio` decimal(10,2) NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre_producto`, `descripcion`, `precio`, `stock`) VALUES
(1, 'lapiz', 'Lapiz naranja', 13.00, 1),
(2, 'goma', 'goma blanca', 23.00, 12),
(3, 'libreta', 'libreta cuadriculada', 45.00, 60),
(4, 'caja de colores', 'colores vivos', 34.00, 66);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `rol` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `email`, `password`, `rol`) VALUES
(13, 'komet', 'komet@gmail.com', '$2y$10$tuC7SCAy5oASoTTgVGd.ouIGb7ed.thB1V7A05R99p/Azb/2JCZlK', 'vendedor'),
(14, 'luis', 'luis@gmail.com', '$2y$10$mjXcEV/8tzV5ZDPdiLuBIez.84y7xEcfeCE925t.DomUV0i8TCP0.', 'vendedor'),
(15, 'kat', 'kat@gmail.com', '$2y$10$I3JT/mrio1Sgdj2RyEScoOzijevLt24us/32VgoJunSIdtcFsKlxu', 'vendedor'),
(16, 'nami', 'nami@gmail.com', '$2y$10$Qaojqot7AY.c/rcBdoFoDusfC7QkEwcH5XixDEDDhBVLFj7yHf7au', 'admin'),
(17, 'Ale', 'Ale@gmail.com', '$2y$10$kaft8V/U5e9ddXbAiQ46VeG1DQwKlCcLSbFf0..bGZkmAiGKPHEKG', 'admin'),
(18, 'mimi', 'min@gmail.com', '$2y$10$QDHVtD2TLO1F0fAoVV25z.kRm9aXEanHvYh8LJIhw7yx8QPh/OBWe', 'vendedor'),
(19, 'f', 'val@gmail.com', '$2y$10$iZ8g9UmyYspm3amO8aw9o.4EElRQn8J2ll6y3eO1w5sQwX2LycjUC', 'admin'),
(22, 'hihi', 'vals@gmail.com', '$2y$10$93j6XjLtCJMS2VpiumeV2eQxM34UGsgD1AVXc07nfLIm1RU6nx3eC', 'vendedor'),
(23, 'f', 'valsw@gmail.com', '$2y$10$VKDt8VutVcPwt7yaD0nCbeqf3QYPgEMi99rnfz2GGVdkKVBCaC5W2', 'vendedor'),
(24, 'yhyhyh', 'vl@gmail.com', '$2y$10$ImWd3AoiI2L0zO57BOuJP.plUbNED5z5zcAPp4EK2xrsatTvB0U8G', 'vendedor'),
(25, 'f', 'al@gmail.com', '$2y$10$KrqYdYl7OHgnXSQU6jcsi.NVg1ti2UhDBIbGT.ghVrCWLVMeYHxau', 'vendedor'),
(26, 'g', 'v@gmail.com', '$2y$10$TKYDDhpLw4feT001JYyHLuSoEutSwPFGTZImXACIBbq3WlQ4FaNd.', 'vendedor'),
(27, 'k', 'l@gmail.com', '$2y$10$I9rwzbncxojRoTAgmyeyo.4Lo71e./0Yv0fbwiPDHcwBwWwE.8EU.', 'admin'),
(28, 'china', 'china@gmail.com', '$2y$10$ppuXwsvk/j8jZuibIIq/huPb43iD3M1CZuhYpQAzEdg9CwMxQM4Q6', 'vendedor'),
(29, 'adrinito', 'adri@gmail.com', '$2y$10$mskJUpQruD9LjKxv6oCbJOKwJ83mCUVlGjP9uS3OgbmjOeX1Q97tS', 'vendedor');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compras`
--
ALTER TABLE `compras`
  ADD CONSTRAINT `compras_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
