/* Obtener los vendedores con 2 o más clientes */
SELECT nombre, apellidos FROM vendedores WHERE id IN
(SELECT vendedor_id FROM clientes GROUP BY vendedor_id HAVING (COUNT(id)>=2));

SELECT nombre, apellidos FROM vendedores WHERE id IN
(SELECT vendedor_id FROM clientes WHERE id IN
(SELECT cliente_id FROM pedidos HAVING (COUNT(id)>=2))
);