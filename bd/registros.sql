-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-01-2021 a las 18:05:49
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pruebas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registros`
--

CREATE TABLE `registros` (
  `id` int(10) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `profesion` varchar(30) DEFAULT NULL,
  `imagen` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registros`
--

INSERT INTO `registros` (`id`, `nombre`, `profesion`, `imagen`) VALUES
(1, 'Urian Viera', 'Ingeniero de Sistemas', 'urian.png'),
(2, 'Abelardo Perez', 'Ingeniero de Sistemas', 'abelardo.jpg'),
(3, 'Braudin Laya', 'Ingeniero de Sistemas', 'braudin.png'),
(4, 'Dayana Ramirez', 'Web Developer', 'dayana.png'),
(5, 'Any Somosa', 'Licenciada en Enfermera', 'any.png'),
(6, 'Jennifer Lopez', 'Agente Comercial', 'jennifer.png'),
(7, 'Alberto Fodol', 'Desarrollador', 'alberto.png'),
(8, 'Jose Gregorio', 'full-stack', 'gregorio.png'),
(9, 'Luisa Mora', 'Diseñadora UI/UX', 'luisa.png'),
(10, 'Dary Perez', 'Analista de Sistemas', 'dary.jpg'),
(11, 'Ryan Gosling', 'Diseñador Grafico', 'ryan.png'),
(12, 'Chris Hemsworth', 'Analista de Sistemas', 'chris.png');


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
