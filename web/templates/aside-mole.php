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
<aside id="mole" class="section-capas mole-section">

    <div id="background_mole" class="background-section">

        <div class="video-wrapper load-images">
            <img data-src="<?php echo MAINSURL; ?>/contenido/temp/foto-mole.jpg" alt="Mole Youth City">
        </div>

        <div class="container">
            <h1 class="animate-element slide-up">
                <?php 
                if ( $dispositivo != 'movil' ) {
                    echo '<img src="'.MAINSURL.'/assets/images/mole-logo.png" alt="Mole - Logo" class="logo-escritorio">';    
                } else {
                    echo '<img src="'.MAINSURL.'/assets/images/movil/mole-logo-movil.png" alt="Mole - Logo" class="logo-movil">';
                }
                ?>
                
                <span class="sr-only">Mole</span>
            </h1>
        </div>
    </div>

    <div class="main-section container">
        <div class="main-section-wrapper mole-wrapper">
            <hgroup>
                <h2 class="titulo-seccion">
                    Una ciudad en el corazón de otra ciudad.
                </h2>

                <h3 class="subtitulo-seccion">
                    Un nuevo concepto en hotelería para jóvenes.
                </h3>
            </hgroup>

            <ul class="mole-hoteles">
                <li>
                    <h2>
                        Aguas del sur
                    </h2>
                    <address>
                        Dirección: Moreno 353<br>
                        www.aguasdelsurhotel.com.ar<br>
                        Tel. 0294 - 4422995 / 4424329
                    </address>
                </li>

                <li>
                    <h2>
                        Monteclaro
                    </h2>
                    <address>
                        Dirección: Moreno 365<br>
                        www.monteclarohotel.com.ar<br>
                        Tel. 0294 - 4422995 / 4424329
                    </address>
                </li>

                <li>
                    <h2>
                        Patagonia Sur
                    </h2>
                    <address>
                        Dirección: Ada María Elflein 340<br>
                        www.hotelpatagoniasur.com.ar<br>
                        Tel. 0294 - 4424329
                    </address>
                </li>
            </ul>

            <button class="btn-hover-underline animate-element slide-up">
                Ver galería de imágenes
            </button>
        </div><!-- //.mole-wrapper -->
    </div><!-- //. container -->

    <!-- front -->
    <div class="front-section">
            
        <div class="left biggerxxl animate-element slide-left">
            <span class="text vertical color-negro w160px align-right">Complejo Mole</span>
            <span class="line vertical fondo-negro w160px"></span>
        </div>
        <div class="deco-diagonal-top load-images">
            <img data-src="<?php echo MAINSURL; ?>/assets/images/triangulo-rojo.svg">
        </div>

        <div class="deco-diagonal load-images">
            <img data-src="<?php echo MAINSURL; ?>/assets/images/triangulo-blanco.svg">
        </div>
        
        <div class="right biggerxxl animate-element slide-right">
            <span class="line vertical fondo-negro w160px vertical-more-bottom"></span>
            <span class="text vertical color-negro w160px vertical-more-bottom">Viví la experiencia Baxtter</span>
        </div>    
        
    </div><!-- //front -->
    
</aside><!-- //ASIDE MOLE -->