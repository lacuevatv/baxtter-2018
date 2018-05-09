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
<section id="programas">
    <h1><span class="sr-only">Programas</span></h1>
    
    <div class="section-capas programas-section">
        <div class="background-section">
        </div><!-- // .background-section -->

        <div class="main-section container">
            <div class="main-section-wrapper programas-wrapper">
                <div class="hot-beach">
                    <h2>
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
                        <li>
                            <a href="#" target="_blank" class="btn-hover-programas">
                                Hoteles
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" class="btn-hover-programas">
                                Servicios incluidos
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" class="btn-hover-programas">
                                Itinerario de viaje
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" class="btn-hover-programas">
                                Contrato tipo
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" class="btn-hover-programas">
                                Tarifario
                            </a>
                        </li>
                        <li>
                        <button class="btn-hover-underline">
                                Ver galería de imágenes
                                <ul class="data-carga galeria-data">
                                    <li>imagen1.jpg</li>
                                    <li>imagen2.jpg</li>
                                    <li>imagen3.jpg</li>
                                </ul>
                            </button>
                        </li>
                    </ul>
                </div> <!-- // .hot-beach --> 

                <div class="cold-mountain">
                    <h2>
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
                        <li>
                            <a href="#" target="_blank" class="btn-hover-programas">
                                Hoteles
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" class="btn-hover-programas">
                                Servicios incluidos
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" class="btn-hover-programas">
                                Itinerario de viaje
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" class="btn-hover-programas">
                                Contrato tipo
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" class="btn-hover-programas">
                                Tarifario
                            </a>
                        </li>
                        <li>
                            <button class="button-red btn-hover-underline">
                                Ver galería de imágenes
                                <ul class="data-carga galeria-data">
                                    <li>imagen1.jpg</li>
                                    <li>imagen2.jpg</li>
                                    <li>imagen3.jpg</li>
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
                    <li>
                        <a href="#" target="_blank" class="btn-hover-gray">
                            Cómo comprar
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_blank" class="btn-hover-gray">
                            Dónde pagar
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_blank" class="btn-hover-gray">
                            Cruz Roja
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_blank" class="btn-hover-gray">
                            Uai
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_blank" class="btn-hover-gray">
                            Certificaciones N8
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_blank" class="btn-hover-gray">
                            Ver galería de imágenes

                            <ul class="data-carga galeria-data">
                                <li>imagen1.jpg</li>
                                <li>imagen2.jpg</li>
                                <li>imagen3.jpg</li>
                            </ul>
                        </a>
                    </li>
                </ul>

                <p>
                    <em>Dale Clic y descargá a tu dispositivo el resumen de la información</em>
                </p>
            </div><!-- // .bariloche-wrapper -->

        </div><!-- // .main-section container -->
    </div><!-- // .section-capas .bariloche-section -->
    
</section><!-- // SECTION PROGRAMAS -->