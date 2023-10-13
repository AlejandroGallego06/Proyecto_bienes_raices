<?php

//Importar la conexion
require '../includes/config/database.php';
$db = conectarDB();

//Escribir el Query
$query = "SELECT * FROM propiedades";

//Consultar la BD
$resultadoConsulta = mysqli_query($db, $query);

//Muestra mensaje condicional
$resultado = $_GET['resultado'] ?? null;


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);

    if ($id) {
        //Eliminar imagen
        $query = "SELECT imagen FROM propiedades WHERE id={$id}";

        $resultado = mysqli_query($db, $query);
        $propiedad = mysqli_fetch_assoc($resultado);

        unlink('../imagenes/' . $propiedad['imagen']);

        //Eliminar la propiedad
        $query = "DELETE FROM propiedades WHERE id = {$id}";
        $resultado = mysqli_query($db, $query);

        if ($resultado) {
            header('Location: /Proyecto_connect/admin/index.php?resultado=3');
        }
    }
}

require '../includes/funciones.php';
incluirTemplate('headerAdmin');
?>

<main class="contenedor seccion">
    <h1>Administrador de bienes raices</h1>

    <a href="/Proyecto_connect/admin/barcos.php" class="boton boton-verde">Administrar barcos</a>
    <a href="/Proyecto_connect/admin/rutas.php" class="boton boton-verde">Administrar rutas</a>

</main>

<?php
//Cerrar la conexion
mysqli_close($db);

incluirTemplate('footer')
?>