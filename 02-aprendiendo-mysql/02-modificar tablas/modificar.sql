# RENOMBRAR UNA TABLA #
ALTER TABLE usuarios RENAME TO usuarios2

# CAMBIAR NOMBRE DE UNA COLUMNA #
ALTER TABLE usuarios2 CHANGE apellidos apellido varchar(100) null;

# MODIFICAR COLUMNA SIN CAMBIAR NOMBRE #
ALTER TABLE usuarios2 MODIFY apellido char(50) not null;

# AÑADIR COLUMNA #
ALTER TABLE usuarios2 ADD website varchar(100) null;

# AÑADIR RESTRICCIÓN A COLUMNA #
ALTER TABLE usuarios2 ADD CONSTRAINT uq_email UNIQUE(email);

# BORRAR COLUMNA #
ALTER TABLE usuarios2 DROP website;

