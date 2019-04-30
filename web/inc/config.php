<?php 
/*
 * Sitio web: BAXTTER
 * @LaCueva.tv
 * Since 3.0
 * CONFIG
*/
//BD
define('DB_SERVER', 'localhost');
define('DB_USER', 'dbuser');
define('DB_PASS', '123');
define('DB_NAME', 'dbname');
//DEFINICIONES HEAD Y SCRIPTS
define ( 'VERSION', '3.0' );
//CARPETAS
define ( 'UPLOADS', dirname( __FILE__ ) . '/../contenido' );
define ( 'TEMPLATEDIR', dirname( __FILE__ ) . '/../templates' );
//urls
define ('CARPETASERVIDOR', '' );//esta variable se define si el sitio no está en el root del dominio y si está en una subcarpeta
define ('MAINSURL', 'http://' . $_SERVER['HTTP_HOST'] . CARPETASERVIDOR );
define ('UPLOADSURL', MAINSURL . '/contenido');
define ('UPLOADSFILE', MAINSURL . '/contenido');
//META TAGS
define('SITETITLE', 'Somos Baxtter');
define('METADESCRIPTION', 'Somos líderes natos en innovación y con eso en nuestro gen, nos dedicamos a organizar tremendos viajes de egresados desde hace 27 años.');
define('METAKEYS', 'Turismo, viajes de egresados, Baxtter, bariloche, turismo montaña, turismo playa, turismo joven');
define('SCREENSHOT', MAINSURL . '/assets/images/popupdefault.jpg' );
define( 'HABILITACIONES', 'Baxtter viajes E.V. y T 7476 Disp. 109 - Todos los derechos reservados. - Web site 2017' );
define('INSTAGRAM', 'somosbaxtter');//nombre usuario
//LINKS:
define( 'EMAILFORMULARIO', 'info@baxtter.com.ar' );
define( 'LINK_EMAIL', 'info@baxtter.com.ar' );
define( 'WHATSAPPTEXT', '+54.11.3962.7656');
define( 'WHATSAPP', '541139627656');
define('LINK_FACEBOOK', 'https://www.facebook.com/somosbaxtter/');
define('LINK_INSTAGRAM', 'https://www.instagram.com/' . INSTAGRAM);
define('LINK_TWITTER', 'https://twitter.com/somosbaxtter/');
define('LINK_VIMEO', 'https://vimeo.com/somosbaxtter');
define('LINK_YOUTUBE', 'https://www.youtube.com/somosbaxtter');
define('LINK_SPOTIFY', 'https://www.spotify.com/somosbaxtter');
define('LINK_PINTEREST', 'https://www.pinterest.com/somosbaxtter');
define('APIKEYGOOGLE', '' );
define('LINK_TIPTOK', 'https://www.tiktok.com/somosbaxtter');


global $categorias;
$categorias = array(
	array( 'slug' => 'cold-mountain', 'nombre' => 'Cold Mountain'),
	array( 'slug' => 'hot-beach', 'nombre' => 'Hot Beach'),
);

define('POSTPERPAG', '5');//indica al paginador cuantos se muestran por pagina para calcular el offset además de que el loop muestra solo esos
