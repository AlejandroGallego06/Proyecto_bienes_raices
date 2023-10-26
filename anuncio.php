<?php

$id = $_GET['id'];
$id = filter_var($id, FILTER_VALIDATE_INT);

if (!$id) {
    header('Location: /Proyecto_connect/index.php');
}

require 'includes/app.php';

$db = conectarDB();

//Consultar
$query = "SELECT * FROM propiedades WHERE id= {$id}";

//Obtener Resultado
$resultado = mysqli_query($db, $query);
$propiedad = mysqli_fetch_assoc($resultado);


incluirTemplate('header');
?>

<main class="contenedor seccion contenido-centrado">
    <h1><?php echo $propiedad['titulo']; ?></h1>

    <img loading="lazy" src="imagenes/<?php echo $propiedad['imagen']; ?>" alt="anuncio detalle">


    <div class="resumen-propiedad">
        <p class="precio"><?php echo $propiedad['precio']; ?></p>

        <ul class="iconos-caracteristicas">
            <li>
                <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono baños">
                <p><?php echo $propiedad['wc']; ?></p>
            </li>
            <li>
                <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono capacidad estacionamiento">
                <p><?php echo $propiedad['estacionamiento']; ?></p>
            </li>
            <li>
                <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono dormitorios">
                <p><?php echo $propiedad['habitaciones']; ?></p>
            </li>
        </ul>

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique placeat impedit molestiae eaque. Ad voluptas nemo et nulla quidem a dolorum exercitationem eligendi maiores consequuntur natus alias itaque, repellat Lorem ipsum dolor sit, amet consectetur adipisicing elit. Mollitia dolorem unde architecto debitis atque veniam eos praesentium, assumenda similique perferendis laborum deserunt corporis soluta rem neque.</p>

        <p>Reprehenderit minus nemo aspernatur Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic rerum repellendus voluptatibus cum? Minima magni et eligendi sint maxime amet facilis, eius magnam earum dignissimos officia at alias fuga odio.</p>

    </div>

</main>

<?php
mysqli_close($db);
incluirTemplate('footer');
?>