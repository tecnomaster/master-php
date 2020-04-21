<?php require_once 'includes/redireccion.php'; ?>
<?php require_once 'includes/cabecera.php'; ?>
<?php require_once 'includes/lateral.php'; ?>

<!-- CAJA PRINCIPAL-->
<div id='principal'>
    <h1>Mis Datos</h1>
    <p>Editar mis datos del usuario.</p><br>

    <!-- Mostrar errores -->
    <?php if(isset($_SESSION['completado'])): ?>
            <div class="alerta alerta-exito">
                    <?=$_SESSION['completado']?>
            </div>
    <?php elseif(isset($_SESSION['errores']['general'])): ?>
            <div class="alerta alerta-error">
                    <?=$_SESSION['errores']['general']?>
            </div>
    <?php endif; ?>

    <form action='actualizar-usuario.php' method="POST">
        <label for="nombres">Nombres</label>
        <input type="text" name="nombres" value="<?=$_SESSION['usuario']['nombre'];?>">
        <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'nombres') : ''; ?>
        <label for="apellidos">Apellidos</label>
        <input type="text" name="apellidos" value="<?=$_SESSION['usuario']['apellidos'];?>">
        <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'apellidos') : ''; ?>
        <label for="email">Email</label>
        <input type="text" name="email" value="<?=$_SESSION['usuario']['email'];?>">
        <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'email') : ''; ?>
        <input type="submit" name="submit" value="Actualizar">
    </form>
    <?php borrarErrores(); ?>

</div> <!-- Fin Principal -->
<?php require_once 'includes/pie.php'; ?>
