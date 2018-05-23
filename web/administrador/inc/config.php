<?php
// BASE DE DATOS
define('DB_SERVER', 'localhost');
define('DB_USER', 'dbuser');
define('DB_PASS', '123');
define('DB_NAME', 'db_baxtter');
//CARPETAS
define ( 'TEMPLATEDIR', dirname( __FILE__ ) . '/../templates' );
define ( 'MODULOSDIR', dirname( __FILE__ ) . '/modulos' );
define ( 'UPLOADS', dirname( __FILE__ ) . '/../../contenido' );
define ( 'UPLOADSIMAGES', UPLOADS . '' );
define ( 'UPLOADSFILES', UPLOADS . '' );
//URL
define ('CARPETASERVIDOR', '' );//esta variable se define si el sitio no está en el root del dominio y si está en una subcarpeta
define ('MAINURL', 'http://' . $_SERVER['HTTP_HOST'] . CARPETASERVIDOR );
define ('URLADMINISTRADOR', MAINURL . '/administrador' );//esta variable define la carpeta del administrador - también debe cambianser en el .js
define ('UPLOADSURL', MAINURL . '/contenido');//carpeta donde esta el contenido subido por el usuario
define ('UPLOADSURLIMAGES', UPLOADSURL . '');//carpeta  de imagenes (por si tiene distintas carpetas de contenido)
define ('UPLOADSURLFILES', UPLOADSURL . '');//carpeta de archivos (por si tiene distintas carpetas de contenido)

//DEFINICIONES HEAD Y SCRIPTS
define ( 'SITENAME', 'Baxtter' );
define ( 'DATEPUBLISHED', '2018');
define ('LOGOSITE' , URLADMINISTRADOR . '/assets/images/logosite.png');
define ( 'SITETITLE', 'Nombre - Panel de control' );
define ( 'FAVICONICO', URLADMINISTRADOR . '/favicon.ico' );

//variables tipo de usuario
global $usertype;
$usertype = array(
	array( 'status' => 'a', 'nombre' => 'default'),
	array( 'status' => '0', 'nombre' => 'Administrador'),
	array( 'status' => '1', 'nombre' => 'Editor'),
);
//variables de categorias de noticia
global $categorias;//define las categorias para cargar noticias
$categorias = array(
	array( 'slug' => 'noticias', 'nombre' => 'Noticias'),
);
//variables de categorias de galeria de imagenes / si existen
global $categoriasGalerias;//define las categorias para cargar galerias
$categoriasGalerias = array(
	array( 'slug' => 'hot', 'nombre' => 'Hot Beach'),
	array( 'slug' => 'cold', 'nombre' => 'Cold Mountain'),
	array( 'slug' => 'bariloche', 'nombre' => 'Bariloche'),
	array( 'slug' => 'mole', 'nombre' => 'Mole'),
);

//variables de categorias de galeria de archivos //normalmente pdf para descargar
global $categoriasArchivos;//define las categorias para cargar galerias
$categoriasArchivos = array(
	array( 'slug' => 'hot', 'nombre' => 'Hot', 'lista' => array(
		'hoteles', 'servicios', 'itinerario', 'contrato', 'tarifario'
	) ),
	array( 'slug' => 'cold', 'nombre' => 'Cold', 'lista' => array(
		'hoteles', 'servicios', 'itinerario', 'contrato', 'tarifario'
	)),
	array( 'slug' => 'bariloche', 'nombre' => 'Bariloche', 'lista' => array(
		'comprar', 'pagar', 'cruz-roja', 'uai', 'certificaciones'
	)),
	array( 'slug' => 'viajo-baxtter', 'nombre' => 'Yo Viajo con Baxtter', 'lista' => array(
		'ficha-medica', 'ficha-adhesion', 'tips', 'protocolos', 'bases'
	)),
);
