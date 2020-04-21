/* Mostrar las unidades vendidas de cada vehículo a cada cliente visualizando el nombre del vehículo, número del cliente y la suma de unidades */
SELECT a.modelo AS 'Automóvil', p.cliente_id AS 'Nro. Cliente', c.nombre AS 'Cliente', SUM(p.cantidad) AS 'Unidades Compradas' FROM pedidos p 
INNER JOIN clientes c ON c.id=p.cliente_id
INNER JOIN automoviles a ON a.id=p.automovil_id
GROUP BY p.automovil_id, p.cliente_id;
 