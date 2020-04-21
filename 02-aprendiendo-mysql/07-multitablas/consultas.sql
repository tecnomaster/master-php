SELECT e.id, e.titulo, u.nombre, u.apellidos, c.nombre AS 'categoría'
FROM entradas e, usuarios u, categorias c 
WHERE e.usuario_id = u.id AND e.categoria_id = c.id;

/* CON INNER JOIN */
SELECT e.id, e.titulo, u.nombre, u.apellidos, c.nombre AS 'categoría'
FROM entradas e
INNER JOIN usuarios u ON e.usuario_id = u.id
INNER JOIN categorias c ON e.categoria_id = c.id;

SELECT c.nombre AS 'Categoría', COUNT(e.id) AS 'Cantidad Entradas'
FROM categorias c, entradas e
WHERE c.id = e.categoria_id
GROUP BY e.categoria_id;

/* CON INNER JOIN */
SELECT c.nombre AS 'Categoría', COUNT(e.id) AS 'Cantidad Entradas'
FROM categorias c
INNER JOIN entradas e ON c.id = e.categoria_id
GROUP BY e.categoria_id;

/* CON LEFT JOIN */
SELECT c.nombre AS 'Categoría', COUNT(e.id) AS 'Cantidad Entradas'
FROM categorias c
LEFT JOIN entradas e ON c.id = e.categoria_id
GROUP BY e.categoria_id;

/* CON RIGHT JOIN */
SELECT c.nombre AS 'Categoría', COUNT(e.id) AS 'Cantidad Entradas'
FROM entradas e
RIGHT JOIN categorias c ON c.id = e.categoria_id
GROUP BY e.categoria_id;

SELECT u.email AS 'Email', COUNT(e.id) AS 'Cantidad Entradas'
FROM usuarios u, entradas e 
WHERE u.id = e.usuario_id
GROUP BY e.usuario_id;

/* CON INNER JOIN */
SELECT u.email AS 'Email', COUNT(e.id) AS 'Cantidad Entradas'
FROM usuarios u
INNER JOIN entradas e ON u.id = e.usuario_id
GROUP BY e.usuario_id;