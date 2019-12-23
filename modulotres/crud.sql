-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 21-12-2019 a las 19:32:08
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `correo`, `telefono`, `username`, `clave`, `estado`) VALUES
(1, 'rudy', 'medrano', 'rudy@gmail.com', '78451263', 'rudy', '123456', 'AC'),
(2, 'rudy', 'medrano', 'rudy@gmail.com', '78451263', 'rudy', '522c0ce76dc2000c55fa5d7c68d9b3f8', 'AC'),
(3, 'rudy', '', 'rudy@gmail.com', '78451263', 'rudy', 'd41d8cd98f00b204e9800998ecf8427e', 'AC'),
(4, 'asdfasdfasdf', '', 'rudy@gmail.com', '78451263', 'rudy', '32f2bfa687cc03a1c00e94b0df275097', 'AC'),
(5, 'asdfasdf', '', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', 'AC'),
(6, 'diego', 'daza alcaraz', 'diego@gmail.com', '78451263', 'dddd', 'e10adc3949ba59abbe56e057f20f883e', 'AC'),
(7, 'diego', 'daza alcaraz', 'diego@gmail.com', '78451263', 'dddd', 'e10adc3949ba59abbe56e057f20f883e', 'AC'),
(8, 'diego', 'daza alcaraz', 'diego@gmail.com', '78451263', 'dddd', 'e10adc3949ba59abbe56e057f20f883e', 'AC'),
(9, 'diego', 'daza alcaraz', 'diego@gmail.com', '78451263', 'dddd', 'e10adc3949ba59abbe56e057f20f883e', 'AC'),
(10, 'diego', 'daza alcaraz', 'diego@gmail.com', '78451263', 'dddd', 'e10adc3949ba59abbe56e057f20f883e', 'AC');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
