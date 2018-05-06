/**
 * File script.js BAXTTER
 *
 * @required jQuery
 * @ver 1.0
 --------------------------------------------------------------
>>> TABLE OF CONTENTS:
1.0 A) ON READY
B ) ON LOAD (requieren que todo este cargado)
PARALLAX / VIDEO INICIO / GRILLA BARILOCHE / MAS INFO
2.0 FORMULARIOS
3.0 POP UP PROMO
3.0 OWL SLIDERS
4.0 
--------------------------------------------------------------*/

var baseUrl = 'http://' + window.location.host;
var ajaxFileUrl = baseUrl + '/inc/ajax.php';

//se pasa con numeral #page
function scrollToID ( id ) {
    $('html, body').stop().animate({
        scrollTop: $(id).offset().top -90
    }, 'slow');
}

//setea la altura del contenedor
function setHeightContentVideo() {
    $('.video-wrapper').height( parseInt($('.image-ref-video').height()) + parseInt($('.image-ref-video').css('top')) );    
}

/*--------------------------------------------------------------
1.0 NAVIGATION / AJAX FORMS
--------------------------------------------------------------*/

$(document).ready(function(){

    /*
     * MENU basico
    */
    //scroll top
    $('.go-up').click(function(){
        $("html, body").animate({
            scrollTop: 0
        }, "slow");
    });


});//.ready()

/*
 * FUNCIONES QUE REQUIEREN QUE TODO ESTE CARGADO
*/


$( window ).on('load', function(){

    console.log('all loaded')

    /*
    parallax superior:
    */

    //tomamos las imagenes
    var background = $('.top-header-content');
    var img = $('.image-header');
    var title = $('.title-header');
    
    //guardamos la posicion inicial
    //paralax: funcionar al scroll
    $(window).scroll(function(){

        var barra = ($(window).scrollTop()); 
        
        var nuevoY = barra*0.9;
        var nuevoY2 = barra*0.9;
        //movemos los puntos hacia abajo
        background.css('background-position-y', '-'+nuevoY+'px' );
        img.css('top',nuevoY+'px');

        if ( barra <= 100 && barra >= 0) {
            title.css('top','48%');   
        }

        if ( barra <= 200 && barra >= 100) {
            title.css('top','58%');   
        }
        if ( barra <= 300 && barra >= 200) {
            title.css('top','68%');   
        }
        if ( barra <= 400 && barra >= 300) {
            title.css('top','78%');   
        }
        if ( barra <= 500 && barra >= 400) {
            title.css('top','88%');   
        }
     
    });//fin paralax

    /*
     * ANIMACIONES
    */
    var $animation_elements_2 = $('.animation-element');
    var $window = $(window);

    function check_if_in_view_2() {
      var window_height = $window.height();
      var window_top_position = $window.scrollTop();
      var window_bottom_position = (window_top_position + window_height);

      $.each($animation_elements_2, function() {
        var $element = $(this);
        var element_height = $element.outerHeight();
        var element_top_position = $element.offset().top;
        var element_bottom_position = (element_top_position + element_height);

        //check to see if this current container is within viewport
        if ((element_bottom_position >= window_top_position) &&
            (element_top_position <= window_bottom_position)) {
          $element.addClass('in-view-2');
        } else {
          $element.removeClass('in-view-2');
        }
      });
    }

    $window.on('scroll resize', check_if_in_view_2);
    $window.trigger('scroll');

});//ON LOAD

/*--------------------------------------------------------------
2.0 FORMULARIO
--------------------------------------------------------------*/

var specialcharacters = '@#$^&%*()+=[]\'\"\/{}|:;¡!¿?<>,.';
var numeros = '0123456789';
var letras = 'abcdefghijklmnñopqrstuvwxyz';

//busca los caracteres indicados en un string y devuelve true si existen
function areThereAny ( cadena, characters ) {
    for (var i = 0; i < characters.length; i++) {
       if ( cadena.indexOf(characters[i]) != -1 ) {
            return true;    
       }
   }
   return false;
}

//quita numeros de un string
function cleanedOthers(cadena, caracteres){ 

   //eliminamos uno por uno
   for (var i = 0; i < caracteres.length; i++) {
       cadena= cadena.replace(new RegExp(caracteres[i], 'gi'), '');
   }   

   return cadena;
}

//quita caracteres extraños del string, los caracteres se pasan como una variable
function cleanedSpecialCharacters(cadena, specialcharacters){ 

   //eliminamos uno por uno
   for (var i = 0; i < specialcharacters.length; i++) {
       cadena= cadena.replace(new RegExp("\\" + specialcharacters[i], 'gi'), '');
   }   

   return cadena;
}

//lo pasa a minúsculas
function toLowerCase(cadena) {
    cadena = cadena.toLowerCase();
    return cadena;
}

//remplasa dashes "-" del string por espacios
function replaceDashes( cadena ) {
   cadena = cadena.replace(/-/gi," ");
   cadena = cadena.replace(/_/gi," ");
   return cadena;
}


//borra espacios del string
function removeDashesSpaces( cadena ) {
   cadena = cadena.replace(/-/gi,"");
   cadena = cadena.replace(/_/gi,"");
   cadena = cadena.replace(/ /gi,"");
   return cadena;
}

// Quitamos espacios y los sustituimos por - porque nos gusta mas asi
function replaceSpaces( cadena ) {
   cadena = cadena.replace(/ /gi,"-");
   return cadena;
}

