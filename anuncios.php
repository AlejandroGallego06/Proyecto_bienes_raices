<?php
require 'includes/app.php';
incluirTemplate('header');
?>

<main class="contenedor ">
    <h1>Casas y Departamentos en Venta</h1>

    <?php
    $limite = 20;
    include 'includes/templates/anuncios.php'
    ?>
</main>

<?php
incluirTemplate('footer')
?>