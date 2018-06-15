<?php
/*
 * Sitio web: Baxtter
 * @LaCueva.tv
 * Since 3.0
 * FOOTER
 * 
*/
$dispositivo = dispositivo();
?>
<section id="programas">
    <h1><span class="sr-only">Programas</span></h1>
    
    <div class="section-capas programas-section">
        <div class="background-section">
            <div class="load-images hot-cold-images">
            <?php 
            if ( $dispositivo == 'pc' ) {
                echo '<img src="'.MAINSURL.'/assets/images/fondo-hot.png" alt="Baxtter Hot Beach Logo" class="background-hot">';
                echo '<img src="'.MAINSURL.'/assets/images/fondo-cold.png" alt="Baxtter Hot Beach Logo" class="background-cold">';
            } elseif($dispositivo == 'tablet' ) {
                echo '<img src="'.MAINSURL.'/assets/images/movil/hot-fondo-movil.png" alt="Baxtter Hot Beach Logo" class="background-hot background-hot-tablet">';
                echo '<img src="'.MAINSURL.'/assets/images/movil/fondo-cold-movil.png" alt="Baxtter Hot Beach Logo" class="background-cold background-cold-tablet">';
            } else {
                echo '<img src="'.MAINSURL.'/assets/images/movil/hot-fondo-movil.png" alt="Baxtter Hot Beach Logo" class="background-hot">';
                echo '<img src="'.MAINSURL.'/assets/images/movil/fondo-cold-movil.png" alt="Baxtter Hot Beach Logo" class="background-cold">';
            }
            ?>
            </div>
        </div><!-- // .background-section -->

        <div class="main-section container">
            <div class="main-section-wrapper programas-wrapper">
                <div class="hot-beach">
                    <h2 class="animate-element slide-down-x2">
                        <span class="sr-only">Baxtter Hot Beach</span>
                        <?php 
                        if ( $dispositivo != 'movil' ) {
                            echo '<img src="'.MAINSURL.'/assets/images/hot-beach.png" alt="Baxtter Hot Beach Logo" class="logo-escritorio">';
                        } else {
                            echo '<img src="'.MAINSURL.'/assets/images/movil/hot-beach-movil.png" alt="Baxtter Hot Beach Logo" class="logo-escritorio">';
                        }
                        ?>
                    </h2>
                    <ul class="programas-links">
                        <li class="animate-element slide-up-list" style="animation-delay: 0.3s;">
                            <a href="<?php urlPdf( 'hot-hoteles' ); ?>" target="_blank" class="btn-hover-programas">
                                Hoteles
                            </a>
                        </li>
                        <li class="animate-element slide-up-list" style="animation-delay: 0.4s;">
                            <a href="<?php urlPdf( 'hot-servicios' ); ?>" target="_blank" class="btn-hover-programas">
                                Servicios incluidos
                            </a>
                        </li>
                        <li class="animate-element slide-up-list" style="animation-delay: 0.5s;">
                            <a href="<?php urlPdf( 'hot-itinerario' ); ?>" target="_blank" class="btn-hover-programas">
                                Itinerario de viaje
                            </a>
                        </li>
                        <li class="animate-element slide-up-list" style="animation-delay: 0.6s;">
                            <a href="<?php urlPdf( 'hot-contrato' ); ?>" target="_blank" class="btn-hover-programas">
                                Contrato tipo
                            </a>
                        </li>
                        <li class="animate-element slide-up-list" style="animation-delay: 0.7s;">
                            <a href="<?php urlPdf( 'hot-tarifario' ); ?>" target="_blank" class="btn-hover-programas">
                                Tarifario
                            </a>
                        </li>
                        <li>
                        <button class="btn-hover-underline animate-element slide-up" style="animation-delay: 1s;">
                                Ver galería de imágenes
                                <ul class="data-carga galeria-data">
                                    <?php 
                                    $imagenes = getImages ('hot');
                                    if ( $imagenes != null ) {
                                        for ($i=0; $i < count($imagenes); $i++) { 
                                            echo '<li><img data-src="' . UPLOADSURL . '/' .$imagenes[$i] . '"></li>';
                                        }
                                    }
                                    ?>
                                </ul>
                            </button>
                        </li>
                    </ul>
                </div> <!-- // .hot-beach --> 

                <div class="cold-mountain">
                    <h2 class="animate-element slide-down-x2">
                        <span class="sr-only">Baxtter Cold Mountain</span>
                        <?php 
                        if ( $dispositivo != 'movil' ) {
                            echo '<img src="'.MAINSURL.'/assets/images/cold-mountain.png" alt="Baxtter Cold Mountain Logo" class="logo-escritorio">';
                        } else {
                            echo '<img src="'.MAINSURL.'/assets/images/movil/cold-mountain-movil.png" alt="Baxtter Cold Mountain Logo" class="logo-escritorio">';
                        }
                        ?>
                    </h2>
                    <ul class="programas-links">
                        <li class="animate-element slide-up-list" style="animation-delay: 0.3s;">
                            <a href="<?php urlPdf( 'cold-hoteles' ); ?>" target="_blank" class="btn-hover-programas">
                                Hoteles
                            </a>
                        </li>
                        <li class="animate-element slide-up-list" style="animation-delay: 0.4s;">
                            <a href="<?php urlPdf( 'cold-servicios' ); ?>" target="_blank" class="btn-hover-programas">
                                Servicios incluidos
                            </a>
                        </li>
                        <li class="animate-element slide-up-list" style="animation-delay: 0.5s;">
                            <a href="<?php urlPdf( 'cold-itinerario' ); ?>" target="_blank" class="btn-hover-programas">
                                Itinerario de viaje
                            </a>
                        </li>
                        <li class="animate-element slide-up-list" style="animation-delay: 0.3s;">
                            <a href="<?php urlPdf( 'cold-contrato' ); ?>" target="_blank" class="btn-hover-programas">
                                Contrato tipo
                            </a>
                        </li>
                        <li class="animate-element slide-up-list" style="animation-delay: 0.6s;">
                            <a href="<?php urlPdf( 'cold-tarifario' ); ?>" target="_blank" class="btn-hover-programas">
                                Tarifario
                            </a>
                        </li>
                        <li>
                            <button class="button-red btn-hover-underline animate-element slide-up" style="animation-delay: 1s;">
                                Ver galería de imágenes
                                <ul class="data-carga galeria-data">
                                    <?php 
                                    $imagenes = getImages ('cold');
                                    if ( $imagenes != null ) {
                                        for ($i=0; $i < count($imagenes); $i++) { 
                                            echo '<li><img data-src="' . UPLOADSURL . '/' .$imagenes[$i] . '"></li>';
                                        }
                                    }
                                    ?>
                                </ul>
                            </button>
                        </li>
                    </ul>
                </div> <!-- // .cold-mountain --> 
            </div><!-- // .programas-wrapper -->

        </div><!-- // .main-section container -->

    </div><!-- // .section-capas .programas-section -->

    <div class="section-capas bariloche-section">
        <div class="background-section">
        </div><!-- // .background-section -->

        <div class="main-section container">
            <div class="main-section-wrapper bariloche-wrapper">
                <h2 class="titulo-seccion titulo-seccion-claro">
                    Bariloche
                </h2>
                <ul class="bariloche-links">
                    <li class="animate-element slide-up-list" style="animation-delay: 0.3s;">
                        <a href="<?php urlPdf( 'bariloche-comprar' ); ?>" target="_blank" class="btn-hover-red">
                            Cómo comprar
                        </a>
                    </li>
                    <!--<li class="animate-element slide-up-list" style="animation-delay: 0.4s;">
                        <a href="<?php urlPdf( 'bariloche-pagar' ); ?>" target="_blank" class="btn-hover-red">
                            Dónde pagar
                        </a>
                    </li>-->
                    <li class="animate-element slide-up-list" style="animation-delay: 0.7s;">
                        <a href="<?php urlPdf( 'bariloche-certificaciones' ); ?>" target="_blank" class="btn-hover-red">
                            Certificaciones N8
                        </a>
                    </li>
                    <li class="animate-element slide-up-list" style="animation-delay: 0.5s;">
                        <a href="<?php urlPdf( 'bariloche-cruz-roja' ); ?>" target="_blank" class="btn-hover-red">
                            Cruz Roja
                        </a>
                    </li>
                    <li class="animate-element slide-up-list" style="animation-delay: 0.6s;">
                        <a href="<?php urlPdf( 'bariloche-uai' ); ?>" target="_blank" class="btn-hover-red">
                            Uai
                        </a>
                    </li>
                </ul>

                <p class="animate-element slide-up" style="animation-delay: 1s;">
                    <em>Dale Clic y descargá a tu dispositivo el resumen de la información</em>
                </p>
            </div><!-- // .bariloche-wrapper -->

        </div><!-- // .main-section container -->

        <div class="front-section">
            
            <div class="left animate-element slide-left">
                <span class="text vertical w80px align-right">Bariloche</span>
                <span class="line vertical"></span>
            </div>
            
            <div class="right animate-element slide-right">
                <span class="text vertical w80px align-right">Hot / Cold</span>
                <span class="line vertical"></span>
            </div>    
            
        </div><!-- //front -->
    </div><!-- // .section-capas .bariloche-section -->
    
</section><!-- // SECTION PROGRAMAS -->