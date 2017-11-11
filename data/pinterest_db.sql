-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 11, 2017 at 01:28 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pinterest_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `anuncios`
--

CREATE TABLE IF NOT EXISTS `anuncios` (
  `ID_anuncio` int(11) NOT NULL AUTO_INCREMENT,
  `fecha_anuncio` date NOT NULL,
  `contenido_anuncio` varchar(500) NOT NULL,
  `url_imagen_principal` varchar(500) NOT NULL,
  `url_imagen_repuestto` varchar(500) NOT NULL,
  `ID_empresas` int(11) NOT NULL,
  PRIMARY KEY (`ID_anuncio`),
  KEY `fk_anuncios_empresas1_idx` (`ID_empresas`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `comentarios`
--

CREATE TABLE IF NOT EXISTS `comentarios` (
  `ID_comentario` int(11) NOT NULL AUTO_INCREMENT,
  `comentario` varchar(2000) NOT NULL,
  `fecha_redaccion` date NOT NULL,
  `ID_usuario` int(11) NOT NULL,
  `ID_pin` int(11) NOT NULL,
  PRIMARY KEY (`ID_comentario`),
  KEY `fk_comentarios_usuarios1_idx` (`ID_usuario`),
  KEY `fk_comentarios_pines1_idx` (`ID_pin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `empresas`
--

CREATE TABLE IF NOT EXISTS `empresas` (
  `ID_empresas` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_empresa` varchar(100) NOT NULL,
  `fecha_fundacion` date NOT NULL,
  `direccion` varchar(800) DEFAULT NULL,
  `url_sitio_web` varchar(500) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `ID_tipo_empresa` int(11) NOT NULL,
  `ID_usuario` int(11) NOT NULL,
  PRIMARY KEY (`ID_empresas`),
  KEY `fk_empresas_tipos_empresas1_idx` (`ID_tipo_empresa`),
  KEY `fk_empresas_usuarios1_idx` (`ID_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `generos`
--

CREATE TABLE IF NOT EXISTS `generos` (
  `ID_genero` int(11) NOT NULL AUTO_INCREMENT,
  `genero` varchar(10) NOT NULL,
  PRIMARY KEY (`ID_genero`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `generos`
--

INSERT INTO `generos` (`ID_genero`, `genero`) VALUES
(1, 'masculino'),
(2, 'femenino');

-- --------------------------------------------------------

--
-- Table structure for table `mensajes`
--

CREATE TABLE IF NOT EXISTS `mensajes` (
  `ID_mensaje` int(11) NOT NULL AUTO_INCREMENT,
  `mensaje` varchar(10000) DEFAULT NULL,
  `fecha_envio` date DEFAULT NULL,
  `ID_usuario_receptor` int(11) NOT NULL,
  `ID_usuario_emisor` int(11) NOT NULL,
  PRIMARY KEY (`ID_mensaje`),
  KEY `fk_mensajes_usuarios1_idx` (`ID_usuario_receptor`),
  KEY `fk_mensajes_usuarios2_idx` (`ID_usuario_emisor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `notificaciones`
--

CREATE TABLE IF NOT EXISTS `notificaciones` (
  `ID_notificacion` int(11) NOT NULL AUTO_INCREMENT,
  `notificacion` varchar(1000) NOT NULL,
  `fecha_notificacion` date DEFAULT NULL,
  `url_notificacion` varchar(500) DEFAULT NULL,
  `ID_tipo_notificacion` int(11) NOT NULL,
  `ID_usuario` int(11) NOT NULL,
  PRIMARY KEY (`ID_notificacion`),
  KEY `fk_notificaciones_tipos_notificaciones1_idx` (`ID_tipo_notificacion`),
  KEY `fk_notificaciones_usuarios1_idx` (`ID_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pines`
--

CREATE TABLE IF NOT EXISTS `pines` (
  `ID_pin` int(11) NOT NULL AUTO_INCREMENT,
  `fecha_publicacion` date NOT NULL,
  `ID_usuarios` int(11) NOT NULL,
  `ID_tema_de_pin` int(11) NOT NULL,
  PRIMARY KEY (`ID_pin`),
  KEY `fk_pines_usuarios_pineros1_idx` (`ID_usuarios`),
  KEY `fk_pines_temas_de_pines1_idx` (`ID_tema_de_pin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pines_guardados`
--

CREATE TABLE IF NOT EXISTS `pines_guardados` (
  `ID_pin_guardado` int(11) NOT NULL AUTO_INCREMENT,
  `fecha_guardado` date NOT NULL,
  `ID_tablero` int(11) NOT NULL,
  `ID_pin` int(11) NOT NULL,
  PRIMARY KEY (`ID_pin_guardado`),
  KEY `fk_pines_guardados_tableros1_idx` (`ID_tablero`),
  KEY `fk_pines_guardados_pines1_idx` (`ID_pin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tableros`
--

CREATE TABLE IF NOT EXISTS `tableros` (
  `ID_tablero` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_tablero` varchar(200) NOT NULL,
  `fecha_creacion` date NOT NULL,
  `ID_usuarios_creador` int(11) NOT NULL,
  `ID_tipo_tablero` int(11) NOT NULL,
  PRIMARY KEY (`ID_tablero`),
  KEY `fk_tableros_usuarios_pineros1_idx` (`ID_usuarios_creador`),
  KEY `fk_tableros_tipos_tableros1_idx` (`ID_tipo_tablero`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `temas_de_pines`
--

CREATE TABLE IF NOT EXISTS `temas_de_pines` (
  `ID_tema_de_pin` int(11) NOT NULL AUTO_INCREMENT,
  `tema` varchar(100) NOT NULL,
  `fecha_registro` date NOT NULL,
  PRIMARY KEY (`ID_tema_de_pin`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `temas_de_pines`
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
-- Table structure for table `tipos_empresas`
--

CREATE TABLE IF NOT EXISTS `tipos_empresas` (
  `ID_tipo_empresa` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_empresa` varchar(45) NOT NULL,
  `tarifa_cobro` decimal(2,0) DEFAULT NULL,
  PRIMARY KEY (`ID_tipo_empresa`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tipos_empresas`
--

INSERT INTO `tipos_empresas` (`ID_tipo_empresa`, `tipo_empresa`, `tarifa_cobro`) VALUES
(1, 'servicios', NULL),
(2, 'ONG', NULL),
(3, 'gubernamental', NULL),
(4, 'comercial', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tipos_notificaciones`
--

CREATE TABLE IF NOT EXISTS `tipos_notificaciones` (
  `ID_tipos_notificaciones` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_notificacion` varchar(45) NOT NULL,
  PRIMARY KEY (`ID_tipos_notificaciones`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tipos_notificaciones`
--

INSERT INTO `tipos_notificaciones` (`ID_tipos_notificaciones`, `tipo_notificacion`) VALUES
(1, 'privadas'),
(2, 'empresariales');

-- --------------------------------------------------------

--
-- Table structure for table `tipos_tableros`
--

CREATE TABLE IF NOT EXISTS `tipos_tableros` (
  `ID_tipo_tablero` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_tablero` varchar(45) NOT NULL,
  PRIMARY KEY (`ID_tipo_tablero`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tipos_tableros`
--

INSERT INTO `tipos_tableros` (`ID_tipo_tablero`, `tipo_tablero`) VALUES
(1, 'público'),
(2, 'privado');

-- --------------------------------------------------------

--
-- Table structure for table `tipos_usuarios`
--

CREATE TABLE IF NOT EXISTS `tipos_usuarios` (
  `ID_tipo_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_usuario` varchar(20) NOT NULL,
  PRIMARY KEY (`ID_tipo_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tipos_usuarios`
--

INSERT INTO `tipos_usuarios` (`ID_tipo_usuario`, `tipo_usuario`) VALUES
(1, 'administrador'),
(2, 'empresarial'),
(3, 'común'),
(4, 'invitado');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `ID_usuario` int(11) NOT NULL AUTO_INCREMENT,
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
  `ID_tipo_usuario` int(11) NOT NULL,
  PRIMARY KEY (`ID_usuario`),
  UNIQUE KEY `nombre_usuario_UNIQUE` (`nombre_usuario`),
  KEY `fk_usuarios_generos1_idx` (`ID_genero`),
  KEY `fk_usuarios_tipos_usuarios1_idx` (`ID_tipo_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `anuncios`
--
ALTER TABLE `anuncios`
  ADD CONSTRAINT `fk_anuncios_empresas1` FOREIGN KEY (`ID_empresas`) REFERENCES `empresas` (`ID_empresas`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `fk_comentarios_usuarios1` FOREIGN KEY (`ID_usuario`) REFERENCES `usuarios` (`ID_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_comentarios_pines1` FOREIGN KEY (`ID_pin`) REFERENCES `pines` (`ID_pin`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `empresas`
--
ALTER TABLE `empresas`
  ADD CONSTRAINT `fk_empresas_tipos_empresas1` FOREIGN KEY (`ID_tipo_empresa`) REFERENCES `tipos_empresas` (`ID_tipo_empresa`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_empresas_usuarios1` FOREIGN KEY (`ID_usuario`) REFERENCES `usuarios` (`ID_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `mensajes`
--
ALTER TABLE `mensajes`
  ADD CONSTRAINT `fk_mensajes_usuarios1` FOREIGN KEY (`ID_usuario_receptor`) REFERENCES `usuarios` (`ID_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_mensajes_usuarios2` FOREIGN KEY (`ID_usuario_emisor`) REFERENCES `usuarios` (`ID_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `notificaciones`
--
ALTER TABLE `notificaciones`
  ADD CONSTRAINT `fk_notificaciones_tipos_notificaciones1` FOREIGN KEY (`ID_tipo_notificacion`) REFERENCES `tipos_notificaciones` (`ID_tipos_notificaciones`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_notificaciones_usuarios1` FOREIGN KEY (`ID_usuario`) REFERENCES `usuarios` (`ID_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `pines`
--
ALTER TABLE `pines`
  ADD CONSTRAINT `fk_pines_usuarios_pineros1` FOREIGN KEY (`ID_usuarios`) REFERENCES `usuarios` (`ID_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pines_temas_de_pines1` FOREIGN KEY (`ID_tema_de_pin`) REFERENCES `temas_de_pines` (`ID_tema_de_pin`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `pines_guardados`
--
ALTER TABLE `pines_guardados`
  ADD CONSTRAINT `fk_pines_guardados_tableros1` FOREIGN KEY (`ID_tablero`) REFERENCES `tableros` (`ID_tablero`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pines_guardados_pines1` FOREIGN KEY (`ID_pin`) REFERENCES `pines` (`ID_pin`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tableros`
--
ALTER TABLE `tableros`
  ADD CONSTRAINT `fk_tableros_usuarios_pineros1` FOREIGN KEY (`ID_usuarios_creador`) REFERENCES `usuarios` (`ID_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tableros_tipos_tableros1` FOREIGN KEY (`ID_tipo_tablero`) REFERENCES `tipos_tableros` (`ID_tipo_tablero`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_usuarios_generos1` FOREIGN KEY (`ID_genero`) REFERENCES `generos` (`ID_genero`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuarios_tipos_usuarios1` FOREIGN KEY (`ID_tipo_usuario`) REFERENCES `tipos_usuarios` (`ID_tipo_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
