-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 12-04-2023 a las 12:05:09
-- Versión del servidor: 8.0.32
-- Versión de PHP: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mexico3d_list_cons`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_participantes`
--

CREATE TABLE `datos_participantes` (
  `id` int NOT NULL,
  `nombre_par` char(55) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL DEFAULT 'A',
  `correo_par` char(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL DEFAULT 'CC',
  `cedula_par` char(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `grado_par` char(22) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL DEFAULT 'GA',
  `resi_par` text COLLATE utf8mb4_spanish2_ci,
  `inst_par` char(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL DEFAULT 'INS',
  `ciudad_par` char(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `edad_par` int NOT NULL DEFAULT '0',
  `genero_par` char(22) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `dia_uno` tinyint(1) NOT NULL DEFAULT '0',
  `dia_dos` tinyint(1) NOT NULL DEFAULT '0',
  `dia_tres` tinyint(1) NOT NULL DEFAULT '0',
  `dia_cuatro` tinyint(1) NOT NULL DEFAULT '0',
  `fecha_par` date DEFAULT NULL,
  `hash_par` varchar(70) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci DEFAULT NULL
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
  MODIFY `id` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
