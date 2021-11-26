-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-11-2021 a las 03:31:05
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbprepaparticular`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `Nombre` varchar(50) NOT NULL,
  `Apellidos` varchar(50) NOT NULL,
  `E-Mail` varchar(50) NOT NULL,
  `Num_Control` int(50) NOT NULL,
  `Semestre` int(50) NOT NULL,
  `Especialidad` varchar(50) NOT NULL,
  `Num_Telefono` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`Nombre`, `Apellidos`, `E-Mail`, `Num_Control`, `Semestre`, `Especialidad`, `Num_Telefono`) VALUES
('Jonathan', 'Rodriguez Perez', 'jonatanrd2015@gmail.com', 671, 5, 'Programacion', 987654321),
('Jonathan', 'Rodriguez Perez', 'jonatanrd2015@gmail.com', 671, 5, 'Programacion', 987654321),
('Naydelin', 'Rodriguez Perez', 'naydelin@gmail.com', 675, 3, 'Administracion ', 2147483647),
('Felipa', 'Hernandez Blanco', 'felipa@gmail.com', 672, 5, 'Programacion', 666666666),
('Jesus', 'Gonzales Hernandez', 'jesus@gmail.com', 666, 5, 'Programacion', 123456789),
('Eliseo', 'Gonzales Alba', 'gonzales@gmail.com', 673, 5, 'Gericultura', 897654321);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificacion`
--

CREATE TABLE `calificacion` (
  `IdProfesor` int(50) NOT NULL,
  `Num_Control_Alumno` int(50) NOT NULL,
  `Calif_Unidad_I` int(50) NOT NULL,
  `Calif_Unidad_II` int(50) NOT NULL,
  `Calif_Unidad_III` int(50) NOT NULL,
  `Promedio` int(50) NOT NULL,
  `IdMateria` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `calificacion`
--

INSERT INTO `calificacion` (`IdProfesor`, `Num_Control_Alumno`, `Calif_Unidad_I`, `Calif_Unidad_II`, `Calif_Unidad_III`, `Promedio`, `IdMateria`) VALUES
(1, 671, 10, 10, 10, 10, '1'),
(1, 671, 10, 10, 10, 10, '1'),
(2, 672, 10, 10, 10, 10, '2'),
(3, 673, 9, 9, 9, 9, '3'),
(4, 674, 8, 8, 8, 8, '4'),
(5, 675, 7, 7, 7, 7, '5');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE `materias` (
  `IdMateria` int(50) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Descripcion` varchar(150) NOT NULL,
  `Semestre_en_que_se_da` varchar(50) NOT NULL,
  `Unidades_en_total` varchar(50) NOT NULL,
  `Practicas` varchar(50) NOT NULL,
  `Creditos` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`IdMateria`, `Nombre`, `Descripcion`, `Semestre_en_que_se_da`, `Unidades_en_total`, `Practicas`, `Creditos`) VALUES
(1, 'Matematicas', 'Hacer ecuaciones', '0', '0', '10', '80'),
(1, 'Matematicas', 'Hacer ecuaciones', '1', '3', '10', '80'),
(2, 'Ciencias', 'Hacer experimentos', '1', '3', '15', '40'),
(3, 'Español', 'Hacer ensayos', '3', '3', '30', '90'),
(4, 'Etica', 'Entender los derechos humanos', '3', '3', '30', '40'),
(5, 'Tutoria', 'Hacer Construyetes', '1', '3', '30', '40');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor`
--

CREATE TABLE `profesor` (
  `Nombre` varchar(50) NOT NULL,
  `Apellidos` varchar(100) NOT NULL,
  `IdProfesor` int(50) NOT NULL,
  `E-Mail` varchar(50) NOT NULL,
  `Especialidad_del_profesor` varchar(50) NOT NULL,
  `Direccion_del_profesor` varchar(50) NOT NULL,
  `Num_Telefono` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `profesor`
--

INSERT INTO `profesor` (`Nombre`, `Apellidos`, `IdProfesor`, `E-Mail`, `Especialidad_del_profesor`, `Direccion_del_profesor`, `Num_Telefono`) VALUES
('Naydelin', 'Rodriguez Perez', 3, 'naydelin@gmail.com', 'Gericultura', 'Hacienda las torres', '0'),
('Eliseo', 'Nava Rodriguez', 1, 'nava@gmail.com', 'Programacion', 'Gran Patio Zaragoza', '666666666'),
('Naydelin', 'Rodriguez Perez', 2, 'naydelin@gmail.com', 'Gericultura', 'Hacienda las torres', '2147483648'),
('Jonathan', 'Rodriguez Perez', 3, 'jonatanrd2015@gmail.com', 'Programacion', 'Hacienda las torres', '6566586685'),
('Felipa', 'Hernandez Blanco', 4, 'felipa@gmail.com', 'Gericultura', 'Gran Patio Zaragoza', '987654321'),
('Jesus', 'Rodriguez Gonzales', 5, 'jesus@gmail.com', 'Refrigeracion', 'Gran Patio Zaragoza', '6566586686');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
