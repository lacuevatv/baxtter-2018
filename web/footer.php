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

<!--- footer -->
    <footer class="main-footer">
    
    <!-- SECTION PARTNERS -->
            
        <?php if( $dispositivo == 'movil' ) : ?>

        <section class="section-capas partners-section partners-section-movil">
            
            <div id="background-partners" class="background-section load-images background-partners dispositivo-movil movil-element">
                <img data-src="<?php echo MAINSURL; ?>/assets/images/movil/background-partners-mov.jpg" alt="Partners Baxtter - Background">
            </div>

            <div class="main-section container">
                <div class="partners-wrapper">

                    <h3 class="titulo-seccion titulo-seccion-claro animate-element slide-up">
                        Gracias por acompañarnos
                    </h3>
                    <ul id='owl-partners' class="partners-logos owl-carousel">
                        <li>
                            <img src="/assets/images/movil/logo-partners-movil.png" alt="Partners - Baxtter">
                        </li>
                        <li>
                            <img src="/assets/images/movil/logo-partners-movil.png" alt="Partners - Baxtter">
                        </li>
                        <li>
                            <img src="/assets/images/movil/logo-partners-movil.png" alt="Partners - Baxtter">
                        </li>
                    </ul>
                </div>
            </div>
        
        <?php else : ?>
        
        <section class="section-capas partners-section">
            <!-- background -->
            <div id="background-partners" class="background-section load-images background-partners movil-element">
            
                <!--<img data-src="<?php echo MAINSURL; ?>/assets/images/fondo-partners-escritorio.jpg" alt="Partners Baxtter - Background">-->
                <img data-src="<?php echo MAINSURL; ?>/assets/images/background-partners@2x.jpg" alt="Partners Baxtter - Background">
                
            </div><!-- //background -->

            <div class="main-section container">
                <div class="partners-wrapper">

                    <h3 class="titulo-seccion titulo-seccion-claro animate-element slide-up">
                        Gracias por acompañarnos
                    </h3>
                    <ul id='owl-partners' class="partners-logos owl-carousel">
                        <li>
                            <img src="/assets/images/logos-partners.png" alt="Partners - Baxtter">
                        </li>
                        <li>
                            <img src="/assets/images/logos-partners.png" alt="Partners - Baxtter">
                        </li>
                        <li>
                            <img src="/assets/images/logos-partners.png" alt="Partners - Baxtter">
                        </li>
                    </ul>
                </div>
            </div>

            <!-- front -->
            <div class="front-section">
            
                <div class="left partners animate-element slide-left">
                    <span class="text vertical ">Gracias</span>
                    <span class="line vertical "></span>
                </div>
                
                <div class="right partners animate-element slide-right">
                    <span class="text vertical ">#somosbaxtter</span>
                    <span class="line vertical "></span>
                </div>    
                
            </div><!-- //front -->

        <?php endif; ?>

        </section><!-- //SECTION PARTNERS -->

        <!-- SECTION LEGALES BAXTTER -->
    	<section class="legales-turismo">
            <div class="container">
                <a href="<?php urlPdf( 'viajo-baxtter-bases' ); ?>" target="_blank" id="btn-bases" class="btn-hover-red animate-element slide-up-list">
                        Bases y condiciones
                </a>
            <?php 
                if( $dispositivo == 'movil' ) {
                    echo '<img src="' . MAINSURL . '/assets/images/movil/legales-turismo-movil.png" alt="Legales Turismo Nación">';
                } else {
                    echo '<img src="' . MAINSURL . '/assets/images/logo-legales-turismo.png" alt="Legales Turismo Nación" class="btn-hover-grayscale">';
                }
            ?>

                <h5>
                    Baxtter es una empresa autorizada por el ministerio de turismo de la nación para organizar y brindar viajes de egresados.
                </h5>
                <h5>
                    <?php echo HABILITACIONES; ?>
                </h5>
                <button class="btn-up go-up">
                    <span class="sr-only">Subir</span>
                </button>
            </div>

        </section><!-- //SECTION LEGALES BAXTTER -->

        <!-- ASIDE LEGALES HIT -->
    	<?php getTemplate( 'hit' ); ?>
        
    </footer><!--- // .main-footer -->

</div><!--- //.wrapper-site -->
<!--- scripts -->    
<!------- jquery 3.1.1 ------>
    <script src="<?php echo MAINSURL; ?>/assets/js/jquery-3.2.1.min.js"></script>
    <!------- owl ------>
    <script src="<?php echo MAINSURL; ?>/assets/js/owl.carousel.min.js"></script>
    <!------- vimeo ------>
    <script src="https://player.vimeo.com/api/player.js"></script>
    <!------- twitter ------>
    <script src="<?php echo MAINSURL; ?>/assets/js/tweetie.min.js"></script>

    <!------- OWN SCRIPT ------>
    <script src="<?php echo MAINSURL; ?>/assets/js/script.js"></script>
    <script>
                    
                    </script>
</body>
</html>
