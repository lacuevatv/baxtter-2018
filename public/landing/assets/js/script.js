/**
 * File script.js BAXTTER
 *
 * @required jQuery
 * @ver 1.0
 --------------------------------------------------------------
>>> TABLE OF CONTENTS:
1.0 A) ON READY
B ) ON LOAD (requieren que todo este cargado)
2.0 FORMULARIOS
3.0 POP UP PROMO
3.0 OWL SLIDERS
4.0 TWITTER
--------------------------------------------------------------*/

var baseUrl = 'http://' + window.location.host;
var ajaxFileUrl = baseUrl + '/inc/ajax.php';

//se pasa con numeral #page
function scrollToID ( id ) {
    $('html, body').stop().animate({
        scrollTop: $(id).offset().top
    }, 'slow');
}

//setea la altura del contenedor
function setHeightContentVideo() {
    $('.video-wrapper').height( parseInt($('.image-ref-video').height()) + parseInt($('.image-ref-video').css('top')) );    
}

/*--------------------------------------------------------------
1.0 NAVIGATION
--------------------------------------------------------------*/

$(document).ready(function(){

    /*
     * SCROLL TOP
    */
    $('.go-up').click(function(){
        $("html, body").animate({
            scrollTop: 0
        }, "slow");
    });
    /*
     * SCROLL TO (links)
    */
   $('.scroll-to').click(function( e ){
        e.preventDefault();
        var href = '#'+$(this).attr('href');
        scrollToID(href);
        if ( window.innerWidth < 992 ) {
            MovilMenuToggle();
        }
   });
   
    /*
     * TOGGLE
    */
   $('.toggle').click(MovilMenuToggle);

   function MovilMenuToggle (){
       $('.toggle').toggleClass('toggle-open');
         $('.brand-name').toggleClass('brand-name-open');
       
        var menu = $('.menus-wrapper')
        var h = menu.prop('scrollHeight');
        if ( $(menu).height() == 0 ) {
            menu.animate({
                'height': h+'px',
            }, 500);
        } else {
            menu.animate({
                'height': '0px',
            }, 500);
        }
   }

   /*
    * ARROW DOWN
    * */
   $(document).on('click', '.title-arrow', function(){
       scrollToID( '#formularioprincipal' )
   });


});//.ready()

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
    * CARGA EL HEADER
    */

    loadHeader (loadHeader( startAnimation() ) );   
    //esta funcion primero carga el header y luego las imágenes
    function loadHeader ( callback ) {
        //primero, cargar todas las imágenes sin mostrarlas
        $('.header-images-wrapper').each(function(){
            var img = $(this).find('img');
    
            $(img).attr('src', $(img).attr('data-src') );
            
        });
        $('.title-arrow')

        //Luego ejecutar la Animacion
        function EjecutarCallBack() {
            if (typeof callback != 'undefined') {
                callback();
            }
        }
    }
    //funcion que muestra el header una vez cargadas las imagenes
    function startAnimation() {
        //si es movil
        if ( window.innerWidth < 768 ) {
            setTimeout(function(){
                $('.header-images-wrapper').addClass('header-images-wrapper-open');
                $('.header-wrapper').addClass('header-wrapper-open');
                $('.header-wrapper .sol-movil').addClass('sol-move-up');
                $('.header-wrapper .girl-movil').addClass('girl-fade');
                $('.title-header').addClass('title-header-open');
                loadImage ( $('.title-arrow'), agregaClase($('.title-arrow'),'slide-down') );
            },1000);

        } else {
            setTimeout(function(){
            $('.header-images-wrapper').addClass('header-images-wrapper-open');
            $('.header-wrapper').addClass('header-wrapper-open');
            
                $('.header-wrapper .sol').addClass('sol-move-up');
                $('.header-wrapper .girl').addClass('girl-fade');
                $('.title-header').addClass('title-header-open');
                loadImage ( $('.title-arrow'), agregaClase($('.title-arrow'),'slide-down') );
            },1000);
        }
    }
    //funcion que carga imagen y ejecuta una accion
    function loadImage ( el, callback ) {
        var img = $(el).find('img');
    
        $(img).attr('src', $(img).attr('data-src') );
        
        //Luego ejecutar la Animacion
        function EjecutarCallBack() {
            if (typeof callback != 'undefined') {
                callback();
            }
        }
    }
    //agrega la clase dada al elemento dado
    function agregaClase (el, clase) {
        $(el).addClass(clase);
    }



    /*
     * IN VIEW PARALLAX
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
     * IN VIEW ANIMATION
    */
    var $animation_elements = $('.animate-element');
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
     * PARALLAX HEADER PC
    */

    var imagenesHeader = $('.header-images-wrapper');
    var tituloPagina = $('.title-header');

    $(window).scroll(function(){
       //valor de barra que necesitan todos
       var barra = ($(window).scrollTop());
  
       //imagenesHeader muevo una por vez:
       //Imagen 1: sol
        if (  $(imagenesHeader[1]).hasClass('in-view') ) {
      
           var modificador = -25; 
           
           //vemos si es movil
           if ( $(imagenesHeader[1]).hasClass('sol-movil') ) {
               modificador = -30;

               var porcentaje = barra * 0.1 - modificador;
               
               $(imagenesHeader[1]).css('top', porcentaje + 'vh'); 

           } else {
               
               var porcentaje = barra * 0.08 - modificador;
               $(imagenesHeader[1]).css('top', porcentaje + 'vh'); 
               
           }
           
       }//Imagen 1: sol

       //Imagen 2: girl
       if (  $(imagenesHeader[2]).hasClass('in-view') ) {
      
        var modificador = 0; 
        
            //vemos si es movil
            if ( $(imagenesHeader[2]).hasClass('sol-movil') ) {
                modificador = 0;

                var porcentaje = barra * 0.7 - modificador;
                
                $(imagenesHeader[2]).css('top', porcentaje + 'vh'); 

            } else {
                //version pc
                
                var porcentaje = barra * 0.05 - modificador;
                $(imagenesHeader[2]).css('top', porcentaje + 'vh'); 
                
            }
            
        }//Imagen 2: girl

        //titulo: unicos
       /*if (  $(tituloPagina).hasClass('in-view') ) {
      
        var modificador = 0; 
        
            //vemos si es movil
       if (  $(tituloPagina).hasClass('in-view') ) {
            if ( $(tituloPagina).hasClass('titulo-movil') ) {
                modificador = 0;

                var porcentaje = barra * 0.4 - modificador;
                
                $(tituloPagina).css('botom', porcentaje + 'px'); 

            } else {
                //version pc
                var porcentaje = barra * 0.3 - modificador;
                //debugger;
                $(tituloPagina).css('transform', 'translateY(-' + porcentaje + '%)'); 
            }
        }     
        }//titulo: unicos*/
       
    });


    /*
     * PARALLAX BACKGROUND IMAGENES NOSOTROS - TWIITER Y PARTNERS
    */
    var partnersBackground = $('.background-partners');
    var twitterBackground = $('.background-twitter');
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

        /*
        * partnersBackground
        */
        if ( partnersBackground.hasClass('in-view') ) {
            var modificador = 80; 
            
            //vemos si es movil
            if ( partnersBackground.hasClass('dispositivo-movil') ) {
                modificador = 70;

                var porcentaje = barra * 0.02 - modificador;
                
                $(partnersBackground).css('top', '-'+porcentaje + '%'); 

            } else {
                //version pc
                if ( window.innerWidth < 1440 ) {
                    modificador = 70;
                }
                if ( window.innerWidth < 992 ) {
                    modificador = 264;
                }
                
                var porcentaje = barra * 0.02 - modificador;
                
                //cuando es menor a 992 la imagen se rompe y por lo tanto se la protege para que no quede vacio el espacio
                if ( window.innerWidth < 992 ) {
                    if ( porcentaje < -1 || porcentaje > -6 ) {
                        $(partnersBackground).css('top', '-' +porcentaje + '%');  
                    }
                } else {
                    //luego, si es mayor a 992 no pasa nada
                    $(partnersBackground).css('top', '-'+porcentaje + '%'); 
    
                }
            }
        }//partnersBackground


        /*
        * BackgroundTwitter
        */
        if ( twitterBackground.hasClass('in-view') ) {
            var modificador = -20; 
            
            if ( window.innerWidth < 1440 ) {
                modificador = 30;
            }
            if ( window.innerWidth < 1200 ) {
                modificador = 80;
            }

            if ( window.innerWidth < 992 ) {
                modificador = 170;
            }
            if ( window.innerWidth < 768 ) {
                modificador = 60;
            }
            
            
            var porcentaje = barra * 0.02 - modificador;
            
            //cuando es menor a 992 la imagen se rompe y por lo tanto se la protege para que no quede vacio el espacio
            if ( window.innerWidth < 992 ) {
                if ( porcentaje > -54 || porcentaje < -4 ) {
                    $(twitterBackground).css('top', '-' +porcentaje + '%');  
                }
            } else {
                //luego, si es mayor a 992 no pasa nada
                $(twitterBackground).css('top', '-'+porcentaje + '%'); 

            }

        }//partnersTwitter






    });//WINDOWS SCROLL

});//ON LOAD

