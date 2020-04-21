/* Listar los nombres de los clientes y la cantidad de pedidos que han emitido incluyendo los que no hayan emitido pedidos */
SELECT c.nombre AS 'Cliente', COUNT(p.id) AS 'Pedidos' 
FROM clientes c, pedidos p 
WHERE c.id = p.cliente_id 
GROUP BY c.id 
ORDER BY Pedidos DESC;
