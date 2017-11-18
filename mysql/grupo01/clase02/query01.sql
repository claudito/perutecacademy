SELECT  * FROM trabajador;
describe trabajador;
SELECT  * FROM area;
INSERT INTO area(descripcion)
VALUES('Sistemas'),('Compras'),('Contabilidad'),('Ventas');

INSERT INTO area(descripcion)VALUES('Compras'),('Contabilidad'),('Ventas');
INSERT INTO trabajador(nombres,apellidos,correo,dni,talla,
fecha_ingreso,tipo,area_id)
VALUES('Cesar','Ponce','cesar@hotmail.com','12345678',1.80,'2017-02-02','obrero',1),
('Juan','Perez','juan@terra.com','99994456',1.60,'2017-09-12','empleado',3),
('Maria','Perez','maria@perez.com','1234567',1.60,'2017-03-29','obrero',2),
('Luana','Torres','luana@hotmail.com','54678999',1.60,'2017-11-18','obrero',2),
('Pedro','Juarez','pedro@gmail.com','0000000',1.78,'2017-10-20','empleado',1);