/*--------------------------------------------------------------
2.0 FORMULARIOS
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

    $(document).on('submit', '#reunion-form', function( e ) {
        e.preventDefault();
        var loader = $('.loader');
        var contenedor = $(loader).closest('form');
        var msj = $(this).find('.msj-form');
    	formData = new FormData( this );
        formData.append('function','formulario-reunion');

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
                //console.log(response);
                $(loader).fadeOut(); 
                msj.html(response);    
            },
            error: function ( ) {
                console.log('error');
            },
    	});//cierre ajax

    });//submit formulario 1

    $(document).on('submit', '#default-form', function( e ) {
        e.preventDefault();
        var loader = $('.loader');
        var msj = $(this).find('.msj-form');
        var contenedor = $(loader).closest('form');

    	formData = new FormData( this );
        formData.append('function','formulario-default');

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
                //console.log(response);
                $(loader).fadeOut(); 
                msj.html(response);    
            },
            error: function ( ) {
                console.log('error');
            },
    	});//cierre ajax

    });//submit formulario default

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
    
    $('#owl-partners').owlCarousel({
	    loop:true,
        margin:10,
        slideSpeed : 2000,
        nav:false,
        doots: true,
        autoplay: true,
	    //navText : ['<span class="icon-arrow icon-arrow-left"></span>','<span class="icon-arrow icon-arrow-right"></span>'],
	    responsive:{
	        0:{
	            items:1
	        },
	    }
    });//owl
    

    /*$('.owl-carousel').owlCarousel({
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
	});//owl*/

});//on load


