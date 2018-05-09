<?php 
$disp = dispositivo();
?>

<nav class="main-nav">
    <button class="brand-name">
        <h1>
            <span class="sr-only">Baxtter</span>
        </h1>
    </button>


    <button class="toggle">
        <span class="tog1"></span>
        <span class="tog2"></span>
        <span class="tog3"></span>
    </button>
    
    <div class="menus-wrapper">
    
        <ul class="main-menu<?php if ( $disp != 'pc' ) { echo ' main-menu-movil'; }?>" role="menu">
            <li>
                <a href="nosotros" class="scroll-to btn-hover-menu">
                    Sobre nosotros
                </a>
            </li>
            <li>
                <a href="programas" class="scroll-to btn-hover-menu">
                    Programas
                </a>
            </li>
            <li>
                <a href="viajo-baxtter" class="scroll-to btn-hover-menu">
                    Yo viajo con Baxtter
                </a>
            </li>
            <li>
                <a href="contacto" class="scroll-to btn-hover-menu">
                    Contacto
                </a>
            </li>
        </ul><!-- //.main-menu -->
    
    <?php if ( $disp != 'pc' ) : ?>
        <ul class="secondary-menu secondary-menu-movil">
            <div class="destacado">
                <li>
                    <a href="https://api.whatsapp.com/send?phone=<?php echo WHATSAPP; ?>" target="_blank" class="movil-icon-after">
                        <?php echo WHATSAPPTEXT; ?>
                    </a>
                </li>

                <li>
                    <a href="mailto:<?php echo LINK_EMAIL; ?>" target="_blank" class="email-icon-after">
                        <?php echo LINK_EMAIL; ?>
                    </a>
                </li>
            </div>
            <?php getTemplate( 'redes-sociales', 'nav-movil' ); ?>

        </ul><!-- //.secondary-menu -->
    <?php else : ?>

        <ul class="secondary-menu">
            <li>
                <a href="mailto:<?php echo LINK_EMAIL; ?>" target="_blank" class="icon-email-tel icon-redes-email-xs">
                    <?php echo LINK_EMAIL; ?>
                </a>
            </li>
            <li>
                <a href="https://api.whatsapp.com/send?phone=<?php echo WHATSAPP; ?>" target="_blank" class="icon-email-tel icon-redes-telefono-xs">
                    <?php echo WHATSAPPTEXT; ?>
                </a>
            </li>
            
            <?php getTemplate( 'redes-sociales', 'nav' ); ?>
            
        </ul><!-- //.secondary-menu -->

    <?php endif; ?>

    </div><!-- //.menus-wrapper -->

</nav>