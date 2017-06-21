-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-06-2017 a las 17:23:11
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
  `descripcion` varchar(200) COLLATE utf8_bin NOT NULL,
  `disponibilidad` varchar(200) COLLATE utf8_bin NOT NULL,
  `centro` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `ambientes`
--

INSERT INTO `ambientes` (`id`, `nombre`, `descripcion`, `disponibilidad`, `centro`) VALUES
(3, 'SISTEMAS 1', '', '', 'industria'),
(4, 'SISTEMAS 2', '', '', 'industria'),
(5, 'SISTEMAS 3', '', '', 'industria'),
(6, 'CAD', '', '', 'industria'),
(7, 'AUDITORIO', '', '', 'industria'),
(8, 'AUTOMOTRIZ', '', '', 'industria'),
(9, 'CONFECCIÃ“N', '', '', 'industria'),
(10, 'DIBUJO', '', '', 'industria'),
(11, 'DIESEL', '', '', 'industria'),
(12, 'ELECTRICIDAD 1', '', '', 'industria'),
(13, 'ELECTRICIDAD 2 ', '', '', 'industria'),
(14, 'ELECTRICIDAD 3', '', '', 'industria'),
(15, 'ELECTRICIDAD 4', '', '', 'industria'),
(16, 'MANUFACTURA MADERAS', '', '', 'industria'),
(17, 'MANTENIMIENTO', '', '', 'industria'),
(18, 'MECANIZADO', '', '', 'industria'),
(19, 'METALOGRAFÃA', '', '', 'industria'),
(20, 'SALUD OCUPACIONAL', '', '', 'industria'),
(21, 'SOLDADURA', '', '', 'industria'),
(22, 'REDES PARA GAS', '', '', 'industria'),
(23, 'REFRIGERACION (AJUSTE)', '', '', 'industria'),
(24, 'MOTOS', '', '', 'industria'),
(25, 'INSTRUMENTACION Y CONTROL', '', '', 'automatizacion'),
(26, 'NEUMATICA', '', '', 'automatizacion'),
(27, 'SERVOSISTEMAS', '', '', 'automatizacion');

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
  `inicio_normal` varchar(50) COLLATE utf8_bin NOT NULL,
  `final_normal` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`id`, `centro`, `ambientei`, `instructori`, `ambientea`, `instructora`, `area`, `ficha`, `especialidad`, `title`, `body`, `url`, `class`, `start`, `end`, `inicio_normal`, `final_normal`) VALUES
