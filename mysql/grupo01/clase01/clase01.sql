
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

-- INSERTAR 

 

