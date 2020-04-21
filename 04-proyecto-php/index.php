<?php require_once 'includes/cabecera.php'; ?>

<?php require_once 'includes/lateral.php'; ?>
<!-- CAJA PRINCIPAL-->
<div id='principal'>
    <h1>Últimas Entradas</h1>
    <?php
        $entradas = conseguirEntradas($db, true);
        if (!empty($entradas)) {
            while ($entrada = mysqli_fetch_assoc($entradas)) {
                ?>
    <article class='entrada'>
        <a href="entrada.php?id=<?=$entrada['id']?>">
            <h2><?php echo $entrada['titulo']; ?></h2>
        </a>
        <span class="fecha"><?=$entrada['categoria'].' | '.$entrada['fecha']?></span>
        <p><?php echo substr($entrada['descripcion'], 1, 300).'...'; ?></p>
    </article>
    <?php
            }
        }
    ?>
    <div id="ver-todas"><a href="entradas.php">Ver todas las entradas</a></div>
</div> <!-- Fin Principal -->
<?php require_once 'includes/pie.php'; ?>