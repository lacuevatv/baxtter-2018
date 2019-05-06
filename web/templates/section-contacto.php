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
<section id="contacto" class="section-capas contacto-section">
    <div class="main-section container">
        <div class="main-section-wrapper contacto-wrapper">
            <hgroup>
                <h1>
                    <span class="sr-only">Contacto</span>
                </h1>
                <h2 class="titulo-seccion animate-element slide-up">
                    Querés que charlemos?
                </h2>
            </hgroup>
            <ul class="addresses">
                <li class="main-address">
                    <div class="contacto-principal">
                        <h1 class="no-content">
                            Casa central
                        </h1>
                        <address>
                            Gral. Urquiza 64 - C.P. 1641
                            Acassuso | BS. AS. - Argentina<br>
                            11.5788.7278 | 11.4798.7279<br>
                            Lun/Vie: 10 a 18hrs
                        </address>
                        
                        <div class="form-wrapper">
                            <?php getTemplate( 'formularios', 'default' ); ?>
                        </div>
                    </div>

                <?php if ( $dispositivo != 'movil' ) : ?>
                    <div class="map-wrapper">

                        <!-- TEMP IMAGE 
                        <img src="<?php echo UPLOADSURL; ?>/temp/ref-mapa.jpg" style="width:100%;height:100%;display: block; margin: 0 auto;">-->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3288.844766310177!2d-58.5074174850565!3d-34.48146205854595!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb1b25adc8187%3A0x9ab3c44aafb5f935!2sBaxtter+Viajes!5e0!3m2!1ses!2sar!4v1526068414623" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>

                    </div>
                <?php endif; ?>

                </li>

                <li>
                    <h1>
                        La Plata
                    </h1>
                    <address>
                        Calle 50 Nro. 740 1/2 - CP 1900<br>
                        Pcia. de Buenos Aires<br>
                        +54 11.3962.7656<br>
                        laplata@baxtter.com.ar<br>
                        Lun/Vie: 10 a 18hrs
                    </address>
                </li>

                <li>
                    <h1>
                        Microcentro
                    </h1>
                    <address>
                        Av Corrientes 617 Piso 2<br>
                        CP 1043 - C.A.B.A.<br>
                        +54 11.3962.7656<br>
                        bsas@baxtter.com.ar<br>
                        Lun/Vie: 10 a 18hrs
                    </address>
                </li>

                <li>
                    <h1>
                        Córdoba
                    </h1>
                    <address>
                        Av. Colón 567 Piso 8<br>
                        CP 5000-Pcia. de Córdoba<br>
                        +54 3962.7656<br>
                        cordoba@baxtter.com.ar<br>
                        Lun/Vie: 10 a 18hrs
                    </address>
                </li>
            </ul>
        </div>
    </div><!-- //. container -->

    <!-- front -->
    <div class="front-section">
            
            <div class="left bigger animate-element slide-left">
            <span class="text vertical color-negro w80px align-right">Contacto</span>
            <span class="line vertical fondo-negro w80px"></span>
        </div>
        
        <div class="right bigger animate-element slide-right">
            <span class="text vertical color-negro w80px align-right">Baxtter</span>
            <span class="line vertical fondo-negro w80px"></span>
        </div>    
        
    </div><!-- //front -->

</section><!-- // SECTION CONTACTO -->