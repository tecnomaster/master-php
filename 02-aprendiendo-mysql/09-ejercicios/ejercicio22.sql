/* Listar los clientes con su id, nombre y su id y nombre del vendedor asignado */
SELECT c.id AS 'Id. Cliente', c.nombre AS 'Cliente', v.id AS 'Id. Vendedor', CONCAT(v.nombre,' ',v.apellidos) AS 'Vendedor' FROM clientes c 
INNER JOIN vendedores v ON c.vendedor_id = v.id; 

SELECT c.id AS 'Id. Cliente', c.nombre AS 'Cliente', v.id AS 'Id. Vendedor', CONCAT(v.nombre,' ',v.apellidos) AS 'Vendedor' 
FROM clientes c, vendedores v 
WHERE c.vendedor_id = v.id; 
