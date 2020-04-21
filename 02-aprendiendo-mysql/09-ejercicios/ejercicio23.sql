/* Listar todos los pedidos realizados con la marca de vehículos y el nombre del cliente */
SELECT p.id AS 'Nro Pedido', c.nombre AS 'Cliente', a.marca AS 'Marca del Vehículo' FROM pedidos p, clientes c, automoviles a 
WHERE p.cliente_id = c.id AND p.automovil_id = a.id 
ORDER BY p.id ASC;

