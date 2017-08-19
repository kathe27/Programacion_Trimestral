-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-08-2017 a las 22:06:41
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `programacion_trimestral`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ambientes`
--

CREATE TABLE `ambientes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_bin NOT NULL,
  `cupo` int(100) NOT NULL,
  `disponibilidad` varchar(200) COLLATE utf8_bin NOT NULL,
  `centro` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `ambientes`
--

INSERT INTO `ambientes` (`id`, `nombre`, `cupo`, `disponibilidad`, `centro`) VALUES
(1, 'SISTEMAS1', 60, '', 'industria'),
(2, 'SISTEMAS 2', 40, '', 'industria'),
(3, 'SISTEMAS 3', 50, '', 'industria'),
(4, 'AUTOCAD', 50, '', 'industria'),
(5, 'AUDITORIO', 200, '', 'industria'),
(6, 'AUTOMOTRIZ', 90, '', 'industria'),
(7, 'CONFECCION', 60, '', 'industria'),
(8, 'DIBUJO', 40, '', 'industria'),
(9, 'DIESEL', 100, '', 'industria'),
(10, 'ELECTRICIDAD 1', 60, '', 'industria'),
(11, 'ELECTRICIDAD 2 ', 70, '', 'industria'),
(12, 'ELECTRICIDAD 3', 50, '', 'industria'),
(13, 'ELECTRICIDAD 4', 30, '', 'industria'),
(14, 'MANUFACTURA MADERAS', 35, '', 'industria'),
(15, 'MANTENIMIENTO', 107, '', 'industria'),
(16, 'MECANIZADO', 80, '', 'industria'),
(17, 'METALOGRAFIA', 50, '', 'industria'),
(18, 'SALUD OCUPACIONAL', 70, '', 'industria'),
(19, 'SOLDADURA', 75, '', 'industria'),
(20, 'REDES PARA GAS', 50, '', 'industria'),
(21, 'INSTRUMENTACION Y CONTROL', 40, '', 'automatizacion'),
(22, 'NEUMATICA', 40, '', 'automatizacion'),
(23, 'SERVOSISTEMAS', 40, '', 'automatizacion'),
(24, 'AMBIENTE LEGO', 50, '', 'industria'),
(25, 'ESPACIO DEPORTIVO', 300, '', 'industria'),
(26, 'ESPACIO PARA TRABAJO EN ALTURAS', 350, '', 'industria'),
(27, 'GIMNASIO REGIONAL CALDAS', 1000, '', 'industria'),
(28, 'REFRIGERACION', 60, '', 'industria'),
(29, 'TECNOPARQUE', 75, '', 'industria'),
(30, 'MOTOS', 50, '', 'industria');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contador`
--

CREATE TABLE `contador` (
  `id` int(11) NOT NULL,
  `contador` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `id` int(10) NOT NULL,
  `centro` varchar(50) COLLATE utf8_bin NOT NULL,
  `ambientei` varchar(50) COLLATE utf8_bin NOT NULL,
  `instructori` varchar(50) COLLATE utf8_bin NOT NULL,
  `ambientea` varchar(50) COLLATE utf8_bin NOT NULL,
  `instructora` varchar(50) COLLATE utf8_bin NOT NULL,
  `area` varchar(100) COLLATE utf8_bin NOT NULL,
  `ficha` int(50) NOT NULL,
  `especialidad` varchar(100) COLLATE utf8_bin NOT NULL,
  `title` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `body` text COLLATE utf8_bin NOT NULL,
  `url` varchar(150) COLLATE utf8_bin NOT NULL,
  `class` varchar(45) COLLATE utf8_bin NOT NULL,
  `start` varchar(15) COLLATE utf8_bin NOT NULL,
  `end` varchar(15) COLLATE utf8_bin NOT NULL,
  `inicio_normal` datetime NOT NULL,
  `final_normal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`id`, `centro`, `ambientei`, `instructori`, `ambientea`, `instructora`, `area`, `ficha`, `especialidad`, `title`, `body`, `url`, `class`, `start`, `end`, `inicio_normal`, `final_normal`) VALUES
