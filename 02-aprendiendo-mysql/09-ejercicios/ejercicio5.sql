/* Listar todos los vendedores y para c/u mostrar el nombre y dias que lleva trabajando en el concesionario */
SELECT nombre, apellidos, DATEDIFF(CURDATE(),fecha_alta) AS 'Antiguedad en Días' FROM vendedores; 
UPDATE vendedores SET fecha_alta = '2020-01-10' WHERE nombre = 'Alan';
