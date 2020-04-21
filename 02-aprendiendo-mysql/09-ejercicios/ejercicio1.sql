USE concesionarios;

CREATE TABLE IF NOT EXISTS automoviles (
id              int(10) auto_increment  not null,
modelo          varchar(100) not null,
marca           varchar(50),
precio          int(20) not null,
inventario      int(255) not null,
CONSTRAINT pk_automoviles PRIMARY KEY (id)
)ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS grupos (
id              int(10) auto_increment  not null,
nombre          varchar(100) not null,
ciudad          varchar(100),
CONSTRAINT pk_grupos PRIMARY KEY (id)
)ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS vendedores (
id              int(10) auto_increment  not null,
grupo_id        int(10) not null,
jefe            int(10),
nombre          varchar(100) not null,
apellidos       varchar(150),
cargo           varchar(50),
fecha_alta      date,
sueldo          float(20,2),
comision        float(10,2),
CONSTRAINT pk_vendedores PRIMARY KEY (id),
CONSTRAINT fk_vendedor_grupo FOREIGN KEY (grupo_id) REFERENCES grupos(id),
CONSTRAINT fk_vendedor_jefe FOREIGN KEY (jefe) REFERENCES vendedores(id)
)ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS clientes (
id              int(10) auto_increment  not null,
vendedor_id     int(10),
nombre          varchar(150) not null,
ciudad          varchar(100),
gastado         float(50,2),
fecha      date,
CONSTRAINT pk_clientes PRIMARY KEY (id),
CONSTRAINT fk_cliente_vendedor FOREIGN KEY (vendedor_id) REFERENCES vendedores(id)
)ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS pedidos (
id              int(10) auto_increment  not null,
cliente_id      int(10) not null,
automovil_id    int(10) not null,
cantidad        int(100),
fecha           date,
CONSTRAINT pk_pedidos PRIMARY KEY (id),
CONSTRAINT fk_pedido_cliente FOREIGN KEY (cliente_id) REFERENCES clientes(id),
CONSTRAINT fk_pedido_automovil FOREIGN KEY (automovil_id) REFERENCES automoviles(id)
)ENGINE=InnoDB;

INSERT INTO automoviles VALUES (null, 'Renault Clio', 'Renault', 12000, 13);
INSERT INTO automoviles VALUES (null, 'Mercedes C250', 'Mercedes Benz', 34000, 3);
INSERT INTO automoviles VALUES (null, 'Ford Eco Sport Titanium', 'Ford', 15000, 10);
INSERT INTO automoviles VALUES (null, 'Jeep Grand Cherokee', 'Jeep', 22000, 7);
INSERT INTO automoviles VALUES (null, 'Toyota Corolla', 'Toyota', 18000, 15);
INSERT INTO automoviles VALUES (null, 'Mazda CR7', 'Mazda', 14000, 8);

INSERT INTO grupos VALUES (null,'Vendedores A','Madrid');
INSERT INTO grupos VALUES (null,'Vendedores B','Medellin');
INSERT INTO grupos VALUES (null,'Vendedores C','Maracay');
INSERT INTO grupos VALUES (null,'Vendedores A','Miami');
INSERT INTO grupos VALUES (null,'Vendedores B','Mérida');
INSERT INTO grupos VALUES (null,'Vendedores C','Marte');
INSERT INTO grupos VALUES (null,'Vendedores A','Mesopotamia');
INSERT INTO grupos VALUES (null,'Vendedores B','Martinica');
INSERT INTO grupos VALUES (null,'Directores Mecánicos','Melbourne');

INSERT INTO vendedores VALUES (null, 1, null, 'Pepe', 'Trueno', 'Responsable de Tienda', CURDATE(), 30000, 4);
INSERT INTO vendedores VALUES (null, 1, 1, 'Alan', 'Brito', 'Ayudante de Tienda', CURDATE(), 10000, 1);
INSERT INTO vendedores VALUES (null, 2, null, 'Ali', 'Cate', 'Responsable de Taller', CURDATE(), 30000, 4);
INSERT INTO vendedores VALUES (null, 2, 3, 'Ivón', 'Billito', 'Ayudante de Taller', CURDATE(), 10000, 1);
INSERT INTO vendedores VALUES (null, 3, null, 'Deborah', 'Carne', 'Mecánico Jefe', CURDATE(), 20000, 1);
INSERT INTO vendedores VALUES (null, 4, null, 'Casimiro', 'Bellavista', 'Vendedor de Repuestos', CURDATE(), 10000, 4);
INSERT INTO vendedores VALUES (null, 5, null, 'Yosicuro', 'Todo', 'Vendedor Experto', CURDATE(), 20000, 5);
INSERT INTO vendedores VALUES (null, 6, null, 'Yamimoto', 'Sakayama', 'Ejecutivo de Cuentas', CURDATE(), 10000, 4);
INSERT INTO vendedores VALUES (null, 6, 8, 'Cuasi', 'Modo', 'Ayudante de Tienda', CURDATE(), 10000, 1);

INSERT INTO clientes VALUES (null, 1, 'Construcciones Prisma SAS', 'Medellin', 24000, CURDATE());
INSERT INTO pedidos VALUES (null, 1, 1, 2, CURDATE());

INSERT INTO clientes VALUES (null, 2, 'Google Inc', 'Miami', 34000, CURDATE());
INSERT INTO pedidos VALUES (null, 2, 2, 1, CURDATE());

INSERT INTO clientes VALUES (null, 3, 'TecnoSoluciones de Colombia SAS', 'Medellin', 45000, CURDATE());
INSERT INTO pedidos VALUES (null, 3, 3, 3, CURDATE());

INSERT INTO clientes VALUES (null, 4, 'TecnoHost Inc', 'Miami', 44000, CURDATE());
INSERT INTO pedidos VALUES (null, 4, 4, 2, CURDATE());

INSERT INTO clientes VALUES (null, 7, 'TecnoEstudios Inc', 'Mérida', 18000, CURDATE());
INSERT INTO pedidos VALUES (null, 5, 5, 1, CURDATE());

INSERT INTO clientes VALUES (null, 8, 'TecnoSuite Inc', 'Maracay', 28000, CURDATE());
INSERT INTO pedidos VALUES (null, 6, 6, 2, CURDATE());

SELECT nombre, cantidad FROM pedidos, clientes WHERE pedidos.cliente_id = clientes.id;

SELECT nombre, cantidad, modelo FROM clientes, automoviles, pedidos WHERE pedidos.cliente_id = clientes.id AND pedidos.automovil_id = automoviles.id;
