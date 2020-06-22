-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-03-2020 a las 21:02:05
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `centro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividades`
--

CREATE TABLE `actividades` (
  `id_actividad` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `nombre` varchar(15) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `actividades`
--

INSERT INTO `actividades` (`id_actividad`, `nombre`) VALUES
('FT', 'futbol'),
('CH', 'chino'),
('T', 'teatro'),
('DZ', 'danza');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `id_alumno` varchar(15) COLLATE utf8mb4_spanish_ci NOT NULL,
  `nombre` varchar(25) COLLATE utf8mb4_spanish_ci NOT NULL,
  `apellidos` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `dni` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `telefono` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `curso` varchar(15) COLLATE utf8mb4_spanish_ci NOT NULL,
  `actividad` varchar(15) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

CREATE TABLE `curso` (
  `id_curso` varchar(15) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Nivel` varchar(15) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `curso`
--

INSERT INTO `curso` (`id_curso`, `Nivel`) VALUES
('CuartoP', 'Primaria'),
('CuartoS', 'Secundaria'),
('PrimeroP', 'Primaria'),
('PrimeroS', 'Secundaria'),
('QuintoP', 'Primaria'),
('SegundoP', 'Primaria'),
('SegundoS', 'Secundaria'),
('SextoP', 'Primaria'),
('TerceroP', 'Primaria'),
('TerceroS', 'Secundaria');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor`
--

CREATE TABLE `profesor` (
  `id_profesor` varchar(15) COLLATE utf8mb4_spanish_ci NOT NULL,
  `nombre` varchar(25) COLLATE utf8mb4_spanish_ci NOT NULL,
  `apellidos` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `dni` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `tel` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `curso` varchar(15) COLLATE utf8mb4_spanish_ci NOT NULL,
  `actividad` varchar(15) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `profesor`
--

INSERT INTO `profesor` (`id_profesor`, `nombre`, `apellidos`, `dni`, `tel`, `curso`, `actividad`) VALUES
('ARS', 'Ana', 'Rodriguez Sanchez', '45789654L', '965874125', 'PrimeroP', ''),
('ESR', 'Elena', 'Saco Rivera', '1234577M', '521478547', 'TerceroS', ''),
('JPN', 'Jose', 'Perez Novoa', '447896325W', '698745127', 'SegundoP', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`id_alumno`),
  ADD UNIQUE KEY `curso` (`curso`,`actividad`);

--
-- Indices de la tabla `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`id_curso`);

--
-- Indices de la tabla `profesor`
--
ALTER TABLE `profesor`
  ADD PRIMARY KEY (`id_profesor`),
  ADD UNIQUE KEY `curso` (`curso`,`actividad`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
