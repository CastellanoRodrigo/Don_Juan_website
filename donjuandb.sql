-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3307
-- Tiempo de generación: 15-03-2023 a las 11:32:12
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
-- Base de datos: `donjuandb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `nombreCategoria` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nombreCategoria`) VALUES
(1, 'Ternero'),
(2, 'Novillito'),
(3, 'Vaquillona'),
(4, 'Novillo'),
(5, 'Vaca'),
(6, 'Toro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cultivos`
--

CREATE TABLE `cultivos` (
  `id_cultivo` int(11) NOT NULL,
  `nombreCultivo` varchar(45) NOT NULL,
  `kgSemillaHas` int(11) NOT NULL,
  `rideEsperadoHas` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cultivos`
--

INSERT INTO `cultivos` (`id_cultivo`, `nombreCultivo`, `kgSemillaHas`, `rideEsperadoHas`) VALUES
(1, 'Maiz de Primera', 20, '5000'),
(2, 'Maiz de Segunda', 20, '6000'),
(3, 'Girasol', 20, '2000'),
(4, 'Cebada', 110, '3000'),
(5, 'Avena', 6, '2000'),
(6, 'Alfalfa', 10, '5'),
(7, 'Soja', 70, '2500');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallehacienda`
--

CREATE TABLE `detallehacienda` (
  `id_DetalleHacienda` int(11) NOT NULL,
  `id_Proyecto` int(11) NOT NULL,
  `fechaInicio` date NOT NULL,
  `fechaCierre` date NOT NULL,
  `cantidadCabezas` int(11) NOT NULL,
  `id_Categoria` int(11) NOT NULL,
  `inversion` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallesiembra`
--

CREATE TABLE `detallesiembra` (
  `id_DetalleSiembra` int(11) NOT NULL,
  `id_Proyecto` int(11) NOT NULL,
  `fechaInicio` date NOT NULL,
  `fechaCierre` date NOT NULL,
  `id_Cultivo` int(11) NOT NULL,
  `rindeEsperadoHas` int(11) NOT NULL,
  `inversion` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadoproyecto`
--

CREATE TABLE `estadoproyecto` (
  `id_EstadoProyecto` int(11) NOT NULL,
  `estado` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estadoproyecto`
--

INSERT INTO `estadoproyecto` (`id_EstadoProyecto`, `estado`) VALUES
(1, 'No iniciado'),
(2, 'Iniciado'),
(3, 'Finalizado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parcela`
--

CREATE TABLE `parcela` (
  `id_Parcela` int(11) NOT NULL,
  `dimension` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `parcela`
--

INSERT INTO `parcela` (`id_Parcela`, `dimension`) VALUES
(1, 43),
(2, 90),
(3, 100),
(4, 70),
(5, 100),
(6, 70),
(7, 100),
(8, 35),
(9, 65),
(10, 95),
(11, 30);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos`
--

CREATE TABLE `proyectos` (
  `id_Proyecto` int(11) NOT NULL,
  `id_Parcela` int(11) NOT NULL,
  `nombreProyecto` varchar(45) NOT NULL,
  `id_TipoProyecto` int(11) NOT NULL,
  `cantidadHas` int(11) NOT NULL,
  `id_EstadoProyecto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoproyecto`
--

CREATE TABLE `tipoproyecto` (
  `id_tipoProyecto` int(11) NOT NULL,
  `tipoProyecto` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipoproyecto`
--

INSERT INTO `tipoproyecto` (`id_tipoProyecto`, `tipoProyecto`) VALUES
(1, 'hacieda'),
(2, 'siembra'),
(3, 'alquiler');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `id_tipoUsuario` int(11) NOT NULL,
  `tipo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`id_tipoUsuario`, `tipo`) VALUES
(1, 'administrador'),
(2, 'lector');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `id_tipoUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `usuario`, `password`, `nombre`, `apellido`, `id_tipoUsuario`) VALUES
(1, 'admin', '123', 'lucila', 'dolce', 1),
(2, 'hernan', '123', 'hernan', 'altola', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `cultivos`
--
ALTER TABLE `cultivos`
  ADD PRIMARY KEY (`id_cultivo`);

--
-- Indices de la tabla `detallehacienda`
--
ALTER TABLE `detallehacienda`
  ADD PRIMARY KEY (`id_DetalleHacienda`);

--
-- Indices de la tabla `detallesiembra`
--
ALTER TABLE `detallesiembra`
  ADD PRIMARY KEY (`id_DetalleSiembra`);

--
-- Indices de la tabla `estadoproyecto`
--
ALTER TABLE `estadoproyecto`
  ADD PRIMARY KEY (`id_EstadoProyecto`);

--
-- Indices de la tabla `parcela`
--
ALTER TABLE `parcela`
  ADD PRIMARY KEY (`id_Parcela`);

--
-- Indices de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD PRIMARY KEY (`id_Proyecto`);

--
-- Indices de la tabla `tipoproyecto`
--
ALTER TABLE `tipoproyecto`
  ADD PRIMARY KEY (`id_tipoProyecto`);

--
-- Indices de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`id_tipoUsuario`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `cultivos`
--
ALTER TABLE `cultivos`
  MODIFY `id_cultivo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `detallehacienda`
--
ALTER TABLE `detallehacienda`
  MODIFY `id_DetalleHacienda` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detallesiembra`
--
ALTER TABLE `detallesiembra`
  MODIFY `id_DetalleSiembra` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `estadoproyecto`
--
ALTER TABLE `estadoproyecto`
  MODIFY `id_EstadoProyecto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `parcela`
--
ALTER TABLE `parcela`
  MODIFY `id_Parcela` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  MODIFY `id_Proyecto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipoproyecto`
--
ALTER TABLE `tipoproyecto`
  MODIFY `id_tipoProyecto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  MODIFY `id_tipoUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
