-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 05-01-2020 a las 13:59:50
-- Versión del servidor: 5.5.20
-- Versión de PHP: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `crud`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_categoria` varchar(50) NOT NULL,
  `estado` varchar(5) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`codigo`, `nombre_categoria`, `estado`) VALUES
(1, 'COMPUTACION', 'AC'),
(2, 'ESCRITORIO', 'AC'),
(3, 'INSTRUMENTOS', 'AC');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca_automovil`
--

CREATE TABLE IF NOT EXISTS `marca_automovil` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion_marca` varchar(50) NOT NULL,
  `estado` varchar(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `marca_automovil`
--

INSERT INTO `marca_automovil` (`id`, `descripcion_marca`, `estado`) VALUES
(1, 'TOYOTA', 'AC'),
(2, 'NISSAN', 'AC'),
(5, 'SUZUKI', 'AC'),
(6, 'JAC', 'AC');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_categoria` int(11) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `estado` varchar(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `codigo_categoria`, `descripcion`, `precio`, `cantidad`, `estado`) VALUES
(19, 1, 'ADASD', '15.50', 3, 'AC');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_automovil`
--

CREATE TABLE IF NOT EXISTS `tipo_automovil` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion_tipo` varchar(100) NOT NULL,
  `estado` varchar(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `tipo_automovil`
--

INSERT INTO `tipo_automovil` (`id`, `descripcion_tipo`, `estado`) VALUES
(1, 'AUTOMOVIL', 'AC'),
(2, 'CAMINIONETA', 'AC'),
(5, 'VAGONETA', 'AC'),
(6, 'CAMION', 'AC');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(15) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `clave` varchar(100) NOT NULL,
  `estado` varchar(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `correo`, `telefono`, `username`, `clave`, `estado`) VALUES
(11, 'DIEGO', 'DAZA ALCARAZ', 'aldidacom@gmail.om', '72404619', 'diegodaza', 'e10adc3949ba59abbe56e057f20f883e', 'AC');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculos`
--

CREATE TABLE IF NOT EXISTS `vehiculos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_tipo_vehiculo` int(11) NOT NULL,
  `id_marca_vehiculo` int(11) NOT NULL,
  `procedencia` varchar(20) NOT NULL,
  `anhio_modelo` varchar(4) NOT NULL,
  `color` varchar(10) NOT NULL,
  `cilindrada` int(11) NOT NULL,
  `estado` varchar(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `vehiculos`
--

INSERT INTO `vehiculos` (`id`, `id_tipo_vehiculo`, `id_marca_vehiculo`, `procedencia`, `anhio_modelo`, `color`, `cilindrada`, `estado`) VALUES
(1, 1, 1, 'JAPON', '2017', 'VERDE', 1400, 'AC'),
(2, 1, 2, 'MEXICO', '2015', 'NEGRO', 2400, 'AC');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
