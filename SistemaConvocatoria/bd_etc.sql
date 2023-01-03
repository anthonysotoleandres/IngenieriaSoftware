-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3360
-- Tiempo de generación: 09-09-2022 a las 22:22:15
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_etc`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `idadministrador` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `apellido` varchar(45) DEFAULT NULL,
  `usuario` varchar(45) DEFAULT NULL,
  `contraseña` varchar(100) DEFAULT NULL,
  `perfil` varchar(45) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `direccion` varchar(45) DEFAULT NULL,
  `edad` varchar(45) DEFAULT NULL,
  `sexo` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `empresa_idempresa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`idadministrador`, `nombre`, `apellido`, `usuario`, `contraseña`, `perfil`, `telefono`, `direccion`, `edad`, `sexo`, `email`, `empresa_idempresa`) VALUES
(6, 'Anthony', 'Leandres', 'thony', '$2y$10$Bm3qJt9wEq7/C23EmBixa.igPkHIR.ViZqoS1w0zaBlt185bSSe92', 'administrador', NULL, NULL, NULL, NULL, 'thonyvtl@gmail.com', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chofer`
--

CREATE TABLE `chofer` (
  `idchofer` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `apellido` varchar(45) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `direccion` varchar(45) DEFAULT NULL,
  `edad` varchar(45) DEFAULT NULL,
  `sexo` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `licencia` varchar(45) DEFAULT NULL,
  `empresa_idempresa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cronograma`
--

CREATE TABLE `cronograma` (
  `idcronograma` int(11) NOT NULL,
  `orden_salida` varchar(45) DEFAULT NULL,
  `ruta` varchar(45) DEFAULT NULL,
  `fecha` varchar(45) DEFAULT NULL,
  `administrador_idadministrador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `idempresa` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `direccion` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`idempresa`, `nombre`, `direccion`) VALUES
(1, 'Empresa de Transporte Cuadros', 'JR,Cusco');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `objeto_perdidos`
--

