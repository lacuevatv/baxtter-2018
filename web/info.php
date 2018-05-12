<?php
/*
 * Sitio web: BAXTTER
 * @LaCueva.tv
 * Since 3.0
 * LANDING PAGE
*/

require_once 'inc/config.php';




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
<link rel="mask-icon" href="<?php echo MAINSURL; ?>/safari-pinned-tab.svg" color="#7a7a7a">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#c4c4c4">
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

<!-- Custom CSS -->
    <link href="<?php echo MAINSURL; ?>/assets/css/style-landing.css?<?php echo VERSION; ?>" rel="stylesheet">

<!--- modernizr -->
    <script src="<?php echo MAINSURL; ?>/assets/js/modernizr-custom.js"></script>

</head>
<body>
<div class="wrapper-site" data-page-actual="LandingPage">

    <section id="nosotros" class="section-capas nosotros-section">
    
        <div id="background_nosotros" class="background-section">
            
            <div class="container">
                <h6 class="movil-element">
                    <img src="<?php echo MAINSURL; ?>/assets/images/logo-nosotros.png" alt="Baxter logo texto">
                </h6>
            </div>
        </div>

        <div class="main-section container">

            <div class="main-section-wrapper nosotros-wrapper">

                <div class="left">
                    
                        <h2 class="titulo-seccion">
                            Recibí automáticamente en tu correo electrónico nuestro brochure digital junto a toda la información de nuestros viajes.
                        </h2>
                </div>

                <div class="right">
                    <div class="btn-wrapper">
                        <a id="travelone" class="typeform-share button" href="https://viajes.typeform.com/to/nFZfbD" data-mode="popup" data-hide-headers=true data-hide-footer=true data-submit-close-delay="0" target="_blank">Yo Viajo</a> <script> (function() { var qs,js,q,s,d=document, gi=d.getElementById, ce=d.createElement, gt=d.getElementsByTagName, id="typef_orm_share", b="https://embed.typeform.com/"; if(!gi.call(d,id)){ js=ce.call(d,"script"); js.id=id; js.src=b+"embed.js"; q=gt.call(d,"script")[0]; q.parentNode.insertBefore(js,q) } })() </script>
                   </div>

                   <div class="btn-wrapper">
                        <a id="payone"  class="typeform-share button" href="https://viajes.typeform.com/to/jzmiS5" data-mode="popup" data-hide-headers=true data-hide-footer=true data-submit-close-delay="0" target="_blank">Adulto Responsable</a> <script> (function() { var qs,js,q,s,d=document, gi=d.getElementById, ce=d.createElement, gt=d.getElementsByTagName, id="typef_orm_share", b="https://embed.typeform.com/"; if(!gi.call(d,id)){ js=ce.call(d,"script"); js.id=id; js.src=b+"embed.js"; q=gt.call(d,"script")[0]; q.parentNode.insertBefore(js,q) } })() </script>
                   </div>

                    
                </div>
                <figure>
                    <img src="<?php echo MAINSURL; ?>/assets/images/logo27-escitorio.png" alt="Logo Baxtter, 27 años" class="logo-27">
                </figure
            </div>
        </div><!-- //. container -->   

        <!-- front -->
        <div class="front-section">
                
            <div class="left biggerxxl">
                <span class="text vertical color-negro w160px align-right">BRC_Lifestyle</span>
                <span class="line vertical fondo-negro w160px"></span>
            </div>
            
            <div class="deco-diagonal load-images">
                <img data-src="<?php echo MAINSURL; ?>/assets/images/triangulo-degradado.svg">
            </div>

            <div class="right biggerxxl">
                <span class="line vertical fondo-negro w160px"></span>
                <span class="text vertical color-celeste w160px">Viví la experiencia Baxtter</span>
            </div>    
            
        </div><!-- //front -->
    
    </section><!-- //SECTION NOSOTROS -->
    
<!--- footer -->
    <footer class="main-footer">
<!-- ASIDE LEGALES HIT -->
    <?php include_once( 'templates/hit.php' ); ?>
    
    </footer><!--- // .main-footer -->
    
</div><!--- //.wrapper-site -->
<!--- scripts -->    
<!------- jquery 3.1.1 ------>
    <script src="<?php echo MAINSURL; ?>/assets/js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo MAINSURL; ?>/assets/js/mini-script.js"></script>
</body>
</html>