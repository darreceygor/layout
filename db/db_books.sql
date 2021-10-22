-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-10-2021 a las 21:27:55
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_books`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autor`
--

CREATE TABLE `autor` (
  `id_autor` int(11) NOT NULL,
  `name` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `autor`
--

INSERT INTO `autor` (`id_autor`, `name`) VALUES
(1, 'autor1'),
(2, 'autor2'),
(3, 'autor3'),
(4, 'autor4'),
(5, 'autor5'),
(6, 'autor6');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `books`
--

CREATE TABLE `books` (
  `id_book` int(11) NOT NULL,
  `b_title` varchar(50) NOT NULL,
  `b_autor` varchar(50) NOT NULL,
  `b_year` varchar(20) NOT NULL,
  `b_country` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `books`
--

INSERT INTO `books` (`id_book`, `b_title`, `b_autor`, `b_year`, `b_country`) VALUES
(1, 'Poema de Gilgamesh', 'Anónimo', '1', 'Siglo XVII a. C.\r\n'),
(2, 'Libro de Job (de la Biblia)', 'Anónimo', 'Siglo VI a. C. - IV ', 'Imperio aqueménida'),
(3, 'Las mil y una noches', 'Anónimo', '700–1500', 'India/Irán/Irak/Egipto'),
(4, 'Saga de Njál', 'Anónimo', 'Siglo XIII', 'Islandia'),
(5, 'Todo se desmorona', 'Chinua Achebe', '1958', 'Nigeria'),
(6, 'Cuentos infantiles', 'Hans Christian Andersen', '1835–37', 'Dinamarca'),
(7, 'Divina comedia', 'Dante Alighieri', '1265–1321', 'Italia'),
(8, 'Orgullo y prejuicio', 'Jane Austen', '1813', 'Reino Unido'),
(9, 'Papá Goriot', 'Honoré de Balzac', '1835', 'Francia'),
(10, 'Molloy, Malone muere, El Innombrable, una trilogía', 'Samuel Beckett ', '1951–53', 'Irlanda'),
(12, 'Ramayana', 'Valmiki', 'siglo III a. C.-sigl', 'India'),
(13, 'Hojas de hierba', 'Walt Whitman', '1855', 'Estados Unidos'),
(14, 'Memorias de Adriano', 'Marguerite Yourcenar', '1951', 'Francia'),
(15, 'La señora Dalloway', '', '1925', ''),
(21, 'prueba 1', 'prueba 1', 'prueba 1', 'prueba 1'),
(22, 'prueba 2', 'prueba 2', 'prueba 2', 'prueba 2'),
(23, 'prueba 3', 'prueba 3', 'prueba 3', 'prueba 3'),
(24, 'prueba 4', 'prueba 4', 'prueba 4', 'prueba 4');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `autor`
--
ALTER TABLE `autor`
  ADD PRIMARY KEY (`id_autor`);

--
-- Indices de la tabla `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id_book`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `autor`
--
ALTER TABLE `autor`
  MODIFY `id_autor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `books`
--
ALTER TABLE `books`
  MODIFY `id_book` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
