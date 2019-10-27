-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-10-2019 a las 18:02:31
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `firehouse`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE `compra` (
  `idcompra` int(11) NOT NULL,
  `tipo_pago` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `tipo_compra` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `id_inventario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE `inventario` (
  `idinventario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `idproducto` int(3) NOT NULL,
  `producto` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `idproveedor` int(3) NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`idproducto`, `producto`, `idproveedor`, `stock`) VALUES
(4, 'hfgh', 1, 4),
(7, 'fhh', 0, 4),
(14, 'cgc', 7, 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `idproveedor` int(3) NOT NULL,
  `proveedor` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `telefono1` varchar(25) COLLATE utf8mb4_spanish_ci NOT NULL,
  `telefono2` varchar(25) COLLATE utf8mb4_spanish_ci NOT NULL,
  `correo` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `comentario` varchar(350) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`idproveedor`, `proveedor`, `telefono1`, `telefono2`, `correo`, `comentario`) VALUES
(1, 'La Huerta', '2555684', '2859073', 'la-huerta-mayorista@hotmail.com', 'Se envia por correo desde el dÃ­a anterior, el pedido minimo son $50.000.'),
(2, 'Detobones', '4441670', '', 'contacto@detobones.com', 'Se envia por correo de un dia para otro, pedir quincenal. Respetando los lÃ­mites quincenales.'),
(3, 'Grasco', '2147483647', '', 'marue08@live.com', 'Se pide por correo, puede tardar hasta 5 dÃ­as en entregar. Pedir el mismo dia que se hace el cambio. Vendedora Maria Eugenia Ramirez.'),
(4, 'Carulla', '', '', '', 'Compras en Carulla. Ir a Carulla los SÃ¡bados y Ajustar el Stock Necesario.'),
(5, 'COMERCIALIZADORA M&C', '4446146', '', '', 'Se pide con 1 dia de anticipacion antes 04:00pm. Revisar los lunes y pedir cuando quede 1/4.'),
(6, 'Popsy', '3660271', '2147483647', '', 'Hacer el pedido por correo electrÃ³nico los lunes o los miÃ©rcoles antes de las 3 pm. Pedir cuando no hay en la recetta. Pedir cuando estÃ© en rojo. Vendedora Paola Atehortua RamÃ­rez.'),
(7, 'Colparafino', '2661880', '', '', 'Se pide por telÃ©fono con 3 dÃ­as de anticipaciÃ³n, cuando hay menos de la mitad en algÃºn tamaÃ±o.'),
(8, 'Juan D. Hoyos', '3116382130', '', 'luis.sepulveda@jdh.com.co', 'Pedir de un dia para el otro por correo. Pedir cuando estÃ© en Rojo.'),
(9, 'Patagonia', '2704863', '', '', 'Se pide de un dia para otro antes de las 04:00 pm.'),
(10, 'Base Cook', '4447211 EXT 105', '', '', 'Pedir con 3 dÃ­as de anticipaciÃ³n, por telÃ©fono. Solo se hace pedido cuando alguno de los productos llegue a la mitad del stock.'),
(11, 'Licores -  Light Park', '4481539', '', '', 'Se pide para el mismo dÃ¬a, por telefono, antes de las 3 pm. (pedir factura oficial).			'),
(12, 'Bremen', '4484468', '', 'estelalopez@bremeninstitucional.com', 'Se pide por correo antes de las 4:30 pm para el dia siguiente (pedido mÃ­nimo $120,000), sÃ³lo con autorizaciÃ³n.'),
(13, 'Tecnas', '2854292 EXT 4119 - 4298', '', '', '(EXT 4119-4298). cuando se llega al mÃ­nimo. Coordinar con carlos David			'),
(14, 'Distribuidora de plasticos y desechables el 18', '3618292', '', '', 'Se pide por telÃ©fono antes de 01:00pm de un dia para otro. Cuando algÃºn producto llegue al mÃ­nimo.'),
(15, 'Alico S.A.', '3600030 EXT 2188', '', '', 'Se le pide a Carlos David 3 dÃ­as antes.'),
(16, 'Sigmaplas', '2853060', '', '', 'Se le pide a Carlos David 3 dÃ­as antes.'),
(17, 'ProducciÃ²n', '', '', 'fhasistente1@gmail.com', 'Revisar todos los dÃ­as en la noche.'),
(18, 'Diez Equis', '6046137', '', 'pedidos4@diezequis.com', 'Se pide por correo de un dia para el otro.'),
(19, 'Aceite quemado - b100', '2147483647', '', '', '(Pagina web: www.b100.com.co) Se solicita recolecciÃ³n  por el chat de la pagina web.'),
(20, 'Logi - retail', '2798203', '', '', 'Se pide por telÃ©fono para el dia siguiente.'),
(21, 'Tortilla azteca', '2147483647', '', '', 'Se pide con 2 dias de anticipacion antes de las 04:00 pm, cada 15 dias.'),
(22, 'Congelados de la MontaÃ±a', '2769953', '', '', 'Se pide de un dia para otro por telÃ©fono.'),
(23, 'Dislicores', '2323060 EXT 111-108', '2147483647', 'marta.marquez@dislicores.com', 'Hacer el pedido de un dia para otro, por telÃ©fono. Cervezas nacionales y artesanales. Asesor: Johan andres Alvarez Toro.'),
(24, 'Berpa', '4447991 OpciÃ³n plaza de ', '', '', 'Se pide por telÃ©fono para el dia siguiente.'),
(25, 'Hojaral', '2665546', '', '', 'Se pide por telÃ©fono para el dia siguiente.'),
(26, 'Servihuevos', '4484453', '', '', 'Se pide de un dia para otro por telÃ©fono.'),
(27, 'Taco Nacho', '5201250 EXT 107', '', '', 'Se pide por telefono un dia antes, pedir cuando se pone en rojo.'),
(28, 'Redeban', '3556000', '', '', '(cÃ³digo del local: 14836738).Pedir con 3 dÃ­as de anticipaciÃ³n, cuando se llegue a 20 rollos.'),
(29, 'Futuro Verde', '2147483647', '', '', 'Se pide por telÃ©fono con 2 dias de anticipacion.'),
(30, 'Milenium', '2147483647', '4226088', 'ventas5@distrimilenium.com pedidos@distrimilenium.com', 'Se pide de un dia para otro por medio de correo electrÃ³nico. Vendedor Stiven'),
(31, 'Willy', '3006961555', '', '', 'Se pide con un dia de anticipacion por telefono, puede ser un dia diferente, tener en cuenta que si habÃ­a suficiente dinero para el cambio.'),
(32, 'Coca - Cola', '3208237167', '', '', 'Llaman de televentas. Para entregar el Jueves.'),
(33, 'Jose Feliz Escobar', '2850314', '', '', 'Se pide cada 2 meses cuando se llega al mÃ­nimo de un dia para otro.'),
(34, 'La Recceta', '4443626', '3156850006', 'ivargasj@larecetta.com', '(CÃ³digo punto sao paulo: 10318528) Se pide por correo para el dia siguiente antes de las 4:30 pm â€“ Codigo Cliente. 10318534. Caren alvarez.			'),
(35, 'Pulpas Malu', '2659438', '', '', 'Se pide para el dÃ­a siguiente el pedido minimo es de 4 paquetes.'),
(36, 'Lacteos Buenos Aires', '4808010', '2624141', 'lacteosbuenosaires@hotmail.com', 'Antes de las 03:00 pm, Correo.'),
(37, 'Piatto Cucina', '3216411847 (Solo para eve', '', 'piattocucina@gmail.com', 'Se pide por correo. Jueves o viernes y entregan los miÃ©rcoles, se pide cuando estÃ¡ rojo.'),
(38, 'Fabri Rollos', '3506286471', '3515454', 'sandraespinosa@fabri-rollos.com', 'Se pide con un dia de anticipacion, pedido mÃ­nimo 1 caja de termico. Entregan los miÃ©rcoles, se pide cuando estÃ¡ rojo.'),
(39, 'Postobon', '3006441964', '', '', 'Visita de Vendedor. Vanessa'),
(40, 'Congelador de la montaÃ±a', '2769953', '', '', 'Se pide de un dia para otro por telÃ©fono.'),
(41, 'Perman', '3612909', '', ' lssanchez@panperman.com', 'Pedir con dos dÃ­as de anticipaciÃ³n, antes de las 05:00 pm, por correo o por telÃ©fono.'),
(42, 'Recarga tintas', '4447704', '', '', 'Se pide por telÃ©fono el mismo dia.'),
(43, 'Comandas', '4447704', '', '', 'Pedirle a IvÃ¡n cuando se ponga en rojo.'),
(44, 'Domos para cheescake', '4447704', '', '', 'Pedirle a IvÃ¡n cuando se ponga en rojo.'),
(45, 'Pitillos', '4447704', '', '', 'Pedirle a Carlos David cuando se ponga en rojo.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `documento` int(11) NOT NULL,
  `nombres` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `apellidos` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `usuario` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `pass` varchar(150) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`documento`, `nombres`, `apellidos`, `correo`, `usuario`, `pass`) VALUES
(11111111, 'Carlos', 'Lopez', 'carlos@gmail.com', 'carlos', '6116afedcb0bc31083935c1c262ff4c9');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`idcompra`),
  ADD UNIQUE KEY `id_inventario` (`id_inventario`);

--
-- Indices de la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD PRIMARY KEY (`idinventario`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`idproducto`),
  ADD UNIQUE KEY `idproveedor` (`idproveedor`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`idproveedor`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`documento`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `inventario`
--
ALTER TABLE `inventario`
  MODIFY `idinventario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `idproducto` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `idproveedor` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