(355, 'Industria', 'SISTEMAS 2', 'MARIA BEATRIZ', '', '', '', 1132816, 'Seleccione una opcion...', 'asd', '', 'http://localhost/yaneth/programacion_trimestral/calendario2/descripcion_evento.php?id=355', 'event-info', '1508169600000', '1508533200000', '2017-10-16 13:00:00', '2017-10-20 18:00:00'),
(357, 'Industria', 'SISTEMAS 2', 'ALEXANDER', '', '', '', 1132816, 'Seleccione una opcion...', 'sdss', '', 'http://localhost/yaneth/programacion_trimestral/calendario2/descripcion_evento.php?id=357', 'event-info', '1508148000000', '1508511600000', '2017-10-16 07:00:00', '2017-10-20 12:00:00'),
(361, 'Industria', 'SISTEMAS1', 'ALEXANDER', '', '', '', 1132816, 'Seleccione una opcion...', 'QWEWE', '', 'http://localhost/yaneth/programacion_trimestral/calendario1/descripcion_evento.php?id=361', 'event-info', '1508148000000', '1508515200000', '2017-10-16 07:00:00', '2017-10-20 13:00:00'),
(365, 'Industria', 'SISTEMAS 2', 'MARIA BEATRIZ', '', '', '', 1132816, 'Seleccione una opcion...', 'asas', '', 'http://localhost/yaneth/programacion_trimestral/calendario2/descripcion_evento.php?id=365', 'event-info', '1509530400000', '1514736000000', '2017-11-01 07:00:00', '2017-12-31 13:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fichas`
--

CREATE TABLE `fichas` (
  `id` int(11) NOT NULL,
  `ficha` varchar(100) COLLATE utf8_bin NOT NULL,
  `nombre` varchar(100) COLLATE utf8_bin NOT NULL,
  `especialidad` varchar(100) COLLATE utf8_bin NOT NULL,
  `instructor` varchar(100) COLLATE utf8_bin NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_lectiva` date NOT NULL,
  `fecha_final` date NOT NULL,
  `horario` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `fichas`
--

INSERT INTO `fichas` (`id`, `ficha`, `nombre`, `especialidad`, `instructor`, `fecha_inicio`, `fecha_lectiva`, `fecha_final`, `horario`) VALUES
(2, '1132816', 'Analisis y Desarrollo de Sistemas de Informacion', 'Informatica', 'Yaneth Mejia', '2016-04-11', '2017-10-12', '2018-04-11', 'Mixta'),
(3, '1323395', 'Analisis y Desarrollo de Sistemas de Informacion', 'Informatica', 'Yaneth Mejia', '2017-01-23', '2018-07-23', '2019-01-23', 'Mixta'),
(4, '1368665', 'Especializacion Tecnologica en Metodologias Para el Desarrollo de Software', 'Informatica', 'Yaneth Mejia', '2017-04-17', '0000-00-00', '2017-10-16', 'Dual'),
(14, '1375843', 'Auxiliar Trabajador de Madera', 'Construccion', 'Camilo Andres Naranjo', '2017-02-23', '2017-05-23', '2017-08-23', 'Diurna'),
(15, '1132770', 'Desarrollo Grafico de Proyectos de Arquitectura E Ingenieria', 'Construccion', 'Jorge Alberto Tamayo ', '2017-04-11', '2017-10-11', '2018-04-11', 'Diurna'),
(21, '1094381', 'Topografia', 'Construccion', 'AndrÃ©s Felipe Jurado ', '2017-01-25', '2017-07-24', '2018-01-24', 'Diurna'),
(22, '1261608', 'Tecnologo en Construccion', 'Construccion', 'Alexander Arenas', '2016-09-26', '2018-03-26', '2018-09-26', 'Diurna'),
(23, '1261604', 'Tecnologo en Desarrollo Grafico de Proyectos de Arquitectura e ingenireria', 'Construccion', 'Aparicio Mejia', '2016-09-26', '0000-00-00', '2018-04-26', 'Diurna'),
(24, '1301351', 'Mantenimiento y ReparaciÃ³n de Edificaciones', 'Construccion', 'MARIO RAIGOZA', '2016-10-10', '0000-00-00', '2017-12-11', 'Diurna'),
(25, '1368569 A', 'Tecnologo en Desarrollo Grafico de Proyectos de Arquitectura e ingenireria', 'Construccion', 'Jorge Alberto Tamayo Grisales', '2017-04-17', '2018-10-16', '2019-04-16', 'Mixta'),
(26, '1075391', 'Tecnologo en Topografia', 'Construccion', 'Andres Felipe Jurado', '2015-09-28', '2017-03-28', '2017-09-28', 'Nocturna-Dual'),
(27, '1323382', 'Tecnologo en Topografia', 'Construccion', 'Felipe Jurado', '2017-01-23', '2018-07-23', '2019-07-23', 'Diurna'),
(28, '1368604', 'Tecnologo en Obras Civiles', 'Construccion', 'Aparicio Mejia', '2017-04-17', '2018-10-16', '2019-04-16', 'Dual'),
(29, '1132795', 'Mantenimiento Mecanico Industrial', 'Mecanica', 'Diego Alexander Grajales', '2016-04-11', '2017-10-11', '2018-04-11', 'Diurna'),
(30, '1132701', 'SOLDADURA DE PRODUCTOS METALICOS (PLATINA)', 'Eectricidad', 'Cristian Mauricio Toro', '0000-00-00', '0000-00-00', '0000-00-00', ''),
(31, '1182104', 'MECANIZADO DE PRODUCTOS METALMECANICOS ', 'Mecanica', ' JOSE FERNANDO VERGARA', '0000-00-00', '0000-00-00', '2017-07-11', ''),
(32, '1197616', 'Mantenimiento Mecanico Industrial', 'Mecanica', 'Jhon Fredy Cortes ', '2016-07-11', '2018-01-11', '2018-01-11', 'Diurna'),
(33, '1368653', 'Mantenimiento Mecanico Industrial', 'Mecanica', 'Alberto Acebedo', '2017-04-17', '0000-00-00', '2019-04-16', ''),
(34, '1132756', 'Tecnologo en Electricidad Industrial', 'Electricidad', 'Guillermo Antonio Valencia', '2016-04-11', '2017-10-11', '2018-04-11', 'Diurna'),
(35, '1197544', 'Mantenimiento Electro-Mecanico Industrial', 'Eectricidad', 'Miryam Claudina Gracia Naranjo', '2016-07-11', '2018-01-11', '2018-07-11', 'Diurna'),
(36, '1197576', 'Electricidad Industrial', 'Eectricidad', 'Juan Carlos Lopez', '2016-07-11', '2018-01-11', '2018-07-11', 'Diurna'),
(37, '1368673', 'Tecnologo en Electricidad Industrial', 'Eectricidad', 'Claudio Alberto Valencia Sanchez', '2017-04-17', '2018-10-16', '2019-04-16', 'Diurna'),
(38, '1368529', 'Tecnologo en Electricidad Residencial', 'Eectricidad', 'Mario Leandro Vargas', '2017-04-17', '0000-00-00', '2018-07-16', 'Dual'),
(39, '1323358', 'Tecnologo en SupervisiÃ³n De Redes De DistribuciÃ³n De EnergÃ­a ElÃ©ctrica', 'Eectricidad', 'Melody Ramos Giraldo', '2017-01-23', '2018-07-23', '2019-01-23', 'Diurna'),
(40, '1367722', 'Mantenimiento Electro-Mecanico Industrial', 'Mecanica', 'Myriam Claudina Gracia Naranjo', '2017-04-13', '2018-09-13', '2019-04-16', 'Diurna'),
(41, '1114874', 'Mantenimiento Mecanico de Motores', 'Automotriz', 'Andres Mauricio Jaramillo', '2015-11-17', '0000-00-00', '2017-11-17', 'Diurna'),
(42, '1343933', 'TC MANTENIMIENTO DE LAS MOTOCICLETAS', 'Mecanica', 'Jaime Adolfo Fuentes', '0000-00-00', '2016-11-17', '2017-05-17', 'Diurna'),
(43, '1368501', 'Tecnologo En Mantenimiento De Motores DiÃ©sel', 'Mecanica', 'Luis Camilo Estrada PatiÃ±o', '2017-04-17', '2017-10-17', '2018-04-16', 'Diurna'),
(44, '1368642 A', 'Tgo En Mantenimiento MecatrÃ³nico De Automotores', 'Mecanica', 'VICTOR MAURICIO ACEVEDO CORREA', '2017-04-17', '0000-00-00', '0000-00-00', 'Dual'),
(45, '1368642 B', 'Tgo En Mantenimiento MecatrÃ³nico De Automotores (B)', 'Seleccione una opcion...', 'VICTOR MAURICIO ACEVEDO CORREA', '2017-04-17', '0000-00-00', '0000-00-00', 'Dual'),
(46, '1306630', 'Tecnologo en Seguridad Vial, Control de Transito y Transporte', 'Automotriz', 'Jhon Kevin Flores PeÃ±a', '2017-10-03', '0000-00-00', '2017-01-02', 'Diurna'),
(47, '1368498', 'Tecnologo en Mantenimiento de Motores DiÃ©sel', 'Mecanica', 'Jhon Kevin Flores PeÃ±a', '2017-04-17', '2017-10-17', '2018-12-16', 'Diurna'),
(48, '1197693', 'Gestion Integrada de Sistemas de Calidad Ambiental, Seguridad y  Salud Ocupacional HSEQ', 'Ambiental', 'Fernando Arsiniegas', '2016-07-11', '2018-01-11', '2018-07-11', 'Diurna'),
(49, '1261575 A', 'TECNOLOGO EN GESTIÃ“N INTEGRADA DE LA CALIDAD, MEDIO AMBIENTE, SEGURIDAD Y SALUD OCUPACIONAL', 'Salud Ocupacionak', 'CARLOS ARTURO VALENCIA', '2016-09-11', '0000-00-00', '2018-03-26', 'Dual'),
(50, '1261575 B', 'ECNOLOGO EN GESTIÃ“N INTEGRADA DE LA CALIDAD, MEDIO AMBIENTE, SEGURIDAD Y SALUD OCUPACIONAL (B)', 'Salud Ocupacionak', 'CARLOS ARTURO VALENCIA', '2016-09-26', '2018-03-26', '2018-09-26', 'Mixta'),
(51, '1369525 A', 'Tecnico en Patronaje Industrial de Prendas de Vestir', 'Confeccion', 'Gladys Francelly Cardona', '2017-04-17', '0000-00-00', '2018-06-17', 'Diurna'),
(52, '1369525 B', 'Tecnico en Patronaje Industrial de Prendas de Vestir', 'Confeccion', 'Gladys Frencelli', '2017-04-17', '0000-00-00', '2018-07-16', 'Diurna'),
(53, '1368558 A', 'Tgo En GestiÃ³n Integrada De La Calidad, Medio Ambiente, Seguridad Y Salud Ocupacional (A)', 'Salud Ocupacional', 'Carmen Elena Hernandez', '2017-04-17', '2018-10-16', '2019-04-16', 'Diurna'),
(54, '1368558 B', 'Tgo En GestiÃ³n Integrada De La Calidad, Medio Ambiente, Seguridad Y Salud Ocupacional (B)', 'Salud Ocupacional', 'Carmen Elena Hernandez', '2017-04-17', '2018-10-16', '2019-04-16', 'Diurna'),
(55, '1343983', 'MANTENIMIENTO ELÃ‰CTRICO Y ELECTRÃ“NICO EN AUTOMOTORES', 'Automotriz', 'ANDRES MAURICIO JARAMILLO', '0000-00-00', '0000-00-00', '2017-11-16', 'Mixta'),
(56, '1374264', 'Operario en Confeccion Industrial', 'Confeccion', 'Ruby Vargas', '2017-02-20', '2017-05-20', '2017-08-20', 'Diurna'),
(57, '1362328', 'Operario en Confeccion Industrial', 'Confeccion', 'Luz de Fatima Alvarez', '2017-02-06', '2017-05-06', '2017-08-06', 'Diurna'),
(58, '1343061', ' Tc Mantenimiento de Motocicletas', 'Mecanica', 'Diana Eugenia Henao', '2016-11-15', '2017-05-15', '2017-09-15', 'Diurna'),
(59, '1412895', 'Tecnologo en Analisis y Desarrollo de Sistemas de Informacion', 'Informatica', 'Yamileth Erazo', '2017-04-08', '2018-11-08', '2019-04-08', 'Virtual'),
(60, '1412896', 'Tecnologo en Analisis y Desarrollo de Sistemas de Informacion', 'Informatica', 'Yamileth Erazo', '2017-04-08', '2018-11-08', '2019-04-08', 'Virtual'),
(61, '1412897', 'Tecnologo en Analisis y Desarrollo de Sistemas de Informacion', 'Informatica', 'Yamileth Erazo', '2017-04-08', '2018-11-08', '2019-04-08', 'Virtual'),
(62, '1412898', 'Tecnologo en Analisis y Desarrollo de Sistemas de Informacion', 'Informatica', 'Yamileth Erazo', '2017-04-08', '2018-11-08', '2019-04-08', 'Virtual'),
(63, '1412899', 'Tecnologo en Analisis y Desarrollo de Sistemas de Informacion', 'Informatica', 'Yamileth Erazo', '2017-04-08', '2018-11-08', '2019-04-08', ''),
(64, '1412900', 'Tecnologo en Analisis y Desarrollo de Sistemas de Informacion', 'Informatica', 'Yamileth Erazo', '2017-04-08', '2018-11-08', '2019-04-08', 'Virtual'),
(66, '1413040', 'Especialidad Tecnologica en Gestion y Seguridad de Base de Datos', 'Informatica', 'Yamileth Erazo', '2017-05-08', '0000-00-00', '2017-11-08', 'Virtual'),
(67, '1413041', 'Especialidad Tecnologica en Gestion y Seguridad de Base de Datos', 'Informatica', 'Yamileth Erazo', '2017-05-08', '0000-00-00', '2017-11-08', 'Virtual'),
(68, '1368569 B', 'Tecnologo en Desarrollo Grafico de Proyectos de Arquitectura e ingenireria', 'Construccion', 'Jorge Alberto Tamayo Grisales', '2017-04-17', '2018-10-16', '2019-04-16', 'Diurna'),
(69, '1414331', 'Tecnico Mecanizado de Productos Metalmecanicos', 'Mecanica', 'Fernando Vergara', '2017-04-03', '2018-01-02', '2018-07-03', 'Diurna'),
(70, '1368517', 'Tecnicon en Soldadura de Productos metalicos (Platina)', 'Mecanica', 'Cristian Mauricio Toro', '2017-04-17', '2018-01-16', '2018-07-16', 'Diurna'),
(71, '1462163', 'Operario en Confeccion  Industrial', 'Confeccion', 'Ruby Vargas', '2017-06-05', '2017-09-05', '2017-12-05', 'Mixta'),
(72, '1445962', 'Operario en Confeccion Industrial', 'Confeccion', 'Luz de Fatima Alvarez', '2017-05-10', '2017-08-10', '2017-11-10', 'Mixta'),
(73, '132383', 'Gestion en Laboratorios de Ensayo y Calibracion Norma ISO/IEC 10025', 'Mecanica', 'Juan Carlos Ruge', '0001-01-01', '0001-01-01', '0001-01-01', 'Nocturna'),
(74, '1044920', 'Tecnologo en Obras Civiles', 'Construccion', 'Mario Raigoza', '2015-08-04', '0000-00-00', '2017-08-03', 'Dual'),
(75, '1368546 A', 'Tecnico en Mantenimiento de Motocicletas', 'Mecanica', 'Adolfo Fuentes', '2017-04-17', '2017-10-17', '2018-04-16', 'Diurna'),
(76, '1368546 B', 'Tecnico en Mantenimiento de Motocicletas', 'Mecanica', 'Adolfo Fuentes', '2017-04-17', '2017-10-17', '2018-04-16', 'Diurna'),
(77, '1432324', 'Operarion en Confeccion Industrial de Ropa Exterior', 'Confeccion', 'Lucila NoreÃ±a', '0001-01-01', '0001-01-01', '0001-01-01', ''),
(78, '1045046', 'Mantenimiento Mecanico Industrial', 'Mecanica', 'Guillermo Valencia', '0001-01-01', '0000-00-00', '2017-08-03', ''),
(79, '1440113', 'Tecnologo en DiseÃ±o de Sistemas Mecanicos', 'Mecanica', 'Dairo de Jesus GaÃ±an', '2017-07-17', '2019-01-16', '2019-07-16', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `instructores`
--

CREATE TABLE `instructores` (
  `id` int(11) NOT NULL,
  `nombres` varchar(100) COLLATE utf8_bin NOT NULL,
  `apellidos` varchar(100) COLLATE utf8_bin NOT NULL,
  `especialidad` varchar(100) COLLATE utf8_bin NOT NULL,
  `vinculacion1` varchar(100) COLLATE utf8_bin NOT NULL,
  `tipoplanta` varchar(100) COLLATE utf8_bin NOT NULL,
  `tipocontrato` varchar(100) COLLATE utf8_bin NOT NULL,
  `cantidadhoras` varchar(100) COLLATE utf8_bin NOT NULL,
  `actadministrativas` varchar(50) COLLATE utf8_bin NOT NULL,
  `area` varchar(50) COLLATE utf8_bin NOT NULL,
  `centro` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `instructores`
--

INSERT INTO `instructores` (`id`, `nombres`, `apellidos`, `especialidad`, `vinculacion1`, `tipoplanta`, `tipocontrato`, `cantidadhoras`, `actadministrativas`, `area`, `centro`) VALUES
(1, 'ROLAND', 'ROTH ECHEVERRY', 'Transversal', 'Planta', 'Provicional', 'No Aplica', '32', 'Articulacion', 'Ingles Presencial', 'Industria'),
(2, 'SANDRA MILENA', 'TRUJILLO ORTIZ', 'Transversal', 'Contratista', 'No Aplica', 'Termino Fijo', '40', 'Virtual', 'Confeccion', 'Industria'),
(3, 'DIEGO  ', 'GIRALDO RAMIREZ', 'Transversal', 'Contratista', 'No Aplica', 'Termino Fijo', '40', 'Virtual', 'Electricidad', 'Industria'),
(4, 'MONICA EUGENIA', 'MONTOYA ARIAS', 'Transversal', 'Contratista', 'No Aplica', 'Termino Fijo', '40', 'Virtual', 'Salud Ocupacional', 'Industria'),
(5, 'NATALIA', 'ERAZO BECERRA', 'Transversal', 'Contratista', 'No Aplica', 'Termino Fijo', '40', 'Virtual', 'Electricidad', 'Industria'),
(6, 'CLAUDIA SONIA', 'SERNA GRANADA', 'Ingles', 'Contratista', 'No Aplica', 'Termino Fijo', '40', 'Virtual', 'Ingles Virtual', 'Industria'),
(7, 'CARMEN ELENA', 'HERNANDEZ RINCON', 'Transversal', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '40', 'Articulacion', 'Etica y Comunicacion', 'Industria'),
(8, 'ALEXANDER', 'ROMERO MORENO', 'Transversal', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '40', 'Articulacion', 'Equipo Tecnico pedagogico', 'Industria'),
(9, 'PAULA ANDREA ', 'CRUZ MEJIA ', 'Transversal', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '40', 'Articulacion', 'Gestion Integrada de la Calidad', 'Industria'),
(10, 'MARIA BEATRIZ', 'PAVA HURTADO', 'Ingles', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '40', 'Articulacion', 'Ingles Presencial', 'Industria'),
(11, 'LUISA FERNANDA', 'ECHEVERRI CABALLERO', 'Transversal', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '40', 'Articulacion', 'Etica y Comunicacion', 'Industria'),
(12, 'LUISA FERNANDA', 'CASTAÑO CALVO', 'Transversal', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '40', 'Articulacion', 'Cultura Fisica', 'Industria'),
(13, 'GERMAN', 'RODRIGUEZ VALENCIA', 'Tecnico', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '40', 'Articulacion', 'Construccion', 'Industria'),
(14, 'OSCAR FERNANDO', 'ARISTIZABAL CARDONA', 'Tecnico', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '40', 'Articulacion', 'Informatica y Sistemas', 'Industria'),
(15, 'ANDRES MAURICIO', 'JARAMILLO GONZALEZ', 'Tecnico', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '40', 'Articulacion', 'Automotriz', 'Industria'),
(16, 'JORGE ALBERTO', 'TAMAYO GRISALES', 'Tecnico', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '40', 'Articulacion', 'Construccion', 'Industria'),
(17, 'DIEGO ANDRES', 'SERNA VELASQUEZ', 'Tecnico', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '40', 'Articulacion', 'DiseÃ±o Mecanico', 'Industria'),
(18, 'STHARLING MELODY', 'RAMOS GIRALDO', 'Tecnico', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '40', 'Articulacion', 'Electricidad', 'Industria'),
(19, 'LUIS CAMILO', 'ESTRADA PATINO', 'Tecnico', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '40', 'Articulacion', 'Automotriz', 'Industria'),
(20, 'OLGA CLEMENCIA', 'MARIN HENAO', 'Transversal', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '40', 'Articulacion', 'Salud Ocupacional', 'Industria'),
(21, 'ANDRES FELIPE', 'LOPEZ CHICA', 'Transversal', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '40', 'Articulacion', 'Ambiental', 'Industria'),
(22, 'GLADYS FRANCELLY', 'CARDONA FRANCO', 'Tecnico', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '40', 'Articulacion', 'Confeccion', 'Industria'),
(23, 'JAVIER', 'ARIZA USECHE', 'Transversal', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '40', 'Articulacion', 'Equipo Tecnico pedagogico', 'Industria'),
(24, 'JAIME ADOLFO', 'FUENTES SANCHEZ', 'Tecnico', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '40', 'Articulacion', 'Motos', 'Industria'),
(25, 'LORENA PATRICIA', 'VALENCIA', 'Tecnico', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '40', 'Articulacion', 'Salud Ocupacional', ''),
(26, 'FERNANDO', 'ARCINIEGAS CORDOBA', 'Tecnico', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '40', 'Articulacion', 'Gestion Integrada de la Calidad', 'Industria'),
(27, 'JHON FREDY', 'DUQUE GALLEGO', 'Tecnico', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '40', 'Articulacion', 'Construccion', 'Industria'),
(28, 'ANDRES FELIPE ', 'JURADO PATINO', 'Tecnico', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '40', 'Articulacion', 'Equipo Tecnico pedagogico', 'Industria'),
(29, 'ANGELA MARCELA', 'CASTELLANOS ORTEGON', 'Transversal', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '40', 'Articulacion', 'Ingles Presencial', 'Industria'),
(30, 'CAMILO ANDRES', 'ARANGO MUNOZ', 'Tecnico', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '40', 'Articulacion', 'Mobiliario y Maderas', 'Industria'),
(31, 'YANETH', 'MEJIA RENDON ', 'Tecnico', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '40', 'Articulacion', 'Informatica y Sistemas', 'Industria'),
(32, 'DANIEL FELIPE ', 'MONCADA CARDONA ', 'Tecnico', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '40', 'Articulacion', 'Construccion', 'Industria'),
(33, 'MARIO LEANDRO', 'VANEGAS VALENCIA', 'Tecnico', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '40', 'Articulacion', 'Electricidad', 'Industria'),
(34, 'VICTOR HUGO', 'ARIAS SALDARRIAGA', 'Tecnico', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '40', 'Articulacion', 'Equipo Tecnico pedagogico', 'Industria'),
(35, 'MARIO', 'RAIGOSA ARANGO', 'Tecnico', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '40', 'Articulacion', 'Construccion', 'Industria'),
(36, 'JHONATAN', 'FRANCO ARIAS', 'Tecnico', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '40', 'Articulacion', 'Soldadura', 'Industria'),
(37, 'YAMILETH', 'ERAZO BECERRA', 'Tecnico', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '40', 'Articulacion', 'Informatica y Sistemas', 'Industria'),
(38, 'ANDREA DEL PILAR', 'ANDREA DEL PILAR', 'Tecnico', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '40', 'Articulacion', 'Equipo Tecnico pedagogico', 'Industria'),
(39, 'ALEXANDRA', 'NARANJO CARDONA ', 'Transversal', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '40', 'Articulacion', 'Ingles Presencial', 'Industria'),
(40, 'ADALBERTO', 'ACEVEDO TELLES', 'Tecnico', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '40', 'Articulacion', 'DiseÃ±o Mecanico', 'Industria'),
(41, 'LUCILA', 'NORENA ARIAS', 'Tecnico', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '40', 'Articulacion', 'Confeccion', 'Industria'),
(42, 'JORGE HERNÃN', 'ALZATE BUITRAGO', 'Tecnico', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '40', 'Articulacion', 'Construccion', 'Industria'),
(43, 'JOHN ALEXANDER', 'ARENAS NORIEGA', 'Tecnico', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '40', 'Articulacion', 'Construccion', 'Industria'),
(44, 'DIANA EUGENIA', 'HENAO BARRAGAN', 'Tecnico', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '40', 'Articulacion', 'Motos', 'Industria'),
(45, 'ANDRES JULIAN', 'HOYOS CAICEDO', 'Tecnico', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '40', 'Articulacion', 'Informatica y Sistemas', 'Industria'),
(46, 'FERNANDO', 'MEJIA LOPEZ', 'Tecnico', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '40', 'Articulacion', 'Equipo Tecnico pedagogico', 'Industria'),
(47, 'CLAUDIO ALBERTO', 'VALENCIA SANCHEZ', 'Tecnico', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '40', 'Articulacion', 'Electricidad', 'Industria'),
(48, 'CESAR AUGUSTO', 'RAMIREZ OCAMPO', 'Tecnico', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '40', 'Articulacion', 'Mobiliario y Maderas', 'Industria'),
(49, 'JUAN PABLO', 'MEJIA RAMIREZ', 'Transversal', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '40', 'Articulacion', 'Ambiental', 'Industria'),
(50, 'ANGELA MARÃA ', 'ALZATE BUITRAGO', 'Transversal', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '40', 'Articulacion', 'Etica y Comunicacion', 'Industria'),
(51, 'JHON KEVIN', 'FLOREZ PENA', 'Tecnico', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '40', 'Articulacion', 'Automotriz', 'Industria'),
(52, 'LINA ROCIO', 'OSPINA DUQUE', 'Transversal', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '40', 'Articulacion', 'Salud Ocupacional', 'Industria'),
(53, 'JUNSUN', 'SUNICO CONSISTENTE', 'Tecnico', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '40', 'Articulacion', 'Ingles Presencial', 'Industria'),
(54, 'ANDRES FELIPE', 'HENAO LOPEZ', 'Transversal', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '40', 'Articulacion', 'Cultura Fisica', 'Industria'),
(55, 'SARA MARIA', 'CLAVIJO ARRUBLA ', 'Tecnico', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '40', 'Articulacion', 'Construccion', 'Industria'),
(56, 'NESTOR MAURICIO', 'PINTO NORENA', 'Tecnico', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '40', 'Articulacion', 'Electricidad', 'Industria'),
(57, 'KAREN VIVIANA ', 'LEMOS CEBALLOS ', 'Tecnico', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '40', 'Articulacion', 'Confeccion', 'Industria'),
(58, 'JORGE AUGUSTO ', 'VILLADA SUAZA ', 'Tecnico', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '40', 'Articulacion', 'Informatica y Sistemas', 'Industria'),
(59, 'DIANA CRISTINA', 'MONTOYA HOYOS', 'Tecnico', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '40', 'Articulacion', 'Informatica y Sistemas', 'Industria'),
(60, 'LUISA FERNANDA', 'CALLEJAS ORREGO ', 'Tecnico', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '40', 'Articulacion', 'Informatica y Sistemas', 'Industria'),
(61, 'CARLOS ANDRES', 'HENAO LEMA ', 'Transversal', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '40', 'Articulacion', 'Ambiental', 'Industria'),
(62, 'EMILCE SILVANA ', 'CERON ROSERO ', 'Transversal', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '40', 'Articulacion', 'Salud Ocupacional', 'Industria'),
(63, 'PAOLA NATALIA ', 'OROZCO OROZCO ', 'Transversal', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '40', 'Articulacion', 'Ingles Presencial', 'Industria'),
(64, 'ASDRUBAL ', 'GOMEZ GALEANO ', 'Transversal', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '40', 'Articulacion', 'Ingles Voluntarios', 'Industria'),
(65, 'JAVIER MAURICIO', 'CORTES MORENO', 'Tecnico', 'Contratista', 'No Aplica', 'Por Horas', '40', 'Articulacion', 'Joyeria', 'Industria'),
(66, 'JOSE URIEL', 'GALLEGO BERNAL', 'Tecnico', 'Contratista', 'No Aplica', 'Por Horas', '40', 'Articulacion', 'Redes para Gas', 'Industria'),
(67, 'ALEXANDER', 'GARCIA VASQUEZ', 'Tecnico', 'Planta', 'Carrera', 'No Aplica', '32', 'Articulacion', 'Mantenimiento', 'Industria'),
(68, 'APARICIO', 'MEJIA RENDON', 'Tecnico', 'Planta', 'Carrera', 'No Aplica', '32', 'Articulacion', 'Construccion', 'Industria'),
(69, 'CONSUELO', 'GARCIA ESCOBAR', 'Transversal', '', '', 'No Aplica', '', '', 'Emprendimiento', 'Industria'),
(70, 'CRISTIAN MAURICIO', 'TORO', 'Tecnico', 'Planta', 'Provisional', 'No Aplica', '32', 'Articulacion', 'Soldadura', 'Industria'),
(71, 'DIEGO ALEXANDER', 'GRAJALES PEREZ', 'Tecnico', 'Planta', 'Carrera', 'No Aplica', '32', 'Articulacion', 'Mantenimiento', 'Industria'),
(72, 'ELVER', 'VALENCIA', 'Tecnico', 'Planta', 'Carrera', 'No Aplica', '32', 'Articulacion', 'Soldadura', 'Industria'),
(73, 'FERNANDO', 'RODRIGUEZ VALENCIA', 'Tecnico', 'Planta', 'Carrera', 'No Aplica', '32', 'Articulacion', 'Equipo Tecnico pedagogico', 'Industria'),
(74, 'FRANCISCO JAVIER', 'VARGAS', 'Tecnico', 'Planta', 'Carrera', 'No Aplica', '32', 'Articulacion', 'Mantenimiento', 'Industria'),
(75, 'GUILLERMO ANTONIO', 'VALENCIA VELASQUEZ', 'Tecnico', 'Planta', 'Carrera', 'No Aplica', '32', 'Articulacion', 'Electricidad', 'Industria'),
(76, 'JAIME', 'GIRALDO ORREGO', 'Tecnico', 'Planta', 'Carrera', 'No Aplica', '32', 'Articulacion', 'Electricidad', 'Industria'),
(77, 'JAIME ', 'TREJOS LONDONO', 'Tecnico', 'Planta', 'Carrera', 'No Aplica', '32', 'Articulacion', 'Electricidad', 'Industria'),
(78, 'JHON FREDY', 'CORTES SOTO', 'Tecnico', 'Planta', 'Provisional', 'No Aplica', '32', 'Articulacion', 'Mantenimiento', 'Industria'),
(79, 'JHON JAIRO', 'CARDENAS ROMERO', 'Tecnico', 'Planta', 'Carrera', 'No Aplica', '32', 'Articulacion', 'Automotriz', 'Industria'),
(80, 'JOSE ALIRIO', 'LONDONO RIVERA', 'Tecnico', 'Planta', 'Carrera', 'No Aplica', '32', 'Articulacion', 'Mantenimiento', 'Industria'),
(81, 'JOSE FERNANDO', 'VERGARA GALLEGO', 'Tecnico', 'Planta', 'Carrera', 'No Aplica', '32', 'Articulacion', 'Metalmecanica', 'Industria'),
(82, 'JUAN CARLOS', 'ARANGO ARBELAEZ', 'Tecnico', 'Planta', 'Carrera', 'No Aplica', '32', 'Articulacion', 'Automotriz', 'Industria'),
(83, 'JUAN CARLOS', 'LOPEZ MORALES', 'Tecnico', 'Planta', 'Carrera', 'No Aplica', '32', 'Articulacion', 'Electricidad', 'Industria'),
(84, 'JUAN CARLOS', 'RUGE OSORIO', 'Tecnico', 'Planta', 'Carrera', 'No Aplica', '32', 'Articulacion', 'Competencias Laborales', 'Industria'),
(85, 'LUIS ENRIQUE', 'BRAVO CARDONA', 'Tecnico', 'Planta', 'Provisional', 'No Aplica', '32', 'Articulacion', 'Salud Ocupacional', 'Industria'),
(86, 'LUZ DE FATIMA', 'ALVAREZ OSORIO', 'Tecnico', 'Planta', 'Carrera', 'No Aplica', '32', 'Articulacion', 'Confeccion', 'Industria'),
(87, 'MIRIAM CLAUDINA', 'GARCIA NARANJO', 'Tecnico', 'Planta', 'Carrera', 'No Aplica', '32', 'Articulacion', 'Electricidad', 'Industria'),
(88, 'ROBERTO ', 'ESTRADA HERRERA', 'Tecnico', 'Planta', 'Carrera', 'No Aplica', '32', 'Articulacion', 'Informatica y Sistemas', 'Industria'),
(89, 'RUBY', 'VARGAS RUIZ', 'Tecnico', 'Planta', 'Provisional', 'No Aplica', '32', 'Articulacion', 'Confeccion', 'Industria'),
(90, 'VICTOR MAURICIO', 'ACEVEDO CORREA', 'Tecnico', 'Planta', 'Provisional', 'No Aplica', '32', 'Articulacion', 'Automotriz', 'Industria'),
(91, 'PAULA ANDREA', 'LONDONO', 'Tecnico', 'Planta', 'Carrera', 'No Aplica', '32', 'Articulacion', 'Informatica y Sistemas', 'Industria'),
(92, 'DAIRO DE JESUS', 'GANAN GALLO', 'Tecnico', 'Planta', 'Carrera', 'No Aplica', '32', 'Articulacion', 'DiseÃ±o Mecanico', 'Industria'),
(94, 'JORGE VICTOR ', 'BURITICA', 'Tecnico', 'Planta', 'Carrera', 'No Aplica', '32', 'Articulacion', 'Ambiental', 'Automatizacion'),
(95, 'Carlos', 'Duber', 'Tecnico', 'Contratista', 'No Aplica', 'Por Horas', '40', 'Articulacion', 'Neumatica y Electroneumatica', 'Automatizacion'),
(96, 'JULIAN ANDRES', 'GRISALES', 'Tecnico', 'Contratista', 'No Aplica', 'Por Horas', '40', 'Articulacion', 'PLC', 'Automatizacion'),
(97, 'JAIME', 'OCAMPO', 'Tecnico', 'Planta', 'Carrera', 'No Aplica', '32', 'Articulacion', 'Electronica', 'Automatizacion'),
(98, 'RUBEN DARIO', 'VILEGAS', 'Tecnico', 'Contratista', 'No Aplica', 'Por Horas', '40', 'Articulacion', 'CNC', 'Automatizacion'),
(99, 'JUAN', 'ALVARO', 'Tecnico', 'Contratista', 'No Aplica', 'Por Horas', '40', 'Articulacion', 'Multimedia', 'Automatizacion'),
(103, 'xfvgd', 'fb', 'Transversal', 'Contratista', 'No Aplica', 'Por Horas', '32', 'Virtual', 'Gestion Integrada de la Calidad', 'Industria');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `usuario` varchar(100) COLLATE utf8_bin NOT NULL,
  `clave` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`usuario`, `clave`) VALUES
('administrador', '594ee6d90bad73f0228b16e50d8954ed');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `manejo_dist`
--

CREATE TABLE `manejo_dist` (
  `user` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `manejo_dist`
--

INSERT INTO `manejo_dist` (`user`, `password`) VALUES
('administrador', 'admin');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ambientes`
--
ALTER TABLE `ambientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contador`
--
ALTER TABLE `contador`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=366;
--
-- AUTO_INCREMENT de la tabla `fichas`
--
ALTER TABLE `fichas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
--
-- AUTO_INCREMENT de la tabla `instructores`
--
ALTER TABLE `instructores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
