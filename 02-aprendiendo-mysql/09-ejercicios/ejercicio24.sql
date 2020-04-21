/* Listar los pedidos con el nombre del automovil, el nombre del cliente y la ciudad pero solo cuando sean de Medellín */
SELECT p.id AS 'Nro Pedido', c.nombre AS 'Cliente', a.modelo AS 'Modelo del Vehículo', p.cantidad AS 'Cant' FROM pedidos p, clientes c, automoviles a 
WHERE p.cliente_id = c.id AND p.automovil_id = a.id AND c.ciudad = 'Medellin'
ORDER BY p.id ASC;