# CONSULTAS DE AGRUPAMIENTO #

SELECT titulo, categoria_id FROM entradas GROUP BY categoria_id;
SELECT COUNT(titulo) AS 'Num. Títulos', categoria_id FROM entradas GROUP BY categoria_id;

# CONSULTAS DE AGRUPAMIENTO CON CONDICIONES #
SELECT COUNT(titulo) AS 'Num. Títulos', categoria_id 
    FROM entradas GROUP BY categoria_id HAVING COUNT(titulo) >= 3;

# FUNCIONES DE AGRUPAMIENTO #
/*
AVG             Sacar el Promedio
COUNT           Contar el número de elementos
MAX             Valor máximo del grupo
MIN             Valor mínimo del grupo
SUM             Sumar todo el contenido del grupo
*/

SELECT AVG(id) AS 'Promedio' FROM entradas;
SELECT MAX(id), titulo AS 'Máximo' FROM entradas;
SELECT SUM(id) AS 'Suma' FROM entradas;

