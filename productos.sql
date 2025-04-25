-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-04-2025 a las 16:07:23
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

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
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `CÓDIGOARTÍCULO` varchar(4) DEFAULT NULL,
  `SECCIÓN` varchar(13) DEFAULT NULL,
  `NOMBRE` varchar(16) DEFAULT NULL,
  `PRECIO` decimal(6,3) DEFAULT NULL,
  `FECHA` varchar(10) DEFAULT NULL,
  `IMPORTADO` varchar(9) DEFAULT NULL,
  `PAÍSDEORIGEN` varchar(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`CÓDIGOARTÍCULO`, `SECCIÓN`, `NOMBRE`, `PRECIO`, `FECHA`, `IMPORTADO`, `PAÍSDEORIGEN`) VALUES
('A001', 'Electrónica ', 'Televisor LCD', '300.000', '2025-03-01', 'VERDADERO', 'China '),
('A002', 'Muebles', 'Sofá Reclinable', '450.000', '2025-03-02', 'FALSO', 'España '),
('A003', 'Ropa ', 'Camiseta Algodón', '20.000', '2025-03-03', 'VERDADERO', 'India '),
('A004', 'Electrónica ', 'Smartphone ', '550.000', '2025-03-04', 'VERDADERO', 'Corea del Sur'),
('A005', 'Herramientas ', 'Taladro Manual', '40.000', '2025-03-05', 'FALSO', 'Alemania ');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
