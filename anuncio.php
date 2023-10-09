<?php
require 'includes/funciones.php';
incluirTemplate('header');
?>

<main class="contenedor seccion contenido-centrado">
    <h1>Casa en venta frente al bosque</h1>

    <picture>
        <source srcset="build/img/destacada.webp" type="image/webp">
        <source srcset="build/img/destacada.jpg" type="image/jpeg">
        <img loading="lazy" src="build/img/destacada.jpg" alt="anuncio detalle">
    </picture>

    <div class="resumen-propiedad">
        <p class="precio">$500'000.000</p>

        <ul class="iconos-caracteristicas">
            <li>
                <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono baños">
                <p>3</p>
            </li>
            <li>
                <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono capacidad estacionamiento">
                <p>3</p>
            </li>
            <li>
                <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono dormitorios">
                <p>4</p>
            </li>
        </ul>

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique placeat impedit molestiae eaque. Ad voluptas nemo et nulla quidem a dolorum exercitationem eligendi maiores consequuntur natus alias itaque, repellat Lorem ipsum dolor sit, amet consectetur adipisicing elit. Mollitia dolorem unde architecto debitis atque veniam eos praesentium, assumenda similique perferendis laborum deserunt corporis soluta rem neque.</p>

        <p>Reprehenderit minus nemo aspernatur Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic rerum repellendus voluptatibus cum? Minima magni et eligendi sint maxime amet facilis, eius magnam earum dignissimos officia at alias fuga odio.</p>

    </div>

</main>

<?php
incluirTemplate('footer')
?>