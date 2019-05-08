var baseUrl = 'http://' + window.location.host;
var ajaxFileUrl = baseUrl + '/inc/ajax.php';

$(document).ready(function(){
    $('#travelone').click(function(){
        $('.contenedor-travelone').addClass('contenedor-open');
    });

    $('#payone').click(function(){
        $('.contenedor-payone').addClass('contenedor-open');
    });

    $('.close-btn').click(function(){
        $('.contenedor-open').removeClass('contenedor-open');
    });
});




/*
 * FUNCIONES QUE REQUIEREN QUE TODO ESTE CARGADO
*/

$( window ).on('load', function(){
    
    /*
     * CARGA ASINCRONA DE IMAGENES
    */

    //carga las imágenes con img src
    $('.load-images').each(function(){
        var img = $(this).find('img');

        $(img).attr('src', $(img).attr('data-src') );
        if ( $(img).attr('src') != '') {
            $(this).fadeIn();
        }
    });//load images

    //carga imagenes cuya carga es por css (background)
    function loadImagesBackgroundCSS ( contenedor, clase ) {
        var html = '<div class="'+clase+'"></div>';
        contenedor.prepend($(html));
    }
    if (window.innerWidth > 992 ) {
        loadImagesBackgroundCSS ( $('#background_nosotros'), 'experiencia movil-element'); 
        loadImagesBackgroundCSS ( $('#background_mole'), 'mole-experiencia');
    }


    /*
     * IN VIEW
    */
    var $animation_elements = $('.movil-element');
    var $window = $(window);

    function check_if_in_view() {
      var window_height = $window.height();
      var window_top_position = $window.scrollTop();
      var window_bottom_position = (window_top_position + window_height);

      $.each($animation_elements, function() {
        var $element = $(this);
        var element_height = $element.outerHeight();
        var element_top_position = $element.offset().top;
        var element_bottom_position = (element_top_position + element_height);

        //check to see if this current container is within viewport
        if ((element_bottom_position >= window_top_position) &&
            (element_top_position <= window_bottom_position)) {
          $element.addClass('in-view');
        } else {
          $element.removeClass('in-view');
        }
      });
    }

    $window.on('scroll resize', check_if_in_view);
    $window.trigger('scroll');


    /*
     * PARALLAX BACKGROUND IMAGENES NOSOTROS - TWIITER Y PARTNERS
    */
    var experienciaBackground = $('.experiencia');

    $(window).scroll(function(){
        //valor de barra que necesitan todos
        var barra = ($(window).scrollTop());
        
        
        /*
        * experienciaBackground
        */
       if (window.innerWidth > 992) {
            if ( experienciaBackground.hasClass('in-view') ) {
                var modificador = 30; 
                
                //tiene solo version pc
                    
                var porcentaje = barra * 0.03 - modificador;
                
                $(experienciaBackground).css('background-position-x', porcentaje + '%'); 

            }
        
        }//ExperienciaBackground

        

    });//WINDOWS SCROLL

});//ON LOAD