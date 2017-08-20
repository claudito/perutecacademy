
-- Listar las bases de Datos:

show databases;

-- Crear una de datos
create database clase06;

-- utilizar la base de datos
 use clase06;
 
-- creacion de una tabla
   create table usuarios
   (
      id int primary key auto_increment,
      nombres   varchar(100) not null,
      apellidos varchar(100) not null,
      dni       varchar(8) not null,
      fecha     timestamp default current_timestamp     
   )
   ENGINE=INNODB;
   
   
   -- listar tablas
      show tables;
   
   -- Describir los detalles de la tabla.
	describe usuarios;
   
   -- insert
    INSERT INTO usuarios(nombres,apellidos,dni)
    VALUES('PEDRO','PEREZ','12340000'),
		  ('MARIA','TORRES','00000000');
   
   -- SELECT
     SELECT * FROM usuarios;
SELECT id as codigo,CONCAT(nombres,' ',apellidos)as nombres,dni,
DATE_FORMAT(fecha,'%d-%m-%Y')AS fecha FROM usuarios;

-- UPDATE
   SELECT * FROM usuarios;
   UPDATE usuarios SET dni='12347777',nombres='LUCIANA'
   WHERE id=1;

-- DELETE
   SELECT * FROM usuarios;
   DELETE FROM usuarios WHERE id=1
