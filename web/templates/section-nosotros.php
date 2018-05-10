<?php
/*
 * Sitio web: Baxtter
 * @LaCueva.tv
 * Since 3.0
 * FOOTER
 * 
*/
global $dispositivo;
?>

<section id="nosotros" class="section-capas nosotros-section">
    
    <div class="background-section">
        <div class="container">
            <h6 class="movil-element">
                <img src="<?php echo MAINSURL; ?>/assets/images/logo-nosotros.png" alt="Baxter logo texto">
            </h6>
        </div>
    </div>

    <div class="main-section container">

        <div class="main-section-wrapper nosotros-wrapper">

            <div class="left">
                <hgroup>
                    <h1>
                        <span class="sr-only">Baxtter</span>
                    </h1>
                    <h2 class="titulo-seccion">
                        Descubrí una nueva forma de hacer el viaje de egresados
                    </h2>
                    
                    <h3 class="subtitulo-seccion">
                        Somos líderes natos en innovación y con eso en nuestro gen, nos dedicamos a organizar tremendos viajes de egresados desde hace 27 años.
                    </h3>
                </hgrounp>

                <?php if ( $dispositivo != 'movil' ) : ?>
                    <img src="<?php echo MAINSURL; ?>/assets/images/logo27-escitorio.png" alt="Logo Baxtter, 27 años" class="logo-27 btn-hover-grayscale">
                <?php endif; ?>
            </div>

            <div class="right">
                <p>
                    En todo este tiempo atendimos a cientos de miles de jóvenes y aprendimos mucho en el camino. Impulsamos grandes mejoras en el estandar de estos viajes y, cada tanto, provocamos hitos que lo revolucionaron.
                </p>
                <p>
                    Hoy estamos nuevamente en ese momento de evolución. Ahora la forma de disfrutar esta experiencia es diferente a todas las anteriores y con esa convicción cambiamos la manera de hacer las cosas.
                </p>
                <p>
                    Creamos una nueva forma de hacer el viaje de egresados.
                </p>
                <p>
                    Logramos construir algo extraordinario, mucho más actual y relajado. Diseñado para disfrutar al máximo en un ambiente único, con las últimas tendencias en su contenido.
                </p>
                <p>
                    Sabemos que vos estás a punto de decidir en quién confiar el éxito de algo irrepetible, nuestro consejo es simple: elegí bien.
                </p>
                <p>
                    Somos Baxtter y no creemos en el discurso de ser mejores que otros, simplemente optamos por hacer las cosas de una manera diferente.
                </p>
                <p>
                    Si al conocernos te identificas con nuestro código, entonces conectamos y es ahí cuando nos entusiasma la idea de ser parte de tu vida.
                </p>

                <?php if ( $dispositivo != 'movil' ) : ?>
                    <img src="<?php echo MAINSURL; ?>/assets/images/logo27-escitorio.png" alt="Logo Baxtter, 27 años" class="logo-27-movil">
                <?php else : ?>
                    <img src="<?php echo MAINSURL; ?>/assets/images/movil/logo-27-movil.png" alt="Logo Baxtter, 27 años" class="logo-27-movil">
                <?php endif; ?>
            </div>
        </div>
    </div><!-- //. container -->   

    <!-- front -->
    <div class="front-section">
            
        <div class="left biggerxl">
            <span class="text vertical color-negro w160px align-right">BRC_Lifestyle</span>
            <span class="line vertical fondo-negro w160px"></span>
        </div>
        
        <div class="right biggerxl">
            <span class="line vertical fondo-negro w160px"></span>
            <span class="text vertical color-negro w160px">Viví la experiencia Baxtter</span>
        </div>    
        
    </div><!-- //front -->

</section><!-- //SECTION NOSOTROS -->


<section id="video" class="section-capas video-section">
    <div class="main-section">

        <div class="video-wrapper">
            <div class="video-baxtter">
                <h3>
                    <span class="sr-only">Video Baxtter</span>
                </h3>

                <!-- TEMP IMAGE -->
                <img src="<?php echo UPLOADSURL; ?>/temp/ref-video.jpg" style="width:100%;display: block; margin: 0 auto;">
            
            </div>
        </div>
    </div>
</section>

<section id="redes-sociales" class="section-capas redes-sociales-section">
    
    <div class="main-section container">

        <div class="main-section-wrapper redes-sociales-wrapper">
            <div class="redes-sociales-baxtter">
                <h3 class="titulo-seccion">
                    Somos hiper sociales
                </h3>
                <h4 class="subtitulo-seccion">
                    Conocé los detalles de nuestros programas exclusivamente en nuestras redes.
                </h4>
                
                <ul class="redes-sociales">
                    <?php getTemplate( 'redes-sociales' ); ?>
                </ul>
            </div>
        </div>
    </div><!-- //. container -->

    <!-- front -->
    <div class="front-section">
            
        <div class="left">
            <span class="text vertical color-negro">Social</span>
            <span class="line vertical fondo-negro"></span>
        </div>
        
        <div class="right">
            <span class="text vertical color-negro">Bxr</span>
            <span class="line vertical fondo-negro"></span>
        </div>    
        
    </div><!-- //front -->
</section>