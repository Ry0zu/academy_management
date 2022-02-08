-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-02-2022 a las 21:26:05
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gestion_academia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `id_alumno` int(11) NOT NULL,
  `nombre_alumno` varchar(50) NOT NULL,
  `apellido1_alumno` varchar(50) NOT NULL,
  `apellido2_alumno` varchar(50) NOT NULL,
  `dni_alumno` varchar(10) NOT NULL,
  `url_foto_alumno` varchar(255) NOT NULL,
  `email_alumno` varchar(50) NOT NULL,
  `telefono_alumno` int(11) NOT NULL,
  `estado_alumno` tinyint(1) NOT NULL,
  `estado_laboral` tinyint(1) NOT NULL,
  `id_curso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `id_curso` int(11) NOT NULL,
  `nombre_curso` varchar(200) NOT NULL,
  `fecha_inicio_curso` date NOT NULL,
  `fecha_fin_curso` date NOT NULL,
  `duracion_curso` int(11) NOT NULL,
  `horario_inicio_curso` time NOT NULL,
  `horario_fin_curso` time NOT NULL,
  `modalidad_curso` enum('Online','Presencial','Semipresencial','') NOT NULL,
  `tipo_curso` enum('Módulo','Certificado Profesional','','') NOT NULL,
  `codigo_curso` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`id_curso`, `nombre_curso`, `fecha_inicio_curso`, `fecha_fin_curso`, `duracion_curso`, `horario_inicio_curso`, `horario_fin_curso`, `modalidad_curso`, `tipo_curso`, `codigo_curso`) VALUES
(1, 'Desarrollo de aplicaciones con tecnología web', '0000-00-00', '2022-02-10', 590, '15:30:00', '21:30:00', 'Presencial', 'Certificado Profesional', 'IFCD0210'),
(2, 'Desarrollo de aplicaciones de escritorio basadas en JAVA', '2022-02-16', '2022-04-01', 400, '09:00:00', '14:00:00', 'Presencial', 'Módulo', 'H3J6568'),
(6, 'Desarrollo de productos audiovisuales multimedia interactivos', '0000-00-00', '2022-09-15', 540, '08:30:00', '14:30:00', 'Presencial', 'Certificado Profesional', 'IMSV0209'),
(7, 'Técnicas culinarias pescados crustáceos moluscos', '2022-02-07', '2022-04-04', 80, '08:00:00', '20:00:00', 'Online', 'Módulo', 'HOTR079PO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documentos`
--

