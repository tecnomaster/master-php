<?php require_once 'includes/redireccion.php'; ?>
<?php require_once 'includes/cabecera.php'; ?>
<?php require_once 'includes/lateral.php'; ?>

<!-- CAJA PRINCIPAL-->
<div id='principal'>
    <h1>Crear Categorías</h1>
    <p>Agrega nuevas categorías al blog para que los usuarios puedan guardar sus entradas</p><br>
    <form action="guardar-categoria.php" method="POST">
        <label for="nombre">Nombre de la Categoría</label>
        <input type="text" name="nombre">
        
        <input type="submit" value="Guardar">
    </form>
    
</div> <!-- Fin Principal -->
<?php require_once 'includes/pie.php'; ?>