CREATE VIEW entradas_por_autor AS 
SELECT e.id, e.titulo, u.nombre, u.apellidos, c.nombre AS 'categoría'
FROM entradas e
INNER JOIN usuarios u ON e.usuario_id = u.id
INNER JOIN categorias c ON e.categoria_id = c.id;
SELECT * FROM entradas_por_autor WHERE nombre='Pepe';
DROP VIEW entradas_por_autor;
