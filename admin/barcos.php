<?php

//Importar la conexion
require '../includes/config/database.php';
$db = conectarDB();

//Escribir el Query
$query = "SELECT * FROM barcos";

//Consultar la BD
$resultadoConsulta = mysqli_query($db, $query);

//Muestra mensaje condicional
$resultado = $_GET['resultado'] ?? null;


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);

    if ($id) {
        //Eliminar imagen
        $query = "SELECT imagen FROM barcos WHERE id={$id}";

        $resultado = mysqli_query($db, $query);
        $barco = mysqli_fetch_assoc($resultado);

        unlink('../imagenes/' . $barco['imagen']);

        //Eliminar el barco
        $query = "DELETE FROM barcos WHERE id = {$id}";
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
    <h1>Administrar Barcos</h1>

    <?php if ($resultado == 1) : ?>
        <p class="alerta exito">Anuncio Creado Correctamente</p>
    <?php elseif ($resultado == 2) : ?>
        <p class="alerta exito">Anuncio Actualizado Correctamente</p>
    <?php elseif ($resultado == 3) : ?>
        <p class="alerta exito">Anuncio Eliminado Correctamente</p>
    <?php endif; ?>

    <a href="/Proyecto_connect/admin/propiedades/crear.php" class="boton boton-verde">Nueva Propiedad</a>

    <table class="propiedades">
        <thead>
            <tr>
                <th>ID</th>
                <th>Titulo</th>
                <th>Imagen</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody> <!-- Mostrar los resultados -->
            <?php while ($barco = mysqli_fetch_assoc($resultadoConsulta)) : ?>
                <tr>
                    <td><?php echo $barco['id']; ?></td>
                    <td><?php echo $barco['titulo']; ?></td>
                    <td><img src="../imagenes/<?php echo $barco['imagen']; ?>" class="imagen-tabla"></td>
                    <td><?php echo '$' . $barco['precio']; ?></td>
                    <td>
                        <form method="POST" class="w-100">
                            <input type="hidden" name="id" value="<?php echo $barco['id']; ?>">
                            <input type="submit" class="boton-rojo-block" value="Eliminar">
                        </form>

                        <a href="propiedades/actualizar.php?id=<?php echo $barco['id']; ?>" class="boton-amarillo">Actualizar</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</main>

<?php
//Cerrar la conexion
mysqli_close($db);

incluirTemplate('footer')
?>