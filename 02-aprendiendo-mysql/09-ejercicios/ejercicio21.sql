/* Obtener los nombres y ciudades de los clientes que han emitido pedidos igual o mayor a 3 vehículos*/

/* Clientes que en total han comprado 3 o más vehículos */
SELECT c.nombre, c.ciudad, SUM(p.cantidad) AS 'Cantidad' FROM clientes c
INNER JOIN pedidos p ON c.id = p.cliente_id
GROUP BY p.cliente_id HAVING SUM(p.cantidad) >= 3
ORDER BY Cantidad DESC;

/*Clientes con Pedidos unitarios de 3 o más vehículos */
SELECT nombre, ciudad FROM clientes WHERE id IN
(SELECT cliente_id FROM pedidos WHERE cantidad >= 3);

