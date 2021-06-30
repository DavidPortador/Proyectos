-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-07-2019 a las 02:14:19
-- Versión del servidor: 10.1.40-MariaDB
-- Versión de PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `biblioteca`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientesvip`
--

CREATE TABLE `clientesvip` (
  `nc` int(3) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `librofav` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `clientesvip`
--

INSERT INTO `clientesvip` (`nc`, `nombre`, `librofav`) VALUES
(1, 'Luis Miguel', 'La iliada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `id` int(4) NOT NULL,
  `nombre` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `categoria` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `estado` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`id`, `nombre`, `categoria`, `estado`) VALUES
(1, 'El Origen de las Especies', 'Ciencia', 'disponible'),
(2, 'Metafisica', 'Filosofia', 'disponible'),
(3, 'La quinta ola', 'ficcion', 'disponible'),
(4, 'La iliada', 'Mitologico', 'disponible'),
(5, 'La odisea', 'Mitologico', 'disponible'),
(6, 'Tesla energia', 'Cultura', 'disponible'),
(7, 'Don quijote ', 'Cultura', 'disponible'),
(8, 'Obras de nietzsche', 'Filosofia', 'disponible'),
(9, 'El esclavo', 'Novela', 'disponible'),
(10, 'La ciencia gay', 'Filosofia', 'disponible'),
(11, 'La teoria del todo', 'Universo', 'disponible'),
(12, 'El anticristo', 'Filosofia', 'disponible'),
(13, 'huhu', 'huhu', 'disponible');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reportes`
--

CREATE TABLE `reportes` (
  `nrep` int(11) NOT NULL,
  `libro` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `accion` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `reportes`
--

INSERT INTO `reportes` (`nrep`, `libro`, `accion`) VALUES
(1, 'La iliada', 'prestado'),
(2, 'El Origen de las Especies', 'pestado'),
(3, 'El Origen de las Especies', 'entregado'),
(4, 'La iliada', 'entregado');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientesvip`
--
ALTER TABLE `clientesvip`
  ADD PRIMARY KEY (`nc`);

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `reportes`
--
ALTER TABLE `reportes`
  ADD PRIMARY KEY (`nrep`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `reportes`
--
ALTER TABLE `reportes`
  MODIFY `nrep` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
