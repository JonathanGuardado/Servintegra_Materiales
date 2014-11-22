-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-11-2014 a las 19:21:21
-- Versión del servidor: 5.6.17-log
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `servintegra`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `ID_CATEGORIA` decimal(8,0) NOT NULL,
  `NOMBRE_CATEGORIA` text NOT NULL,
  `DESCRIPCION_UNIDAD` text NOT NULL,
  PRIMARY KEY (`ID_CATEGORIA`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_orden_salida`
--

CREATE TABLE IF NOT EXISTS `detalle_orden_salida` (
  `ID_DETALLE_ORDEN` decimal(8,0) NOT NULL,
  `MATERIAL` decimal(8,0) NOT NULL,
  `ORDEN` decimal(8,0) NOT NULL,
  `PRECIO_ORDEN` decimal(10,2) NOT NULL,
  `CANTIDAD_ORDEN` float NOT NULL,
  `COSTO_ORDEN` decimal(10,2) NOT NULL,
  `USUARIO_CREACION` varchar(50) NOT NULL,
  `FECHA_CREACION` datetime NOT NULL,
  `USUARIO_MODIFICACION` varchar(50) DEFAULT NULL,
  `FECHA_MODIFICACION` datetime DEFAULT NULL,
  PRIMARY KEY (`ID_DETALLE_ORDEN`),
  KEY `FK_MATERIAL_DETALLE_ORDEN_SALIDA` (`MATERIAL`),
  KEY `FK_ORDEN_SALIDA_DETALLE` (`ORDEN`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `excedente`
--

CREATE TABLE IF NOT EXISTS `excedente` (
  `ID_EXCEDENTE` decimal(8,0) NOT NULL,
  `PRESUPUESTO_MENSUAL` decimal(8,0) NOT NULL,
  `MONTO` decimal(10,2) NOT NULL,
  `AUTORIZO_EXCEDENTE` varchar(50) NOT NULL,
  `USUARIO_CREACION` varchar(50) NOT NULL,
  `FECHA_CREACION` datetime NOT NULL,
  `USUARIO_MODIFICACION` varchar(50) DEFAULT NULL,
  `FECHA_MODIFICACION` datetime DEFAULT NULL,
  PRIMARY KEY (`ID_EXCEDENTE`),
  KEY `FK_PRESUPUESTO_MENSUAL_EXCEDENTE` (`PRESUPUESTO_MENSUAL`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `material`
--

CREATE TABLE IF NOT EXISTS `material` (
  `ID_MATERIAL` decimal(8,0) NOT NULL,
  `CATEGORIA` decimal(8,0) NOT NULL,
  `UNIDAD_MEDIDA` decimal(8,0) NOT NULL,
  `NOMBRE_MATERIAL` text NOT NULL,
  `PRECIO_MATERIAL` decimal(10,2) NOT NULL,
  `COSTO_MATERIAL` decimal(10,2) NOT NULL,
  `EXISTENCIA_ACTUAL` float NOT NULL,
  `CANTIDAD_REORDEN` float NOT NULL,
  `UBICACION` text NOT NULL,
  `DESCRIPCION_UNIDAD` text NOT NULL,
  `USUARIO_CREACION` varchar(50) NOT NULL,
  `FECHA_CREACION` datetime NOT NULL,
  `USUARIO_MODIFICACION` varchar(50) DEFAULT NULL,
  `FECHA_MODIFICACION` datetime DEFAULT NULL,
  PRIMARY KEY (`ID_MATERIAL`),
  KEY `FK_CATEGORIA_MATERIAL` (`CATEGORIA`),
  KEY `FK_UNIDAD_MEDIDA_MATERIAL` (`UNIDAD_MEDIDA`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden_presupuestada`
--

CREATE TABLE IF NOT EXISTS `orden_presupuestada` (
  `ID_ORDEN_PRESUPUESTADA` decimal(8,0) NOT NULL,
  `MATERIAL` decimal(8,0) NOT NULL,
  `PRESUPUESTO_MENSUAL` decimal(8,0) NOT NULL,
  `PRECIO_PRESUPUESTO` decimal(10,2) NOT NULL,
  `CANTIDAD_PRESUPUESTO` float NOT NULL,
  `USUARIO_CREACION` varchar(50) NOT NULL,
  `FECHA_CREACION` datetime NOT NULL,
  `USUARIO_MODIFICACION` varchar(50) DEFAULT NULL,
  `FECHA_MODIFICACION` datetime DEFAULT NULL,
  PRIMARY KEY (`ID_ORDEN_PRESUPUESTADA`),
  KEY `FK_MATERIAL_ORDEN_PRESUPUESTADA` (`MATERIAL`),
  KEY `FK_PRESUPUESTO_MENSUAL_ORDEN_PRESUPUESTADA` (`PRESUPUESTO_MENSUAL`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden_salida`
--

CREATE TABLE IF NOT EXISTS `orden_salida` (
  `ID_ORDEN` decimal(8,0) NOT NULL,
  `PROYECTO` decimal(8,0) NOT NULL,
  `ANIO_ORDEN` int(11) NOT NULL,
  `MES_ORDEN` int(11) NOT NULL,
  `TOTAL_ORDEN` decimal(10,2) NOT NULL,
  `RECIBIO_ORDEN` varchar(50) NOT NULL,
  `ENTREGO_ORDEN` varchar(50) NOT NULL,
  `AUTORIZO_ORDEN` varchar(50) NOT NULL,
  `USUARIO_CREACION` varchar(50) NOT NULL,
  `FECHA_CREACION` datetime NOT NULL,
  `USUARIO_MODIFICACION` varchar(50) DEFAULT NULL,
  `FECHA_MODIFICACION` datetime DEFAULT NULL,
  PRIMARY KEY (`ID_ORDEN`),
  KEY `FK_PROYECTO_ORDEN_SALIDA` (`PROYECTO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `presupuesto_mensual`
--

CREATE TABLE IF NOT EXISTS `presupuesto_mensual` (
  `ID_PRESUPUESTO_MENSUAL` decimal(8,0) NOT NULL,
  `PROYECTO` decimal(8,0) NOT NULL,
  `MES_PRESUPUESTO` int(11) NOT NULL,
  `ANIO_PRESUPUESTO` int(11) NOT NULL,
  `PRESUPUESTO` decimal(8,2) NOT NULL,
  `USUARIO_CREACION` varchar(50) NOT NULL,
  `FECHA_CREACION` datetime NOT NULL,
  `USUARIO_MODIFICACION` varchar(50) DEFAULT NULL,
  `FECHA_MODIFICACION` datetime DEFAULT NULL,
  PRIMARY KEY (`ID_PRESUPUESTO_MENSUAL`),
  KEY `FK_PROYECTO_PRESUPUESTO_MENSUAL` (`PROYECTO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto`
--

CREATE TABLE IF NOT EXISTS `proyecto` (
  `ID_PROYECTO` decimal(8,0) NOT NULL,
  `UNIDAD_NEGOCIO` decimal(8,0) NOT NULL,
  `N_PERSONAS` decimal(8,0) NOT NULL,
  `F_INICIO` date NOT NULL,
  `PRESUPUESTO` decimal(8,2) NOT NULL,
  `RESPONSABLE` text NOT NULL,
  `EXCEDENTE_PROYECTO` decimal(10,2) DEFAULT NULL,
  `USUARIO_CREACION` varchar(50) NOT NULL,
  `FECHA_CREACION` datetime NOT NULL,
  `USUARIO_MODIFICACION` varchar(50) DEFAULT NULL,
  `FECHA_MODIFICACION` datetime DEFAULT NULL,
  PRIMARY KEY (`ID_PROYECTO`),
  KEY `FK_UNIDAD_NEGOCIO_PROYECTO` (`UNIDAD_NEGOCIO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidad_medida`
--

CREATE TABLE IF NOT EXISTS `unidad_medida` (
  `ID_UNIDAD` decimal(8,0) NOT NULL,
  `NOMBRE_UNIDAD` text NOT NULL,
  `DESCRIPCION_UNIDAD` text NOT NULL,
  PRIMARY KEY (`ID_UNIDAD`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidad_negocio`
--

CREATE TABLE IF NOT EXISTS `unidad_negocio` (
  `ID_UNIDAD_NEGOCIO` decimal(8,0) NOT NULL,
  `NOMBRE_UNIDAD_NEGOCIO` text NOT NULL,
  `DESCRIPCION_UNIDAD_NEGOCIO` text NOT NULL,
  PRIMARY KEY (`ID_UNIDAD_NEGOCIO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalle_orden_salida`
--
ALTER TABLE `detalle_orden_salida`
  ADD CONSTRAINT `FK_MATERIAL_DETALLE_ORDEN_SALIDA` FOREIGN KEY (`MATERIAL`) REFERENCES `material` (`ID_MATERIAL`),
  ADD CONSTRAINT `FK_ORDEN_SALIDA_DETALLE` FOREIGN KEY (`ORDEN`) REFERENCES `orden_salida` (`ID_ORDEN`);

--
-- Filtros para la tabla `excedente`
--
ALTER TABLE `excedente`
  ADD CONSTRAINT `FK_PRESUPUESTO_MENSUAL_EXCEDENTE` FOREIGN KEY (`PRESUPUESTO_MENSUAL`) REFERENCES `presupuesto_mensual` (`ID_PRESUPUESTO_MENSUAL`);

--
-- Filtros para la tabla `material`
--
ALTER TABLE `material`
  ADD CONSTRAINT `FK_CATEGORIA_MATERIAL` FOREIGN KEY (`CATEGORIA`) REFERENCES `categoria` (`ID_CATEGORIA`),
  ADD CONSTRAINT `FK_UNIDAD_MEDIDA_MATERIAL` FOREIGN KEY (`UNIDAD_MEDIDA`) REFERENCES `unidad_medida` (`ID_UNIDAD`);

--
-- Filtros para la tabla `orden_presupuestada`
--
ALTER TABLE `orden_presupuestada`
  ADD CONSTRAINT `FK_MATERIAL_ORDEN_PRESUPUESTADA` FOREIGN KEY (`MATERIAL`) REFERENCES `material` (`ID_MATERIAL`),
  ADD CONSTRAINT `FK_PRESUPUESTO_MENSUAL_ORDEN_PRESUPUESTADA` FOREIGN KEY (`PRESUPUESTO_MENSUAL`) REFERENCES `presupuesto_mensual` (`ID_PRESUPUESTO_MENSUAL`);

--
-- Filtros para la tabla `orden_salida`
--
ALTER TABLE `orden_salida`
  ADD CONSTRAINT `FK_PROYECTO_ORDEN_SALIDA` FOREIGN KEY (`PROYECTO`) REFERENCES `proyecto` (`ID_PROYECTO`);

--
-- Filtros para la tabla `presupuesto_mensual`
--
ALTER TABLE `presupuesto_mensual`
  ADD CONSTRAINT `FK_PROYECTO_PRESUPUESTO_MENSUAL` FOREIGN KEY (`PROYECTO`) REFERENCES `proyecto` (`ID_PROYECTO`);

--
-- Filtros para la tabla `proyecto`
--
ALTER TABLE `proyecto`
  ADD CONSTRAINT `FK_UNIDAD_NEGOCIO_PROYECTO` FOREIGN KEY (`UNIDAD_NEGOCIO`) REFERENCES `unidad_negocio` (`ID_UNIDAD_NEGOCIO`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
