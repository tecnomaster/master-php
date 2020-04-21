/* Listar los nombres de clientes con el monto acumulado de sus pedidos */
SELECT c.nombre AS 'Cliente', SUM(a.precio*p.cantidad) AS 'Monto' FROM pedidos p, clientes c, automoviles a 
WHERE p.cliente_id = c.id AND p.automovil_id = a.id
GROUP BY c.id
ORDER BY Monto DESC;