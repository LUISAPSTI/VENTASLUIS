-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-12-2024 a las 02:14:23
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistema_ventas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalles_pedidos`
--

CREATE TABLE `detalles_pedidos` (
  `id` int(11) NOT NULL,
  `id_pedido` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `detalles_pedidos`
--

INSERT INTO `detalles_pedidos` (`id`, `id_pedido`, `id_producto`, `cantidad`, `precio`) VALUES
(1, 1, 1, 1, 1200.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facturas`
--

CREATE TABLE `facturas` (
  `id` int(11) NOT NULL,
  `numero_factura` int(11) DEFAULT NULL,
  `fecha_hora` datetime DEFAULT NULL,
  `total` decimal(10,2) DEFAULT NULL,
  `igv` decimal(10,2) DEFAULT NULL,
  `total_con_igv` decimal(10,2) DEFAULT NULL,
  `productos` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `facturas`
--

INSERT INTO `facturas` (`id`, `numero_factura`, `fecha_hora`, `total`, `igv`, `total_con_igv`, `productos`) VALUES
(1, 1, '2024-12-28 23:24:20', 3300.00, 594.00, 3894.00, '[{\"id\":10,\"nombre\":\"Laptop Gamer Gigabyte AORUS 15G\",\"descripcion\":\"Laptop gamer con procesador Intel i7, 32GB RAM, 512GB SSD y tarjeta gr\\u00e1fica NVIDIA RTX 3070\",\"precio\":\"2100.00\",\"stock\":7,\"imagen_url\":\"https:\\/\\/www.kabifperu.com\\/imagenes\\/prod-22022021110453-notebook-gigabyte-aorus-15g-wb-15-6-lcd-fhd-core-i7-10875h-2-3ghz-16gb-ddr4-512gb-ssd-m-2-deta.png\",\"fecha_registro\":\"2024-12-23 18:24:09\"},{\"id\":11,\"nombre\":\"Laptop Gamer Dell G5 15\",\"descripcion\":\"Laptop Dell G5 con procesador i7, 16GB RAM, 512GB SSD y tarjeta gr\\u00e1fica NVIDIA GTX 1650 Ti\",\"precio\":\"1200.00\",\"stock\":20,\"imagen_url\":\"https:\\/\\/www.infotec.com.pe\\/73773-large_default\\/laptop-dell-g5-15-5525-ryzen-7-6800h-16gb-ddr5-512gb-ssd-tvideo-rtx-3060-6gb-156-fhd-windows-11-0nvkm.jpg\",\"fecha_registro\":\"2024-12-23 18:24:09\"}]'),
(2, 1, '2024-12-28 23:31:08', 3300.00, 594.00, 3894.00, '[{\"id\":10,\"nombre\":\"Laptop Gamer Gigabyte AORUS 15G\",\"descripcion\":\"Laptop gamer con procesador Intel i7, 32GB RAM, 512GB SSD y tarjeta gr\\u00e1fica NVIDIA RTX 3070\",\"precio\":\"2100.00\",\"stock\":7,\"imagen_url\":\"https:\\/\\/www.kabifperu.com\\/imagenes\\/prod-22022021110453-notebook-gigabyte-aorus-15g-wb-15-6-lcd-fhd-core-i7-10875h-2-3ghz-16gb-ddr4-512gb-ssd-m-2-deta.png\",\"fecha_registro\":\"2024-12-23 18:24:09\"},{\"id\":11,\"nombre\":\"Laptop Gamer Dell G5 15\",\"descripcion\":\"Laptop Dell G5 con procesador i7, 16GB RAM, 512GB SSD y tarjeta gr\\u00e1fica NVIDIA GTX 1650 Ti\",\"precio\":\"1200.00\",\"stock\":20,\"imagen_url\":\"https:\\/\\/www.infotec.com.pe\\/73773-large_default\\/laptop-dell-g5-15-5525-ryzen-7-6800h-16gb-ddr5-512gb-ssd-tvideo-rtx-3060-6gb-156-fhd-windows-11-0nvkm.jpg\",\"fecha_registro\":\"2024-12-23 18:24:09\"}]'),
(3, 1, '2024-12-28 23:32:44', 3300.00, 594.00, 3894.00, '[{\"id\":10,\"nombre\":\"Laptop Gamer Gigabyte AORUS 15G\",\"descripcion\":\"Laptop gamer con procesador Intel i7, 32GB RAM, 512GB SSD y tarjeta gr\\u00e1fica NVIDIA RTX 3070\",\"precio\":\"2100.00\",\"stock\":7,\"imagen_url\":\"https:\\/\\/www.kabifperu.com\\/imagenes\\/prod-22022021110453-notebook-gigabyte-aorus-15g-wb-15-6-lcd-fhd-core-i7-10875h-2-3ghz-16gb-ddr4-512gb-ssd-m-2-deta.png\",\"fecha_registro\":\"2024-12-23 18:24:09\"},{\"id\":11,\"nombre\":\"Laptop Gamer Dell G5 15\",\"descripcion\":\"Laptop Dell G5 con procesador i7, 16GB RAM, 512GB SSD y tarjeta gr\\u00e1fica NVIDIA GTX 1650 Ti\",\"precio\":\"1200.00\",\"stock\":20,\"imagen_url\":\"https:\\/\\/www.infotec.com.pe\\/73773-large_default\\/laptop-dell-g5-15-5525-ryzen-7-6800h-16gb-ddr5-512gb-ssd-tvideo-rtx-3060-6gb-156-fhd-windows-11-0nvkm.jpg\",\"fecha_registro\":\"2024-12-23 18:24:09\"}]'),
(4, 1, '2024-12-28 23:34:56', 3300.00, 594.00, 3894.00, '[{\"id\":10,\"nombre\":\"Laptop Gamer Gigabyte AORUS 15G\",\"descripcion\":\"Laptop gamer con procesador Intel i7, 32GB RAM, 512GB SSD y tarjeta gr\\u00e1fica NVIDIA RTX 3070\",\"precio\":\"2100.00\",\"stock\":7,\"imagen_url\":\"https:\\/\\/www.kabifperu.com\\/imagenes\\/prod-22022021110453-notebook-gigabyte-aorus-15g-wb-15-6-lcd-fhd-core-i7-10875h-2-3ghz-16gb-ddr4-512gb-ssd-m-2-deta.png\",\"fecha_registro\":\"2024-12-23 18:24:09\"},{\"id\":11,\"nombre\":\"Laptop Gamer Dell G5 15\",\"descripcion\":\"Laptop Dell G5 con procesador i7, 16GB RAM, 512GB SSD y tarjeta gr\\u00e1fica NVIDIA GTX 1650 Ti\",\"precio\":\"1200.00\",\"stock\":20,\"imagen_url\":\"https:\\/\\/www.infotec.com.pe\\/73773-large_default\\/laptop-dell-g5-15-5525-ryzen-7-6800h-16gb-ddr5-512gb-ssd-tvideo-rtx-3060-6gb-156-fhd-windows-11-0nvkm.jpg\",\"fecha_registro\":\"2024-12-23 18:24:09\"}]'),
(5, 1, '2024-12-29 00:14:04', 3300.00, 594.00, 3894.00, '[{\"id\":10,\"nombre\":\"Laptop Gamer Gigabyte AORUS 15G\",\"descripcion\":\"Laptop gamer con procesador Intel i7, 32GB RAM, 512GB SSD y tarjeta gr\\u00e1fica NVIDIA RTX 3070\",\"precio\":\"2100.00\",\"stock\":7,\"imagen_url\":\"https:\\/\\/www.kabifperu.com\\/imagenes\\/prod-22022021110453-notebook-gigabyte-aorus-15g-wb-15-6-lcd-fhd-core-i7-10875h-2-3ghz-16gb-ddr4-512gb-ssd-m-2-deta.png\",\"fecha_registro\":\"2024-12-23 18:24:09\"},{\"id\":11,\"nombre\":\"Laptop Gamer Dell G5 15\",\"descripcion\":\"Laptop Dell G5 con procesador i7, 16GB RAM, 512GB SSD y tarjeta gr\\u00e1fica NVIDIA GTX 1650 Ti\",\"precio\":\"1200.00\",\"stock\":20,\"imagen_url\":\"https:\\/\\/www.infotec.com.pe\\/73773-large_default\\/laptop-dell-g5-15-5525-ryzen-7-6800h-16gb-ddr5-512gb-ssd-tvideo-rtx-3060-6gb-156-fhd-windows-11-0nvkm.jpg\",\"fecha_registro\":\"2024-12-23 18:24:09\"}]'),
(6, 1, '2024-12-29 00:33:48', 2000.00, 360.00, 2360.00, '[{\"id\":1,\"nombre\":\"Computadora Gamer\",\"descripcion\":\"Computadora de alto rendimiento para juegos\",\"precio\":\"1200.00\",\"stock\":10,\"imagen_url\":\"https:\\/\\/unaluka.com\\/cdn\\/shop\\/files\\/81fZmxBbQgL._AC_SL1500_2048x.jpg?v=1712941794\",\"fecha_registro\":\"2024-12-23 18:23:15\"},{\"id\":2,\"nombre\":\"Laptop Ultra ligera\",\"descripcion\":\"Laptop ideal para trabajo remoto\",\"precio\":\"800.00\",\"stock\":5,\"imagen_url\":\"https:\\/\\/es.digitaltrends.com\\/wp-content\\/uploads\\/2020\\/05\\/samsung-galaxy-book-s-2-768x768-removebg-preview.jpg?fit=688%2C363&p=1\",\"fecha_registro\":\"2024-12-23 18:23:15\"}]'),
(7, 1, '2024-12-29 00:59:57', 4300.00, 774.00, 5074.00, '[{\"id\":9,\"nombre\":\"Laptop Gamer Razer Blade 15\",\"descripcion\":\"Laptop Razer Blade con procesador Intel i7, 16GB RAM, 1TB SSD y tarjeta gr\\u00e1fica NVIDIA RTX 3070\",\"precio\":\"2200.00\",\"stock\":6,\"imagen_url\":\"https:\\/\\/encrypted-tbn0.gstatic.com\\/images?q=tbn:ANd9GcRtGtdx4rQ5kn1ElM2X0caalzivetGOHF29YA&s\",\"fecha_registro\":\"2024-12-23 18:24:09\"},{\"id\":10,\"nombre\":\"Laptop Gamer Gigabyte AORUS 15G\",\"descripcion\":\"Laptop gamer con procesador Intel i7, 32GB RAM, 512GB SSD y tarjeta gr\\u00e1fica NVIDIA RTX 3070\",\"precio\":\"2100.00\",\"stock\":7,\"imagen_url\":\"https:\\/\\/www.kabifperu.com\\/imagenes\\/prod-22022021110453-notebook-gigabyte-aorus-15g-wb-15-6-lcd-fhd-core-i7-10875h-2-3ghz-16gb-ddr4-512gb-ssd-m-2-deta.png\",\"fecha_registro\":\"2024-12-23 18:24:09\"}]'),
(8, 1, '2024-12-29 01:11:25', 5100.00, 918.00, 6018.00, '[{\"id\":7,\"nombre\":\"Laptop Gamer HP Omen 15\",\"descripcion\":\"Laptop HP Omen con procesador i7, 16GB RAM, 512GB SSD y tarjeta gr\\u00e1fica NVIDIA RTX 2060\",\"precio\":\"1600.00\",\"stock\":10,\"imagen_url\":\"https:\\/\\/www.omen.com\\/content\\/dam\\/sites\\/omen\\/worldwide\\/laptops\\/omen-15-laptop\\/2-0\\/starmade-15-50-w-numpad-4-zone-oled-shadow-black-nt-h-dcam-non-odd-non-fpr-freedos-core-set-front-right-copy.png\",\"fecha_registro\":\"2024-12-23 18:24:09\"},{\"id\":10,\"nombre\":\"Laptop Gamer Gigabyte AORUS 15G\",\"descripcion\":\"Laptop gamer con procesador Intel i7, 32GB RAM, 512GB SSD y tarjeta gr\\u00e1fica NVIDIA RTX 3070\",\"precio\":\"2100.00\",\"stock\":7,\"imagen_url\":\"https:\\/\\/www.kabifperu.com\\/imagenes\\/prod-22022021110453-notebook-gigabyte-aorus-15g-wb-15-6-lcd-fhd-core-i7-10875h-2-3ghz-16gb-ddr4-512gb-ssd-m-2-deta.png\",\"fecha_registro\":\"2024-12-23 18:24:09\"},{\"id\":12,\"nombre\":\"Laptop Gamer ASUS TUF Gaming F15\",\"descripcion\":\"Laptop ASUS TUF Gaming con procesador AMD Ryzen 7, 16GB RAM, 1TB SSD y tarjeta gr\\u00e1fica NVIDIA GTX 1660 Ti\",\"precio\":\"1400.00\",\"stock\":18,\"imagen_url\":\"https:\\/\\/encrypted-tbn0.gstatic.com\\/images?q=tbn:ANd9GcSnwy902pE6_fFeFgGlRH9TQMUhcI292ACAdQ&s\",\"fecha_registro\":\"2024-12-23 18:24:09\"}]');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `estado` enum('pendiente','procesando','enviado','entregado') DEFAULT 'pendiente',
  `fecha_pedido` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`id`, `id_cliente`, `total`, `estado`, `fecha_pedido`) VALUES
