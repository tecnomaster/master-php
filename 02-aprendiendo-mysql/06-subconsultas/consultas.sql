# Subconsultas (consultas dentro de otras) #

INSERT INTO `usuarios` VALUES (null, 'Deborah', 'Carne', 'deborah@carne.com', 'clavellina', '2020-02-03');
INSERT INTO `usuarios` VALUES (null, 'Ibon', 'billito', 'Ibon@Billito.com', 'clavellina', '2020-02-03');
INSERT INTO `usuarios` VALUES (null, 'Ali', 'Cate', 'Ali@cate.com', 'claveALI', '2020-02-03');
INSERT INTO `usuarios` VALUES (null, 'Alan', 'Brito', 'Alan@brito.com', 'claveAlan', '2020-02-03');

SELECT * FROM usuarios WHERE id IN (SELECT usuario_id FROM entradas);
SELECT * FROM usuarios WHERE id NOT IN (SELECT usuario_id FROM entradas);
SELECT * FROM usuarios WHERE id IN (SELECT usuario_id FROM entradas where titulo like '%GTA%');
SELECT * FROM entradas WHERE usuario_id IN (SELECT id FROM usuarios where nombre like '%Pepe%') AND titulo like '%GTA%';
SELECT * FROM entradas WHERE categoria_id IN (SELECT id FROM categorias where nombre like '%Acción%');
SELECT * FROM categorias WHERE categoria_id IN (SELECT id FROM entradas HAVING COUNT(titulo) >= 3);
SELECT * FROM categorias WHERE id IN (SELECT categoria_id FROM entradas GROUP BY categoria_id HAVING COUNT(id) >= 3);
SELECT * FROM usuarios WHERE id IN (SELECT usuario_id FROM entradas WHERE dayofweek(fecha)=5);

# OJO NO ESTÁ BIEN#
SELECT * FROM usuarios WHERE id IN (SELECT usuario_id FROM entradas GROUP BY usuario_id ORDER BY COUNT(id) DESC LIMIT 1);
# OJO NO ESTA BIEN #
SELECT COUNT(usuario_id) AS maximo FROM entradas GROUP BY usuario_id ORDER BY maximo DESC LIMIT 1;

SELECT * FROM categorias WHERE id NOT IN (SELECT categoria_id FROM entradas);
