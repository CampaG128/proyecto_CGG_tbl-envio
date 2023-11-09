-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-11-2023 a las 20:20:36
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `f1merch`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `envio`
--

CREATE TABLE `envio` (
  `id_envio` int(10) NOT NULL,
  `id_producto` int(10) NOT NULL,
  `direccion_envio` varchar(100) NOT NULL,
  `pais_envio` varchar(50) NOT NULL,
  `envio_coste` float(100,2) NOT NULL,
  `total` float(10,2) NOT NULL,
  `paqueteria` varchar(50) NOT NULL,
  `nombre_cuenta` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `envio`
--

INSERT INTO `envio` (`id_envio`, `id_producto`, `direccion_envio`, `pais_envio`, `envio_coste`, `total`, `paqueteria`, `nombre_cuenta`) VALUES
(1, 1, 'Riveras #333', 'México', 10.50, 120.50, 'Estafeta', 'gollitocx'),
(2, 2, 'Benedicto #872', 'México', 30.50, 150.50, 'Estafeta', 'jaime321'),
(3, 3, 'Anapra #785', 'México', 50.50, 100.50, 'DHL', 'pepe543'),
(4, 4, 'Higueras #444', 'México', 50.50, 200.50, 'DHL', 'juan321'),
(5, 5, 'Riveras #111', 'México', 20.50, 120.50, 'Amazon', 'lupe76');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `envio`
--
ALTER TABLE `envio`
  ADD PRIMARY KEY (`id_envio`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `envio`
--
ALTER TABLE `envio`
  MODIFY `id_envio` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
