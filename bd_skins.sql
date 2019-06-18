-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-06-2019 a las 21:28:59
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_skins`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `skins`
--

CREATE TABLE `skins` (
  `no` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `imagen` longblob NOT NULL,
  `gemas` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `skins`
--

INSERT INTO `skins` (`no`, `nombre`, `imagen`, `gemas`) VALUES
(2, 'Carlos', 0x696d616765732f627567617474692e6a7067, 123),
(3, 'fea', 0x696d616765732f6d757374616e672e6a7067, 141),
(4, 'fea', 0x696d616765732f6d757374616e672e6a7067, 141),
(6, 'fea', 0x696d616765732f, 123),
(7, 'Carlos', 0x696d616765732f666572726172692e6a7067, 123412),
(18, '123', 0x696d616765732f, 141),
(19, 'fea', 0x696d616765732f, 123),
(21, 'fea', '', 123),
(22, '123', 0x696d616765732f, 123),
(23, 'fea', 0x696d616765732f, 123);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `skins`
--
ALTER TABLE `skins`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `skins`
--
ALTER TABLE `skins`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
