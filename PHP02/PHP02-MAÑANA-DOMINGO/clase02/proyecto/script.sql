-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-09-2017 a las 20:09:07
-- Versión del servidor: 10.1.24-MariaDB
-- Versión de PHP: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `clase01`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `id` int(11) NOT NULL,
  `nombres` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `dni` varchar(8) NOT NULL,
  `user` varchar(100) NOT NULL,
  `pass` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id`, `nombres`, `apellidos`, `dni`, `user`, `pass`) VALUES
(7, 'JUAN', 'PEREZ  TAPIA', '46794282', 'juan234', 'a94652aa97c7211ba8954dd15a3cf838'),
(8, 'omar', 'zea', '12345678', 'omar', 'd4466cce49457cfea18222f5a7cd3573'),
(9, 'maria', 'torres', '321313', 'maria', '263bce650e68ab4e23f28263760b9fa5'),
(10, 'cesar', 'ponce', '0000000', 'cesar', '6f597c1ddab467f7bf5498aad1b41899'),
(11, 'luis', 'claudio', '123456', 'luis', '502ff82f7f1f8218dd41201fe4353687');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadisticas`
--

CREATE TABLE `estadisticas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `valor` decimal(8,2) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estadisticas`
--

INSERT INTO `estadisticas` (`id`, `nombre`, `valor`, `fecha`) VALUES
(1, 'OPERA', '20.00', '2017-08-20 17:03:25'),
(2, 'SAFARI', '45.00', '2017-08-20 17:03:25'),
(3, 'EDGE', '34.00', '2017-08-20 17:16:15'),
(4, 'CHROME', '23.00', '2017-08-20 17:19:15'),
(5, 'ANDROID ', '34.00', '2017-09-10 18:05:19');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estadisticas`
--
ALTER TABLE `estadisticas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `estadisticas`
--
ALTER TABLE `estadisticas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