CREATE TABLE `documentos` (
  `id_documento` int(11) NOT NULL,
  `nombre_documento` varchar(50) NOT NULL,
  `url_documento` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documentos_incidencias_alumnos`
--

CREATE TABLE `documentos_incidencias_alumnos` (
  `id_documento_incidencia_alumno` int(11) NOT NULL,
  `id_documento` int(11) NOT NULL,
  `id_incidencia_alumno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documentos_incidencias_profesores`
--

CREATE TABLE `documentos_incidencias_profesores` (
  `id_documento_incidencia_profesor` int(11) NOT NULL,
  `id_documento` int(11) NOT NULL,
  `id_incidencia_profesor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `incidencias_alumnos`
--

CREATE TABLE `incidencias_alumnos` (
  `id_incidencia_alumno` int(11) NOT NULL,
  `titulo_incidencia_alumno` varchar(50) NOT NULL,
  `observacion_incidencia_alumno` text NOT NULL,
  `fecha_incidencia_alumno` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_alumno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `incidencias_profesores`
--

CREATE TABLE `incidencias_profesores` (
  `id_incidencia_profesor` int(11) NOT NULL,
  `titulo_incidencia_profesor` varchar(50) NOT NULL,
  `observacion_incidencia_profesor` text NOT NULL,
  `fecha_incidencia_profesor` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_profesor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesores`
--

CREATE TABLE `profesores` (
  `id_profesor` int(11) NOT NULL,
  `nombre_profesor` varchar(50) NOT NULL,
  `apellido1_profesor` varchar(50) NOT NULL,
  `apellido2_profesor` varchar(50) NOT NULL,
  `dni_profesor` varchar(10) NOT NULL,
  `url_foto_profesor` varchar(255) NOT NULL,
  `email_profesor` varchar(50) NOT NULL,
  `telefono_profesor` int(11) NOT NULL,
  `id_curso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre_usuario` varchar(50) NOT NULL,
  `apellido1_usuario` varchar(50) NOT NULL,
  `apellido2_usuario` varchar(50) NOT NULL,
  `email_usuario` varchar(50) NOT NULL,
  `telefono_usuario` int(11) NOT NULL,
  `dni_usuario` varchar(10) NOT NULL,
  `pass_usuario` varchar(255) NOT NULL,
  `tipo_usuario` enum('Administrador','Editor','Usuario','') NOT NULL,
  `activo` tinyint(1) NOT NULL,
  `token` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre_usuario`, `apellido1_usuario`, `apellido2_usuario`, `email_usuario`, `telefono_usuario`, `dni_usuario`, `pass_usuario`, `tipo_usuario`, `activo`, `token`) VALUES
(1, 'Ryozu', 'Lv', '', 'example@correo.com', 6666666, '33354827c', '123', 'Administrador', 1, '1000000'),
(9, 'pepe', 'pepee', 'peeeee', 'pepe@gmail.com', 1232323, '23456787x', '111', 'Usuario', 0, '32323');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id_alumno`),
  ADD UNIQUE KEY `dni_alumno` (`dni_alumno`),
  ADD KEY `relacion_alumnos_cursos` (`id_curso`);

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id_curso`);

--
-- Indices de la tabla `documentos`
--
ALTER TABLE `documentos`
  ADD PRIMARY KEY (`id_documento`);

--
-- Indices de la tabla `documentos_incidencias_alumnos`
--
ALTER TABLE `documentos_incidencias_alumnos`
  ADD PRIMARY KEY (`id_documento_incidencia_alumno`),
  ADD KEY `relacion_documentos_alumnos` (`id_documento`),
  ADD KEY `relacion_documento_incidencia_alumno` (`id_incidencia_alumno`);

--
-- Indices de la tabla `documentos_incidencias_profesores`
--
ALTER TABLE `documentos_incidencias_profesores`
  ADD PRIMARY KEY (`id_documento_incidencia_profesor`),
  ADD KEY `relacion_documentos_profesor` (`id_documento`),
  ADD KEY `relacion_documento_incidencia_profesor` (`id_incidencia_profesor`);

--
-- Indices de la tabla `incidencias_alumnos`
--
ALTER TABLE `incidencias_alumnos`
  ADD PRIMARY KEY (`id_incidencia_alumno`),
  ADD KEY `relacion_alumnos_incidencias` (`id_alumno`);

--
-- Indices de la tabla `incidencias_profesores`
--
ALTER TABLE `incidencias_profesores`
  ADD PRIMARY KEY (`id_incidencia_profesor`),
  ADD KEY `relacion_profesores_incidencias` (`id_profesor`);

--
-- Indices de la tabla `profesores`
--
ALTER TABLE `profesores`
  ADD PRIMARY KEY (`id_profesor`),
  ADD UNIQUE KEY `dni_profesor` (`dni_profesor`),
  ADD KEY `relacion_profesores_cursos` (`id_curso`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `dni_usuario` (`dni_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id_alumno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id_curso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `documentos`
--
ALTER TABLE `documentos`
  MODIFY `id_documento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `documentos_incidencias_alumnos`
--
ALTER TABLE `documentos_incidencias_alumnos`
  MODIFY `id_documento_incidencia_alumno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `documentos_incidencias_profesores`
--
ALTER TABLE `documentos_incidencias_profesores`
  MODIFY `id_documento_incidencia_profesor` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `incidencias_alumnos`
--
ALTER TABLE `incidencias_alumnos`
  MODIFY `id_incidencia_alumno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `incidencias_profesores`
--
ALTER TABLE `incidencias_profesores`
  MODIFY `id_incidencia_profesor` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `profesores`
--
ALTER TABLE `profesores`
  MODIFY `id_profesor` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD CONSTRAINT `relacion_alumnos_cursos` FOREIGN KEY (`id_curso`) REFERENCES `cursos` (`id_curso`);

--
-- Filtros para la tabla `documentos_incidencias_alumnos`
--
ALTER TABLE `documentos_incidencias_alumnos`
  ADD CONSTRAINT `relacion_documento_incidencia_alumno` FOREIGN KEY (`id_incidencia_alumno`) REFERENCES `incidencias_alumnos` (`id_incidencia_alumno`),
  ADD CONSTRAINT `relacion_documentos_alumnos` FOREIGN KEY (`id_documento`) REFERENCES `documentos` (`id_documento`);

--
-- Filtros para la tabla `documentos_incidencias_profesores`
--
ALTER TABLE `documentos_incidencias_profesores`
  ADD CONSTRAINT `relacion_documento_incidencia_profesor` FOREIGN KEY (`id_incidencia_profesor`) REFERENCES `incidencias_profesores` (`id_incidencia_profesor`),
  ADD CONSTRAINT `relacion_documentos_profesor` FOREIGN KEY (`id_documento`) REFERENCES `documentos` (`id_documento`);

--
-- Filtros para la tabla `incidencias_alumnos`
--
ALTER TABLE `incidencias_alumnos`
  ADD CONSTRAINT `relacion_alumnos_incidencias` FOREIGN KEY (`id_alumno`) REFERENCES `alumnos` (`id_alumno`);

--
-- Filtros para la tabla `incidencias_profesores`
--
ALTER TABLE `incidencias_profesores`
  ADD CONSTRAINT `relacion_profesores_incidencias` FOREIGN KEY (`id_profesor`) REFERENCES `profesores` (`id_profesor`);

--
-- Filtros para la tabla `profesores`
--
ALTER TABLE `profesores`
  ADD CONSTRAINT `relacion_profesores_cursos` FOREIGN KEY (`id_curso`) REFERENCES `cursos` (`id_curso`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
