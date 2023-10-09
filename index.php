<?php
require 'includes/funciones.php';
incluirTemplate('header', true);
?>

<main class="contenedor seccion">
    <h1>Más sobre nosotros</h1>
    <div class="iconos-nosotros">
        <div class="icono">
            <img src="build/img/icono1.svg" alt="icono Seguridad">
            <h3>Seguridad</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis, aut assumenda. Minus, vitae doloribus animi nesciunt iure distinctio. Magni, quia distinctio beatae accusamus harum culpa atque quod. At, consectetur fugit!</p>
        </div>
        <div class="icono">
            <img src="build/img/icono2.svg" alt="icono Precio">
            <h3>Precio</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis, aut assumenda. Minus, vitae doloribus animi nesciunt iure distinctio. Magni, quia distinctio beatae accusamus harum culpa atque quod. At, consectetur fugit!</p>
        </div>
        <div class="icono">
            <img src="build/img/icono3.svg" alt="icono Tiempo">
            <h3>Tiempo</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis, aut assumenda. Minus, vitae doloribus animi nesciunt iure distinctio. Magni, quia distinctio beatae accusamus harum culpa atque quod. At, consectetur fugit!</p>
        </div>
    </div>
</main>

<section class="seccion contenedor">
    <h2>Casas y Departamentos en Venta</h2>

    <div class="contenedor-anuncios">
        <div class="anuncio">
            <picture>
                <source srcset="build/img/anuncio1.webp" type="image/webp">
                <source srcset="build/img/anuncio1.jpg" type="image/jpeg">
                <img loading="lazy" src="build/img/anuncio1.jpg" alt="anuncio numero 1">
            </picture>

            <div class="contenido-anuncio">

                <h3>Casa de Lujo en el Lago</h3>
                <p>Casa en el lago con excelente vista, acabados de lujo a un excelente Precio</p>
                <p class="precio">$500,000,000</p>

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

                <a href="anuncios.html" class="boton boton-amarillo">Ver Propiedad</a>
            </div><!--.contenido-anuncio-->
        </div><!--anuncio-->

        <div class="anuncio">
            <picture>
                <source srcset="build/img/anuncio2.webp" type="image/webp">
                <source srcset="build/img/anuncio2.jpg" type="image/jpeg">
                <img loading="lazy" src="build/img/anuncio2.jpg" alt="anuncio numero 2">
            </picture>

            <div class="contenido-anuncio">

                <h3>Casa Terminados de lujo</h3>
                <p>Casa con diseño moderno, asi como tecnología inteligente y amueblada</p>
                <p class="precio">$450,000,000</p>

                <ul class="iconos-caracteristicas">
                    <li>
                        <img class="icono" class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono baños">
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

                <a href="anuncios.html" class="boton boton-amarillo">Ver Propiedad</a>
            </div><!--.contenido-anuncio-->
        </div><!--anuncio-->

        <div class="anuncio">
            <picture>
                <source srcset="build/img/anuncio3.webp" type="image/webp">
                <source srcset="build/img/anuncio3.jpg" type="image/jpeg">
                <img loading="lazy" src="build/img/anuncio3.jpg" alt="anuncio numero 3">
            </picture>

            <div class="contenido-anuncio">

                <h3>Casa con piscina</h3>
                <p>Casa con piscina y cabados de lujo en la ciudad, excelente oportunidad</p>
                <p class="precio">$500,000,000</p>

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

                <a href="anuncios.html" class="boton boton-amarillo">Ver Propiedad</a>
            </div><!--.contenido-anuncio-->
        </div><!--anuncio-->

    </div><!--contenedor anuncios-->

    <div class="alinear-derecha">
        <a href="anuncios.html" class="boton-verde">Ver Todas</a>
    </div>
</section>

<section class="imagen-contacto">
    <h2>Encuentra la casa de tus sueños</h2>
    <p>Llena el formulario de contacto y un asesor se pondra en contacto contigo a la brevedad</p>
    <a href="contacto.html" class="boton-amarillo-inline">Contáctanos</a>
</section><!--Contacto-->

<div class="contenedor seccion seccion-inferior">
    <section class="blog">
        <h2>Nuestro Blog</h2>

        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog1.webp" type="image/webp">
                    <source srcset="build/img/blog1.jpeg" type="image/jpeg">
                    <img loading="lazy" src="build/img/blog1.jpg" alt="Texto Entrada Blog">
                </picture>
            </div>

            <div class="texto-entrada">
                <a href="entrada.html">
                    <h4>Terraza en el techo de tu casa</h4>
                    <p class="informacion-meta">Escrito el: <span>06/09/2023</span> Por: <span>Admin</span></p>
                    <p>Consejos para construir una terraza en tu techo con los mejores materiales y ahorrando dinero</p>
                </a>
            </div>
        </article>

        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog2.webp" type="image/webp">
                    <source srcset="build/img/blog2.jpeg" type="image/jpeg">
                    <img loading="lazy" src="build/img/blog2.jpg" alt="Texto Entrada Blog">
                </picture>
            </div>

            <div class="texto-entrada">
                <a href="entrada.html">
                    <h4>Guia para la decoracion de tu hogar</h4>
                    <p class="informacion-meta">Escrito el: <span>06/09/2023</span> Por: <span>Admin</span></p>
                    <p>Maximiza el espacio de tu hogar con esta guía, aprende a combinar muebles y colores para darle vida a tu espacio</p>
                </a>
            </div>
        </article>
    </section><!--Blog-->

    <section class="testimoniales">
        <h3>testimoniales</h3>

        <div class="testimonial">
            <blockquote>
                El personal se comporto de una forma excelente, muy buena atención y la casa que me dieron cumple con todas las expectativas
            </blockquote>
            <p>- Alejandro Gallego Castro</p>
        </div>
    </section><!--Testimoniales-->
</div>

<?php
incluirTemplate('footer')
?>