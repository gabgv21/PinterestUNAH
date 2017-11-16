-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-11-2017 a las 14:59:03
-- Versión del servidor: 5.7.14
-- Versión de PHP: 7.0.10

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
(1, 'img/temas/deportes/deportes1.jpg', '2017-11-01', 1, 1),
(2, 'img/temas/deportes/deportes2.jpg', '2017-11-01', 1, 1),
(3, 'img/temas/deportes/deportes3.jpg', '2017-11-01', 1, 1),
(4, 'img/temas/deportes/deportes4.jpg', '2017-11-01', 2, 1),
(5, 'img/temas/deportes/deportes5.jpg', '2017-11-01', 1, 1),
(6, 'img/temas/deportes/deportes6.jpg', '2017-11-01', 1, 1),
(7, 'img/temas/deportes/deportes7.jpg', '2017-11-01', 1, 1),
(8, 'img/temas/deportes/deportes8.jpg', '2017-11-01', 1, 1),
(9, 'img/temas/deportes/deportes9.jpg', '2017-11-01', 2, 1),
(10, 'img/temas/deportes/deportes10.jpg', '2017-11-01', 2, 1),
(11, 'img/temas/deportes/deportes11.jpg', '2017-11-01', 2, 1),
(12, 'img/temas/deportes/deportes12.jpg', '2017-11-01', 1, 1),
(13, 'img/temas/deportes/deportes13.jpg', '2017-11-01', 2, 1),
(14, 'img/temas/deportes/deportes14.jpg', '2017-11-01', 1, 1),
(15, 'img/temas/deportes/deportes15.jpg', '2017-11-01', 1, 1),
(16, 'img/temas/deportes/deportes16.jpg', '2017-11-16', 2, 1),
(17, 'img/temas/deportes/deportes17.jpg', '2017-11-01', 1, 1),
(18, 'img/temas/deportes/deportes18.jpg', '2017-11-01', 1, 1),
(19, 'img/temas/deportes/deportes19.jpg', '2017-11-01', 2, 1),
(20, 'img/temas/deportes/deportes20.jpg', '2017-11-01', 2, 1),
(21, 'img/temas/deportes/deportes21.jpg', '2017-11-01', 1, 1),
(22, 'img/temas/deportes/deportes22.jpg', '2017-11-02', 1, 1),
(65, 'img/temas/moda/moda1.jpg', '2017-11-01', 2, 2),
(66, 'img/temas/moda/moda2.jpg', '2017-11-01', 1, 2),
(87, 'img/temas/moda/moda3.jpg', '2017-11-28', 2, 2),
(88, 'img/temas/moda/moda4.jpg', '2017-11-28', 2, 4),
(89, 'img/temas/moda/moda5.jpg', '2017-11-29', 1, 2),
(90, 'img/temas/moda/moda6.jpg', '0000-00-00', 1, 2),
(91, 'img/temas/moda/moda7.jpg', '2017-11-08', 2, 2),
(92, 'img/temas/moda/moda8.jpg', '2017-11-07', 2, 2),
(93, 'img/temas/moda/moda9.jpg', '2017-11-14', 1, 2),
(94, 'img/temas/moda/moda10.jpg', '2017-11-28', 1, 2),
(95, 'img/temas/moda/moda11.jpg', '2017-11-01', 2, 2),
(96, 'img/temas/moda/moda12.jpg', '2017-11-01', 2, 2),
(97, 'img/temas/moda/moda13.jpg', '2017-11-02', 1, 2),
(98, 'img/temas/moda/moda14.jpg', '2017-11-09', 1, 2),
(99, 'img/temas/moda/moda15.jpg', '2017-11-01', 2, 2),
(100, 'img/temas/moda/moda16.jpg', '2017-11-01', 1, 2),
(101, 'img/temas/moda/moda17.jpg', '2017-11-08', 2, 2),
(102, 'img/temas/moda/moda18.jpg', '2017-11-08', 2, 2),
(103, 'img/temas/moda/moda19.jpg', '2017-11-14', 2, 2),
(104, 'img/temas/moda/moda20.jpg', '2017-11-07', 2, 2),
(105, 'img/temas/moda/moda21.jpg', '2017-11-11', 1, 2),
(106, 'img/temas/moda/moda22.jpg', '2017-11-02', 2, 2),
(107, 'img/temas/musica/musica1.jpg', '2017-11-01', 2, 3),
(108, 'img/temas/musica/musica2.jpg', '2017-11-01', 1, 3),
(109, 'img/temas/musica/musica3.jpg', '2017-11-01', 2, 3),
(110, 'img/temas/musica/musica4.jpg', '2017-11-01', 2, 3),
(111, 'img/temas/musica/musica5.jpg', '2017-11-01', 2, 3),
(112, 'img/temas/musica/musica6.jpg', '2017-11-01', 1, 3),
(113, 'img/temas/musica/musica7.jpg', '2017-11-01', 2, 3),
(114, 'img/temas/musica/musica8.jpg', '2017-11-13', 2, 3),
(115, 'img/temas/musica/musica9.jpg', '2017-11-01', 1, 3),
(116, 'img/temas/musica/musica10.jpg', '2017-11-08', 2, 3),
(117, 'img/temas/musica/musica11.jpg', '2017-11-01', 2, 3),
(118, 'img/temas/musica/musica12.jpg', '2017-11-16', 2, 3),
(119, 'img/temas/musica/musica13.jpg', '2017-11-01', 2, 3),
(120, 'img/temas/musica/musica14.jpg', '2017-11-02', 2, 3),
(121, 'img/temas/musica/musica15.jpg', '2017-11-01', 2, 3),
(122, 'img/temas/musica/musica16.jpg', '2017-11-01', 2, 3),
(123, 'img/temas/musica/musica17.jpg', '2017-11-01', 2, 3),
(124, 'img/temas/musica/musica18.jpg', '2017-11-01', 2, 3),
(125, 'img/temas/musica/musica19.jpg', '2017-11-07', 2, 3),
(126, 'img/temas/musica/musica20.jpg', '2017-11-01', 2, 3),
(127, 'img/temas/musica/musica21.jpg', '2017-11-01', 2, 3),
(128, 'img/temas/musica/musica22.jpg', '2017-11-14', 1, 3),
(129, 'img/temas/musica/musica23.jpg', '2017-11-01', 2, 3),
(130, 'img/temas/musica/musica24.jpg', '2017-11-14', 2, 3),
(131, 'img/temas/musica/musica25.jpg', '2017-11-08', 1, 3),
(132, 'img/temas/musica/musica26.jpg', '2017-11-01', 2, 3),
(133, 'img/temas/musica/musica27.jpg', '2017-11-01', 1, 3),
(134, 'img/temas/manualidades/manualidades1.jpg', '2017-11-07', 2, 4),
(135, 'img/temas/manualidades/manualidades2.jpg', '2017-11-29', 2, 4),
(136, 'img/temas/manualidades/manualidades3.jpg', '2017-11-01', 1, 4),
(137, 'img/temas/manualidades/manualidades4.jpg', '2017-11-08', 1, 4),
(138, 'img/temas/manualidades/manualidades5.jpg', '2017-11-01', 2, 4),
(139, 'img/temas/manualidades/manualidades6.jpg', '2017-11-08', 2, 4),
(140, 'img/temas/manualidades/manualidades7.jpg', '2017-11-07', 2, 4),
(141, 'img/temas/manualidades/manualidades8.jpg', '2017-11-09', 2, 6),
(142, 'img/temas/manualidades/manualidades9.jpg', '2017-11-28', 2, 4),
(143, 'img/temas/manualidades/manualidades10.jpg', '2017-11-01', 2, 4),
(144, 'img/temas/manualidades/manualidades11.jpg', '2017-11-14', 2, 4),
(145, 'img/temas/manualidades/manualidades12.jpg', '2017-11-07', 1, 4),
(146, 'img/temas/manualidades/manualidades13.jpg', '2017-11-14', 2, 4),
(147, 'img/temas/manualidades/manualidades14.jpg', '2017-11-14', 2, 4),
(148, 'img/temas/manualidades/manualidades15.jpg', '2017-11-22', 1, 4),
(149, 'img/temas/manualidades/manualidades16.jpg', '2017-11-21', 2, 4),
(150, 'img/temas/manualidades/manualidades17.jpg', '2017-11-07', 2, 4),
(151, 'img/temas/manualidades/manualidades18.jpg', '2017-11-07', 2, 4),
(152, 'img/temas/manualidades/manualidades19.jpg', '2017-11-02', 2, 4),
(153, 'img/temas/anime/anime1.jpg', '2017-11-01', 1, 5),
(154, 'img/temas/anime/anime2.jpg', '2017-11-06', 2, 5),
(155, 'img/temas/anime/anime3.jpg', '2017-11-01', 2, 5),
(156, 'img/temas/anime/anime4.jpg', '2017-11-01', 2, 5),
(157, 'img/temas/anime/anime5.jpg', '2017-11-08', 2, 5),
(158, 'img/temas/anime/anime6.jpg', '2017-11-01', 2, 5),
(159, 'img/temas/anime/anime7.jpg', '2017-11-01', 2, 5),
(160, 'img/temas/anime/anime8.jpg', '2017-11-01', 2, 5),
(161, 'img/temas/anime/anime9.jpg', '2017-11-01', 2, 5),
(162, 'img/temas/anime/anime10.jpg', '2017-11-01', 2, 5),
(163, 'img/temas/anime/anime11.jpg', '2017-11-01', 2, 5),
(164, 'img/temas/anime/anime12.jpg', '2017-11-22', 1, 5),
(165, 'img/temas/anime/anime13.jpg', '2017-11-07', 1, 5),
(166, 'img/temas/anime/anime14.jpg', '2017-11-01', 2, 5),
(167, 'img/temas/anime/anime15.jpg', '2017-11-02', 2, 5),
(168, 'img/temas/anime/anime16.jpg', '2017-11-22', 2, 5),
(169, 'img/temas/anime/anime17.jpg', '2017-11-29', 1, 5),
(170, 'img/temas/anime/anime18.jpg', '2017-11-01', 2, 5),
(171, 'img/temas/anime/anime19.jpg', '2017-11-01', 2, 5),
(172, 'img/temas/anime/anime20.jpg', '2017-11-07', 2, 5),
(173, 'img/temas/anime/anime21.jpg', '2017-11-22', 2, 5),
(174, 'img/temas/anime/anime22.jpg', '2017-11-01', 2, 5),
(175, 'img/temas/anime/anime23.jpg', '2017-11-01', 1, 5),
(176, 'img/temas/anime/anime24.jpg', '2017-11-06', 2, 5),
(177, 'img/temas/anime/anime25.jpg', '2017-11-07', 2, 5),
(178, 'img/temas/anime/anime26.jpg', '2017-11-07', 2, 5),
(179, 'img/temas/anime/anime27.jpg', '2017-11-01', 2, 5),
(180, 'img/temas/comics/comics1.jpg', '2017-11-01', 2, 6),
(181, 'img/temas/comics/comics2.jpg', '2017-11-07', 2, 6),
(182, 'img/temas/comics/comics3.jpg', '2017-11-28', 1, 6),
(183, 'img/temas/comics/comics4.jpg', '2017-11-29', 2, 6),
(184, 'img/temas/comics/comics5.jpg', '2017-11-29', 2, 6),
(185, 'img/temas/comics/comics6.jpg', '2017-11-07', 2, 6),
(186, 'img/temas/comics/comics7.jpg', '2017-11-01', 2, 6),
(187, 'img/temas/comics/comics8.jpg', '2017-11-07', 1, 6),
(188, 'img/temas/comics/comics9.jpg', '2017-11-14', 1, 6),
(189, 'img/temas/comics/comics10.jpg', '2017-11-07', 2, 6),
(190, 'img/temas/comics/comics11.jpg', '2017-11-28', 2, 6),
(191, 'img/temas/comics/comics12.jpg', '2017-11-27', 2, 6),
(192, 'img/temas/comics/comics13.jpg', '2017-11-01', 2, 6),
(193, 'img/temas/comics/comics14.jpg', '2017-11-01', 2, 6),
(194, 'img/temas/comics/comics15.jpg', '2017-11-01', 2, 6),
(195, 'img/temas/comics/comics16.jpg', '2017-11-01', 1, 6),
(196, 'img/temas/comics/comics17.jpg', '2017-11-01', 2, 6),
(197, 'img/temas/comics/comics18.jpg', '2017-11-01', 2, 6),
(198, 'img/temas/comics/comics19.jpg', '2017-11-01', 2, 6),
(199, 'img/temas/comics/comics20.jpg', '2017-11-07', 2, 6),
(200, 'img/temas/comics/comics21.jpg', '2017-11-01', 2, 6),
(201, 'img/temas/comics/comics22.jpg', '2017-11-28', 1, 6),
(202, 'img/temas/comics/comics23.jpg', '2017-11-28', 2, 6),
(203, 'img/temas/comics/comics24.jpg', '2017-11-01', 2, 6),
(204, 'img/temas/comics/comics25.jpg', '2017-11-01', 2, 6),
(205, 'img/temas/comics/comics26.jpg', '2017-11-03', 2, 6),
(206, 'img/temas/comics/comics27.jpg', '2017-11-01', 2, 6),
(207, 'img/temas/comics/comics28.jpg', '2017-11-01', 2, 6),
(208, 'img/temas/comics/comics29.jpg', '2017-11-14', 2, 6),
(209, 'img/temas/comics/comics30.jpg', '2017-11-07', 2, 6),
(236, 'img/temas/informatica/informatica1.jpg', '2017-11-01', 2, 7),
(237, 'img/temas/informatica/informatica2.jpg', '2017-11-01', 2, 7),
(238, 'img/temas/informatica/informatica3.jpg', '2017-11-01', 2, 7),
(239, 'img/temas/informatica/informatica4.jpg', '2017-11-07', 2, 7),
(240, 'img/temas/informatica/informatica5.jpg', '2017-11-01', 2, 7),
(241, 'img/temas/informatica/informatica6.jpg', '2017-11-01', 2, 7),
(242, 'img/temas/informatica/informatica7.jpg', '2017-11-01', 2, 7),
(243, 'img/temas/informatica/informatica8.jpg', '2017-11-07', 1, 7),
(244, 'img/temas/informatica/informatica9.jpg', '2017-11-14', 2, 7),
(245, 'img/temas/informatica/informatica10.jpg', '2017-11-14', 1, 7),
(246, 'img/temas/informatica/informatica11.jpg', '2017-11-22', 2, 7),
(247, 'img/temas/informatica/informatica12.jpg', '2017-11-28', 2, 7),
(248, 'img/temas/informatica/informatica13.jpg', '2017-11-01', 2, 7),
(249, 'img/temas/informatica/informatica14.jpg', '2017-11-01', 2, 7),
(250, 'img/temas/informatica/informatica15.jpg', '2017-11-07', 1, 7),
(251, 'img/temas/informatica/informatica16.jpg', '2017-11-07', 1, 7),
(252, 'img/temas/informatica/informatica17.jpg', '2017-11-29', 2, 7),
(253, 'img/temas/informatica/informatica18.jpg', '2017-11-01', 2, 7),
(254, 'img/temas/informatica/informatica19.jpg', '2017-11-07', 2, 7),
(255, 'img/temas/informatica/informatica20.jpg', '2017-11-01', 2, 7),
(256, 'img/temas/informatica/informatica21.jpg', '2017-11-01', 2, 7),
(257, 'img/temas/informatica/informatica22.jpg', '2017-11-01', 2, 7),
(258, 'img/temas/informatica/informatica23.jpg', '2017-11-21', 2, 7),
(259, 'img/temas/tecnologia/tecnologia1.jpg', '2017-11-01', 2, 8),
(260, 'img/temas/tecnologia/tecnologia2.jpg', '2017-11-01', 2, 8),
(261, 'img/temas/tecnologia/tecnologia3.jpg', '2017-11-01', 2, 8),
(262, 'img/temas/tecnologia/tecnologia4.jpg', '2017-11-29', 2, 8),
(263, 'img/temas/tecnologia/tecnologia5.jpg', '2017-11-01', 1, 8),
(264, 'img/temas/tecnologia/tecnologia6.jpg', '2017-11-07', 2, 8),
(265, 'img/temas/tecnologia/tecnologia7.jpg', '2017-11-14', 2, 8),
(266, 'img/temas/tecnologia/tecnologia8.jpg', '2017-11-22', 1, 8),
(267, 'img/temas/tecnologia/tecnologia9.jpg', '2017-11-01', 2, 8),
(268, 'img/temas/tecnologia/tecnologia10.jpg', '2017-11-07', 2, 8),
(269, 'img/temas/tecnologia/tecnologia11.jpg', '2017-11-01', 1, 8),
(270, 'img/temas/tecnologia/tecnologia11.jpg', '2017-11-01', 2, 8),
(271, 'img/temas/tecnologia/tecnologia12.jpg', '2017-11-01', 2, 8),
(272, 'img/temas/tecnologia/tecnologia13.jpg', '2017-11-29', 2, 8),
(273, 'img/temas/tecnologia/tecnologia14.jpg', '2017-11-14', 1, 8),
(274, 'img/temas/tecnologia/tecnologia15.jpg', '2017-11-14', 2, 8),
(275, 'img/temas/tecnologia/tecnologia16.jpg', '2017-11-01', 2, 8),
(276, 'img/temas/arte/arte1.jpg', '2017-11-28', 2, 9),
(277, 'img/temas/arte/arte2.jpg', '2017-11-01', 2, 9),
(278, 'img/temas/arte/arte3.jpg', '2017-11-01', 2, 9),
(279, 'img/temas/arte/arte4.jpg', '2017-11-01', 2, 9),
(280, 'img/temas/arte/arte5.jpg', '2017-11-28', 2, 9),
(281, 'img/temas/arte/arte6.jpg', '2017-11-01', 2, 9),
(282, 'img/temas/arte/arte7.jpg', '2017-11-01', 2, 9),
(283, 'img/temas/arte/arte8.jpg', '2017-11-07', 2, 9),
(284, 'img/temas/arte/arte9.jpg', '2017-11-29', 1, 9),
(285, 'img/temas/arte/arte10.jpg', '2017-11-29', 2, 9),
(286, 'img/temas/arte/arte11.jpg', '2017-11-29', 2, 9),
(287, 'img/temas/arte/arte12.jpg', '2017-11-01', 2, 9),
(288, 'img/temas/arte/arte13.jpg', '2017-11-01', 2, 9),
(289, 'img/temas/arte/arte14.jpg', '2017-11-01', 1, 9),
(290, 'img/temas/arte/arte15.jpg', '2017-11-01', 2, 9),
(291, 'img/temas/arte/arte16.jpg', '2017-11-01', 2, 9),
(292, 'img/temas/arte/arte17.jpg', '2017-11-01', 2, 9),
(293, 'img/temas/arte/arte18.jpg', '2017-11-01', 1, 9),
(294, 'img/temas/arte/arte19.jpg', '2017-11-29', 2, 9),
(295, 'img/temas/arte/arte20.jpg', '2017-11-29', 2, 9),
(296, 'img/temas/arte/arte21.jpg', '2017-11-29', 2, 9),
(297, 'img/temas/arte/arte22.jpg', '2017-11-01', 2, 9),
(298, 'img/temas/arte/arte23.jpg', '2017-11-07', 1, 9),
(299, 'img/temas/arte/arte24.jpg', '2017-11-22', 1, 9),
(300, 'img/temas/arte/arte25.jpg', '2017-11-28', 2, 9),
(301, 'img/temas/arte/arte26.jpg', '2017-11-01', 2, 9),
(302, 'img/temas/arte/arte27.jpg', '2017-11-01', 2, 9),
(303, 'img/temas/arte/arte28.jpg', '2017-11-08', 2, 9),
(304, 'img/temas/arte/arte29.jpg', '2017-11-01', 2, 9),
(305, 'img/temas/arte/arte30.jpg', '2017-11-01', 2, 9),
(306, 'img/temas/literatura/literatura1.jpg', '2017-11-01', 2, 10),
(307, 'img/temas/literatura/literatura2.jpg', '2017-11-01', 2, 10),
(308, 'img/temas/literatura/literatura3.jpg', '2017-11-01', 2, 10),
(309, 'img/temas/literatura/literatura4.jpg', '2017-11-01', 2, 10),
(310, 'img/temas/literatura/literatura5.jpg', '2017-11-29', 2, 10),
(311, 'img/temas/literatura/literatura6.jpg', '2017-11-28', 2, 10),
(312, 'img/temas/literatura/literatura7.jpg', '2017-11-01', 2, 10),
(313, 'img/temas/literatura/literatura8.jpg', '2017-11-01', 2, 10),
(314, 'img/temas/literatura/literatura9.jpg', '2017-11-29', 2, 10),
(315, 'img/temas/literatura/literatura10.jpg', '2017-11-01', 1, 10),
(316, 'img/temas/literatura/literatura11.jpg', '2017-11-01', 2, 10),
(317, 'img/temas/literatura/literatura12.jpg', '2017-11-01', 2, 10),
(318, 'img/temas/literatura/literatura13.jpg', '2017-11-28', 2, 10),
(319, 'img/temas/literatura/literatura14.jpg', '2017-11-01', 2, 10),
(320, 'img/temas/literatura/literatura15.jpg', '2017-11-01', 2, 10);

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
(3, 'musica', '0000-00-00'),
(4, 'manualidades', '0000-00-00'),
(5, 'anime', '0000-00-00'),
(6, 'comics', '0000-00-00'),
(7, 'informatica', '0000-00-00'),
(8, 'tecnologia', '0000-00-00'),
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
(1, 'profesional', NULL),
(2, 'personaje_publico', NULL),
(3, 'medios_publicos', NULL),
(4, 'marca', NULL),
(5, 'minorista', NULL),
(6, 'tienda_online', NULL),
(7, 'negocio_local', NULL),
(8, 'organizacion_benefica', NULL),
(9, 'otros', NULL);

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
(2, 'kakarotto', 'Goku', 'bcdcb29ed2aab16d48c11485264df665e906bdd9', 'kaka@gmail.com', '11111111', '2017-11-01', 'goku.jpg', '2017-11-08', 666, 1, 1, 4),
(3, 'Jonathan', 'Jonathan', 'bcdcb29ed2aab16d48c11485264df665e906bdd9', 'melgarjonathan03@gmail.com', '88190738', '2017-11-15', 'foto_perfil_jonathan03.jpg', '2017-11-29', 100, 23, 1, 1),
(5, 'Vegeta', 'Vegeta', 'bcdcb29ed2aab16d48c11485264df665e906bdd9', 'vegeta@gmail.com', '999999999', '2017-11-29', 'vegeta.jpg', '2017-11-29', 100, 21, 1, 3),
(8, 'Juan Medrano', 'Juan Medrano', 'bcdcb29ed2aab16d48c11485264df665e906bdd9', 'ja@gmail.com', NULL, '2017-11-14', 'foto_default.png', NULL, 100, 50, 1, 4);

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
  MODIFY `ID_pin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=321;
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
  MODIFY `ID_tipo_empresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
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
  MODIFY `ID_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
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
