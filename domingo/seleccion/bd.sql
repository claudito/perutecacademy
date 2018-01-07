-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-01-2018 a las 15:36:50
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 7.0.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `seleccion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `club`
--

CREATE TABLE `club` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `pais` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `club`
--

INSERT INTO `club` (`id`, `nombre`, `pais`) VALUES
(6, 'Alianza Lima', 'Perú'),
(7, ' PSV Eindhoven ', 'Holanda'),
(8, 'Schalke 04', 'Alemania'),
(9, 'Al Jazira', 'Emiratos Árabes Unidos'),
(10, 'Lokomotiv Moscú', 'Rusia'),
(11, 'Bayern Múnich', 'Alemania'),
(12, 'Hamburgo', 'Alemania'),
(13, 'Corinthians', 'Brasil'),
(14, 'Flamengo', 'Brasil');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jugador`
--

CREATE TABLE `jugador` (
  `id` int(11) NOT NULL,
  `nombres` varchar(100) DEFAULT NULL,
  `apellidos` varchar(100) DEFAULT NULL,
  `posicion` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `jugador`
--

INSERT INTO `jugador` (`id`, `nombres`, `apellidos`, `posicion`) VALUES
(1, 'Paolo', 'Guerrero', 'Delantero'),
(2, 'Jeferson', 'Farfan', 'Delantero');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jugador_club`
--

CREATE TABLE `jugador_club` (
  `id` int(11) NOT NULL,
  `id_jugador` int(11) DEFAULT NULL,
  `id_club` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `jugador_club`
--

INSERT INTO `jugador_club` (`id`, `id_jugador`, `id_club`) VALUES
(1, 1, 3),
(2, 2, 4),
(6, 1, 6),
(8, 1, 11),
(9, 1, 12),
(10, 1, 13),
(12, 1, 14),
(13, 2, 6),
(14, 2, 7),
(15, 2, 8),
(16, 2, 9),
(17, 2, 10);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `club`
--
ALTER TABLE `club`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `jugador`
--
ALTER TABLE `jugador`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `jugador_club`
--
ALTER TABLE `jugador_club`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `club`
--
ALTER TABLE `club`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `jugador`
--
ALTER TABLE `jugador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `jugador_club`
--
ALTER TABLE `jugador_club`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