(1, 2, 1200.00, 'pendiente', '2024-12-23 23:23:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `precio` decimal(10,2) NOT NULL,
  `stock` int(11) DEFAULT 0,
  `imagen_url` varchar(255) DEFAULT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `precio`, `stock`, `imagen_url`, `fecha_registro`) VALUES
(1, 'Computadora Gamer', 'Computadora de alto rendimiento para juegos', 1200.00, 10, 'https://unaluka.com/cdn/shop/files/81fZmxBbQgL._AC_SL1500_2048x.jpg?v=1712941794', '2024-12-23 23:23:15'),
(2, 'Laptop Ultra ligera', 'Laptop ideal para trabajo remoto', 800.00, 5, 'https://es.digitaltrends.com/wp-content/uploads/2020/05/samsung-galaxy-book-s-2-768x768-removebg-preview.jpg?fit=688%2C363&p=1', '2024-12-23 23:23:15'),
(3, 'Laptop Gamer ASUS ROG', 'Laptop gamer de alto rendimiento con procesador i7, 16GB RAM, 512GB SSD y tarjeta gráfica NVIDIA RTX 3060', 1500.00, 15, 'https://m.media-amazon.com/images/I/811QpiYXe-L._AC_SL1500_.jpg', '2024-12-23 23:24:09'),
(4, 'Laptop Gamer MSI GE66 Raider', 'Laptop gamer con pantalla de 15.6 pulgadas, procesador i9, 32GB RAM, 1TB SSD y tarjeta gráfica NVIDIA RTX 3070', 2200.00, 10, 'https://oechsle.vteximg.com.br/arquivos/ids/15471070-1000-1000/image-fdc30a9944294bcd89441398c8924e6f.jpg?v=638283551550400000', '2024-12-23 23:24:09'),
(5, 'Laptop Gamer Alienware M15', 'Laptop gaming Alienware con procesador AMD Ryzen 9, 16GB RAM, 1TB SSD, y tarjeta gráfica NVIDIA RTX 3080', 2500.00, 8, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRMclgRdM1AsrVkrvr4thXEOf2Ng6zXCxfhqw&s', '2024-12-23 23:24:09'),
(6, 'Laptop Gamer Lenovo Legion 5', 'Laptop gamer Lenovo con procesador Intel i7, 16GB RAM, 512GB SSD y tarjeta gráfica NVIDIA GTX 1660 Ti', 1300.00, 12, 'https://m.media-amazon.com/images/I/71fzx0pGY5L.jpg', '2024-12-23 23:24:09'),
(7, 'Laptop Gamer HP Omen 15', 'Laptop HP Omen con procesador i7, 16GB RAM, 512GB SSD y tarjeta gráfica NVIDIA RTX 2060', 1600.00, 10, 'https://www.omen.com/content/dam/sites/omen/worldwide/laptops/omen-15-laptop/2-0/starmade-15-50-w-numpad-4-zone-oled-shadow-black-nt-h-dcam-non-odd-non-fpr-freedos-core-set-front-right-copy.png', '2024-12-23 23:24:09'),
(8, 'Laptop Gamer Acer Predator Helios 300', 'Laptop gamer Acer con pantalla de 17.3 pulgadas, procesador Intel i7, 16GB RAM, 512GB SSD y tarjeta gráfica NVIDIA RTX 3060', 1800.00, 14, 'https://m.media-amazon.com/images/I/71nz3cIcFOL._AC_SL1500_.jpg', '2024-12-23 23:24:09'),
(9, 'Laptop Gamer Razer Blade 15', 'Laptop Razer Blade con procesador Intel i7, 16GB RAM, 1TB SSD y tarjeta gráfica NVIDIA RTX 3070', 2200.00, 6, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRtGtdx4rQ5kn1ElM2X0caalzivetGOHF29YA&s', '2024-12-23 23:24:09'),
(10, 'Laptop Gamer Gigabyte AORUS 15G', 'Laptop gamer con procesador Intel i7, 32GB RAM, 512GB SSD y tarjeta gráfica NVIDIA RTX 3070', 2100.00, 7, 'https://www.kabifperu.com/imagenes/prod-22022021110453-notebook-gigabyte-aorus-15g-wb-15-6-lcd-fhd-core-i7-10875h-2-3ghz-16gb-ddr4-512gb-ssd-m-2-deta.png', '2024-12-23 23:24:09'),
(11, 'Laptop Gamer Dell G5 15', 'Laptop Dell G5 con procesador i7, 16GB RAM, 512GB SSD y tarjeta gráfica NVIDIA GTX 1650 Ti', 1200.00, 20, 'https://www.infotec.com.pe/73773-large_default/laptop-dell-g5-15-5525-ryzen-7-6800h-16gb-ddr5-512gb-ssd-tvideo-rtx-3060-6gb-156-fhd-windows-11-0nvkm.jpg', '2024-12-23 23:24:09'),
(12, 'Laptop Gamer ASUS TUF Gaming F15', 'Laptop ASUS TUF Gaming con procesador AMD Ryzen 7, 16GB RAM, 1TB SSD y tarjeta gráfica NVIDIA GTX 1660 Ti', 1400.00, 18, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSnwy902pE6_fFeFgGlRH9TQMUhcI292ACAdQ&s', '2024-12-23 23:24:09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `rol` enum('admin','cliente') NOT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `email`, `password`, `rol`, `fecha_registro`) VALUES
(1, 'Administrador', 'admin@dominio.com', 'admin', 'admin', '2024-12-23 23:23:15'),
(2, 'Luis Gustavo', 'luis@dominio.com', 'luis', 'cliente', '2024-12-23 23:23:15');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `detalles_pedidos`
--
ALTER TABLE `detalles_pedidos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pedido` (`id_pedido`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `facturas`
--
ALTER TABLE `facturas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `detalles_pedidos`
--
ALTER TABLE `detalles_pedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `facturas`
--
ALTER TABLE `facturas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalles_pedidos`
--
ALTER TABLE `detalles_pedidos`
  ADD CONSTRAINT `detalles_pedidos_ibfk_1` FOREIGN KEY (`id_pedido`) REFERENCES `pedidos` (`id`),
  ADD CONSTRAINT `detalles_pedidos_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id`);

--
-- Filtros para la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `pedidos_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `usuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
