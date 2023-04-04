-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-04-2023 a las 23:04:10
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `lista_cons`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_participantes`
--

CREATE TABLE `datos_participantes` (
  `id` int(11) NOT NULL,
  `nombre_par` tinytext NOT NULL,
  `correo_par` tinytext NOT NULL,
  `cedula_par` int(16) NOT NULL,
  `grado_par` tinytext NOT NULL,
  `resi_par` tinyint(2) NOT NULL,
  `inst_par` tinytext NOT NULL,
  `ciudad_par` tinytext NOT NULL,
  `edad_par` tinyint(2) NOT NULL,
  `genero_par` tinytext NOT NULL,
  `dia_uno` tinyint(1) NOT NULL,
  `dia_dos` tinyint(1) NOT NULL,
  `dia_tres` tinyint(1) NOT NULL,
  `dia_cuatro` tinyint(1) NOT NULL,
  `fecha_par` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos_participantes`
--
ALTER TABLE `datos_participantes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datos_participantes`
--
ALTER TABLE `datos_participantes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