CREATE TABLE `objeto_perdidos` (
  `idobjeto_perdidos` int(11) NOT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  `objeto_perdidoscol` varchar(45) DEFAULT NULL,
  `chofer_idchofer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos`
--

CREATE TABLE `pagos` (
  `idpagos` int(11) NOT NULL,
  `monto` varchar(45) DEFAULT NULL,
  `fecha_pago` varchar(45) DEFAULT NULL,
  `pagoscol` varchar(45) DEFAULT NULL,
  `socio_idsocio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pasaje`
--

CREATE TABLE `pasaje` (
  `idpasaje` int(11) NOT NULL,
  `precioRuta1` varchar(45) DEFAULT NULL,
  `precioRuta2` varchar(45) DEFAULT NULL,
  `administrador_idadministrador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `socio`
--

CREATE TABLE `socio` (
  `idsocio` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `apellido` varchar(45) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `direccion` varchar(45) DEFAULT NULL,
  `edad` varchar(45) DEFAULT NULL,
  `sexo` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `numero de vehiculos` varchar(45) DEFAULT NULL,
  `empresa_idempresa` int(11) NOT NULL,
  `usuario` varchar(40) DEFAULT NULL,
  `contraseña` varchar(40) DEFAULT NULL,
  `perfil` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `socio`
--

INSERT INTO `socio` (`idsocio`, `nombre`, `apellido`, `telefono`, `direccion`, `edad`, `sexo`, `email`, `numero de vehiculos`, `empresa_idempresa`, `usuario`, `contraseña`, `perfil`) VALUES
(2, 'pedro', 'perez', 'pepe', '111111', 'socio', NULL, NULL, NULL, 1, NULL, NULL, '1'),
(3, 'juan', 'peres', NULL, NULL, NULL, NULL, NULL, NULL, 1, 'pepe', '$2y$10$KMpPHkJtGHaDIZNndVPWDOf5V.ubn5Gmb', 'socio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculos`
--

CREATE TABLE `vehiculos` (
  `idvehiculos` int(11) NOT NULL,
  `placa` varchar(45) DEFAULT NULL,
  `color` varchar(45) DEFAULT NULL,
  `marca` varchar(45) DEFAULT NULL,
  `modelo` varchar(45) DEFAULT NULL,
  `tipo_vehiculo` varchar(45) DEFAULT NULL,
  `socio_idsocio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`idadministrador`,`empresa_idempresa`),
  ADD KEY `fk_administrador_empresa1_idx` (`empresa_idempresa`);

--
-- Indices de la tabla `chofer`
--
ALTER TABLE `chofer`
  ADD PRIMARY KEY (`idchofer`,`empresa_idempresa`),
  ADD KEY `fk_chofer_empresa1_idx` (`empresa_idempresa`);

--
-- Indices de la tabla `cronograma`
--
ALTER TABLE `cronograma`
  ADD PRIMARY KEY (`idcronograma`,`administrador_idadministrador`),
  ADD KEY `fk_cronograma_administrador1_idx` (`administrador_idadministrador`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`idempresa`);

--
-- Indices de la tabla `objeto_perdidos`
--
ALTER TABLE `objeto_perdidos`
  ADD PRIMARY KEY (`idobjeto_perdidos`,`chofer_idchofer`),
  ADD KEY `fk_objeto_perdidos_chofer1_idx` (`chofer_idchofer`);

--
-- Indices de la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD PRIMARY KEY (`idpagos`,`socio_idsocio`),
  ADD KEY `fk_pagos_socio1_idx` (`socio_idsocio`);

--
-- Indices de la tabla `pasaje`
--
ALTER TABLE `pasaje`
  ADD PRIMARY KEY (`idpasaje`,`administrador_idadministrador`),
  ADD KEY `fk_pasaje_administrador1_idx` (`administrador_idadministrador`);

--
-- Indices de la tabla `socio`
--
ALTER TABLE `socio`
  ADD PRIMARY KEY (`idsocio`,`empresa_idempresa`),
  ADD KEY `fk_socio_empresa1_idx` (`empresa_idempresa`);

--
-- Indices de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD PRIMARY KEY (`idvehiculos`,`socio_idsocio`),
  ADD KEY `fk_vehiculos_socio1_idx` (`socio_idsocio`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `idadministrador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `chofer`
--
ALTER TABLE `chofer`
  MODIFY `idchofer` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cronograma`
--
ALTER TABLE `cronograma`
  MODIFY `idcronograma` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `objeto_perdidos`
--
ALTER TABLE `objeto_perdidos`
  MODIFY `idobjeto_perdidos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pagos`
--
ALTER TABLE `pagos`
  MODIFY `idpagos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pasaje`
--
ALTER TABLE `pasaje`
  MODIFY `idpasaje` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `socio`
--
ALTER TABLE `socio`
  MODIFY `idsocio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  MODIFY `idvehiculos` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD CONSTRAINT `fk_administrador_empresa1` FOREIGN KEY (`empresa_idempresa`) REFERENCES `empresa` (`idempresa`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `chofer`
--
ALTER TABLE `chofer`
  ADD CONSTRAINT `fk_chofer_empresa1` FOREIGN KEY (`empresa_idempresa`) REFERENCES `empresa` (`idempresa`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cronograma`
--
ALTER TABLE `cronograma`
  ADD CONSTRAINT `fk_cronograma_administrador1` FOREIGN KEY (`administrador_idadministrador`) REFERENCES `administrador` (`idadministrador`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `objeto_perdidos`
--
ALTER TABLE `objeto_perdidos`
  ADD CONSTRAINT `fk_objeto_perdidos_chofer1` FOREIGN KEY (`chofer_idchofer`) REFERENCES `chofer` (`idchofer`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD CONSTRAINT `fk_pagos_socio1` FOREIGN KEY (`socio_idsocio`) REFERENCES `socio` (`idsocio`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `pasaje`
--
ALTER TABLE `pasaje`
  ADD CONSTRAINT `fk_pasaje_administrador1` FOREIGN KEY (`administrador_idadministrador`) REFERENCES `administrador` (`idadministrador`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `socio`
--
ALTER TABLE `socio`
  ADD CONSTRAINT `fk_socio_empresa1` FOREIGN KEY (`empresa_idempresa`) REFERENCES `empresa` (`idempresa`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD CONSTRAINT `fk_vehiculos_socio1` FOREIGN KEY (`socio_idsocio`) REFERENCES `socio` (`idsocio`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
