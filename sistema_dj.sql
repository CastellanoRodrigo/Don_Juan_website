-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3307
-- Tiempo de generación: 20-01-2023 a las 19:29:28
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistema_dj`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alquiler`
--

CREATE TABLE `alquiler` (
  `Id_Alquiler` int(20) NOT NULL,
  `Id_Parcela` int(20) NOT NULL,
  `NombreArrendatario` varchar(25) NOT NULL,
  `FechaInicio` date NOT NULL,
  `FechaFin` date NOT NULL,
  `Estado` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `Id_Categoria` int(20) NOT NULL,
  `nombreCategoria` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`Id_Categoria`, `nombreCategoria`) VALUES
(1, 'Ternero'),
(2, 'Novillito'),
(3, 'Vaquillona'),
(4, 'Novillo'),
(5, 'Vaca'),
(6, 'Toro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chequesa_pagar`
--

CREATE TABLE `chequesa_pagar` (
  `NroCheque` int(25) NOT NULL,
  `Concepto` varchar(25) NOT NULL,
  `FechaEmision` date NOT NULL,
  `FechaVencimiento` date NOT NULL,
  `Importe` double NOT NULL,
  `Estado` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chequesemtidos`
--

CREATE TABLE `chequesemtidos` (
  `NroCheque` int(25) NOT NULL,
  `Concepto` varchar(25) NOT NULL,
  `FechaEmision` date NOT NULL,
  `FechaVencimiento` date NOT NULL,
  `Importe` double NOT NULL,
  `Estado` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `Id_Compra` int(20) NOT NULL,
  `Id_Campaña` int(20) NOT NULL,
  `Fecha` date NOT NULL,
  `TipoFactura` int(25) NOT NULL,
  `PuntoDeVenta` int(25) NOT NULL,
  `NumeroDesde` int(25) NOT NULL,
  `NumeroHasta` int(25) NOT NULL,
  `CodAutorizacion` int(25) NOT NULL,
  `TipoDocEmisor` varchar(25) NOT NULL,
  `NroDocEmisor` int(25) NOT NULL,
  `DenominacionEmisor` varchar(25) NOT NULL,
  `TipoCambio` varchar(25) NOT NULL,
  `Moneda` varchar(25) NOT NULL,
  `ImpNetoGravado` double NOT NULL,
  `ImNetoNoGravado` double NOT NULL,
  `ImpOpExentas` double NOT NULL,
  `IVA` varchar(25) NOT NULL,
  `ImporteTotal` double NOT NULL,
  `Detalle` varchar(25) NOT NULL,
  `FormaPago` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalleinicialhacienda`
--

CREATE TABLE `detalleinicialhacienda` (
  `Id_DetalleHacienda` int(20) NOT NULL,
  `Id_ProyectoHacienda` int(20) NOT NULL,
  `FechaInicio` date NOT NULL,
  `FechaCierre` date NOT NULL,
  `CantidadHectareas` int(20) NOT NULL,
  `CantidadCabezas` int(20) NOT NULL,
  `Id_Categoria` int(25) NOT NULL,
  `InversionInicial` decimal(25,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `detalleinicialhacienda`
--

INSERT INTO `detalleinicialhacienda` (`Id_DetalleHacienda`, `Id_ProyectoHacienda`, `FechaInicio`, `FechaCierre`, `CantidadHectareas`, `CantidadCabezas`, `Id_Categoria`, `InversionInicial`) VALUES
(1, 1, '2022-11-19', '2024-01-05', 45, 50, 1, '350000'),
(2, 2, '2022-11-22', '2024-06-15', 50, 25, 2, '66666666'),
(3, 7, '2022-10-10', '2024-01-05', 15, 35, 1, '4444444'),
(4, 9, '2022-10-10', '2024-06-03', 20, 50, 2, '1234');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalleinicialsiembra`
--

CREATE TABLE `detalleinicialsiembra` (
  `Id_DetalleSiembra` int(20) NOT NULL,
  `Id_ProyectoSiembra` int(20) NOT NULL,
  `FechaInicio` date NOT NULL,
  `FechaCierre` date NOT NULL,
  `CantidadHectareas` int(20) NOT NULL,
  `Id_Cultivo` int(20) NOT NULL,
  `RindeEspeculado` int(20) NOT NULL,
  `InversionInicial` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `detalleinicialsiembra`
--

INSERT INTO `detalleinicialsiembra` (`Id_DetalleSiembra`, `Id_ProyectoSiembra`, `FechaInicio`, `FechaCierre`, `CantidadHectareas`, `Id_Cultivo`, `RindeEspeculado`, `InversionInicial`) VALUES
(1, 1, '0000-00-00', '0000-00-00', 50, 1, 250000, '500000'),
(2, 1, '2022-10-10', '2023-11-11', 50, 1, 4500100, '500000'),
(4, 4, '0000-00-00', '2023-11-11', 20, 3, 320001, '52222222'),
(5, 11, '2022-10-10', '2023-11-11', 15, 3, 55555, '12341234');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_parcela`
--

CREATE TABLE `estado_parcela` (
  `Id_EstadoParcela` int(20) NOT NULL,
  `Estado` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estado_parcela`
--

INSERT INTO `estado_parcela` (`Id_EstadoParcela`, `Estado`) VALUES
(1, 'Libre'),
(2, 'Ocupacion Parcial'),
(3, 'Ocupacion Completa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hacienda`
--

CREATE TABLE `hacienda` (
  `Fecha` date NOT NULL,
  `Vendedor` varchar(20) NOT NULL,
  `CantidadCabezas` int(4) NOT NULL,
  `KgTotal` int(10) NOT NULL,
  `KgPromedio` int(10) NOT NULL,
  `PrecioPorCabeza` float NOT NULL,
  `PrecioBruto` float NOT NULL,
  `CostoTotalCompra` float NOT NULL,
  `Categoria` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_estado`
--

CREATE TABLE `historial_estado` (
  `Id_Historial_Estado` int(20) NOT NULL,
  `Estado` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `historial_estado`
--

INSERT INTO `historial_estado` (`Id_Historial_Estado`, `Estado`) VALUES
(1, 'Iniciada'),
(2, 'Finalizada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parcela`
--

CREATE TABLE `parcela` (
  `Id_Parcela` int(11) NOT NULL,
  `CantidadHectareas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `parcela`
--

INSERT INTO `parcela` (`Id_Parcela`, `CantidadHectareas`) VALUES
(1, 43),
(2, 90),
(3, 100),
(4, 70),
(5, 100),
(6, 70),
(8, 35),
(9, 65),
(10, 95),
(11, 30);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectohacienda`
--

CREATE TABLE `proyectohacienda` (
  `Id_ProyectoHacienda` int(20) NOT NULL,
  `Id_Parcela` int(20) NOT NULL,
  `NombreProyecto` varchar(25) NOT NULL,
  `Estado` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `proyectohacienda`
--

INSERT INTO `proyectohacienda` (`Id_ProyectoHacienda`, `Id_Parcela`, `NombreProyecto`, `Estado`) VALUES
(1, 8, 'Aberdinangus', 'Iniciado'),
(2, 9, 'Helford', 'Iniciado'),
(6, 10, 'Costillares', 'Finalizado'),
(7, 4, 'vacaGrande', 'Iniciado'),
(9, 4, 'RodriCuleado', 'Iniciado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectosiembra`
--

CREATE TABLE `proyectosiembra` (
  `Id_ProyectoSiembra` int(20) NOT NULL,
  `Id_Parcela` int(20) NOT NULL,
  `NombreProyecto` varchar(25) NOT NULL,
  `Estado` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `proyectosiembra`
--

INSERT INTO `proyectosiembra` (`Id_ProyectoSiembra`, `Id_Parcela`, `NombreProyecto`, `Estado`) VALUES
(1, 5, 'Cosecha Gruesa Maiz 2023', 'Iniciado'),
(2, 1, 'Alfalfa 2023', 'Iniciado'),
(4, 3, 'pepinos verdes', 'Iniciado'),
(11, 1, 'pepe el grillo', 'Iniciado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rindeconsecha`
--

CREATE TABLE `rindeconsecha` (
  `Id_RindeCosecha` int(20) NOT NULL,
  `ParcelasUtilizadas` varchar(25) NOT NULL,
  `CantHectareas` int(20) NOT NULL,
  `CantBolsas` int(20) NOT NULL,
  `CantKgPorBolsa` int(20) NOT NULL,
  `CantKgPorSilo` int(20) NOT NULL,
  `KgTotales` int(20) NOT NULL,
  `PromedioPorHectarea` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `siembra`
--

CREATE TABLE `siembra` (
  `Id_Cultivo` int(20) NOT NULL,
  `NombreCultivo` varchar(25) NOT NULL,
  `KgSemillaPorHectarea` int(25) NOT NULL,
  `RindeEsperadoPorHectarea` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `siembra`
--

INSERT INTO `siembra` (`Id_Cultivo`, `NombreCultivo`, `KgSemillaPorHectarea`, `RindeEsperadoPorHectarea`) VALUES
(1, 'Maiz de Primera', 20, 5000),
(2, 'Maiz de segunda', 20, 6000),
(3, 'Girasol', 20, 2000),
(4, 'Cebada', 110, 3000),
(5, 'Avena', 6, 2000),
(6, 'Alfalfa', 10, 5),
(7, 'Soja', 70, 2500);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `id` int(11) NOT NULL,
  `tipo` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`id`, `tipo`) VALUES
(1, 'Adm. de Negocio'),
(2, 'Adm. General');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `tipo_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `password`, `nombre`, `apellido`, `tipo_usuario`) VALUES
(1, 'admin', 'admin', 'Aldo', 'Dolce', 1),
(2, 'Admin_Gen', 'admin', 'Lucila', 'Dolce', 1),
(3, 'Tu turrito', '456', 'her', 'altola', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`Id_Categoria`);

--
-- Indices de la tabla `detalleinicialhacienda`
--
ALTER TABLE `detalleinicialhacienda`
  ADD PRIMARY KEY (`Id_DetalleHacienda`);

--
-- Indices de la tabla `detalleinicialsiembra`
--
ALTER TABLE `detalleinicialsiembra`
  ADD PRIMARY KEY (`Id_DetalleSiembra`);

--
-- Indices de la tabla `proyectohacienda`
--
ALTER TABLE `proyectohacienda`
  ADD PRIMARY KEY (`Id_ProyectoHacienda`);

--
-- Indices de la tabla `proyectosiembra`
--
ALTER TABLE `proyectosiembra`
  ADD PRIMARY KEY (`Id_ProyectoSiembra`);

--
-- Indices de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `Id_Categoria` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `detalleinicialhacienda`
--
ALTER TABLE `detalleinicialhacienda`
  MODIFY `Id_DetalleHacienda` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `detalleinicialsiembra`
--
ALTER TABLE `detalleinicialsiembra`
  MODIFY `Id_DetalleSiembra` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `proyectohacienda`
--
ALTER TABLE `proyectohacienda`
  MODIFY `Id_ProyectoHacienda` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `proyectosiembra`
--
ALTER TABLE `proyectosiembra`
  MODIFY `Id_ProyectoSiembra` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
