<?php
require 'includes/funciones.php';
incluirTemplate('header');
?>

<main class="contenedor seccion contenido-centrado">
    <h1>Terraza en el techo de tu casa</h1>

    <picture>
        <source srcset="build/img/blog1.webp" type="image/webp">
        <source srcset="build/img/blog1.jpg" type="image/jpeg">
        <img loading="lazy" src="build/img/blog1.jpg" alt="anuncio detalle">
    </picture>

    <p class="informacion-meta">Escrito por: <span>Admin</span> el: <span>16/09/2023</span></p>

    <div class="resumen-propiedad">

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique placeat impedit molestiae eaque. Ad voluptas nemo et nulla quidem a dolorum exercitationem eligendi maiores consequuntur natus alias itaque, repellat Lorem ipsum dolor sit, amet consectetur adipisicing elit. Mollitia dolorem unde architecto debitis atque veniam eos praesentium, assumenda similique perferendis laborum deserunt corporis soluta rem neque.</p>

        <p>Reprehenderit minus nemo aspernatur Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic rerum repellendus voluptatibus cum? Minima magni et eligendi sint maxime amet facilis, eius magnam earum dignissimos officia at alias fuga odio.</p>

    </div>

</main>

<?php
incluirTemplate('footer')
?>