/*
Tipos de Datos:
int (nro caracteres) Entero 
integer (nro caracteres) Entero
varchar (nro caracteres) String / Alfanumérico (máx 255 caracteres)
char (nro caracteres) String / Alfanumérico
float (nro de cifras) Decimal / Coma Flotante
date, time, timestamp (formatos de fecha y hora)

Strings más Grandes:
text (65535 de caracteres)
mediumtext (16 millones de caracteres)
longtext (4 billones de caracteres)

Enteros más grandes:
mediumint
bigint

*/

/*
Crear Tabla SQL
*/

CREATE TABLE usuarios (
    id          int(11) auto_increment,
    nombre      varchar(100) not null,
    apellidos   varchar(255) not null,
    email       varchar(100) null,
    password    varchar(255) default '12345',
    CONSTRAINT pk_usuarios PRIMARY KEY (id)
);


INSERT INTO `usuarios` (`id`, `nombre`, `apellidos`, `email`, `password`) VALUES ('1', 'Pepe', 'Trueno', 'pepe@pepetrueno.com', 'miclave');INSERT INTO `usuarios` (`id`, `nombre`, `apellidos`, `email`, `password`) VALUES ('1', 'Pepe', 'Trueno', 'pepe@pepetrueno.com', 'miclave');
INSERT INTO `usuarios` (`id`, `nombre`, `apellidos`, `email`, `password`) VALUES ('2', 'Juan', 'Bimba', 'juan@bimba.com', 'suclave');