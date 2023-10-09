<?php
require '../../includes/config/database.php';
$db = conectarDB();

$consulta = "SELECT * FROM vendedores";
$vendedores = mysqli_query($db, $consulta);


//Arreglo con mensaje de errores
$errores = [];

$titulo = '';
$precio = '';
$descripcion = '';
$habitaciones = '';
$baños = '';
$estacionamiento = '';
$vendedorId = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // echo "<pre>";
    // var_dump($_POST);
    // echo "</pre>";

    // echo "<pre>";
    // var_dump($_FILES);
    // echo "</pre>";


    $titulo = mysqli_real_escape_string($db, $_POST['titulo']);
    $precio = mysqli_real_escape_string($db, $_POST['precio']);
    $descripcion = mysqli_real_escape_string($db, $_POST['descripcion']);
    $habitaciones = mysqli_real_escape_string($db, $_POST['habitaciones']);
    $baños = mysqli_real_escape_string($db, $_POST['baños']);
    $estacionamiento = mysqli_real_escape_string($db, $_POST['estacionamiento']);
    $vendedorId = mysqli_real_escape_string($db, $_POST['vendedor']);
    $creado = date('Y/m/d');

    //Asignar files a una variable

    $imagen = $_FILES['imagen'];

    if (!$titulo) {
        $errores[] = "Debes agregar un titulo";
    }

    if (!$precio) {
        $errores[] = "Debes agregar un precio";
    }

    if (!$imagen['name'] || $imagen['error']) {
        $errores[] = "Debes subir una imagen";
    }

    //validar por tamaño (2MB maximo)
    $medida = 1000 * 2000;

    if ($imagen['size'] > $medida) {
        $errores[] = "La imagen es muy pesada";
    }

    if (strlen($descripcion) < 50) {
        $errores[] = "Debes agregar una descripcion con mas de 50 caracteres";
    }

    if (!$habitaciones) {
        $errores[] = "El numero de habitaciones es obligatorio";
    }

    if (!$baños) {
        $errores[] = "El numero de baños es obligatorio";
    }

    if (!$estacionamiento) {
        $errores[] = "La capacidad del estacionamiento es obligatoria";
    }

    if (!$vendedorId) {
        $errores[] = "Elige un vendedor";
    }

    // echo "<pre>";
    // var_dump($errores);
    // echo "</pre>";

    //Revisar que el array de errores este vacio
    if (empty($errores)) {
        /*Subida de archivos al servidor*/

        //Generar un nombre aleatorio

        //crear carpeta
        $carpetaImagenes = '../../imagenes/';

        if (!is_dir($carpetaImagenes)) {
            mkdir($carpetaImagenes);
        }

        $nombreImagen = uniqid(rand()) . $imagen['name'];

        //subir imagen
        move_uploaded_file($imagen['tmp_name'], $carpetaImagenes . $nombreImagen);


        $query = "INSERT INTO propiedades (titulo, precio, imagen, descripcion, habitaciones, wc, estacionamiento, creado, vendedores_id) VALUES ('$titulo', '$precio', '$nombreImagen', '$descripcion', '$habitaciones', '$baños','$estacionamiento', '$creado','$vendedorId');";

        //echo $query;

        $resultado = mysqli_query($db, $query);

        if ($resultado) {
            //Redireccionar al usuario

            header('Location: /bienesraices_inicio/admin/index.php?resultado=1');
        }
    }

    //Insertar en la base de datos


}


require '../../includes/funciones.php';
incluirTemplate('header');

?>

<main class="contenedor seccion">
    <h1>Crear</h1>

    <a href="/bienesraices_inicio/admin/index.php" class="boton boton-verde">Volver</a>

    <?php foreach ($errores as $error) : ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach; ?>

    <form class="formulario" method="POST" action="/bienesraices_inicio/admin/propiedades/crear.php" enctype="multipart/form-data">
        <fieldset>
            <legend>Información General</legend>

            <label for="titulo">Titulo:</label>
            <input type="text" id="titulo" name="titulo" placeholder="Titulo Propiedad" value="<?php echo $titulo; ?>">

            <label for="precio">Precio:</label>
            <input type="number" id="precio" name="precio" placeholder="Precio Propiedad" value="<?php echo $precio; ?>">

            <label for="imagen">Imagen:</label>
            <input type="file" id="imagen" accept="image/jpeg, image/png" name="imagen">

            <label for="descripcion">Descripción:</label>
            <textarea id="descripcion" name="descripcion"><?php echo $descripcion; ?></textarea>
        </fieldset>

        <fieldset>
            <legend>Información Propiedad</legend>

            <label for="habitaciones">Habitaciones:</label>
            <input type="number" id="habitaciones" name="habitaciones" placeholder="Ej: 4" min="1" max="9" value="<?php echo $habitaciones; ?>">

            <label for="baños">Baños:</label>
            <input type="number" id="baños" name="baños" placeholder="Ej: 4" min="1" max="9" value="<?php echo $baños; ?>">

            <label for="estacionamiento">Estacionamiento (Capacidad):</label>
            <input type="number" id="estacionamiento" name="estacionamiento" placeholder="Ej: 4" min="1" max="9" value="<?php echo $estacionamiento; ?>">
        </fieldset>

        <fieldset>
            <legend>Vendedor</legend>

            <select name="vendedor">
                <option value="" disabled selected>-- Seleccione --</option>
                <?php while ($vendedor = mysqli_fetch_assoc($vendedores)) : ?>
                    <option <?php echo $vendedorId === $vendedor['id'] ? 'selected' : ''; ?> value="<?php echo $vendedor['id']; ?>"> <?php echo $vendedor['nombre'] . " " . $vendedor['apellido']; ?></option>
                <?php endwhile; ?>
            </select>
        </fieldset>

        <input type="submit" value="Crear propiedad" class="boton-verde">
    </form>
</main>

<?php
incluirTemplate('footer')
?><?php
