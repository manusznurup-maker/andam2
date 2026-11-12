-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-11-2026 a las 19:04:01
-- Versión del servidor: 10.11.16-MariaDB
-- Versión de PHP: 8.3.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `anda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `experiencias`
--

CREATE TABLE `experiencias` (
  `id_experiencia` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `ciudad` varchar(100) NOT NULL,
  `experiencia` varchar(500) NOT NULL,
  `calificacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `experiencias`
--

INSERT INTO `experiencias` (`id_experiencia`, `nombre`, `ciudad`, `experiencia`, `calificacion`) VALUES
(1, 'Charly', 'Londres', 'Excelente servicios gastronómicos recomendados por la pagina!\r\nVolvería completamente  ', 5),
(2, 'Delfina', 'Roma', 'La pasamos increíble en la cancha de la Roma! Pudimos presenciar un partido y luego tomarnos fotos con los jugadores!', 5),
(3, 'Pedro ', 'Río de Janeiro', 'Increíble saber que Rio de janeiro no son solo playas! En fin, una muy linda experiencia familiar en el maracaná ', 5),
(4, 'Sebastian', 'Buenos Aires', 'Un poco complicada la entrada pero la cancha de River es de las mas hermosas que vieron mis ojos!', 4),
(5, 'Irina ', 'Madrid', 'Fue una gran sorpresa para mi padre poder conocer la cancha del Real Madrid, pudimos cenar en el restaurante del estadio y conocer las instalaciones mediante el tour', 5);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `experiencias`
--
ALTER TABLE `experiencias`
  ADD PRIMARY KEY (`id_experiencia`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `experiencias`
--
ALTER TABLE `experiencias`
  MODIFY `id_experiencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
