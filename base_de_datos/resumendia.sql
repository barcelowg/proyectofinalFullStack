-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 02-01-2023 a las 18:51:10
-- Versión del servidor: 5.7.36-log
-- Versión de PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `c2081732_climasl`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resumendia`
--

CREATE TABLE `resumendia` (
  `id` int(11) NOT NULL,
  `Fecha` date NOT NULL,
  `TempMax` text COLLATE utf8_spanish_ci NOT NULL,
  `TempMin` text COLLATE utf8_spanish_ci NOT NULL,
  `HumMax` int(11) NOT NULL,
  `HumMin` int(11) NOT NULL,
  `PresMax` int(11) NOT NULL,
  `PresMin` int(11) NOT NULL,
  `DirVientoMax` text COLLATE utf8_spanish_ci NOT NULL,
  `DirVientoMin` text COLLATE utf8_spanish_ci NOT NULL,
  `VientoMax` int(11) NOT NULL,
  `VientoMin` int(11) NOT NULL,
  `DirVieProm` text COLLATE utf8_spanish_ci NOT NULL,
  `Rafagas` int(11) NOT NULL,
  `LluvHoy` int(11) NOT NULL,
  `LluvAyer` int(11) NOT NULL,
  `LluvMes` int(11) NOT NULL,
  `LluvA` int(11) NOT NULL,
  `Hora` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `resumendia`
--

INSERT INTO `resumendia` (`id`, `Fecha`, `TempMax`, `TempMin`, `HumMax`, `HumMin`, `PresMax`, `PresMin`, `DirVientoMax`, `DirVientoMin`, `VientoMax`, `VientoMin`, `DirVieProm`, `Rafagas`, `LluvHoy`, `LluvAyer`, `LluvMes`, `LluvA`, `Hora`) VALUES
(387, '2022-12-27', '34.1', '16.1', 84, 26, 999, 988, 'NW', 'N', 13, 0, 'N', 25, 5, 0, 68, 752, '2022-12-28 03:00:05'),
(388, '2022-12-28', '32.0', '14.6', 77, 26, 996, 990, 'NW', 'N', 23, 0, 'ESE', 40, 0, 5, 68, 752, '2022-12-29 03:00:02'),
(389, '2022-12-29', '33.6', '16.1', 92, 27, 999, 990, 'NW', 'N', 13, 0, 'NNE', 21, 0, 0, 68, 752, '2022-12-30 03:00:01'),
(390, '2022-12-30', '39.0', '14.9', 74, 22, 992, 985, 'NW', 'N', 17, 0, 'N', 32, 0, 0, 68, 752, '2022-12-31 20:38:14'),
(393, '2022-12-31', '36.8', '22.0', 67, 30, 994, 988, 'NW', 'N', 18, 0, 'SSE', 33, 0, 0, 68, 752, '2023-01-01 03:00:03'),
(394, '2023-01-01', '23.5', '14.0', 99, 37, 994, 990, 'NW', 'N', 19, 0, 'WSW', 39, 11, 0, 11, 11, '2023-01-02 03:00:02');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `resumendia`
--
ALTER TABLE `resumendia`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `resumendia`
--
ALTER TABLE `resumendia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=395;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
