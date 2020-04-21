<?php require_once 'includes/redireccion.php'; ?>
<?php require_once 'includes/cabecera.php'; ?>
<?php require_once 'includes/lateral.php'; ?>

<!-- CAJA PRINCIPAL-->
<div id='principal'>
    <h1>Crear Entradas</h1>
    <p>Agrega nuevas entradas al blog para que los usuarios puedan leerlas y disfrutar de nuestro contenido.</p><br>
    <form action="guardar-entrada.php" method="POST">
        <label for="titulo">Nombre de la Entrada</label>
        <input type="text" name="titulo">
        <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'titulo') : ''; ?>
        <label for="descripcion">Descripción</label>
        <textarea name="descripcion" rows="20" cols="110"></textarea>
        <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'descripcion') : ''; ?>
        <label for="categoria">Categoría</label>
        <select name="categoria">
            <?php $categorias = conseguirCategorias($db);
            if (!empty($categorias)):
                while ($categoria = mysqli_fetch_assoc($categorias)):
                ?>
            <option value="<?=$categoria['id'];?>"><?=$categoria['nombre'];?></option>
            <?php
                endwhile;
            endif;
            ?>
        <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'categoria') : ''; ?>
        <input type="submit" value="Guardar">
    </form>
    <?php if (isset($_SESSION['errores_entrada'])) {borrarErrores();} ?>
    <?php //borrarErrores(); ?>
</div> <!-- Fin Principal -->
<?php require_once 'includes/pie.php'; ?>

