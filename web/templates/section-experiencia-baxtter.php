<?php 
$videos = array(
    array('titulo' => 'Fiesta Zero', 'slug' => 'fiesta-zero', 'url'=> 'https://vimeo.com/315272748', 'id' => '315272748' ),
    array('titulo' => 'Nieve Baxtter', 'slug' => 'nieve-baxtter', 'url'=> 'https://vimeo.com/315272902', 'id' => '315272902' ),
    array('titulo' => 'Parador de Montaña', 'slug' => 'parador-montana', 'url'=> 'https://vimeo.com/333849918', 'id' => '333849918' ),
    array('titulo' => 'Clases de Ski & Snowboard', 'slug' => 'clases-sky-snowboard', 'url'=> 'https://vimeo.com/315273034', 'id' => '315273034' ),
    array('titulo' => 'Fiestas itinerantes', 'slug' => 'fiestas-itinerantes', 'url'=> 'https://vimeo.com/315272117', 'id' => '315272117' ),
    array('titulo' => 'Excursiones de aventura', 'slug' => 'excursiones-aventura', 'url'=> 'https://vimeo.com/315273216', 'id' => '315273216' ),
    array('titulo' => 'Bariloche en Bici', 'slug' => 'bariloche-bici', 'url'=> 'https://vimeo.com/315272117', 'id' => '315272117' ),
    array('titulo' => 'Pool Party', 'slug' => 'pool-party', 'url'=> 'https://vimeo.com/315273703', 'id' => '315273703' ),
    array('titulo' => 'Pilow Fest', 'slug' => 'pillow-fest', 'url'=> 'https://vimeo.com/315272212', 'id' => '315272212' ),
    array('titulo' => 'Sunset Relax', 'slug' => 'sunset-relax', 'url'=> 'https://vimeo.com/315273837', 'id' => '315273837' ),
    array('titulo' => 'Previas en los hoteles', 'slug' => 'previas-hoteles', 'url'=> 'https://vimeo.com/315274756', 'id' => '315274756' ),
    array('titulo' => 'Boliches Powered by baxtte', 'slug' => 'boliches-powered-baxtter', 'url'=> 'https://vimeo.com/315274063', 'id' => '315274063' ),
    array('titulo' => 'Silent Fest', 'slug' => 'silent-fest', 'url'=> 'https://vimeo.com/333850741', 'id' => '333850741' ),
);
?>
<section id="experiencias-baxtter" class="section-capas experiencias-section">
    <?php global $dispositivo;
    if ($dispositivo != 'movil') : ?>
    <div class="background-section">
        <div class="video-wrapper">
            <video width="960" height="410" id="background-experiencias-video" class="video" autoplay muted loop>
                <source src="<?php echo MAINSURL; ?>/contenido/parador_web.mov" type="video/mov">
                <source src="<?php echo MAINSURL; ?>/contenido/parador_web.mp4" type="video/mp4">
                <!--<source src="movie.ogg" type="video/ogg">-->
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
                        <a class="afterglow" href="#<?php echo $video['slug']; ?>">
                            <?php echo $video['titulo']; ?>
                        </a>
                        <video data-overscale="false" id="<?php echo $video['slug']; ?>" data-vimeo-id="<?php echo $video['id']; ?>" width="960" height="540"></video>                        
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
            
        <div class="left animate-element bigger slide-left">
            <span class="text vertical color-negro">Videos</span>
            <span class="line vertical fondo-negro"></span>
        </div>
        
        <div class="right animate-element bigger slide-right">
            <span class="text vertical color-negro">#SomosBaxtter</span>
            <span class="line vertical fondo-negro"></span>
        </div>    
        
    </div><!-- //front -->
</section>