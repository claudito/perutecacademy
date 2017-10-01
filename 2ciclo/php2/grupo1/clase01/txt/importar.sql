
-- Ruta del archivo a importar
LOAD DATA LOCAL INFILE 'd:/importacion.txt'
-- nombre de la tabla:
INTO TABLE importacion
FIELDS TERMINATED BY ',' ENCLOSED BY '"' ESCAPED BY '"'
LINES TERMINATED BY';';