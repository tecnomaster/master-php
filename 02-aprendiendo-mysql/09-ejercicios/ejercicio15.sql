/* Mostrar los 2 clientes con mayor número de pedidos e indicar cuántos ha hecho */

/* Por cantidad de unidades */
SELECT c.nombre AS 'Cliente', SUM(p.cantidad) AS 'Unidades' FROM pedidos p 
INNER JOIN clientes c ON c.id=p.cliente_id
GROUP BY p.cliente_id ORDER BY Unidades DESC LIMIT 2;

/* Por pedidos */
SELECT c.nombre AS 'Cliente', COUNT(p.id) AS 'Pedidos' FROM pedidos p 
INNER JOIN clientes c ON c.id=p.cliente_id
GROUP BY p.cliente_id ORDER BY Pedidos DESC LIMIT 2;