# Select en General
SELECT email, nombre, apellidos FROM usuarios;
SELECT * FROM usuarios;

# Funciones Matemáticas
SELECT id, email, (7*7) AS 'Operacion' FROM usuarios ORDER BY id DESC;
SELECT id, email, (id*7) AS 'Operacion' FROM usuarios ORDER BY id DESC;
SELECT ABS(7.34) AS 'Operacion' FROM usuarios;
SELECT CEIL(7.34) AS 'Operacion' FROM usuarios;
SELECT FLOOR(7.34) AS 'Operacion' FROM usuarios;
SELECT SQRT(7.34) AS 'Operacion' FROM usuarios;
SELECT PI() AS 'Operacion' FROM usuarios;
SELECT RAND() AS 'Operacion' FROM usuarios;
SELECT ROUND(7.347638717316837126, 6) AS 'Operacion' FROM usuarios;
SELECT TRUNCATE(7.34, 1) AS 'Operacion' FROM usuarios;
SELECT ROUND(id, 2) AS 'Operacion' FROM usuarios;

# Funciones de Texto
SELECT UPPER(nombre) FROM usuarios;
SELECT LOWER(nombre) FROM usuarios;
SELECT UPPER(CONCAT(nombre, ' ', apellidos)) AS 'Conversion' FROM usuarios;
SELECT LENGTH(CONCAT(nombre, ' ', apellidos)) AS 'Conversion' FROM usuarios;
SELECT email, LENGTH(CONCAT(nombre, ' ', apellidos)) AS 'Conversion' FROM usuarios;
SELECT TRIM(CONCAT('       ', nombre, ' ',  apellidos, '       ')) AS 'Conversion' FROM usuarios;

# Funciones de Fecha

SELECT email, fecha, CURDATE() AS 'Fecha Actual' FROM usuarios;
SELECT email, fecha, CURDATE() AS 'Fecha Actual', DATEDIFF(fecha, CURDATE()) AS 'Diferencia' FROM usuarios;
SELECT email, fecha, DAYNAME(fecha) AS 'Día' FROM usuarios;
SELECT email, fecha, DAYOFMONTH(fecha) AS 'Día del Registro en el Mes' FROM usuarios;
SELECT email, fecha, DAYOFWEEK(fecha) AS 'Día del Registro en la Semana' FROM usuarios;
SELECT email, fecha, DAYOFYEAR(fecha) AS 'Día del Registro en el Año' FROM usuarios;
SELECT email, fecha, MONTH(fecha) AS 'Mes del Registro' FROM usuarios;
SELECT email, fecha, YEAR(fecha) AS 'Año del Registro' FROM usuarios;
SELECT email, fecha, DAY(fecha) AS 'Día del Registro' FROM usuarios;
SELECT email, fecha, HOUR(fecha) AS 'Hora del Registro' FROM usuarios;
SELECT email, fecha, MINUTE(fecha) AS 'Minuto del Registro' FROM usuarios;
SELECT email, fecha, SECOND(fecha) AS 'Segundo del Registro' FROM usuarios;
SELECT email, fecha, CURTIME() AS 'Hora Actual' FROM usuarios;
SELECT email, fecha, CURTIME() AS 'Hora Actual', DATEDIFF(fecha, CURTIME()) AS 'Diferencia' FROM usuarios;
SELECT email, fecha, SYSDATE() AS 'Fecha del Sistema' FROM usuarios;
SELECT email, fecha, HOUR(SYSDATE()) AS 'Hora Actual' FROM usuarios;
SELECT email, fecha, MINUTE(SYSDATE()) AS 'Minuto Actual' FROM usuarios;
SELECT email, DATE_FORMAT(fecha, '%d-%m-%Y') FROM usuarios;

# Funciones Generales

SELECT email, nombre, apellidos, ISNULL(apellidos) FROM usuarios;
SELECT email, nombre, apellidos, STRCMP('Trueno', apellidos) FROM usuarios;
SELECT VERSION() FROM usuarios;
SELECT USER() FROM usuarios;
SELECT DISTINCT USER() FROM usuarios;
SELECT DISTINCT DATABASE() FROM usuarios;
SELECT email, IFNULL(apellidos, 'Le falta el Apellido') FROM usuarios;
