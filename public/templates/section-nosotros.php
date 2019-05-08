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
    
    <div id="background_nosotros" class="background-section">
        
        <div class="container">
            <h6 class="animate-element slide-up">
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
                    <h2 class="titulo-seccion animate-element slide-up">
                        Descubrí una nueva forma de hacer el viaje de egresados
                    </h2>
                    
                    <h3 class="subtitulo-seccion">
                        Somos líderes natos en innovación y con eso en nuestro gen, nos dedicamos a organizar tremendos viajes de egresados desde hace casi 30 años.
                    </h3>
                </hgroup>

                <?php if ( $dispositivo != 'movil' ) : ?>
                    <img srset="<?php echo MAINSURL; ?>/assets/images/badge-30.png 1x, <?php echo MAINSURL; ?>/assets/images/badge-30@2x.png 2x" src="<?php echo MAINSURL; ?>/assets/images/badge-30.png" alt="Logo Baxtter, 30 años" class="logo-27 btn-hover-grayscale">
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
                    <img srset="<?php echo MAINSURL; ?>/assets/images/badge-30.png 1x, <?php echo MAINSURL; ?>/assets/images/badge-30@2x.png 2x" src="<?php echo MAINSURL; ?>/assets/images/badge-30.png" alt="Logo Baxtter, 30 años" class="logo-27-movil animate-element slide-up">
                <?php else : ?>
                    <img srset="<?php echo MAINSURL; ?>/assets/images/badge-30.png 1x, <?php echo MAINSURL; ?>/assets/images/badge-30@2x.png 2x" src="<?php echo MAINSURL; ?>/assets/images/badge-30.png" alt="Logo Baxtter, 30 años" class="logo-27-movil animate-element slide-up">
                <?php endif; ?>
            </div>
        </div>
    </div><!-- //. container -->   

    <!-- front -->
    <div class="front-section">
            
        <div class="left biggerxxl animate-element slide-left">
            <span class="text vertical color-negro w160px align-right">BRC_Lifestyle</span>
            <span class="line vertical fondo-negro w160px"></span>
        </div>
        
        <div class="deco-diagonal load-images">
            <img data-src="<?php echo MAINSURL; ?>/assets/images/triangulo-degradado.svg">
        </div>

        <div class="right biggerxxl animate-element slide-right">
            <span class="line vertical fondo-negro w160px"></span>
            <span class="text vertical color-celeste w160px">Viví la experiencia Baxtter</span>
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
                <!-- VIDEO -->
                <div id="videonosotros" style="padding:42.19% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/272949856?loop=1" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen allow="autoplay; encrypted-media"></iframe></div>
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
                    Conocé el lifestyle Baxtter en nuestra redes.
                </h4>
                
                <ul class="redes-sociales animate-element slide-up">
                    <?php getTemplate( 'redes-sociales' ); ?>
                </ul>
            </div>
        </div>
    </div><!-- //. container -->

    <!-- front -->
    <div class="front-section">
            
        <div class="left animate-element slide-left">
            <span class="text vertical color-negro">Social</span>
            <span class="line vertical fondo-negro"></span>
        </div>
        
        <div class="right animate-element slide-right">
            <span class="text vertical color-negro">Bxr</span>
            <span class="line vertical fondo-negro"></span>
        </div>    
        
    </div><!-- //front -->
</section>
