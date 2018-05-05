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
2.0 POP UP PROMO
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
2.0 POPUP PROMO
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


