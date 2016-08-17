-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-08-2016 a las 06:14:09
-- Versión del servidor: 10.1.9-MariaDB-log
-- Versión de PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `01_refaccionariavwn`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `abonoclientes`
--

CREATE TABLE `abonoclientes` (
  `idabonoclientes` int(11) NOT NULL,
  `fechaabono` date NOT NULL,
  `cantidadabono` double NOT NULL,
  `iddeudascobrar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `abonoclientes`
--

INSERT INTO `abonoclientes` (`idabonoclientes`, `fechaabono`, `cantidadabono`, `iddeudascobrar`) VALUES
(4, '2016-08-13', 250, 1),
(5, '2016-08-13', 750, 2),
(9, '2016-08-13', 1000, 4);

--
-- Disparadores `abonoclientes`
--
DELIMITER $$
CREATE TRIGGER `tg_addAbonoclientes` AFTER INSERT ON `abonoclientes` FOR EACH ROW BEGIN 
	UPDATE deudascobrar SET cantidaddeuda = cantidaddeuda - NEW.cantidadabono
		WHERE iddeudascobrar = NEW.iddeudascobrar;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `tg_delAbonoclientes` AFTER DELETE ON `abonoclientes` FOR EACH ROW BEGIN 
	UPDATE deudascobrar SET cantidaddeuda = cantidaddeuda + old.cantidadabono
		WHERE iddeudascobrar = old.iddeudascobrar;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `tg_upAbonoclientes` AFTER UPDATE ON `abonoclientes` FOR EACH ROW BEGIN 
	UPDATE deudascobrar SET cantidaddeuda = (cantidaddeuda+OLD.cantidadabono)-NEW.cantidadabono 
		WHERE iddeudascobrar = NEW.iddeudascobrar;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `abonoproveedores`
--

CREATE TABLE `abonoproveedores` (
  `idabonoproveedores` int(11) NOT NULL,
  `fechaabono` date NOT NULL,
  `cantidadabono` double NOT NULL,
  `iddeudaspagar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `abonoproveedores`
--

INSERT INTO `abonoproveedores` (`idabonoproveedores`, `fechaabono`, `cantidadabono`, `iddeudaspagar`) VALUES
(18, '2016-08-06', 5000, 1);

--
-- Disparadores `abonoproveedores`
--
DELIMITER $$
CREATE TRIGGER `tg_addAbonoproveedores` AFTER INSERT ON `abonoproveedores` FOR EACH ROW BEGIN 
	UPDATE deudaspagar SET cantidaddeuda = cantidaddeuda - NEW.cantidadabono
		WHERE iddeudaspagar = NEW.iddeudaspagar;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `tg_delAbonoproveedores` AFTER DELETE ON `abonoproveedores` FOR EACH ROW BEGIN 
	UPDATE deudaspagar SET cantidaddeuda = cantidaddeuda + old.cantidadabono
		WHERE iddeudaspagar = old.iddeudaspagar;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `tg_upAbonoproveedores` AFTER UPDATE ON `abonoproveedores` FOR EACH ROW BEGIN 
	UPDATE deudaspagar SET cantidaddeuda = (cantidaddeuda+OLD.cantidadabono)-NEW.cantidadabono 
		WHERE iddeudaspagar = NEW.iddeudaspagar;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `idcategoria` int(11) NOT NULL,
  `nombrecategoria` varchar(100) NOT NULL,
  `descripcion` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`idcategoria`, `nombrecategoria`, `descripcion`) VALUES
(1, 'Llantas N', 'Llantas para Nissan'),
(2, 'Llantas VW', 'Llantas para Volkswagen'),
(5, 'VOLANTES TRACTOR', 'Volantes para tractor de todas las marcas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `idclientes` int(11) NOT NULL,
  `imagencliente` varchar(150) DEFAULT NULL,
  `nombrecliente` varchar(200) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `emailcliente` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` int(11) DEFAULT '0',
  `privilegios` varchar(30) DEFAULT '0',
  `iddireccion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`idclientes`, `imagencliente`, `nombrecliente`, `telefono`, `emailcliente`, `password`, `status`, `privilegios`, `iddireccion`) VALUES
