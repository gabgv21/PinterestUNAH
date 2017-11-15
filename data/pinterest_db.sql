-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-11-2017 a las 07:22:18
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pinterest_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `anuncios`
--

CREATE TABLE `anuncios` (
  `ID_anuncio` int(11) NOT NULL,
  `fecha_anuncio` date NOT NULL,
  `contenido_anuncio` varchar(500) NOT NULL,
  `url_imagen_principal` varchar(500) NOT NULL,
  `url_imagen_repuestto` varchar(500) NOT NULL,
  `ID_empresas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `ID_comentario` int(11) NOT NULL,
  `comentario` varchar(2000) NOT NULL,
  `fecha_redaccion` date NOT NULL,
  `ID_usuario` int(11) NOT NULL,
  `ID_pin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas`
--

CREATE TABLE `empresas` (
  `ID_empresas` int(11) NOT NULL,
  `nombre_empresa` varchar(100) NOT NULL,
  `fecha_fundacion` date NOT NULL,
  `direccion` varchar(800) DEFAULT NULL,
  `url_sitio_web` varchar(500) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `ID_tipo_empresa` int(11) NOT NULL,
  `ID_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `generos`
--

CREATE TABLE `generos` (
  `ID_genero` int(11) NOT NULL,
  `genero` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `generos`
--

INSERT INTO `generos` (`ID_genero`, `genero`) VALUES
(1, 'masculino'),
(2, 'femenino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensajes`
--

CREATE TABLE `mensajes` (
  `ID_mensaje` int(11) NOT NULL,
  `mensaje` varchar(10000) DEFAULT NULL,
  `fecha_envio` date DEFAULT NULL,
  `ID_usuario_receptor` int(11) NOT NULL,
  `ID_usuario_emisor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notificaciones`
--

CREATE TABLE `notificaciones` (
  `ID_notificacion` int(11) NOT NULL,
  `notificacion` varchar(1000) NOT NULL,
  `fecha_notificacion` date DEFAULT NULL,
  `url_notificacion` varchar(500) DEFAULT NULL,
  `ID_tipo_notificacion` int(11) NOT NULL,
  `ID_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pines`
--

CREATE TABLE `pines` (
  `ID_pin` int(11) NOT NULL,
  `url_pin` varchar(500) NOT NULL,
  `fecha_publicacion` date NOT NULL,
  `ID_usuario` int(11) NOT NULL,
  `ID_tema_de_pin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pines`
--

INSERT INTO `pines` (`ID_pin`, `url_pin`, `fecha_publicacion`, `ID_usuario`, `ID_tema_de_pin`) VALUES
(32, 'img/goku/1.jpg', '2017-11-01', 1, 6),
(33, 'img/goku/2.jpg', '2017-11-17', 1, 6),
(34, 'img/goku/3.jpg', '2017-11-09', 2, 6),
(35, 'img/goku/4.jpg', '2017-11-15', 1, 6),
(36, 'img/goku/5.jpg', '2017-11-07', 1, 6),
(37, 'img/goku/6.jpg', '2017-11-14', 1, 6),
(38, 'img/goku/7.jpg', '2017-11-22', 1, 6),
(39, 'img/goku/8.jpg', '2017-11-16', 1, 6),
(40, 'img/goku/9.jpg', '2017-11-15', 1, 6),
(41, 'img/goku/10.jpg', '2017-11-06', 2, 6),
(42, 'img/goku/11.jpg', '2017-11-15', 2, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pines_guardados`
--

CREATE TABLE `pines_guardados` (
  `ID_pin_guardado` int(11) NOT NULL,
  `fecha_guardado` date NOT NULL,
  `ID_tablero` int(11) NOT NULL,
  `ID_pin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tableros`
--

CREATE TABLE `tableros` (
  `ID_tablero` int(11) NOT NULL,
  `nombre_tablero` varchar(200) NOT NULL,
  `fecha_creacion` date NOT NULL,
  `ID_usuarios_creador` int(11) NOT NULL,
  `ID_tipo_tablero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `temas_de_pines`
--

CREATE TABLE `temas_de_pines` (
  `ID_tema_de_pin` int(11) NOT NULL,
  `tema` varchar(100) NOT NULL,
  `fecha_registro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `temas_de_pines`
--

INSERT INTO `temas_de_pines` (`ID_tema_de_pin`, `tema`, `fecha_registro`) VALUES
(1, 'deportes', '2017-11-10'),
(2, 'moda', '2017-11-10'),
(3, 'música', '0000-00-00'),
(4, 'manualidades', '0000-00-00'),
(5, 'anime', '0000-00-00'),
(6, 'comics', '0000-00-00'),
(7, 'informática', '0000-00-00'),
(8, 'tecnología', '0000-00-00'),
(9, 'arte', '0000-00-00'),
(10, 'literatura', '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_empresas`
--

CREATE TABLE `tipos_empresas` (
  `ID_tipo_empresa` int(11) NOT NULL,
  `tipo_empresa` varchar(45) NOT NULL,
  `tarifa_cobro` decimal(2,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipos_empresas`
--

INSERT INTO `tipos_empresas` (`ID_tipo_empresa`, `tipo_empresa`, `tarifa_cobro`) VALUES
(1, 'servicios', NULL),
(2, 'ONG', NULL),
(3, 'gubernamental', NULL),
(4, 'comercial', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_notificaciones`
--

CREATE TABLE `tipos_notificaciones` (
  `ID_tipos_notificaciones` int(11) NOT NULL,
  `tipo_notificacion` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipos_notificaciones`
--

INSERT INTO `tipos_notificaciones` (`ID_tipos_notificaciones`, `tipo_notificacion`) VALUES
(1, 'privadas'),
(2, 'empresariales');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_tableros`
--

CREATE TABLE `tipos_tableros` (
  `ID_tipo_tablero` int(11) NOT NULL,
  `tipo_tablero` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipos_tableros`
--

INSERT INTO `tipos_tableros` (`ID_tipo_tablero`, `tipo_tablero`) VALUES
(1, 'público'),
(2, 'privado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_usuarios`
--

CREATE TABLE `tipos_usuarios` (
  `ID_tipo_usuario` int(11) NOT NULL,
  `tipo_usuario` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipos_usuarios`
--

INSERT INTO `tipos_usuarios` (`ID_tipo_usuario`, `tipo_usuario`) VALUES
(1, 'administrador'),
(2, 'empresarial'),
(3, 'común'),
(4, 'invitado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID_usuario` int(11) NOT NULL,
  `nombre_usuario` varchar(50) NOT NULL,
  `nombre_persona` varchar(100) NOT NULL,
  `contrasenna` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `url_foto_perfl` varchar(500) DEFAULT NULL,
  `ultima_conexion` date DEFAULT NULL,
  `seguidores` int(11) NOT NULL,
  `siguiendo` int(11) NOT NULL,
  `ID_genero` int(11) NOT NULL,
  `ID_tipo_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID_usuario`, `nombre_usuario`, `nombre_persona`, `contrasenna`, `email`, `telefono`, `fecha_nacimiento`, `url_foto_perfl`, `ultima_conexion`, `seguidores`, `siguiendo`, `ID_genero`, `ID_tipo_usuario`) VALUES
(1, 'Jeslync', 'Jelsyn', 'asd.456', 'jelsync@gmail.com', '99999999', '2017-10-11', 'img/perflies/cell.jpg', '2017-10-27', 5, 1, 1, 1),
(2, 'kakarotto', 'Goku', 'asd.456', 'kaka@gmail.com', '11111111', '2017-11-01', 'img/perflies/goku.jpg', '2017-11-08', 666, 1, 1, 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `anuncios`
--
ALTER TABLE `anuncios`
  ADD PRIMARY KEY (`ID_anuncio`),
  ADD KEY `fk_anuncios_empresas1_idx` (`ID_empresas`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`ID_comentario`),
  ADD KEY `fk_comentarios_usuarios1_idx` (`ID_usuario`),
  ADD KEY `fk_comentarios_pines1_idx` (`ID_pin`);

--
-- Indices de la tabla `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`ID_empresas`),
  ADD KEY `fk_empresas_tipos_empresas1_idx` (`ID_tipo_empresa`),
  ADD KEY `fk_empresas_usuarios1_idx` (`ID_usuario`);

--
-- Indices de la tabla `generos`
--
ALTER TABLE `generos`
  ADD PRIMARY KEY (`ID_genero`);

--
-- Indices de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  ADD PRIMARY KEY (`ID_mensaje`),
  ADD KEY `fk_mensajes_usuarios1_idx` (`ID_usuario_receptor`),
  ADD KEY `fk_mensajes_usuarios2_idx` (`ID_usuario_emisor`);

--
-- Indices de la tabla `notificaciones`
--
ALTER TABLE `notificaciones`
  ADD PRIMARY KEY (`ID_notificacion`),
  ADD KEY `fk_notificaciones_tipos_notificaciones1_idx` (`ID_tipo_notificacion`),
  ADD KEY `fk_notificaciones_usuarios1_idx` (`ID_usuario`);

--
-- Indices de la tabla `pines`
--
ALTER TABLE `pines`
  ADD PRIMARY KEY (`ID_pin`),
  ADD KEY `fk_pines_usuarios_pineros1_idx` (`ID_usuario`),
  ADD KEY `fk_pines_temas_de_pines1_idx` (`ID_tema_de_pin`);

--
-- Indices de la tabla `pines_guardados`
--
ALTER TABLE `pines_guardados`
  ADD PRIMARY KEY (`ID_pin_guardado`),
  ADD KEY `fk_pines_guardados_tableros1_idx` (`ID_tablero`),
  ADD KEY `fk_pines_guardados_pines1_idx` (`ID_pin`);

--
-- Indices de la tabla `tableros`
--
ALTER TABLE `tableros`
  ADD PRIMARY KEY (`ID_tablero`),
  ADD KEY `fk_tableros_usuarios_pineros1_idx` (`ID_usuarios_creador`),
  ADD KEY `fk_tableros_tipos_tableros1_idx` (`ID_tipo_tablero`);

--
-- Indices de la tabla `temas_de_pines`
--
ALTER TABLE `temas_de_pines`
  ADD PRIMARY KEY (`ID_tema_de_pin`);

--
-- Indices de la tabla `tipos_empresas`
--
ALTER TABLE `tipos_empresas`
  ADD PRIMARY KEY (`ID_tipo_empresa`);

--
-- Indices de la tabla `tipos_notificaciones`
--
ALTER TABLE `tipos_notificaciones`
  ADD PRIMARY KEY (`ID_tipos_notificaciones`);

--
-- Indices de la tabla `tipos_tableros`
--
ALTER TABLE `tipos_tableros`
  ADD PRIMARY KEY (`ID_tipo_tablero`);

--
-- Indices de la tabla `tipos_usuarios`
--
ALTER TABLE `tipos_usuarios`
  ADD PRIMARY KEY (`ID_tipo_usuario`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID_usuario`),
  ADD UNIQUE KEY `nombre_usuario_UNIQUE` (`nombre_usuario`),
  ADD KEY `fk_usuarios_generos1_idx` (`ID_genero`),
  ADD KEY `fk_usuarios_tipos_usuarios1_idx` (`ID_tipo_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `anuncios`
--
ALTER TABLE `anuncios`
  MODIFY `ID_anuncio` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `ID_comentario` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `empresas`
--
ALTER TABLE `empresas`
  MODIFY `ID_empresas` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `generos`
--
ALTER TABLE `generos`
  MODIFY `ID_genero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  MODIFY `ID_mensaje` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `notificaciones`
--
ALTER TABLE `notificaciones`
  MODIFY `ID_notificacion` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pines`
--
ALTER TABLE `pines`
  MODIFY `ID_pin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT de la tabla `pines_guardados`
--
ALTER TABLE `pines_guardados`
  MODIFY `ID_pin_guardado` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tableros`
--
ALTER TABLE `tableros`
  MODIFY `ID_tablero` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `temas_de_pines`
--
ALTER TABLE `temas_de_pines`
  MODIFY `ID_tema_de_pin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `tipos_empresas`
--
ALTER TABLE `tipos_empresas`
  MODIFY `ID_tipo_empresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `tipos_notificaciones`
--
ALTER TABLE `tipos_notificaciones`
  MODIFY `ID_tipos_notificaciones` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tipos_tableros`
--
ALTER TABLE `tipos_tableros`
  MODIFY `ID_tipo_tablero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tipos_usuarios`
--
ALTER TABLE `tipos_usuarios`
  MODIFY `ID_tipo_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `anuncios`
--
ALTER TABLE `anuncios`
  ADD CONSTRAINT `fk_anuncios_empresas1` FOREIGN KEY (`ID_empresas`) REFERENCES `empresas` (`ID_empresas`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `fk_comentarios_pines1` FOREIGN KEY (`ID_pin`) REFERENCES `pines` (`ID_pin`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_comentarios_usuarios1` FOREIGN KEY (`ID_usuario`) REFERENCES `usuarios` (`ID_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `empresas`
--
ALTER TABLE `empresas`
  ADD CONSTRAINT `fk_empresas_tipos_empresas1` FOREIGN KEY (`ID_tipo_empresa`) REFERENCES `tipos_empresas` (`ID_tipo_empresa`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_empresas_usuarios1` FOREIGN KEY (`ID_usuario`) REFERENCES `usuarios` (`ID_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `mensajes`
--
ALTER TABLE `mensajes`
  ADD CONSTRAINT `fk_mensajes_usuarios1` FOREIGN KEY (`ID_usuario_receptor`) REFERENCES `usuarios` (`ID_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_mensajes_usuarios2` FOREIGN KEY (`ID_usuario_emisor`) REFERENCES `usuarios` (`ID_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `notificaciones`
--
ALTER TABLE `notificaciones`
  ADD CONSTRAINT `fk_notificaciones_tipos_notificaciones1` FOREIGN KEY (`ID_tipo_notificacion`) REFERENCES `tipos_notificaciones` (`ID_tipos_notificaciones`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_notificaciones_usuarios1` FOREIGN KEY (`ID_usuario`) REFERENCES `usuarios` (`ID_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `pines`
--
ALTER TABLE `pines`
  ADD CONSTRAINT `fk_pines_temas_de_pines1` FOREIGN KEY (`ID_tema_de_pin`) REFERENCES `temas_de_pines` (`ID_tema_de_pin`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pines_usuarios_pineros1` FOREIGN KEY (`ID_usuario`) REFERENCES `usuarios` (`ID_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `pines_guardados`
--
ALTER TABLE `pines_guardados`
  ADD CONSTRAINT `fk_pines_guardados_pines1` FOREIGN KEY (`ID_pin`) REFERENCES `pines` (`ID_pin`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pines_guardados_tableros1` FOREIGN KEY (`ID_tablero`) REFERENCES `tableros` (`ID_tablero`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tableros`
--
ALTER TABLE `tableros`
  ADD CONSTRAINT `fk_tableros_tipos_tableros1` FOREIGN KEY (`ID_tipo_tablero`) REFERENCES `tipos_tableros` (`ID_tipo_tablero`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tableros_usuarios_pineros1` FOREIGN KEY (`ID_usuarios_creador`) REFERENCES `usuarios` (`ID_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_usuarios_generos1` FOREIGN KEY (`ID_genero`) REFERENCES `generos` (`ID_genero`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuarios_tipos_usuarios1` FOREIGN KEY (`ID_tipo_usuario`) REFERENCES `tipos_usuarios` (`ID_tipo_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
