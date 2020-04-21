/* Modificar la comisión a 2% cuando el vendedor gana más de 50 mil al año */
UPDATE vendedores SET comision = 2 WHERE sueldo >= 50000;

/* Modificar la comisión a 0.5% cuando el vendedor gana más de 50 mil al año */
UPDATE vendedores SET comision = 0.5 WHERE sueldo >= 50000;