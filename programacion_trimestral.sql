-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-05-2017 a las 15:34:18
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `programacion_trimestral`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ambientes`
--

CREATE TABLE IF NOT EXISTS `ambientes` (
`id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_bin NOT NULL,
  `descripcion` varchar(200) COLLATE utf8_bin NOT NULL,
  `disponibilidad` varchar(200) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `ambientes`
--

INSERT INTO `ambientes` (`id`, `nombre`, `descripcion`, `disponibilidad`) VALUES
(2, 'Sistemas 1', '15 computadores, 15 teclados, 8 antenas, 10 mouse', 'Ocupado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE IF NOT EXISTS `eventos` (
`id` int(10) NOT NULL,
  `title` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `body` text COLLATE utf8_bin NOT NULL,
  `url` varchar(150) COLLATE utf8_bin NOT NULL,
  `class` varchar(45) COLLATE utf8_bin NOT NULL,
  `start` varchar(15) COLLATE utf8_bin NOT NULL,
  `end` varchar(15) COLLATE utf8_bin NOT NULL,
  `inicio_normal` varchar(50) COLLATE utf8_bin NOT NULL,
  `final_normal` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`id`, `title`, `body`, `url`, `class`, `start`, `end`, `inicio_normal`, `final_normal`) VALUES
(1, 'Clase de analisis', 'Los estudiantes tendran una clase de analisis', 'http://localhost/calendario/descripcion_evento.php?id=1', 'event-important', '1495112640000', '1495199040000', '18/05/2017 9:04', '19/05/2017 9:04'),
(2, 'MAICOL', 'Induccion adsi', 'http://localhost/yaneth/programacion_trimestral/calendario/descripcion_evento.php?id=2', 'event-info', '1495738620000', '1495825020000', '25/05/2017 14:57', '26/05/2017 14:57');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fichas`
--

CREATE TABLE IF NOT EXISTS `fichas` (
`id` int(11) NOT NULL,
  `ficha` int(100) NOT NULL,
  `nombre` varchar(200) COLLATE utf8_bin NOT NULL,
  `especialidad` varchar(100) COLLATE utf8_bin NOT NULL,
  `instructor` varchar(100) COLLATE utf8_bin NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_lectiva` date NOT NULL,
  `fecha_final` date NOT NULL,
  `horario` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `fichas`
--

INSERT INTO `fichas` (`id`, `ficha`, `nombre`, `especialidad`, `instructor`, `fecha_inicio`, `fecha_lectiva`, `fecha_final`, `horario`) VALUES
(1, 1132816, 'ADSI', 'Informatica', 'Yaneth Mejia', '2016-04-11', '2017-10-11', '2018-04-11', 'Mixto');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `instructores`
--

CREATE TABLE IF NOT EXISTS `instructores` (
`id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_bin NOT NULL,
  `apellidos` varchar(100) COLLATE utf8_bin NOT NULL,
  `especialidad` varchar(100) COLLATE utf8_bin NOT NULL,
  `apoyo_grupos` varchar(100) COLLATE utf8_bin NOT NULL,
  `tipo_contrato` varchar(100) COLLATE utf8_bin NOT NULL,
  `cantidad_horas` varchar(100) COLLATE utf8_bin NOT NULL,
  `restricciones` varchar(100) COLLATE utf8_bin NOT NULL,
  `horario` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `usuario` varchar(100) COLLATE utf8_bin NOT NULL,
  `clave` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`usuario`, `clave`) VALUES
('administrador', '594ee6d90bad73f0228b16e50d8954ed');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ambientes`
--
ALTER TABLE `ambientes`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `fichas`
--
ALTER TABLE `fichas`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `instructores`
--
ALTER TABLE `instructores`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ambientes`
--
ALTER TABLE `ambientes`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `fichas`
--
ALTER TABLE `fichas`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `instructores`
--
ALTER TABLE `instructores`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
