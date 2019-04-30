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
            <?php getTemplate( 'section-nosotros' ); ?>

            <?php getTemplate( 'section-presentaciones-online' ); ?>

            <?php getTemplate( 'section-bariloche' ); ?>

            <?php getTemplate( 'section-experiencia-baxtter' ); ?>

        </div> <!--- //.inner-wrapper -->
    </main><!--- //.main-wrapper -->

    <div class="inner-wrapper">
<!-- ASIDE MOLE -->
        <?php getTemplate( 'aside-mole' ); ?>

    <!-- SECTION YO VIAJO CON BAXTTER -->
        <?php getTemplate( 'section-viajo' ); ?>

        <!-- ASIDE TWITTER -->
        <?php getTemplate( 'aside-twitter' ); ?>

        <!-- SECTION CONTACTO -->
        <?php getTemplate( 'section-contacto' ); ?>

    </div> <!--- //.inner-wrapper -->
<?php include 'footer.php';