//quita acentos y ñ y lo pasa a minúsculas
function cleanAcentos( cadena ) {

   // Lo queremos devolver limpio en minusculas
   cadena = cadena.toLowerCase();

   // Quitamos acentos y "ñ". Fijate en que va sin comillas el primer parametro
   cadena = cadena.replace(/á/gi,"a");
   cadena = cadena.replace(/é/gi,"e");
   cadena = cadena.replace(/í/gi,"i");
   cadena = cadena.replace(/ó/gi,"o");
   cadena = cadena.replace(/ú/gi,"u");
   cadena = cadena.replace(/ñ/gi,"n");
   return cadena;
}


/*
 * FORMULARIO
*/

$(document).ready(function() {
    /*
     * FUNCIONES DE LOS LABEL
    */
    //función que hace zoom out a las etiquetas para escribir en los input:
    function zoomOutLabel( input ) {
        var contenedor = $(input).closest('.form-group')
        var label = $(contenedor).find('label')
        $(label).addClass('on');
    }
    //funcion al hacer click en label
    function focusInput( label ) {
        var contenedor = $(label).closest('.form-group')
        var input = $(contenedor).find('input')
        $(input).focus();
    }

    //clic en label, focus en input
    $(document).on('click', 'label', function(){
        focusInput( this );
    });

    //on focus, etiqueta se achica
    $(document).on('focus', 'input', function(){
        zoomOutLabel( this );
        $(this).addClass('input-on');
    });



    /*
     * VALIDACIONES FORMULARIO
    */
    //FOCUS OUT INPUT
    //input text
    $(document).on('focusout', 'input[type=text]', function() {
        var valor = $(this).val();
        var contenedor = $(this).closest('.form-group');
        var msj = $(contenedor).find('.msj-error-input');

        if ( valor == '' ) {
            $(msj).fadeIn();
            return false;  
        } 

        valor = cleanedSpecialCharacters(valor,specialcharacters);
        
        valor = cleanedOthers(valor,numeros);
        valor = replaceDashes(valor);
        
        $(this).val(valor);

        //si hay números devuelve error
        if ( areThereAny(valor, numeros+specialcharacters) || valor == '' || valor.length < 3) {
            $(msj).fadeIn();
            
        } else { 
            $(msj).fadeOut();
           
        }
    });

    //input type numbers
    $(document).on('focusout', 'input[type=number]', function() {
        
        var valor = $(this).val();
        var contenedor = $(this).closest('.form-group');
        var msj = $(contenedor).find('.msj-error-input');

        if ( valor == '' ) {
            $(msj).fadeIn();
            return false;  
        } 
        
        valor = cleanedOthers(valor,letras);
    
        valor = cleanedSpecialCharacters(valor,specialcharacters)
                
        $(this).val(valor);

        //si hay letras o no pasa alguna de las validaciones devuelve error
        if ( areThereAny(valor, letras+specialcharacters || valor.length < 7) ) {
            $(msj).fadeIn();
            
        } else {
            $(msj).fadeOut(); 
        }
    });

    //input tyme email
    $(document).on('focusout', 'input[type=email]', function() {
        var valor = $(this).val();
        var contenedor = $(this).closest('.form-group');
        var msj = $(contenedor).find('.msj-error-input');

        if ( valor == '' ) {
            $(msj).fadeIn();
            return false;  
        } 

        valor = cleanedSpecialCharacters(valor,'#$^&%*()[]\'\"\/{}:;<>,');
        
        //remueve algún espacio si hay
        valor = valor.replace(/ /gi,"");
        
        $(this).val(valor);

        //si hay números devuelve error
        if ( valor == '' || valor.length < 8 || valor.indexOf('@') == -1 || valor.indexOf('@')  == 0 ) {
            $(msj).fadeIn();
        } else {
            $(msj).fadeOut();
        }
    });


    /*
     * SUBMIT FORMULARIO
    */    

    $(document).on('submit', '#first-form', function( e ) {
        e.preventDefault();
       
        var loader = $('.loader');
        var contenedor = $(loader).closest('form');

    	formData = new FormData( this );
        formData.append('function','formulario');

    	$.ajax( {
            type: 'POST',
            url: ajaxFileUrl,
            data: formData,
            processData: false,
            contentType: false,
            cache: false,
            //funcion antes de enviar
            beforeSend: function() {
                $(loader).fadeIn();
            },
            success: function ( response ) {
                console.log(response);
                $(loader).fadeOut();     
            },
            error: function ( ) {
                console.log('error');
            },
    	});//cierre ajax

    });//submit formulario 1

});//on ready

/*--------------------------------------------------------------
3.0 POPUP PROMO
--------------------------------------------------------------*/

$(window).on('load', function(){

    var popup = $( '.popup' );
    var popupIMG = $( '.popup img' );
    var tiempo = 7000;
    if ( popup.length != 0 ) {
        var closeX = $( '.close-popup' );
        var closeBTN = $( '.cerrar-popup' );
        
        function openPop () {
            popup.addClass('popup-active');
            popupIMG.fadeIn();
        }
        
        setTimeout( openPop, tiempo);
        
        function closePopup() {
            popup.removeClass('popup-active');
            popupIMG.fadeOut(tiempo);
        }

        closeX.click(closePopup);
        closeBTN.click(closePopup);

    }
});


/*--------------------------------------------------------------
3.0 OWL SLIDERS
--------------------------------------------------------------*/


//CARGA SLIDER EN MÁS 18
$(window).on('load', function(){
    
    $('.owl-carousel').owlCarousel({
	    loop:true,
	    margin:10,
	    nav:true,
	    navText : ['<span class="icon-arrow icon-arrow-left"></span>','<span class="icon-arrow icon-arrow-right"></span>'],
	    responsive:{
	        0:{
	            items:1
	        },
	        992:{
	            items:3
	        },
	        1200:{
	            items:5
	        },
	        1300:{
	            items:6
	        },
	        1500:{
	            items:8
	        }
	    }
	});//owl

});//on load


