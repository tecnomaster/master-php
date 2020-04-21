/* listar clientes que hayan comprado un Renault Clio */

/* Con Inner Join */
SELECT c.nombre, c.apellidos
FROM clientes c 
INNER JOIN pedidos p ON p.cliente_id = c.id 
INNER JOIN automoviles a ON a.id = p.automovil_id
WHERE p.automovil_id IN
(SELECT id FROM automoviles WHERE a.modelo = 'Renault Clio')
GROUP BY p.automovil_id;

/* Con Sub-Consultas */
SELECT nombre FROM clientes WHERE id IN
(SELECT cliente_id FROM pedidos WHERE automovil_id IN
(SELECT id FROM automoviles WHERE modelo LIKE '%Renault%')
);