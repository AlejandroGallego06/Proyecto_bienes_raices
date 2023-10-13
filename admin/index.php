<?php
require '../includes/funciones.php';
incluirTemplate('headerAdmin');
?>

<main class="contenedor seccion">
    <h1>Administrador de bienes raices</h1>

    <a href="barcos.php" class="boton-verde">Administrar barcos</a>
    <a href="rutas.php" class="boton-verde">Administrar rutas</a>
    <a href="#" class="boton-verde">Administrar clientes</a>

</main>

<?php
//Cerrar la conexion
incluirTemplate('footer');
?>