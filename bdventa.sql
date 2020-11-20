-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-11-2020 a las 04:42:03
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdventa`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_cantidadproducto` (OUT `xcanpro` INT)  NO SQL
SELECT COUNT(*) INTO xcanpro FROM producto$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_consulta` (IN `xcodigo` CHAR(5))  NO SQL
SELECT * FROM producto WHERE codigo=xcodigo$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_mostrar` ()  NO SQL
SELECT * FROM producto$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_preciomaximo` (OUT `preciomax` DOUBLE(7,2))  NO SQL
SELECt MAX(precio) into preciomax from producto$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_preciominimo` (OUT `preciom` DOUBLE(7,2))  NO SQL
SELECT MIN(precio) into preciom FROM producto$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_stock` (IN `x1` INT, IN `x2` INT)  NO SQL
SELECT * FROM producto
WHERE stock>=x1 and stock<=x2$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_totalstock` (OUT `xstockt` INT(11))  NO SQL
SELECT sum(stock) into xstockt from producto$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `codigo` char(5) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `marca` varchar(20) NOT NULL,
  `modelo` varchar(20) NOT NULL,
  `precio` double(7,2) NOT NULL,
  `stock` int(11) NOT NULL,
  `fabricacion` int(11) NOT NULL,
  `foto` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`codigo`, `nombre`, `marca`, `modelo`, `precio`, `stock`, `fabricacion`, `foto`) VALUES
('lav18', 'lavadora', 'samsung', 'lk23f', 800.00, 50, 2019, 'lavadora.jpg'),
('lic24', 'licuadora', 'oster', 'utj24', 500.00, 100, 2018, 'licuadora.jpg'),
('mic12', 'microondas', 'saga', 's5te', 400.00, 200, 2020, 'microondas.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`codigo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
