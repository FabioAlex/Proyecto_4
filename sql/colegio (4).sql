-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-09-2022 a las 03:57:15
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `colegio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignatura`
--

CREATE TABLE `asignatura` (
  `id_asignatura` int(11) NOT NULL,
  `nombre_asignatura` varchar(50) NOT NULL,
  `descripcion_asignatura` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `asignatura`
--

INSERT INTO `asignatura` (`id_asignatura`, `nombre_asignatura`, `descripcion_asignatura`) VALUES
(1, 'Lenguaje', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignatura_docente`
--

CREATE TABLE `asignatura_docente` (
  `fk_id_asignatura_ad` int(11) NOT NULL,
  `fk_id_docente_ad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignatura_estudiante`
--

CREATE TABLE `asignatura_estudiante` (
  `fk_id_asignatura_ae` int(11) NOT NULL,
  `fk_id_estudiante_ae` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `asignatura_estudiante`
--

INSERT INTO `asignatura_estudiante` (`fk_id_asignatura_ae`, `fk_id_estudiante_ae`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_secundarios_docente`
--

CREATE TABLE `datos_secundarios_docente` (
  `fk_id_docente` int(11) NOT NULL,
  `segundo_nombre_docente` varchar(30) DEFAULT NULL,
  `segundo_apellido_docente` varchar(30) DEFAULT NULL,
  `segundo_numero_celular_docente` varchar(15) DEFAULT NULL,
  `segunda_direccion_docente` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `datos_secundarios_docente`
--

INSERT INTO `datos_secundarios_docente` (`fk_id_docente`, `segundo_nombre_docente`, `segundo_apellido_docente`, `segundo_numero_celular_docente`, `segunda_direccion_docente`) VALUES
(1, '', 'Rojo', '', 'Avenida la Villa #27-01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_secundarios_estudiante`
--

CREATE TABLE `datos_secundarios_estudiante` (
  `fk_id_estudiante` int(11) NOT NULL,
  `segundo_nombre_estudiante` varchar(30) DEFAULT NULL,
  `segundo_apellido_estudiante` varchar(30) DEFAULT NULL,
  `segundo_numero_celular_estudiante` varchar(15) DEFAULT NULL,
  `segunda_direccion_estudiante` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `datos_secundarios_estudiante`
--

INSERT INTO `datos_secundarios_estudiante` (`fk_id_estudiante`, `segundo_nombre_estudiante`, `segundo_apellido_estudiante`, `segundo_numero_celular_estudiante`, `segunda_direccion_estudiante`) VALUES
(1, 'Jose', 'Ortega', '', 'Avenida 33 #27-11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docente`
--

CREATE TABLE `docente` (
  `id_docente` int(11) NOT NULL,
  `nombre_docente` varchar(20) NOT NULL,
  `apellido_docente` varchar(20) NOT NULL,
  `numero_documento_docente` varchar(12) NOT NULL,
  `fecha_nacimiento_docente` date NOT NULL,
  `numero_celular_docente` varchar(15) DEFAULT NULL,
  `direccion_docente` varchar(50) DEFAULT NULL,
  `correo_electronico_docente` varchar(50) NOT NULL,
  `clave_login_docente` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `docente`
--

INSERT INTO `docente` (`id_docente`, `nombre_docente`, `apellido_docente`, `numero_documento_docente`, `fecha_nacimiento_docente`, `numero_celular_docente`, `direccion_docente`, `correo_electronico_docente`, `clave_login_docente`) VALUES
(1, 'Santiago', 'Ramirez', '32.671.861', '1980-01-30', '', 'Cra.23 #41-13', 'santiagoramirez@gmail.com', 'abcde'),
(2, 'Carlos', 'Salazar', '32.512.187', '1970-09-07', '3108719281', 'Cra.29 #13-11', 'carlossalazar@gmail.com', 'carlossalazar@gmail.com'),
(3, 'Jeison', 'Ramirez', '32.212.652', '1981-01-02', '3138419181', 'Cra.27 #11-10', 'jeisonramirez@gmail.com', 'jeisonramirez@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE `estudiante` (
  `id_estudiante` int(11) NOT NULL,
  `nombre_estudiante` varchar(20) NOT NULL,
  `apellido_estudiante` varchar(20) NOT NULL,
  `numero_documento_estudiante` varchar(12) NOT NULL,
  `fecha_nacimiento_estudiante` date NOT NULL,
  `numero_celular_estudiante` varchar(15) DEFAULT NULL,
  `direccion_estudiante` varchar(50) DEFAULT NULL,
  `correo_electronico_estudiante` varchar(50) NOT NULL,
  `clave_login_estudiante` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estudiante`
--

INSERT INTO `estudiante` (`id_estudiante`, `nombre_estudiante`, `apellido_estudiante`, `numero_documento_estudiante`, `fecha_nacimiento_estudiante`, `numero_celular_estudiante`, `direccion_estudiante`, `correo_electronico_estudiante`, `clave_login_estudiante`) VALUES
(1, 'David', 'Vidal', '1.007.862.34', '2000-11-23', '312 672 1981', 'Cra 20 #556 701', 'davidvidal@gmail.com', '12345678'),
(2, 'Alejandro', 'Carmona', '1.998.432.56', '2001-03-15', '323 453 8901', 'Cra. 27A #32-56', 'alejandrocarmona@gmail.com', 'Carmona'),
(3, 'John', 'Tamayo', '1.782.261.89', '1999-01-28', '314 762 7161', 'Avenida 55 #90-02', 'johntamayo@gmail.com', 'Tamayo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo`
--

CREATE TABLE `grupo` (
  `id_grupo` int(11) NOT NULL,
  `nombre_grupo` varchar(50) NOT NULL,
  `descripcion_grupo` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `grupo`
--

INSERT INTO `grupo` (`id_grupo`, `nombre_grupo`, `descripcion_grupo`) VALUES
(1, '6-A', ''),
(2, '6-B', ''),
(3, '6-C', ''),
(4, '6-D', NULL),
(5, '7-A', NULL),
(6, '7-B', NULL),
(7, '7-C', NULL),
(8, '7-D', NULL),
(9, '8-A', NULL),
(10, '8-B', NULL),
(11, '8-C', NULL),
(12, '8-D', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo_docente`
--

CREATE TABLE `grupo_docente` (
  `fk_id_grupo_gd` int(11) NOT NULL,
  `fk_id_docente_gd` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `grupo_docente`
--

INSERT INTO `grupo_docente` (`fk_id_grupo_gd`, `fk_id_docente_gd`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo_estudiante`
--

CREATE TABLE `grupo_estudiante` (
  `fk_id_grupo_ge` int(11) NOT NULL,
  `fk_id_estudiante_ge` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `grupo_estudiante`
--

INSERT INTO `grupo_estudiante` (`fk_id_grupo_ge`, `fk_id_estudiante_ge`) VALUES
(1, 1),
(2, 2),
(3, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informe`
--

CREATE TABLE `informe` (
  `id_informe` int(11) NOT NULL,
  `fk_id_grupo_i` int(11) NOT NULL,
  `fk_id_estudiante_i` int(11) NOT NULL,
  `fk_id_asignatura_i` int(11) NOT NULL,
  `fk_id_notas_i` int(11) NOT NULL,
  `fk_id_periodo_i` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notas`
--

CREATE TABLE `notas` (
  `id_nota` int(11) NOT NULL,
  `nombre_nota` varchar(50) NOT NULL,
  `descripcion_nota` varchar(255) DEFAULT NULL,
  `valor_nota` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `notas`
--

INSERT INTO `notas` (`id_nota`, `nombre_nota`, `descripcion_nota`, `valor_nota`) VALUES
(1, 'Evaluacion 1', 'Quiz sobre tema previo', 4.2),
(2, 'Taller inductivo', '', 3.1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notas_asignatura`
--

CREATE TABLE `notas_asignatura` (
  `fk_id_notas_na` int(11) NOT NULL,
  `fk_id_asignatura_na` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `notas_asignatura`
--

INSERT INTO `notas_asignatura` (`fk_id_notas_na`, `fk_id_asignatura_na`) VALUES
(1, 1),
(2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `periodo`
--

CREATE TABLE `periodo` (
  `id_periodo` int(11) NOT NULL,
  `nombre_periodo` varchar(50) NOT NULL,
  `descripcion_periodo` text DEFAULT NULL,
  `valor_periodo` decimal(10,0) NOT NULL,
  `fecha_inicio_periodo` date NOT NULL,
  `fecha_fin_periodo` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asignatura`
--
ALTER TABLE `asignatura`
  ADD PRIMARY KEY (`id_asignatura`);

--
-- Indices de la tabla `asignatura_docente`
--
ALTER TABLE `asignatura_docente`
  ADD KEY `fk_id_asignatura_ad` (`fk_id_asignatura_ad`),
  ADD KEY `fk_id_docente_ad` (`fk_id_docente_ad`);

--
-- Indices de la tabla `asignatura_estudiante`
--
ALTER TABLE `asignatura_estudiante`
  ADD KEY `fk_id_asignatura_ae` (`fk_id_asignatura_ae`),
  ADD KEY `fk_id_estudiante_ae` (`fk_id_estudiante_ae`);

--
-- Indices de la tabla `datos_secundarios_docente`
--
ALTER TABLE `datos_secundarios_docente`
  ADD KEY `fk_id_docente_dsd` (`fk_id_docente`);

--
-- Indices de la tabla `datos_secundarios_estudiante`
--
ALTER TABLE `datos_secundarios_estudiante`
  ADD KEY `fk_id_estudiante_dse` (`fk_id_estudiante`);

--
-- Indices de la tabla `docente`
--
ALTER TABLE `docente`
  ADD PRIMARY KEY (`id_docente`);

--
-- Indices de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`id_estudiante`);

--
-- Indices de la tabla `grupo`
--
ALTER TABLE `grupo`
  ADD PRIMARY KEY (`id_grupo`);

--
-- Indices de la tabla `grupo_docente`
--
ALTER TABLE `grupo_docente`
  ADD KEY `fk_id_grupo_gd` (`fk_id_grupo_gd`),
  ADD KEY `fk_id_docente_gd` (`fk_id_docente_gd`);

--
-- Indices de la tabla `grupo_estudiante`
--
ALTER TABLE `grupo_estudiante`
  ADD KEY `fk_id_estudiante_ge` (`fk_id_estudiante_ge`);

--
-- Indices de la tabla `informe`
--
ALTER TABLE `informe`
  ADD PRIMARY KEY (`id_informe`),
  ADD KEY `fk_id_grupo_i` (`fk_id_grupo_i`),
  ADD KEY `fk_id_estudiante_i` (`fk_id_estudiante_i`),
  ADD KEY `fk_id_asignatura_i` (`fk_id_asignatura_i`),
  ADD KEY `fk_id_notas_i` (`fk_id_notas_i`),
  ADD KEY `fk_id_periodo_i` (`fk_id_periodo_i`);

--
-- Indices de la tabla `notas`
--
ALTER TABLE `notas`
  ADD PRIMARY KEY (`id_nota`);

--
-- Indices de la tabla `notas_asignatura`
--
ALTER TABLE `notas_asignatura`
  ADD KEY `fk_id_notas_na` (`fk_id_notas_na`),
  ADD KEY `fk_id_asignatura_na` (`fk_id_asignatura_na`);

--
-- Indices de la tabla `periodo`
--
ALTER TABLE `periodo`
  ADD PRIMARY KEY (`id_periodo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asignatura`
--
ALTER TABLE `asignatura`
  MODIFY `id_asignatura` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `docente`
--
ALTER TABLE `docente`
  MODIFY `id_docente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  MODIFY `id_estudiante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `grupo`
--
ALTER TABLE `grupo`
  MODIFY `id_grupo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `informe`
--
ALTER TABLE `informe`
  MODIFY `id_informe` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `notas`
--
ALTER TABLE `notas`
  MODIFY `id_nota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `periodo`
--
ALTER TABLE `periodo`
  MODIFY `id_periodo` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `asignatura_docente`
--
ALTER TABLE `asignatura_docente`
  ADD CONSTRAINT `fk_id_asignatura_ad` FOREIGN KEY (`fk_id_asignatura_ad`) REFERENCES `asignatura` (`id_asignatura`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_docente_ad` FOREIGN KEY (`fk_id_docente_ad`) REFERENCES `docente` (`id_docente`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `asignatura_estudiante`
--
ALTER TABLE `asignatura_estudiante`
  ADD CONSTRAINT `fk_id_asignatura_ae` FOREIGN KEY (`fk_id_asignatura_ae`) REFERENCES `asignatura` (`id_asignatura`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_estudiante_ae` FOREIGN KEY (`fk_id_estudiante_ae`) REFERENCES `estudiante` (`id_estudiante`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `datos_secundarios_docente`
--
ALTER TABLE `datos_secundarios_docente`
  ADD CONSTRAINT `fk_id_docente_dsd` FOREIGN KEY (`fk_id_docente`) REFERENCES `docente` (`id_docente`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `datos_secundarios_estudiante`
--
ALTER TABLE `datos_secundarios_estudiante`
  ADD CONSTRAINT `fk_id_estudiante_dse` FOREIGN KEY (`fk_id_estudiante`) REFERENCES `estudiante` (`id_estudiante`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `grupo_docente`
--
ALTER TABLE `grupo_docente`
  ADD CONSTRAINT `fk_id_docente_gd` FOREIGN KEY (`fk_id_docente_gd`) REFERENCES `docente` (`id_docente`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_grupo_gd` FOREIGN KEY (`fk_id_grupo_gd`) REFERENCES `grupo` (`id_grupo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `grupo_estudiante`
--
ALTER TABLE `grupo_estudiante`
  ADD CONSTRAINT `fk_id_estudiante_ge` FOREIGN KEY (`fk_id_estudiante_ge`) REFERENCES `estudiante` (`id_estudiante`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_grupo_ge` FOREIGN KEY (`fk_id_estudiante_ge`) REFERENCES `grupo` (`id_grupo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `informe`
--
ALTER TABLE `informe`
  ADD CONSTRAINT `fk_id_asignatura_i` FOREIGN KEY (`fk_id_asignatura_i`) REFERENCES `asignatura` (`id_asignatura`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_estudiante_i` FOREIGN KEY (`fk_id_estudiante_i`) REFERENCES `estudiante` (`id_estudiante`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_grupo_i` FOREIGN KEY (`fk_id_grupo_i`) REFERENCES `grupo` (`id_grupo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_notas_i` FOREIGN KEY (`fk_id_notas_i`) REFERENCES `notas` (`id_nota`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_periodo_i` FOREIGN KEY (`fk_id_periodo_i`) REFERENCES `periodo` (`id_periodo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `notas_asignatura`
--
ALTER TABLE `notas_asignatura`
  ADD CONSTRAINT `fk_id_asignatura_na` FOREIGN KEY (`fk_id_asignatura_na`) REFERENCES `asignatura` (`id_asignatura`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_notas_na` FOREIGN KEY (`fk_id_notas_na`) REFERENCES `notas` (`id_nota`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