(1, 'Industria', 'SISTEMAS 1', 'Oscar Fernando', '', '', 'Cultura Fisica', 1197616, 'Informatica', 'Ofac', '', 'http://localhost/yaneth/programacion_trimestral/calendario/descripcion_evento.php?id=1', 'event-success', '1497351600000', '1497371400000', '13/06/2017 7:00', '13/06/2017 12:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fichas`
--

CREATE TABLE `fichas` (
  `id` int(11) NOT NULL,
  `ficha` int(100) NOT NULL,
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
(2, 1132816, 'Analisis y Desarrollo de Sistemas de Informacion', 'Informatica', 'Yaneth Mejia', '2016-04-11', '2017-10-12', '2018-04-11', 'Mixta'),
(3, 1323395, 'Analisis y Desarrollo de Sistemas de Informacion', 'Informatica', 'Yaneth Mejia', '2017-04-17', '0000-00-00', '2019-04-17', 'Diurna'),
(4, 1368665, 'ESPECIALIZACION TECNOLOGICA METODOLOÃAS DE CALIDAD PARA EL DESARROLLO DE SOFTWARE', 'Informatica', 'Yaneth Mejia', '2017-04-17', '0000-00-00', '0000-00-00', 'Diurna'),
(14, 1375843, 'AUX. TRABAJADOR DE LA MADERA', 'Construccion', 'CAMILO ANDRES ARANGO', '2017-04-17', '0000-00-00', '0000-00-00', 'Nocturna'),
(15, 1132770, 'DESARROLLO GRÃFICO DE PROYECTOS DE ARQUITECTURA E INGENIERÃA', 'Construccion', 'JORGE GUTIERREZ', '0001-01-01', '0000-00-00', '2017-10-17', 'Nocturna'),
(21, 1094381, 'TOPOGRAFÃA', 'Construccion', 'AndrÃ©s Felipe Jurado ', '0000-00-00', '0000-00-00', '2017-07-27', 'Diurna'),
(22, 1261608, 'TECNOLOGO EN CONSTRUCCION', 'Construccion', 'MARIO RAIGOSA ARANGO', '0000-00-00', '0000-00-00', '2018-08-26', 'Diurna'),
(23, 1261604, 'TGO  DESARROLLO GRAFICO DE PROYECTOS DE ARQUITECTURA E INGENIERIA', 'Construccion', 'APARICIO MEJIA ', '0000-00-00', '0000-00-00', '2018-04-26', 'Diurna'),
(24, 1301351, 'Mantenimiento y ReparaciÃ³n de Edificaciones', 'Construccion', 'MARIO RAIGOZA', '2016-10-10', '0000-00-00', '2017-12-11', 'Diurna'),
(25, 1368569, 'TGO  DESARROLLO GRAFICO DE PROYECTOS DE ARQUITECTURA E INGENIERIA', 'Construccion', 'JORGE ALBERTO TAMAYO GRISALES', '2017-04-17', '0000-00-00', '0000-00-00', 'Diurna'),
(26, 1075391, 'TOPOGRAFIA', 'Construccion', 'Andres Felipe Jurado', '0000-00-00', '0000-00-00', '2017-09-28', 'Diurna'),
(27, 1323382, 'TECNOLOGO EN TOPOGRAFIA', 'Construccion', 'FELIPE JURADO', '2017-01-23', '0000-00-00', '2019-07-23', 'Diurna'),
(28, 1368604, 'Tgo en Obras Civiles', 'Construccion', 'Aparicio Mejia', '2017-04-17', '0000-00-00', '0000-00-00', 'Diurna'),
(29, 1132795, 'MANTENIMIENTO MECANICO INDUSTRIAL', 'Mecanica', 'DIEGO ALEXANDER GRAJALES', '0000-00-00', '0000-00-00', '2017-10-11', 'Diurna'),
(30, 1132701, 'SOLDADURA DE PRODUCTOS METALICOS (PLATINA)', 'Eectricidad', 'Cristian Mauricio Toro', '0000-00-00', '0000-00-00', '0000-00-00', 'Nocturna'),
(31, 1182104, 'MECANIZADO DE PRODUCTOS METALMECANICOS ', 'Mecanica', ' JOSE FERNANDO VERGARA', '0000-00-00', '0000-00-00', '2017-07-11', 'Nocturna-Dual'),
(32, 1197616, 'MANTENIMIENTO MECANICO INDUSTRIAL', 'Mecanica', 'JHON FREDDY CORTES ', '2016-07-11', '0000-00-00', '2018-01-11', 'Mixta'),
(33, 1368653, 'MANTENIMIENTO MECANICO INDUSTRIAL', 'Mecanica', 'ADALBERTO ACEVEDO', '2017-04-17', '0000-00-00', '0000-00-00', 'Nocturna'),
(34, 1132756, 'TGO ELECTRICIDAD INDUSTRIAL', 'Seleccione una opcion...', 'Guillermo Antonio Valencia', '0000-00-00', '2017-10-12', '0000-00-00', 'Diurna'),
(35, 1197544, 'MANTENIMIENTO ELECTROMECANICO INDUSTRIAL', 'Eectricidad', 'MYRIAM CLAUDINA GARCIA NARANJO ', '0000-00-00', '0000-00-00', '2018-01-11', 'Mixta'),
(36, 1197576, 'ELCTRICIDAD INDUSTRIAL ', 'Eectricidad', 'JUAN CARLOS LOPEZ', '0000-00-00', '2018-01-11', '0000-00-00', 'Mixta'),
(37, 1368673, 'TECNOLOGO EN ELECTRICIDAD  INDUSTRIAL', 'Eectricidad', 'CLAUDIO ALBERTO VALENCIA SÃNCHEZ', '2017-04-17', '0000-00-00', '0000-00-00', 'Diurna'),
(38, 1368529, 'Tc En Electricidad Residencial', 'Eectricidad', 'CLAUDIO ALBERTO VALENCIA SÃNCHEZ', '2017-04-17', '0000-00-00', '0000-00-00', 'Nocturna'),
(39, 1323358, 'Tgo SupervisiÃ³n De Redes De DistribuciÃ³n De EnergÃ­a ElÃ©ctrica', 'Eectricidad', 'MELODY RAMOS GIRALDO', '2017-01-23', '2019-07-23', '0000-00-00', 'Diurna'),
(40, 1367722, 'MANTENIMIENTO ELECTROMECANICO INDUSTRIAL', 'Mecanica', 'MYRIAM CLAUDINA GARCIA NARANJO  ', '2017-04-13', '2018-09-13', '0000-00-00', 'Diurna'),
(41, 1114874, 'MANTENIMIENTO MECATRONICO DE AUTOMOTORES', 'Automotriz', 'ANDRES MAURICIO JARAMILLO', '0000-00-00', '0000-00-00', '2017-11-17', 'Mixta'),
(42, 1343933, 'TC MANTENIMIENTO DE LAS MOTOCICLETAS', 'Mecanica', 'Jaime Adolfo Fuentes', '0000-00-00', '2016-11-17', '2017-05-17', 'Diurna'),
(43, 1368501, 'Tco En Mantenimiento De Motores DiÃ©sel', 'Mecanica', 'LUIS CAMILO ESTRADA PATIÃ‘O', '2017-04-17', '0000-00-00', '0000-00-00', 'Diurna'),
(44, 1368642, 'Tgo En Mantenimiento MecatrÃ³nico De Automotores', 'Mecanica', 'VICTOR MAURICIO ACEVEDO CORREA', '2017-04-17', '0000-00-00', '0000-00-00', 'Diurna'),
(45, 1368642, 'Tgo En Mantenimiento MecatrÃ³nico De Automotores (B)', 'Seleccione una opcion...', 'VICTOR MAURICIO ACEVEDO CORREA', '2017-04-17', '0000-00-00', '0000-00-00', 'Diurna'),
(46, 1306630, 'Tc  EN SEGURIDAD VIAL, CONTROL DE TRANSITO Y TRANSPORTE', 'Automotriz', 'JHON KEVIN FLOREZ PEÃ‘A', '2017-10-03', '0000-00-00', '0000-00-00', 'Diurna'),
(47, 1368498, 'Tco En Mantenimiento De Motores DiÃ©sel', 'Mecanica', 'JHON KEVIN FLOREZ PEÃ‘A', '2017-04-17', '0000-00-00', '0000-00-00', 'Mixta'),
(48, 1197693, 'GESTION INTEGRADA DE SISTEMAS DE CALIDAD, AMBIENTAL, SEGURIDAD Y SALUD OCUPACIONAL  HSEQ', 'Ambiental', 'CARLOS VALENCIA ', '2016-07-11', '2018-01-11', '2018-07-11', 'Nocturna'),
(49, 1261575, 'TECNOLOGO EN GESTIÃ“N INTEGRADA DE LA CALIDAD, MEDIO AMBIENTE, SEGURIDAD Y SALUD OCUPACIONAL', 'Salud Ocupacionak', 'CARLOS ARTURO VALENCIA', '2016-09-11', '0000-00-00', '2018-03-26', 'Nocturna'),
(50, 1261575, 'ECNOLOGO EN GESTIÃ“N INTEGRADA DE LA CALIDAD, MEDIO AMBIENTE, SEGURIDAD Y SALUD OCUPACIONAL (B)', 'Salud Ocupacionak', 'CARLOS ARTURO VALENCIA', '2016-09-26', '2018-03-26', '2018-09-26', 'Nocturna'),
(51, 1369525, 'Tc PATRONAJE INDUSTRIAL DE PRENDAS DE VESTIR (A)', 'Confeccion', 'Gladys Francelly Cardona', '2017-04-17', '0000-00-00', '2018-06-17', 'Nocturna'),
(52, 1369525, 'Tc PATRONAJE INDUSTRIAL DE PRENDAS DE VESTIR (B)', 'Confeccion', 'Gladys Frencelli', '0000-00-00', '0000-00-00', '0000-00-00', 'Nocturna'),
(53, 1368558, 'Tgo En GestiÃ³n Integrada De La Calidad, Medio Ambiente, Seguridad Y Salud Ocupacional (A)', 'Salud Ocupacionak', 'FERNANDO ARCINIEGAS', '2017-04-17', '0000-00-00', '0000-00-00', 'Diurna'),
(54, 1368558, 'Tgo En GestiÃ³n Integrada De La Calidad, Medio Ambiente, Seguridad Y Salud Ocupacional (B)', 'Seleccione una opcion...', 'FERNANDO ARCINIEGAS', '2017-04-17', '0000-00-00', '0000-00-00', 'Diurna'),
(55, 1343983, 'MANTENIMIENTO ELÃ‰CTRICO Y ELECTRÃ“NICO EN AUTOMOTORES', 'Automotriz', 'ANDRES MAURICIO JARAMILLO', '0000-00-00', '0000-00-00', '2017-11-16', 'Mixta'),
(56, 1374264, 'Operario en Confeccion Industrial', 'Confeccion', 'Ruby Vargas', '2017-02-20', '2017-05-20', '2017-08-20', 'Diurna'),
(57, 1362328, 'Operario en Confeccion Industrial', 'Confeccion', 'Luz de Fatima Alvarez', '2017-02-06', '2017-05-06', '2017-08-06', 'Diurna'),
(58, 1343061, ' Tc Mantenimiento de Motocicletas', 'Mecanica', 'Diana Eugenia Henao', '2016-11-15', '2017-05-15', '2017-09-15', 'Diurna');

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
(1, 'ROLAND', 'ROTH ECHEVERRY', 'Ingles', 'Contratista', 'No Aplica', 'Termino Fijo', '32', 'Virtual', 'Ingles Virtual', 'Industria'),
(2, 'SANDRA MILENA', 'TRUJILLO ORTIZ', 'Transversal', 'Contratista', 'No Aplica', 'Termino Fijo', '32', 'Virtual', 'Confeccion', 'Industria'),
(3, 'DIEGO  ', 'GIRALDO RAMIREZ', 'Transversal', 'Contratista', 'No Aplica', 'Termino Fijo', '32', 'Virtual', 'Electricidad', 'Industria'),
(4, 'MONICA EUGENIA', 'MONTOYA ARIAS', 'Transversal', 'Contratista', 'No Aplica', 'Termino Fijo', '32', 'Virtual', 'Salud Ocupacional', 'Industria'),
(5, 'NATALIA', 'ERAZO BECERRA', 'Transversal', 'Contratista', 'No Aplica', 'Termino Fijo', '32', 'Virtual', 'Electricidad', 'Industria'),
(6, 'CLAUDIA SONIA', 'SERNA GRANADA', 'Ingles', 'Contratista', 'No Aplica', 'Termino Fijo', '32', 'Virtual', 'Ingles Virtual', 'Industria'),
(7, 'CARMEN ELENA', 'HERNANDEZ RINCON', 'Transversal', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '32', 'Articulacion', 'Etica y Comunicacion', 'Industria'),
(8, 'ALEXANDER', 'ROMERO MORENO', 'Transversal', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '32', 'Articulacion', 'Equipo Tecnico pedagogico', 'Industria'),
(9, 'PAULA ANDREA ', 'CRUZ MEJÃA ', 'Transversal', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '32', 'Articulacion', 'Gestion Integrada de la Calidad', 'Industria'),
(10, 'MARIA BEATRIZ', 'PAVA HURTADO', 'Ingles', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '32', 'Articulacion', 'Ingles Presencial', 'Industria'),
(11, 'LUISA FERNANDA', 'ECHEVERRI CABALLERO', 'Transversal', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '32', 'Articulacion', 'Etica y Comunicacion', 'Industria'),
(12, 'LUISA FERNANDA', 'CASTAÃ‘O CALVO', 'Transversal', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '32', 'Articulacion', 'Cultura Fisica', 'Industria'),
(13, 'GERMAN', 'RODRIGUEZ VALENCIA', 'Tecnico', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '32', 'Articulacion', 'Construccion', 'Industria'),
(14, 'OSCAR FERNANDO', 'ARISTIZABAL CARDONA', 'Tecnico', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '32', 'Articulacion', 'Informatica y Sistemas', 'Industria'),
(15, 'ANDRES MAURICIO', 'JARAMILLO GONZALEZ', 'Tecnico', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '32', 'Articulacion', 'Automotriz', 'Industria'),
(16, 'JORGE ALBERTO', 'TAMAYO GRISALES', 'Tecnico', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '32', 'Articulacion', 'Construccion', 'Industria'),
(17, 'DIEGO ANDRES', 'SERNA VELASQUEZ', 'Tecnico', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '32', 'Articulacion', 'DiseÃ±o Mecanico', 'Industria'),
(18, 'STHARLING MELODY', 'RAMOS GIRALDO', 'Tecnico', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '32', 'Articulacion', 'Electricidad', 'Industria'),
(19, 'LUIS CAMILO', 'ESTRADA PATIÃ‘O', 'Tecnico', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '32', 'Articulacion', 'Automotriz', 'Industria'),
(20, 'OLGA CLEMENCIA', 'MARIN HENAO', 'Transversal', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '32', 'Articulacion', 'Salud Ocupacional', 'Industria'),
(21, 'ANDRÃ‰S FELIPE', 'LÃ“PEZ CHICA', 'Transversal', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '32', 'Articulacion', 'Ambiental', 'Industria'),
(22, 'GLADYS FRANCELLY', 'CARDONA FRANCO', 'Tecnico', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '32', 'Articulacion', 'Confeccion', 'Industria'),
(23, 'JAVIER', 'ARIZA USECHE', 'Transversal', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '32', 'Articulacion', 'Equipo Tecnico pedagogico', 'Industria'),
(24, 'JAIME ADOLFO', 'FUENTES SÃNCHEZ', 'Tecnico', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '32', 'Articulacion', 'Motos', 'Industria'),
(25, 'LORENA PATRICIA', 'VALENCIA', 'Tecnico', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '32', 'Articulacion', 'Salud Ocupacional', 'Industria'),
(26, 'FERNANDO', 'ARCINIEGAS CORDOBA', 'Tecnico', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '32', 'Articulacion', 'Gestion Integrada de la Calidad', 'Industria'),
(27, 'JHON FREDY', 'DUQUE GALLEGO', 'Tecnico', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '32', 'Articulacion', 'Construccion', 'Industria'),
(28, 'ANDRÃ‰S FELIPE ', 'JURADO PATIÃ‘O ', 'Tecnico', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '32', 'Articulacion', 'Equipo Tecnico pedagogico', 'Industria'),
(29, 'ANGELA MARCELA', 'CASTELLANOS ORTEGON', 'Transversal', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '32', 'Articulacion', 'Ingles Presencial', 'Industria'),
(30, 'CAMILO ANDRES', 'ARANGO MUÃ‘OZ', 'Tecnico', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '32', 'Articulacion', 'Mobiliario y Maderas', 'Industria'),
(31, 'YANETH', 'MEJIA RENDON ', 'Tecnico', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '32', 'Articulacion', 'Informatica y Sistemas', 'Industria'),
(32, 'DANIEL FELIPE ', 'MONCADA CARDONA ', 'Tecnico', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '32', 'Articulacion', 'Construccion', 'Industria'),
(33, 'MARIO LEANDRO', 'VANEGAS VALENCIA', 'Tecnico', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '32', 'Articulacion', 'Electricidad', 'Industria'),
(34, 'VICTOR HUGO', 'ARIAS SALDARRIAGA', 'Tecnico', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '32', 'Articulacion', 'Equipo Tecnico pedagogico', 'Industria'),
(35, 'MARIO', 'RAIGOSA ARANGO', 'Tecnico', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '32', 'Articulacion', 'Construccion', 'Industria'),
(36, 'JHONATAN', 'FRANCO ARIAS', 'Tecnico', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '32', 'Articulacion', 'Soldadura', 'Industria'),
(37, 'YAMILETH', 'ERAZO BECERRA', 'Tecnico', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '32', 'Articulacion', 'Informatica y Sistemas', 'Industria'),
(38, 'ANDREA DEL PILAR', 'ANDREA DEL PILAR', 'Tecnico', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '32', 'Articulacion', 'Equipo Tecnico pedagogico', 'Industria'),
(39, 'ALEXANDRA', 'NARANJO CARDONA ', 'Transversal', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '32', 'Articulacion', 'Ingles Presencial', 'Industria'),
(40, 'ADALBERTO', 'ACEVEDO TELLES', 'Tecnico', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '32', 'Articulacion', 'DiseÃ±o Mecanico', 'Industria'),
(41, 'LUCILA', 'NOREÃ‘A ARIAS', 'Tecnico', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '32', 'Articulacion', 'Confeccion', 'Industria'),
(42, 'JORGE HERNÃN', 'ALZATE BUITRAGO', 'Tecnico', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '32', 'Articulacion', 'Construccion', 'Industria'),
(43, 'JOHN ALEXANDER', 'ARENAS NORIEGA', 'Tecnico', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '32', 'Articulacion', 'Construccion', 'Industria'),
(44, 'DIANA EUGENIA', 'HENAO BARRAGAN', 'Tecnico', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '32', 'Articulacion', 'Motos', 'Industria'),
(45, 'ANDRES JULIAN', 'HOYOS CAICEDO', 'Tecnico', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '32', 'Articulacion', 'Informatica y Sistemas', 'Industria'),
(46, 'FERNANDO', 'MEJÃA LÃ“PEZ ', 'Tecnico', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '32', 'Articulacion', 'Equipo Tecnico pedagogico', 'Industria'),
(47, 'CLAUDIO ALBERTO', 'VALENCIA SÃNCHEZ', 'Tecnico', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '32', 'Articulacion', 'Electricidad', 'Industria'),
(48, 'CESAR AUGUSTO', 'RAMIREZ OCAMPO', 'Tecnico', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '32', 'Articulacion', 'Mobiliario y Maderas', 'Industria'),
(49, 'JUAN PABLO', 'MEJÃA RAMÃREZ', 'Transversal', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '32', 'Articulacion', 'Ambiental', 'Industria'),
(50, 'ANGELA MARÃA ', 'ALZATE BUITRAGO', 'Transversal', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '32', 'Articulacion', 'Etica y Comunicacion', 'Industria'),
(51, 'JHON KEVIN', 'FLOREZ PEÃ‘A', 'Tecnico', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '32', 'Articulacion', 'Automotriz', 'Industria'),
(52, 'LINA ROCIO', 'OSPINA DUQUE', 'Transversal', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '32', 'Articulacion', 'Salud Ocupacional', 'Industria'),
(53, 'JUNSUN', 'SUNICO CONSISTENTE', 'Tecnico', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '32', 'Articulacion', 'Ingles Presencial', 'Industria'),
(54, 'ANDRÃ‰S FELIPE', 'HENAO LÃ“PEZ', 'Transversal', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '32', 'Articulacion', 'Cultura Fisica', 'Industria'),
(55, 'SARA MARIA', 'CLAVIJO ARRUBLA ', 'Tecnico', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '32', 'Articulacion', 'Construccion', 'Industria'),
(56, 'NESTOR MAURICIO', 'PINTO NOREÃ‘A', 'Tecnico', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '32', 'Articulacion', 'Electricidad', 'Industria'),
(57, 'KAREN VIVIANA ', 'LEMOS CEBALLOS ', 'Tecnico', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '32', 'Articulacion', 'Confeccion', 'Industria'),
(58, 'JORGE AUGUSTO ', 'VILLADA SUAZA ', 'Tecnico', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '32', 'Articulacion', 'Informatica y Sistemas', 'Industria'),
(59, 'DIANA CRISTINA', 'MONTOYA HOYOS', 'Tecnico', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '32', 'Articulacion', 'Informatica y Sistemas', 'Industria'),
(60, 'LUISA FERNANDA', 'CALLEJAS ORREGO ', 'Tecnico', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '32', 'Articulacion', 'Informatica y Sistemas', 'Industria'),
(61, 'CARLOS ANDRÃ‰S', 'HENAO LEMA ', 'Transversal', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '32', 'Articulacion', 'Ambiental', 'Industria'),
(62, 'EMILCE SILVANA ', 'CERON ROSERO ', 'Transversal', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '32', 'Articulacion', 'Salud Ocupacional', 'Industria'),
(63, 'PAOLA NATALIA ', 'OROZCO OROZCO ', 'Transversal', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '32', 'Articulacion', 'Ingles Presencial', 'Industria'),
(64, 'ASDRUBAL ', 'GOMEZ GALEANO ', 'Transversal', 'Contratista', 'No Aplica', 'TÃ©rmino Fijo', '32', 'Articulacion', 'Ingles Voluntarios', 'Industria'),
(65, 'JAVIER MAURICIO', 'CORTES MORENO', 'Tecnico', 'Contratista', 'No Aplica', 'Por Horas', '32', 'Articulacion', 'Joyeria', 'Industria'),
(66, 'JOSE URIEL', 'GALLEGO BERNAL', 'Tecnico', 'Contratista', 'No Aplica', 'Por Horas', '32', 'Articulacion', 'Redes para Gas', 'Industria');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `fichas`
--
ALTER TABLE `fichas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
--
-- AUTO_INCREMENT de la tabla `instructores`
--
ALTER TABLE `instructores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
