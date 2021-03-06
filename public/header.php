<?php
/*
 * Sitio web: BAXTTER
 * @LaCueva.tv
 * Since 3.0
 * HEADER
*/
global $pageActual;
global $dispositivo;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?php echo SITETITLE; ?></title>

<!--favicon-->
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo MAINSURL; ?>/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo MAINSURL; ?>/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo MAINSURL; ?>/favicon-16x16.png">
<link rel="manifest" href="<?php echo MAINSURL; ?>/site.webmanifest">
<link rel="mask-icon" href="<?php echo MAINSURL; ?>/safari-pinned-tab.svg" color="#ee1d23">
<meta name="msapplication-TileColor" content="#ee1d23">
<meta name="theme-color" content="#ee1d23">
<meta name="format-detection" content="telephone=no">
<link type="text/plain" rel="author" href="<?php echo MAINSURL; ?>/humans.txt" />
<!-- SEO SECCTION -->
    <meta name="keywords" content="<?php echo METAKEYS; ?>">
    <meta name="description" content="<?php echo METADESCRIPTION; ?>">
    <link rel="canonical" href="<?php echo MAINSURL; ?>" />
    <meta property="og:locale" content="es_ES" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php echo SITETITLE; ?>" />
    <meta property="og:description" content="<?php echo METADESCRIPTION; ?>" />
    <meta property="og:url" content="<?php echo MAINSURL; ?>" />
    <meta property="og:site_name" content="<?php echo SITETITLE; ?>" />
    <meta property="og:image" content="<?php echo SCREENSHOT; ?>" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:description" content="<?php echo METADESCRIPTION; ?>" />
    <meta name="twitter:title" content="<?php echo SITETITLE; ?>" />
    <meta name="twitter:image" content="<?php echo SCREENSHOT; ?>" />
<!-- // SEO SECCTION -->

<!-- OWL -->
    <link href="<?php echo MAINSURL; ?>/assets/css/owl.carousel.min.css" rel="stylesheet">
<!-- Custom CSS -->
    <link href="<?php echo MAINSURL; ?>/assets/css/style.css?<?php echo VERSION; ?>" rel="stylesheet">

<!--- modernizr -->
    <script src="<?php echo MAINSURL; ?>/assets/js/modernizr-custom.js"></script>

</head>
<body> 
<div class="wrapper-site" data-page-actual="<?php echo $pageActual; ?>">
    <div class="wrapper-whatsapp-movil">
		<a class="btn-icon-left" href="<?php echo WHATSAPPLINK; ?>" target="_blank">
			<picture>
				<source srcset="<?php echo MAINSURL; ?>/assets/images/icon-wa.png 1x, <?php echo MAINSURL; ?>/assets/images/icon-wa@2x.png 2x" media="(min-width: 315px)">
				<img src="<?php echo MAINSURL; ?>/assets/images/whatsapp-mob-fix.png" alt="Icon Whatsapp">
			</picture>
		</a>
	</div>
<!--- header ---------------------->
    <?php
        openPopUp($pageActual);
    ?>
    <header class="main-header">
        
        <?php getTemplate( 'nav' ); ?>

        <div class="header-wrapper">
             
            <!-- ACA ADENTRO VAN LAS CAPAS DEL HEADER -->
            <div class="headercapas">
            
            <?php if ( $dispositivo != 'movil' ) : ?>

                <div class="header-images-wrapper degradado movil-element">
                    <img data-src="<?php echo MAINSURL; ?>/assets/images/degradado-header.jpg">
                </div>
                <div class="header-images-wrapper sol movil-element">
                    <img data-src="<?php echo MAINSURL; ?>/assets/images/sol.png">
                </div>
                <div class="header-images-wrapper girl movil-element">
                    <img data-src="<?php echo MAINSURL; ?>/assets/images/chica.png">
                </div>
            
                <?php else : ?>

                <div class="header-images-wrapper degradado-movil movil-element">
                    <img data-src="<?php echo MAINSURL; ?>/assets/images/movil/degradado-sup-movil.jpg">
                </div>
                <div class="header-images-wrapper sol-movil movil-element">
                    <img data-src="<?php echo MAINSURL; ?>/assets/images/movil/sol-sup-movil.png">
                </div>
                <div class="header-images-wrapper girl-movil movil-element">
                    <img data-src="<?php echo MAINSURL; ?>/assets/images/movil/chica-movil.png">
                </div>
            
                <?php endif; ?>
                
            </div><!-- //.header-capas -->

            <div class="main-section container">
                <div class="title-header movil-element">
                    <h1>Centennials</h1>
                    <div role="button" class="title-arrow movil-element">
                        <img data-src="<?php echo MAINSURL; ?>/assets/images/arrow-down.png" class="btn-hover-grayscale">
                    </div>
                </div>
            </div>

        </div><!-- //. header-wrapper -->  

        
        <div id="formularioprincipal" class="container form-header-wrapper">
            <div class="main-section-wrapper">
                <?php getTemplate( 'formularios', 'reunion' ); ?>
            </div>

            <!-- front -->
            <div class="front-section">
                
                <div class="left">
                    <span class="text vertical color-negro align-right">Form</span>
                    <span class="line vertical fondo-negro"></span>
                </div>
                
                <div class="right">
                    <span class="text vertical color-negro">BXR</span>
                    <span class="line vertical fondo-negro"></span>
                </div>    
                
            </div><!-- //front -->

        </div><!-- //. container --><!-- //.form-header-wrapper -->

    </header> <!-- //.main-header -->

    
