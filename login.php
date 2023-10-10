<?php
//Conexion a la BD
require 'includes/config/database.php';
$db = conectarDB();

//Autenticar el usuario
$errores = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // var_dump($_POST);

    $correo = mysqli_real_escape_string($db, filter_var($_POST['correo'], FILTER_VALIDATE_EMAIL));
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if (!$correo) {
        $errores[] = "Debes agregar un correo o ingresaste uno invalido";
    }

    if (!$password) {
        $errores[] = "La contraseña es obligatoria";
    }

    if (empty($errores)) {
        //Revisar si el usuario existe.
        $query = "SELECT * FROM usuarios WHERE email = '{$correo}' ;";
        $resultado = mysqli_query($db, $query);

        if ($resultado->num_rows) {
            //Revisar si el password es correcto

        } else {
            $errores[] = "El Usuario no existe";
        }
    }
}

require 'includes/funciones.php';
incluirTemplate('header');
?>

<main class="contenedor seccion contenido-centrado">
    <h1>Iniciar sesion</h1>

    <?php foreach ($errores as $error) : ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach; ?>

    <form method="POST" class="formulario">
        <fieldset>
            <legend>Email y Contraseña</legend>

            <label for="correo">E-mail</label>
            <input type="email" name="correo" placeholder="Tu Correo electronico" id="correo">

            <label for="password">Contraseña</label>
            <input type="password" name="password" placeholder="Tu Contraseña" id="password">
        </fieldset>

        <input type="submit" value="Iniciar Sesion" class="boton-verde">
    </form>
</main>

<?php
incluirTemplate('footer')
?>