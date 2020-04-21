/* Visualizar el nombre y los apellidos de los vendedores en una misma columna con su fecha de alta con el día de la semana en que ingresaron */
SELECT CONCAT(nombre,' ',apellidos) AS 'Nombre Completo', CONCAT (DAYNAME(fecha_alta),', ',fecha_alta) AS 'Día de Ingreso' FROM vendedores;