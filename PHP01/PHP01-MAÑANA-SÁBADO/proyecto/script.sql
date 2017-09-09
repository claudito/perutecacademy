
create database perutec;
use perutec;

--- tabla de articulos

CREATE TABLE `maeart` (
  `id` int(11) NOT NULL primary key auto_increment,
  `codigo` varchar(20) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `unidad` varchar(10) NOT NULL,
  `cantidad` decimal(15,6) NOT NULL,
  `precio` decimal(15,6) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;


INSERT INTO `maeart` (`id`, `codigo`, `descripcion`, `unidad`, `cantidad`, `precio`, `fecha_creacion`) VALUES
(1, '01', 'arroz', 'UND', '23.000000', '3.670000', '2017-09-09 17:54:21'),
(2, '02', 'mouse', 'JGO', '89.000000', '67.000000', '2017-09-09 18:06:42');

-- ---- tabla unidad

CREATE TABLE `unidad` (
  `id` int(11) NOT NULL primary key auto_increment,
  `codigo` varchar(20) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;


INSERT INTO `unidad` (`id`, `codigo`, `descripcion`, `fecha_creacion`) VALUES
(1, 'KG', 'KILOGRAMOS', '2017-09-04 04:29:04'),
(2, 'UND', 'Unidad', '2017-09-04 04:29:04'),
(3, 'JGO', 'JUEGO', '2017-09-04 04:41:01');