(1, '', 'José', '123456789', 'jose@jose.com', '12345', 1, '1', 1),
(2, '', 'Dylan', '987654321', 'dylan@dylan.com', '12345', 1, '0', 2),
(6, '', 'Joe Flaco', '987654321', 'joe@joe.com', '12345', NULL, NULL, 5),
(7, NULL, 'Daniel Ávila', '4171093835', '89rommel@gmail.com', '12345', NULL, NULL, 19),
(10, NULL, 'Jose', '4471151617', 'josesanchezutl@gmail.com', '12345', 1, '1', 1),
(11, NULL, 'Demetrio Avila', '234567890', 'demetrio@hotmail.com', 'demetrio', 0, '0', 22),
(18, NULL, 'qqwe', '123', '4qwer', 'qwer', 0, '0', 2),
(19, '', 'jorge', '4471151617', 'jorge@jorge.com', '12345', 0, '0', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `idcomentarios` int(11) NOT NULL,
  `nombrecomentario` varchar(100) DEFAULT NULL,
  `emailcomentario` varchar(150) NOT NULL,
  `comentario` text NOT NULL,
  `idclientes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`idcomentarios`, `nombrecomentario`, `emailcomentario`, `comentario`, `idclientes`) VALUES
(1, 'José', 'jose@jose.com', 'Pues aquí Probando.', 1),
(2, 'Dylan', 'dylan@dylan.com', 'nada', 2),
(3, 'José', 'jose@jose.com', 'yahooo123', 1),
(4, 'Dylan', 'dylan@dylan.com', 'sdfghjkl', 2),
(5, 'Dylan', 'dylan@dylan.com', 'qwertyuio', 2),
(6, 'José', 'jose@jose.com', '12345678', 1),
(7, 'José', 'jose@jose.com', 'qwedrfghuj', 1),
(8, 'José', 'jose@jose.com', '12345678', 1),
(9, 'José', 'jose@jose.com', 'hola, no.', 1),
(10, 'José', 'jose@jose.com', 'hola, espero verte mañana (la verdad no).', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalleventas`
--

CREATE TABLE `detalleventas` (
  `iddetalleventas` int(11) NOT NULL,
  `idproductos` int(11) NOT NULL,
  `idventas` int(11) NOT NULL,
  `cantidaddetalle` int(11) NOT NULL,
  `preciomenudeo` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `detalleventas`
--

INSERT INTO `detalleventas` (`iddetalleventas`, `idproductos`, `idventas`, `cantidaddetalle`, `preciomenudeo`) VALUES
(1, 1, 1, 1, 1700),
(2, 2, 2, 1, 2500);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `deudascobrar`
--

CREATE TABLE `deudascobrar` (
  `iddeudascobrar` int(11) NOT NULL,
  `notacobrar` varchar(100) NOT NULL,
  `fechadeuda` date NOT NULL,
  `cantidaddeuda` double NOT NULL,
  `idclientes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `deudascobrar`
--

INSERT INTO `deudascobrar` (`iddeudascobrar`, `notacobrar`, `fechadeuda`, `cantidaddeuda`, `idclientes`) VALUES
(1, '0001', '2016-07-15', 1250, 1),
(2, '0002', '2016-07-15', 750, 2),
(3, '0006', '2016-08-13', 2000, 7),
(4, '0007', '2016-08-13', 4000, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `deudaspagar`
--

CREATE TABLE `deudaspagar` (
  `iddeudaspagar` int(11) NOT NULL,
  `notapagar` varchar(100) NOT NULL,
  `cantidaddeuda` double NOT NULL,
  `fechadeuda` date NOT NULL,
  `idproveedores` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `deudaspagar`
--

INSERT INTO `deudaspagar` (`iddeudaspagar`, `notapagar`, `cantidaddeuda`, `fechadeuda`, `idproveedores`) VALUES
(1, '0003', 25000, '2016-07-15', 1),
(2, '0004', 7005, '2016-07-15', 2),
(3, '0008', 7010, '2016-08-11', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direccion`
--

CREATE TABLE `direccion` (
  `iddireccion` int(11) NOT NULL,
  `estado` varchar(100) NOT NULL,
  `ciudad` varchar(100) NOT NULL,
  `codigopostal` varchar(100) NOT NULL,
  `colonia` varchar(255) DEFAULT NULL,
  `calle` varchar(255) DEFAULT NULL,
  `numero` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `direccion`
--

INSERT INTO `direccion` (`iddireccion`, `estado`, `ciudad`, `codigopostal`, `colonia`, `calle`, `numero`) VALUES
(1, 'Michoacan', 'Maravatío', '61250', 'Loma Alta', 'Prol.Leona Vicario', 100),
(2, 'Guanajuato', 'Taranda', '61255', 'Principal', 'Los Lirios', 145),
(5, 'Michoacan', 'Maravatío', '61250', 'Colonia del panteón', 'Avenida Francisco I. Madero', 1087),
(19, 'GUANAJUATO', 'ACAMBARO', '38600', 'Centro', '1a de mayo', 300),
(20, 'qwerty', 'qwerty', '1234', 'qwert', 'qwerty', 123),
(21, 'qwert', 'qwert', '2345', 'werty', 'werty', 23456),
(22, 'Michoacán', 'MARAVATIO', '61250', 'Vista Bella', 'La huasteca', 1026),
(23, 'qwert', 'qwerty', '12345', 'qwerty', 'qwerty', 1234),
(24, 'GUANAJUATO', 'ACAMBARO', '12345', 'poiuy', 'ertyu', 2345);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `idproductos` int(11) NOT NULL,
  `imagenproducto` varchar(150) DEFAULT NULL,
  `nombreproducto` varchar(200) NOT NULL,
  `codigoproducto` int(100) DEFAULT NULL,
  `marca` varchar(100) NOT NULL,
  `unidadmedida` varchar(10) DEFAULT NULL,
  `preciolista` double NOT NULL,
  `stock` int(11) NOT NULL,
  `idproveedores` int(11) NOT NULL,
  `idcategoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idproductos`, `imagenproducto`, `nombreproducto`, `codigoproducto`, `marca`, `unidadmedida`, `preciolista`, `stock`, `idproveedores`, `idcategoria`) VALUES
(1, NULL, 'Llanta Firestone transforce 185R15', 123456789, 'Firestone', 'piezas', 1700, 10, 1, 1),
(2, NULL, 'Llanta Michelin 235/75 R15', 987654321, 'Michelin', 'piezas', 2500, 16, 2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `idproveedores` int(11) NOT NULL,
  `nombreproveedor` varchar(100) NOT NULL,
  `apaterno` varchar(50) DEFAULT NULL,
  `amaterno` varchar(50) DEFAULT NULL,
  `direccion` varchar(255) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `rfc` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`idproveedores`, `nombreproveedor`, `apaterno`, `amaterno`, `direccion`, `telefono`, `email`, `rfc`) VALUES
(1, 'Manuel', 'Perez', 'Gomez', 'conocida', '1234', 'manuel@manuel.com', '12jfgh3423'),
(2, 'JORGE', 'LUGO', 'SORIA', 'CONOCIDA', '1234567890', 'JORGE@JORGE.COM', 'QWERTY12345'),
(3, 'joseaa', 'mamas', 'asfds', 'qwrerew', '12123', 'lsdjflkjlkj@adsf', 'asdds');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `idventas` int(11) NOT NULL,
  `fechaventa` date NOT NULL,
  `montofinal` double NOT NULL,
  `idclientes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`idventas`, `fechaventa`, `montofinal`, `idclientes`) VALUES
(1, '2016-07-15', 1700, 1),
(2, '2016-07-15', 2500, 2),
(3, '2016-08-11', 4200, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `abonoclientes`
--
ALTER TABLE `abonoclientes`
  ADD PRIMARY KEY (`idabonoclientes`),
  ADD KEY `fk_abonoclientes_deudascobrar1_idx` (`iddeudascobrar`);

--
-- Indices de la tabla `abonoproveedores`
--
ALTER TABLE `abonoproveedores`
  ADD PRIMARY KEY (`idabonoproveedores`),
  ADD KEY `fk_abonoproveedores_deudaspagar1_idx` (`iddeudaspagar`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`idcategoria`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`idclientes`),
  ADD KEY `fk_clientes_direccion1_idx` (`iddireccion`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`idcomentarios`),
  ADD KEY `fk_Comentarios_clientes1_idx` (`idclientes`);

--
-- Indices de la tabla `detalleventas`
--
ALTER TABLE `detalleventas`
  ADD PRIMARY KEY (`iddetalleventas`),
  ADD KEY `fk_productos_has_ventas_ventas1_idx` (`idventas`),
  ADD KEY `fk_productos_has_ventas_productos_idx` (`idproductos`);

--
-- Indices de la tabla `deudascobrar`
--
ALTER TABLE `deudascobrar`
  ADD PRIMARY KEY (`iddeudascobrar`),
  ADD KEY `fk_deudascobrar_clientes1_idx` (`idclientes`);

--
-- Indices de la tabla `deudaspagar`
--
ALTER TABLE `deudaspagar`
  ADD PRIMARY KEY (`iddeudaspagar`),
  ADD KEY `fk_deudaspagar_proveedores1_idx` (`idproveedores`);

--
-- Indices de la tabla `direccion`
--
ALTER TABLE `direccion`
  ADD PRIMARY KEY (`iddireccion`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idproductos`),
  ADD KEY `fk_productos_proveedores1_idx` (`idproveedores`),
  ADD KEY `fk_productos_categoria1_idx` (`idcategoria`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`idproveedores`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`idventas`),
  ADD KEY `fk_ventas_clientes1_idx` (`idclientes`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `abonoclientes`
--
ALTER TABLE `abonoclientes`
  MODIFY `idabonoclientes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `abonoproveedores`
--
ALTER TABLE `abonoproveedores`
  MODIFY `idabonoproveedores` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `idcategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `idclientes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `idcomentarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `detalleventas`
--
ALTER TABLE `detalleventas`
  MODIFY `iddetalleventas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `deudascobrar`
--
ALTER TABLE `deudascobrar`
  MODIFY `iddeudascobrar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `deudaspagar`
--
ALTER TABLE `deudaspagar`
  MODIFY `iddeudaspagar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `direccion`
--
ALTER TABLE `direccion`
  MODIFY `iddireccion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `idproductos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `idproveedores` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `idventas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `abonoclientes`
--
ALTER TABLE `abonoclientes`
  ADD CONSTRAINT `fk_abonoclientes_deudascobrar1` FOREIGN KEY (`iddeudascobrar`) REFERENCES `deudascobrar` (`iddeudascobrar`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `abonoproveedores`
--
ALTER TABLE `abonoproveedores`
  ADD CONSTRAINT `fk_abonoproveedores_deudaspagar1` FOREIGN KEY (`iddeudaspagar`) REFERENCES `deudaspagar` (`iddeudaspagar`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `fk_clientes_direccion1` FOREIGN KEY (`iddireccion`) REFERENCES `direccion` (`iddireccion`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `fk_Comentarios_clientes1` FOREIGN KEY (`idclientes`) REFERENCES `clientes` (`idclientes`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `detalleventas`
--
ALTER TABLE `detalleventas`
  ADD CONSTRAINT `fk_productos_has_ventas_productos` FOREIGN KEY (`idproductos`) REFERENCES `productos` (`idproductos`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_productos_has_ventas_ventas1` FOREIGN KEY (`idventas`) REFERENCES `ventas` (`idventas`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `deudascobrar`
--
ALTER TABLE `deudascobrar`
  ADD CONSTRAINT `fk_deudascobrar_clientes1` FOREIGN KEY (`idclientes`) REFERENCES `clientes` (`idclientes`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `deudaspagar`
--
ALTER TABLE `deudaspagar`
  ADD CONSTRAINT `fk_deudaspagar_proveedores1` FOREIGN KEY (`idproveedores`) REFERENCES `proveedores` (`idproveedores`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `fk_productos_categoria1` FOREIGN KEY (`idcategoria`) REFERENCES `categoria` (`idcategoria`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_productos_proveedores1` FOREIGN KEY (`idproveedores`) REFERENCES `proveedores` (`idproveedores`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `fk_ventas_clientes1` FOREIGN KEY (`idclientes`) REFERENCES `clientes` (`idclientes`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
