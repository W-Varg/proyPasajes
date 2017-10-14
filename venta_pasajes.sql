-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-10-2017 a las 07:48:20
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `venta_pasajes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bus`
--

CREATE TABLE `bus` (
  `Placa` char(8) COLLATE utf8_bin NOT NULL,
  `Tipo` varchar(20) COLLATE utf8_bin NOT NULL,
  `Capacidad` int(11) NOT NULL,
  `fecha_registro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva`
--

CREATE TABLE `reserva` (
  `IdRecerva` int(11) NOT NULL,
  `IdTramo` int(11) DEFAULT NULL,
  `CiUsuario` int(11) NOT NULL,
  `NombreUsu` varchar(35) COLLATE utf8_bin DEFAULT NULL,
  `Origen` varchar(35) COLLATE utf8_bin NOT NULL,
  `Destino` varchar(35) COLLATE utf8_bin NOT NULL,
  `Celular` int(11) DEFAULT NULL,
  `NroAsiento` int(11) NOT NULL,
  `Fecha` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `reserva`
--

INSERT INTO `reserva` (`IdRecerva`, `IdTramo`, `CiUsuario`, `NombreUsu`, `Origen`, `Destino`, `Celular`, `NroAsiento`, `Fecha`) VALUES
(1, 4, 1234566, 'jose', 'sucre', 'potosi', 12345678, 21, '2017-10-08 00:00:00'),
(2, 4, 123456, 'carlos', 'sucre', 'lapaz', 123456, 22, '2017-10-09 00:00:00'),
(3, 4, 4561237, 'josefa', 'sucre', 'lapaz', 78945612, 3, '2017-10-17 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajador`
--

CREATE TABLE `trabajador` (
  `CiTrab` int(11) NOT NULL,
  `Apellidos` varchar(35) COLLATE utf8_bin DEFAULT NULL,
  `Nombres` varchar(35) COLLATE utf8_bin DEFAULT NULL,
  `Cargo` varchar(25) COLLATE utf8_bin DEFAULT NULL,
  `Cel` int(11) DEFAULT NULL,
  `fecha_registro_trab` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `trabajador`
--

INSERT INTO `trabajador` (`CiTrab`, `Apellidos`, `Nombres`, `Cargo`, `Cel`, `fecha_registro_trab`) VALUES
(12345678, 'vargas', 'wily', 'administrador', 72148220, '2017-10-14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tramos`
--

CREATE TABLE `tramos` (
  `IdTramos` int(11) NOT NULL,
  `Origen` varchar(35) COLLATE utf8_bin NOT NULL,
  `Destino` varchar(35) COLLATE utf8_bin NOT NULL,
  `Precio` int(11) NOT NULL,
  `IdViaje` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `hora_salida` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tramos`
--

INSERT INTO `tramos` (`IdTramos`, `Origen`, `Destino`, `Precio`, `IdViaje`, `fecha`, `hora_salida`) VALUES
(4, 'Sucre', 'Potosi', 20, 5, '2017-10-15', '08:29:24.000000'),
(5, 'sucre', 'lapa', 50, 5, '2017-10-15', '05:20:25.350000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `username` varchar(30) COLLATE utf8_bin NOT NULL,
  `Email` varchar(50) COLLATE utf8_bin NOT NULL,
  `password` char(15) COLLATE utf8_bin NOT NULL,
  `tipo` char(1) COLLATE utf8_bin NOT NULL,
  `idTrabajador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `username`, `Email`, `password`, `tipo`, `idTrabajador`) VALUES
(1, 'varg', 'jejejejeje@gmail.com', '123456', '1', 12345678);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `IdVenta` int(11) NOT NULL,
  `CiTrab` int(11) DEFAULT NULL,
  `IdRuta` int(11) DEFAULT NULL,
  `NombreCli` varchar(35) COLLATE utf8_bin DEFAULT NULL,
  `Precio` float DEFAULT NULL,
  `Fecha` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `viaje`
--

CREATE TABLE `viaje` (
  `IdViaje` int(11) NOT NULL,
  `Destino` varchar(35) COLLATE utf8_bin NOT NULL,
  `Precio` int(11) NOT NULL,
  `Fecha` date NOT NULL,
  `Hora` char(5) COLLATE utf8_bin NOT NULL,
  `PlacaBus` char(8) COLLATE utf8_bin NOT NULL,
  `Ntramos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `viaje`
--

INSERT INTO `viaje` (`IdViaje`, `Destino`, `Precio`, `Fecha`, `Hora`, `PlacaBus`, `Ntramos`) VALUES
(8, 'La Paz', 0, '2017-10-11', '16:00', '2546-LOK', 3),
(9, 'lapaz ', 0, '2017-10-16', '16:40', '1234-qwe', 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`Placa`);

--
-- Indices de la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`IdRecerva`);

--
-- Indices de la tabla `trabajador`
--
ALTER TABLE `trabajador`
  ADD PRIMARY KEY (`CiTrab`);

--
-- Indices de la tabla `tramos`
--
ALTER TABLE `tramos`
  ADD PRIMARY KEY (`IdTramos`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`IdVenta`);

--
-- Indices de la tabla `viaje`
--
ALTER TABLE `viaje`
  ADD PRIMARY KEY (`IdViaje`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `reserva`
--
ALTER TABLE `reserva`
  MODIFY `IdRecerva` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `tramos`
--
ALTER TABLE `tramos`
  MODIFY `IdTramos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `viaje`
--
ALTER TABLE `viaje`
  MODIFY `IdViaje` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
