-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 22-10-2021 a las 11:33:46
-- Versión del servidor: 8.0.21
-- Versión de PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `reserva_recursos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservations`
--

DROP TABLE IF EXISTS `reservations`;
CREATE TABLE IF NOT EXISTS `reservations` (
  `idResource` int NOT NULL,
  `idUser` int NOT NULL,
  `idTimeSlot` int NOT NULL,
  `date` datetime NOT NULL,
  `remarks` varchar(10000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `reservations`
--

INSERT INTO `reservations` (`idResource`, `idUser`, `idTimeSlot`, `date`, `remarks`) VALUES
(2, 1, 2, '2021-10-22 13:25:51', 'Reserva del salón de actos, para dar una charla sobre Angular.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resources`
--

DROP TABLE IF EXISTS `resources`;
CREATE TABLE IF NOT EXISTS `resources` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `description` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `location` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `image` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `resources`
--

INSERT INTO `resources` (`id`, `name`, `description`, `location`, `image`) VALUES
(1, 'Portátil Lenovo Z51', 'Portátil con el sistema operativo Windows 10', 'Aula 8', 'uploaded_images/resources/lenovo-laptop-z51.jpg'),
(2, 'Salón de actos', 'Sala grande con escenario y asientos de tipo teatro', 'Planta 1 , a la izquierda de la escalera principal (puertas altas)', 'uploaded_images/resources/biblioteca.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `timeslots`
--

DROP TABLE IF EXISTS `timeslots`;
CREATE TABLE IF NOT EXISTS `timeslots` (
  `id` int NOT NULL AUTO_INCREMENT,
  `dayOfWeek` date NOT NULL,
  `startTime` datetime NOT NULL,
  `endTime` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `timeslots`
--

INSERT INTO `timeslots` (`id`, `dayOfWeek`, `startTime`, `endTime`) VALUES
(1, '2021-10-24', '2021-10-24 10:05:00', '2021-10-24 11:35:00'),
(2, '2021-11-01', '2021-11-01 11:35:05', '2021-11-01 14:35:05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `realname` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `realname`) VALUES
(1, 'admin', '1234', 'Juan Manuel'),
(2, 'top_sp', '147', 'Javier');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
