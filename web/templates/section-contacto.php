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
<section>
    <div class="container">
        <hgroup>
            <h1>
                Contacto
            </h1>
            <h2>
                Querés que charlemos?
            </h2>
        </hgroup>
        <ul class="addresses">
            <li class="main-address">
                <div class="contacto-principal">
                    <h1>
                        Casa central
                    </h1>
                    <address>
                        Gral. Urquiza 64 - C.P. 1641<br>
                        Acassuso | BS. AS. - Argentina<br>
                        11.5788.7278 | 11.4798.7279<br>
                        Lun/Vie: 10 a 18hrs
                    </address>

                    <div class="form-wrapper">
                        <?php getTemplate( 'formularios', 'default' ); ?>
                    </div>
                </div>

                <div class="map-wrapper">

                    <!-- TEMP IMAGE -->
                    <img src="<?php echo UPLOADSURL; ?>/temp/ref-mapa.jpg" style="width:100%;display: block; margin: 0 auto;">

                </div>
            </li>

            <li>
                <h1>
                    La Plata
                </h1>
                <address>
                    Calle 50 Nro. 740 1/2 - CP 1900<br>
                    Pcia. de Buenos Aires<br>
                    +54 221.482.1045<br>
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
                    +54 11.4326.4494<br>
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
                    +54 351.423.2351<br>
                    cordoba@baxtter.com.ar<br>
                    Lun/Vie: 10 a 18hrs
                </address>
            </li>
        </ul>
    </div><!-- //. container -->

</section><!-- // SECTION CONTACTO -->