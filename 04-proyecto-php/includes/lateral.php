    <!-- BARRA LATERAL-->
    <aside id='barra-lateral'>
        <div id="buscador" class="bloque">
            <h3>Buscar</h3>

            <form action="buscar.php" method="POST"> 
		<input type="text" name="busqueda" />
		<input type="submit" value="Buscar" />
            </form>
	</div>
        <?php if (isset($_SESSION['usuario'])) { ?>
        <div id='usuario-logueado' class='bloque'>
            <h3>Bienvenid@, <?php echo $_SESSION['usuario']['nombre'].' '.$_SESSION['usuario']['apellidos']; ?>
                <!--botones-->
                <a href='crear-entrada.php' class="boton boton-verde">Crear entrada</a>
                <a href='crear-categoria.php' class="boton">Crear categoría</a>
                <a href='mis-datos.php' class="boton boton-naranja">Mis datos</a>
                <a href='cerrar.php' class="boton boton-rojo">Cerrar sesión</a>
        </div>
        <?php } ?>
        <?php if(!isset($_SESSION['usuario'])): ?>
        <div id='login' class='bloque'>
            <h3>Identifícate</h3>
            <?php if (isset($_SESSION['error_login'])) { ?>
            <div class='alerta alerta-error'>
                <?php echo $_SESSION['error_login']; ?>
            </div>
            <?php } ?>
            <form action='login.php' method="POST">
                <label for="email">Email</label>
                <input type="text" name="email">
                <label for="password">Contraseña</label>
                <input type="password" name="password">
                <input type="submit" value="Ingresar">
            </form>
        </div>

        <div id='registro' class='bloque'>
            <h3>Regístrate</h3>
            <!-- Mostrar errores -->
            <?php if (isset($_SESSION['completado'])) { ?>
            <div class="alerta alerta-exito">
                <?php echo $_SESSION['completado']; ?>
            </div>
            <?php } elseif (isset($_SESSION['errores']['general'])) { ?>
            <div class="alerta alerta-exito">
                <?php echo $_SESSION['errores']['general']; ?>
            </div>
            <?php }?>
            <form action='registro.php' method="POST">
                <label for="nombres">Nombres</label>
                <input type="text" name="nombres">
                <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'nombres') : ''; ?>
                <label for="apellidos">Apellidos</label>
                <input type="text" name="apellidos">
                <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'apellidos') : ''; ?>
                <label for="email">Email</label>
                <input type="text" name="email">
                <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'email') : ''; ?>
                <label for="password">Contraseña</label>
                <input type="password" name="password">
                <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'password') : ''; ?>
                <input type="submit" name="submit" value="Registrar">
            </form>
            <?php if(!isset($_SESSION['errores_entrada'])) {borrarErrores();} ?>
            <?php //borrarErrores(); ?>
        </div>
        <?php endif; ?>
    </aside>