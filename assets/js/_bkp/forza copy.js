$(function() {
            jQuery(window).load(function () {

               // Wow Page Animations
                      var wow = new WOW(
                        { 
                          animateClass: 'animated', // set our global css classT (default is animated)
                          offset: 0, // set distance to content until it triggers (default is 0)
                          mobile: false, // remove animations for mobiles/tablets (default is true)
                          live: true }); // act on asynchronously loaded content (default is true)
                         new WOW().init();

            });

    // Page Scrollbar
    // There are many options available -
    // see http://areaaperta.com/nicescroll/ for further usage variables
    // =======================================================
     $("html").niceScroll({
        cursorcolor: "black",
        scrollspeed: 0,
        mousescrollstep: 30,
        boxzoom: false,
        autohidemode: false,
        cursorborder: "0 solid #202020",
        cursorborderradius: "0",
        cursorwidth: 20,
        background: "#fc371a",
        horizrailenabled: false
    });

     // ===== slider equipo ==== 

        $('#slider_team').owlCarousel({
                loop:true,
                margin:0,
                nav:true,
                dots:false,
                autoplay: true,

                autoplaySpeed: 500,
                responsive:{
                    0:{
                        items:1
                    },
                    767:{
                        items:2
                    },
                    1024:{
                        items:3
                    }
                }
            });

     // ===== slider clientes ====     

            $('#slider_clientes').owlCarousel({
                loop:true,
                margin:40,
                nav:true,
                dots:false,
                autoplay: true,
             
                autoplaySpeed: 500,
                responsive:{
                    0:{
                        items:1
                    },
                    767:{
                        items:2
                    },
                    1024:{
                        items:4
                    }
                }
            }); 

            $('#slider_galeria1').owlCarousel({
                loop:true,
                margin:40,
                nav:true,
                dots:false,
                autoplay: false,
                autoplaySpeed: 500,
                responsive:{
                    0:{
                        items:1
                    },
                    767:{
                        items:1
                    },
                    1024:{
                        items:1
                    }
                }
            }); 

             // ===== smooth scroll to section==== 

            $(function() {
              $('a[href*="#"]:not([href="#"])').click(function() {
                if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                  var target = $(this.hash);
                  target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                  if (target.length) {
                    $('html, body').animate({
                      scrollTop: target.offset().top
                    }, 1000);
                    return false;
                  }
                }
              });
            });


            // ===== Scroll to Top ==== 
            $(window).scroll(function() {
                if ($(this).scrollTop() >= 200) {        // If page is scrolled more than 50px
                    $('#return-to-top').fadeIn(500);    // Fade in the arrow
                } else {
                    $('#return-to-top').fadeOut(200);   // Else fade out the arrow
                }
            });

            $('#return-to-top').click(function() {      // When arrow is clicked
                $('body,html').animate({
                    scrollTop : 0                       // Scroll to top of body
                }, 500);
            });



               // ===== parallax  ==== 


                 if ($("#servicios").length) {
                  parallax();
                }
                  if ($("#js_intro_clientes").length) {
                    parallax();
                  }


              $(window).scroll(function(e) {
                if ($("#js_intro_clientes").length) {
                  parallax();
                }
                  if ($("#servicios").length) {
                  parallax();
                }
              });

              function parallax(){
                if( $("#js_intro_clientes").length > 0 ) {
                  var plxBackground = $("#js_parallax_clientes");
                  var plxWindow = $("#js_intro_clientes");

                  var plxWindowTopToPageTop = $(plxWindow).offset().top;
                  var windowTopToPageTop = $(window).scrollTop();
                  var plxWindowTopToWindowTop = plxWindowTopToPageTop - windowTopToPageTop;

                  var plxBackgroundTopToPageTop = $(plxBackground).offset().top;
                  var windowInnerHeight = window.innerHeight;
                  var plxBackgroundTopToWindowTop = plxBackgroundTopToPageTop - windowTopToPageTop;
                  var plxBackgroundTopToWindowBottom = windowInnerHeight - plxBackgroundTopToWindowTop;
                  var plxSpeed = 0.35;

                  plxBackground.css('top', - (plxWindowTopToWindowTop * plxSpeed) + 'px');
                }

                if( $("#servicios").length > 0 ) {
                  var plxBackground = $("#js-parallax-servicios");
                  var plxWindow = $("#servicios");

                  var plxWindowTopToPageTop = $(plxWindow).offset().top;
                  var windowTopToPageTop = $(window).scrollTop();
                  var plxWindowTopToWindowTop = plxWindowTopToPageTop - windowTopToPageTop;

                  var plxBackgroundTopToPageTop = $(plxBackground).offset().top;
                  var windowInnerHeight = window.innerHeight;
                  var plxBackgroundTopToWindowTop = plxBackgroundTopToPageTop - windowTopToPageTop;
                  var plxBackgroundTopToWindowBottom = windowInnerHeight - plxBackgroundTopToWindowTop;
                  var plxSpeed = 0.35;

                  plxBackground.css('top', - (plxWindowTopToWindowTop * plxSpeed) + 'px');
                }
              }

               //$(document).scroll(function() {
                    //     console.log($(document).scrollTop());
                    // });

                /* Get iframe src attribute value i.e. YouTube video url
                and store it in a variable */

                var url = $("#video1").attr('src');
                var url2= $("#video2").attr('src');
                
                /* Assign empty url value to the iframe src attribute when
                modal hide, which stop the video playing */
                $("#modal_video1").on('hide.bs.modal', function(){
                    $("#video1").attr('src','');
                });
                
                /* Assign the initially stored url back to the iframe src
                attribute when modal is displayed again */
                $("#modal_video1").on('show.bs.modal', function(){
                    $("#video1").attr('src', url);
                });

                /* Assign empty url value to the iframe src attribute when
                modal hide, which stop the video playing */
               $("#modal_video2").on('hide.bs.modal', function(){
                   $("#video2").attr('src', '');
               });
                
                /* Assign the initially stored url back to the iframe src
                attribute when modal is displayed again */
               $("#modal_video2").on('show.bs.modal', function(){
                   $("#video2").attr('src', url2);
               });

});









