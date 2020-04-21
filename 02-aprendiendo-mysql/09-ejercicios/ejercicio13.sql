/* Sacar la media de sueldos de los vendedores por grupo mostrando el nombre y ciudad del grupo correspondiente*/
SELECT g.nombre AS 'Grupo', g.ciudad AS 'ciudad', AVG(ROUND(v.sueldo, 2)) AS 'Sueldo Promedio' FROM vendedores v 
INNER JOIN grupos g ON v.grupo_id=g.id
GROUP BY v.grupo_id;
