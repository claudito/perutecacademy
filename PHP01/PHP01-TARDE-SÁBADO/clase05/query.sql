CREATE DATABASE perutec;
USE test;


CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(11) NOT NULL,
  `nombres` varchar(100) NOT NULL,
  `apellidos` varchar(10) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB;

--
-- Volcar la base de datos para la tabla `maeart`
--

INSERT INTO `usuarios` ( `codigo`,`nombres`, `apellidos`)
 VALUES
('0001', 'JUAN', 'PEREZ'),
('0002', 'PEDRO', 'TENORIO');