-- Listar Base de Datos
 show databases;
 
 -- Crear Base de Datos
 create database perutec;
 
 -- usar la Base de datos
 use perutec;
 
 
 --  crear tabla usuario
  create table usuario(
  id int auto_increment primary key not null,
  nombres varchar(100) null,
  apellidos varchar(100) null,
  dni char(8) null,
  fecha_nac date null,
  user varchar(20) null,
  pass varchar(250) null,
  date_create timestamp default current_timestamp not null,
  date_update datetime null
  )engine=innodb;
 
 
-- listar las tablas
show tables;

-- describir la tabla
describe usuario;


-- select
SELECT * FROM usuario;
SELECT  * FROM usuario limit 100;
SELECT  * FROM  usuario WHERE id=1;
SELECT  * FROM  usuario WHERE id=2;
SELECT  * FROM  usuario WHERE id IN (1);

-- INSERTAR
INSERT INTO usuario(nombres,apellidos,dni,fecha_nac,user,pass)
VALUES
('Luis','Claudio','46794282','1990-07-15','luis',
md5('123')),
('Omar','Perez','12345678','1989-05-24','omar',
md5('omar'));



-- ACTUALIZAR
UPDATE usuario SET apellidos='Claudio Ponce',nombres='Luis Augusto',
date_update=current_timestamp
 WHERE id=1 AND dni='46794282';
 
 -- ELIMINAR
 DELETE FROM usuario WHERE id=1
 