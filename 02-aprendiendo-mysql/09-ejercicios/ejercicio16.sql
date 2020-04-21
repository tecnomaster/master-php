/* Obtener un listado de clientes atendidos por el vendedor Pepe Trueno */
SELECT * FROM clientes WHERE vendedor_id IN (SELECT id FROM vendedores WHERE nombre='Pepe' AND apellidos = 'Trueno');
