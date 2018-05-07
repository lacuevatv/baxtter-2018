<?php
/*
 * Sitio web: BAXTTER
 * @LaCueva.tv
 * Since 3.0
 *
*/
require_once 'inc/functions.php';

global $pageActual;
global $dispositivo;
$dispositivo = 'pc';
$pageActual = pageActual( cleanUri() );
if ( dispositivo() == 'movil' ) {
    $dispositivo = 'movil';
}

include 'header.php'; ?>
<!--- //.viene de .wrapper-site -->
    <main role="main" class="main-wrapper">
        <div class="inner-wrapper">
            <!-- SECTION NOSOTROS -->
            <section>
                <div class="container">
                    <h1>Baxtter</h1>
                    <h3>
                        Somos líderes natos en innovación y con eso en nuestro gen, nos dedicamos a organizar tremendos viajes de egresados desde hace 27 años.
                    </h3>
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

                </div><!-- //. container -->   

                    <div class="video-baxtter">
                        <h3>
                            <span class="sr-only">Video Baxtter</span>
                        </h3>

                        <!-- TEMP IMAGE -->
                        <img src="<?php echo UPLOADSURL; ?>/temp/ref-video.jpg" style="width:100%;display: block; margin: 0 auto;">
                    
                    </div>

                    <div class="container">
                        <h3>
                            Somos hipersociales
                        </h3>
                        <p>
                            Conocé los detalles de nuestros programas exclusivamente en nuestras redes.
                        </p>
                        
                        <ul class="redes-sociales">
                            <?php getTemplate('redes-sociales'); ?>
                        </ul>
                </div><!-- //. container -->
            </section><!-- //SECTION NOSOTROS -->
            
        <!-- SECTION PROGRAMAS -->
            <section>
            <!-- TEMP IMAGE -->
            <img src="<?php echo UPLOADSURL; ?>/temp/ref-hot-cold.jpg" style="width:100%;display: block; margin: 0 auto;">
            <!--
                <div class="container"
                    <h1>
                        Programas
                    </h1>
                    <h2>
                        Baxtter Hot Beach
                    </h2>
                    <ul>
                        <li>
                            <a href="#" target="_blank">
                                Hoteles
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                Servicios incluidos
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                Itinerario de viaje
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                Contrato tipo
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                Tarifario
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                Ver galería de imágenes

                                <ul class="galeria-data">
                                    <li>imagen1.jpg</li>
                                    <li>imagen2.jpg</li>
                                    <li>imagen3.jpg</li>
                                </ul>
                            </a>
                        </li>
                    </ul>

                    <h2>
                        Baxtter Cold Mountain
                    </h2>
                    <ul>
                        <li>
                            <a href="#" target="_blank">
                                Hoteles
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                Servicios incluidos
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                Itinerario de viaje
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                Contrato tipo
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                Tarifario
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                Ver galería de imágenes

                                <ul class="galeria-data">
                                    <li>imagen1.jpg</li>
                                    <li>imagen2.jpg</li>
                                    <li>imagen3.jpg</li>
                                </ul>
                            </a>
                        </li>
                    </ul>

                    <h2>
                        Bariloche
                    </h2>
                    <ul>
                        <li>
                            <a href="#" target="_blank">
                                Cómo comprar
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                Dónde pagar
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                Cruz Roja
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                Uai
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                Certificaciones N8
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                Ver galería de imágenes

                                <ul class="galeria-data">
                                    <li>imagen1.jpg</li>
                                    <li>imagen2.jpg</li>
                                    <li>imagen3.jpg</li>
                                </ul>
                            </a>
                        </li>
                    </ul>

                    <p>
                        Dale Clic y descargá a tu dispositivo el resumen de la información
                    </p>
                    
                </div><!-- //. container -->    
            </section><!-- // SECTION PROGRAMAS -->

        </div> <!--- //.inner-wrapper -->
    </main><!--- //.main-wrapper -->

<!-- ASIDE MOLE -->
    <aside>
        <!-- TEMP IMAGE -->
        <img src="<?php echo UPLOADSURL; ?>/temp/ref-hotel.jpg" style="width:100%;display: block; margin: 0 auto;">
    <!--
        <div class="container">
            <hgroup>
                <h1>
                    Mole
                </h1>

                <h2>
                    Una ciudad en el corazón de otra ciudad.
                </h2>

                <h3>
                    Un nuevo concepto en hotelería para jóvenes.
                </h3>
            </hgroup>

                <ul>
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

                <button>
                    Ver galería de imágenes
                </button>
            </div><!-- //. container -->
        
    </aside><!-- //ASIDE MOLE -->


<!-- SECTION YO VIAJO CON BAXTTER -->
    <section>
        <div class="container">
            
            <h1>
                Yo viajo con Baxtter
            </h1>
            <ul>
                <li>
                    <a href="#" target="_blank">
                        Ficha médica
                    </a>
                </li>
                <li>
                    <a href="#" target="_blank">
                        Ficha de adhesión
                    </a>
                </li>
                <li>
                    <a href="#" target="_blank">
                        Tips de viaje
                    </a>
                </li>
                <li>
                    <a href="#" target="_blank">
                        Protocolos de seguridad
                    </a>
                </li>
                <li>
                    <a href="#" target="_blank">
                        Bases y condiciones
                    </a>
                </li>
            </ul>
        
        </div><!-- //. container -->

    </section><!-- // SECTION VIAJO CON BAXTTER -->

    <!-- ASIDE TWITTER -->
    <aside>
        
        <!-- TEMP IMAGE -->
        <img src="<?php echo UPLOADSURL; ?>/temp/ref-twitter.jpg" style="width:100%;display: block; margin: 0 auto;">

        <div class="container">
            <!--<h1>
                #SomosBaxtter
            </h1>-->

        </div><!-- //. container -->
        
    </aside><!-- //ASIDE TWITTER -->

    <!-- SECTION CONTACTO -->
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

<?php include 'footer.php';
