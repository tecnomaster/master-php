/* Seleccionar el grupo donde trabaja el vendedor con el mayor salario mostrando el nombre de dicho grupo */
SELECT id, nombre FROM grupos WHERE id IN 
(SELECT grupo_id FROM vendedores WHERE sueldo IN
(SELECT MAX(sueldo) FROM vendedores));

SELECT g.id, g.nombre FROM grupos g
INNER JOIN vendedores v ON g.id = v.grupo_id
ORDER BY v.sueldo DESC LIMIT 1;
