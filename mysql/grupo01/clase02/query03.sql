-- Cambiar nombre a una campo
alter table area
change descripcion descripcion_1 varchar(100);

-- actualizar
UPDATE trabajador SET tipo='empleado' WHERE id=1;


-- Reiniciar las tablas
truncate table trabajador;
/*
Desactivamos el verificador de llaves foraneas, truncamos
la tabla y luego lo volvemos a activar
*/
SET FOREIGN_KEY_CHECKS = 0; 
truncate table area;
SET FOREIGN_KEY_CHECKS = 1;