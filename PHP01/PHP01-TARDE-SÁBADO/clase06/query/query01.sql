
-- 
/**/
#

#Listar las bases de Datos
show databases;

#Creación de una base de Datos
create database academia_bd;

#Usar una Base de datos
use academia_bd;

#creación de una tabla
create table usuario(
id int auto_increment primary key,
nombres varchar(200) not null,
apellidos varchar(200) null,
fecha_creacion timestamp default current_timestamp
)
engine=innodb;


-- Listar las tablas
  show tables;

-- Describir los detalles de las tablas
  describe usuario;
  
  
 -- INSERT 
  INSERT INTO usuario(nombres,apellidos)
  VALUE('OMAR','ZEA'),('JOSE','ROCHA'),('MARIA','PAZ');
  
  
  
  -- SELECT
    SELECT * FROM usuario;
    SELECT id,nombres,apellidos,DATE_FORMAT(fecha_creacion,'%d/%m/%Y %H:%i:%s') as fecha_creacion FROM usuario;
  
 
  


