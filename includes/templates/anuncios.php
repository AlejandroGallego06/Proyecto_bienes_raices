<?php
//Importar la conexio
require 'includes/config/database.php';
$db = conectarDB();

//Consultar
$query = "SELECT * FROM propiedades LIMIT {$limite}";

//Obtener Resultado
$resultado = mysqli_query($db, $query)

?>


<div class="contenedor-anuncios">
    <?php while ($propiedad = mysqli_fetch_assoc($resultado)) : ?>
        <div class="anuncio">

            <img loading="lazy" src="imagenes/<?php echo $propiedad['imagen']; ?>" alt="anuncio">

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
    <?php endwhile; ?>
</div><!--contenedor anuncios-->

<?php
//Cerrar la conexion
?>