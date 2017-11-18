

-- join entre la tabla trabajador y la tabla area
SELECT t1.id,t1.nombres,t1.apellidos,t1.correo,t1.dni,t1.talla,t1.fecha_ingreso,
t1.date_create,t2.descripcion as area 
FROM trabajador as t1 INNER JOIN area as t2  ON t1.area_id=t2.id
