-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-08-2021 a las 20:03:06
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `servicio_social`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `greporte`
--

CREATE TABLE `greporte` (
  `id` int(20) NOT NULL,
  `nombre` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `universidad` varchar(40) COLLATE utf8mb4_spanish_ci NOT NULL,
  `carrera` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `horas acumuladas` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reportes`
--

CREATE TABLE `reportes` (
  `id_reporte` int(7) NOT NULL,
  `nombre` varchar(60) COLLATE utf8mb4_spanish_ci NOT NULL,
  `usuario` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `No_reporte` int(7) NOT NULL,
  `fecha_de_reporte` date NOT NULL,
  `universidad` varchar(60) COLLATE utf8mb4_spanish_ci NOT NULL,
  `carrera` varchar(60) COLLATE utf8mb4_spanish_ci NOT NULL,
  `area_del_reporte` varchar(10000) COLLATE utf8mb4_spanish_ci NOT NULL,
  `status` varchar(11) COLLATE utf8mb4_spanish_ci NOT NULL,
  `horas` int(20) NOT NULL,
  `id_usuario` int(20) NOT NULL,
  `apellidos` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `reportes`
--

INSERT INTO `reportes` (`id_reporte`, `nombre`, `usuario`, `No_reporte`, `fecha_de_reporte`, `universidad`, `carrera`, `area_del_reporte`, `status`, `horas`, `id_usuario`, `apellidos`) VALUES
(14, 'raul', 'raulunix20', 8, '2021-08-14', 'TESI', 'Sistemas', 'gh', 'pendiente', 0, 1, 'mendoza');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(7) NOT NULL,
  `usuario` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `apellidos` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `id_estatus` varchar(11) COLLATE utf8mb4_spanish_ci NOT NULL,
  `password` varchar(70) COLLATE utf8mb4_spanish_ci NOT NULL,
  `id_tipo` varchar(11) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `nombre`, `apellidos`, `id_estatus`, `password`, `id_tipo`) VALUES
(1, 'raulunix20', 'raul', 'mendoza', '1', '2e7fc308445d6129e715dd32197ae31a', '1'),
(7, 'root', 'rogelio', 'lopez', 'activo', '827ccb0eea8a706c4c34a16891f84e7b', 'prestador'),
(8, 'lunux', 'rogelio', 'lopez', 'activo', '09a6f4ead95fb05ee29ab9e7d1219e33', 'prestador'),
(11, 'prueba', 'victor', 'zavala', 'activo', '827ccb0eea8a706c4c34a16891f84e7b', 'prestador');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `reportes`
--
ALTER TABLE `reportes`
  ADD PRIMARY KEY (`id_reporte`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_estatus` (`id_estatus`),
  ADD KEY `fk_tipo` (`id_tipo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `reportes`
--
ALTER TABLE `reportes`
  MODIFY `id_reporte` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
