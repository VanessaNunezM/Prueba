-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 21-11-2017 a las 02:09:09
-- Versión del servidor: 5.7.19
-- Versión de PHP: 5.6.31
create database if not exists rental;
use rental;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `correo` varchar(123) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `clave` varchar(200) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=MEMORY AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`id`, `correo`, `usuario`, `clave`) VALUES
(1, 'sindy@gamil.com', 'Sindy Atencio', '4dff4ea340f0a823f15d3f4f01ab62eae0e5da579ccb851f8db9dfe84c58b2b37b89903a740e1ee172da793a6e79d560e5f7f9bd058a12a280433ed6fa46510a'),
(2, 'cristian@gmail.com', 'Cristian Polo', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2');
COMMIT;

--
-- Estructura de tabla para la tabla `autos`
--

DROP TABLE IF EXISTS `Autos`;
CREATE TABLE IF NOT EXISTS `Autos` (
  `idAutos` int(11) NOT NULL AUTO_INCREMENT,
  `Modelo` varchar(200) NOT NULL,
  `transmision` varchar(100) NOT NULL,
  `Costo` decimal(15) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  UNIQUE KEY `idAutos` (`idAutos`)

) ENGINE=MEMORY AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- datos para la tabla `autos`
--

INSERT INTO `Autos` (`idAutos`, `Modelo`, `transmision`, `Costo`, `idUsuario`) VALUES
(20, 'KIA Kuwait', 'automática', '14', '1'),
(21, 'Range Rover Sport', 'automática', '98', '2'),
(22, 'Toyota Land Cruser', 'automática', '80', '3'),
(23, 'Mini Cooper SE 2020', 'automática', '100', '4'),
(24, 'Audi Q5', 'automática', '128', '5'),
(25, 'Porsche Cayenne Buyer', 'manual', '100', '6');
COMMIT;


CREATE TABLE `datos` (
  `datosID` int(4) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) NOT NULL,
  `cedula` varchar(15) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `telefono` int(50) NOT NULL,
  `modelo` varchar(50) NOT NULL,
  UNIQUE KEY `datosID` (`datosID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`datosID`, `Nombre`, `cedula`, `direccion`, `telefono`, `modelo`) VALUES
(7, 'CARLOS SUIRA', '9-738-1147', 'PANAMA', '6456252', 'KIA'),
(8, 'MARIA SALAZAR', '8-909-234', 'SAN MARTIN, SANTIAGO', '68893498', 'Toyota'),
(9, 'JULIO VEGA', '8-786-231', 'CANTO DEL LL ANO', '6892392', 'MiniCooper');

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