/*--------------------------------------------------------------
3.0 OWL TWITTER
--------------------------------------------------------------*/
$(document).ready(function(){
    //espera cinco segundos para que carguen los twitters
    setTimeout (slider_twiters_on, 5000)
    
    function slider_twiters_on() {
        var tweets = $('.tweets');
        var tweet = $('.tweets ul li');
        var numeroTweets = tweets.length;
        var seguidor = $('.twetts-dots');
        var i = 0;
        var sleepTime = 3000;
        var animateDur = 500;

        setTimeout(function(){
            tweet.eq(i).animate({
            'left' : '+=960px'
            },animateDur, function(){
                //reset primer slider para tenerlo listo
                tweet.eq(i).css('left', '-960px');
                //sigue la animacion
                setTimeout(function(){
                    tweet.eq(i+2).animate({
                    'left' : '+=960px'
                    },animateDur, function(){
                        setTimeout(function(){
                            tweet.eq(i+3).animate({
                            'left' : '+=960px'
                            },animateDur, function(){
                                setTimeout(function(){
                                    tweet.eq(i+4).animate({
                                    'left' : '+=960px'
                                    },animateDur, function(){
                                        setTimeout(function(){
                                            tweet.eq(i).animate({
                                            'left' : '+=960px'
                                            },animateDur, function(){
                                                tweet.eq(i+1).css('left', '-960px');
                                                tweet.eq(i+2).css('left', '-960px');
                                                tweet.eq(i+3).css('left', '-960px');
                                                slider_twiters_on();        
                                            })
                                        },sleepTime)
                                        
                                    })
                                }, sleepTime)
                            })
                        }, sleepTime)
                    })
                }, sleepTime)
            });
        }, sleepTime)

        setTimeout(function(){
            tweet.eq(i+1).animate({
            'left' : '+=960px'
            },animateDur, function(){
                seguidor.eq(i).toggleClass('active');
                seguidor.eq(i+1).toggleClass('active');
                setTimeout(function(){
                    tweet.eq(i+1).animate({
                    'left' : '+=960px'
                    },animateDur, function(){
                        seguidor.eq(i+1).toggleClass('active');
                        seguidor.eq(i+2).toggleClass('active');
                        setTimeout(function(){
                            tweet.eq(i+2).animate({
                            'left' : '+=960px'
                            },animateDur, function(){
                                seguidor.eq(i+2).toggleClass('active');
                                seguidor.eq(i+3).toggleClass('active');
                                setTimeout(function(){
                                    tweet.eq(i+3).animate({
                                    'left' : '+=960px'
                                    },animateDur, function(){
                                        seguidor.eq(i+3).toggleClass('active');
                                        seguidor.eq(i+4).toggleClass('active');
                                        setTimeout(function(){
                                            tweet.eq(i+4).animate({
                                            'left' : '+=960px'
                                            },animateDur, function(){
                                                seguidor.eq(i+4).toggleClass('active');
                                                seguidor.eq(i).toggleClass('active');
                                                tweet.eq(i+4).css('left', '-960px');
                                            })
                                        }, sleepTime)
                                    })
                                }, sleepTime)
                            })
                        }, sleepTime)
                    })
                }, sleepTime)
            });
        }, sleepTime)

    } //slider_twiters_on();
    

    $('.tweets').twittie(
        {
            'hashtag' :' SOMOSBAXTTER',
            'count' : '5',
            'template' : '{{tweet}} - {{user_name}}',
            'apiPath' : 'inc/twitter/tweet.php'
        }, function() {
        console.log('twitter');
    });
});