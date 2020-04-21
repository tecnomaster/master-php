/* listar todos los pedidos de TecnoEstudios Inc */
/* Solo los números de Pedido */
SELECT * FROM pedidos WHERE cliente_id IN (SELECT id FROM clientes WHERE nombre = 'TecnoEstudios Inc'); 

/* Con los modelos de los vehículos */
SELECT p.id AS 'Nro Pedido', p.cantidad AS 'Cant', a.modelo AS 'Modelo'
FROM pedidos p 
INNER JOIN automoviles a ON a.id = p.automovil_id
INNER JOIN clientes c ON c.id = p.cliente_id 
WHERE p.cliente_id IN
(SELECT id FROM clientes WHERE c.nombre = 'TecnoEstudios Inc');