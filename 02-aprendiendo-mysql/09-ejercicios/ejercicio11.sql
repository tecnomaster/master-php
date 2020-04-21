/* Visualizar todos los cargos de los vendedores y el número de vendedores en dicho cargo ordenándolos por cantidad de mayor a menor */
SELECT cargo, COUNT(id) AS 'cantidad' FROM vendedores GROUP BY cargo ORDER BY cantidad DESC;

