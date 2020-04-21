# Consultas con Condiciones

/*
Operadores de Condición:
=                   igual
!=                  Distinto
<                   Menor
>                   Mayor
<=                  Menor o igual
>=                  Mayor o igual
between A and B     Entre
in                  En
is null             Es nulo
is not null         No es nulo
like                Equivalente
not like            No equivalente

Operadores Lógicos:
O                   OR
Y                   AND
No                  NOT

Comodines:
Cualquier cantidad de caracteres    %
Un caracter desconocido             _

*/

SELECT * FROM usuarios;
SELECT * FROM usuarios WHERE email = 'yamimoto@sakayama.com';
SELECT email, nombre, apellidos FROM usuarios WHERE email = 'yamimoto@sakayama.com';
SELECT nombre, apellidos FROM usuarios WHERE YEAR(fecha)='2020';
SELECT nombre, apellidos FROM usuarios WHERE YEAR(fecha)!='2020';
SELECT nombre, apellidos FROM usuarios WHERE YEAR(fecha)!='2020' OR ISNULL(fecha);
SELECT * FROM usuarios WHERE apellidos LIKE '%a%' AND password = '1234';
SELECT * FROM usuarios WHERE (YEAR(fecha)%2 != 0);
SELECT UPPER(nombre) AS 'Nombre', apellidos FROM usuarios WHERE (LENGTH(nombre)>2) AND (YEAR(fecha)<'2020');
SELECT * FROM usuarios ORDER BY nombre ASC LIMIT 3;
SELECT * FROM usuarios ORDER BY nombre ASC LIMIT 0,2;

