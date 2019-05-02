<?php 
$videos = array(
    array('titulo' => 'Fiesta zero', 'url'=> '#', 'id' => '123' ),
    array('titulo' => 'Nieve Baxtter', 'url'=> '#', 'id' => '123' ),
    array('titulo' => 'Parador de montaña', 'url'=> '#', 'id' => '123' ),
    array('titulo' => 'Clases de sky y snowboard', 'url'=> '#', 'id' => '123' ),
    array('titulo' => 'Fiestas itinerantes', 'url'=> '#', 'id' => '123' ),
    array('titulo' => 'Excursiones de aventura', 'url'=> '#', 'id' => '123' ),
    array('titulo' => 'Bariloche en bici', 'url'=> '#', 'id' => '123' ),
    array('titulo' => 'Pool party', 'url'=> '#', 'id' => '123' ),
    array('titulo' => 'Pillow fest', 'url'=> '#', 'id' => '123' ),
    array('titulo' => 'Sunset relax', 'url'=> '#', 'id' => '123' ),
    array('titulo' => 'Previas en los hoteles', 'url'=> '#', 'id' => '123' ),
    array('titulo' => 'Boliches powered by Baxtter', 'url'=> '#', 'id' => '123' ),
    array('titulo' => 'Silent Fest', 'url'=> '#', 'id' => '123' ),
);
?>
<section id="experiencias-baxtter" class="section-capas experiencias-section">
    <?php global $dispositivo;
    if ($dispositivo != 'movil') : ?>
    <div class="background-section">
        <div class="video-wrapper">
            <video class="video" autoplay loop>
                <source src="<?php echo MAINSURL; ?>/contenido/parador_web.mov" type="video/mov">
                <!--<source src="movie.mp4" type="video/mp4">
                <source src="movie.ogg" type="video/ogg">-->
                Your browser does not support the video tag.
            </video>
            <span class="shutter"></span>
        </div>
    </div>

    <?php endif; ?>

    <div class="main-section container">

        <div class="main-section-wrapper">
            
            <h2 class="titulo-seccion">
                Viví la experiencia Baxtter
            </h2>
            
            <ul class="lista-experiencias">
                <?php foreach ( $videos as $video ) { ?>
                    <li>
                        <?php echo $video['titulo']; ?>
                    </li>
                <?php } ?>
            </ul>

            <p class="text-aclaratorio animate-element slide-up" style="animation-delay: 1s;">
                <em>Selecciona el video para vivir la experiencia</em>
            </p>
                
            
        </div>
    </div><!-- //. container -->

    <!-- front -->
    <div class="front-section">
            
        <div class="left animate-element slide-left">
            <span class="text vertical color-negro">Videos</span>
            <span class="line vertical fondo-negro"></span>
        </div>
        
        <div class="right animate-element slide-right">
            <span class="text vertical color-negro">#SomosBaxtter</span>
            <span class="line vertical fondo-negro"></span>
        </div>    
        
    </div><!-- //front -->
</section>