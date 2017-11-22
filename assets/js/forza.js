(function($) {
              jQuery(window).load(function () {

                 // Wow Page Animations
                        var wow = new WOW(
                          {
                            animateClass: 'animated', // set our global css classT (default is animated)
                            offset: 0, // set distance to content until it triggers (default is 0)
                            mobile: false, // remove animations for mobiles/tablets (default is true)
                            live: false }); // act on asynchronously loaded content (default is true)
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
                  autoplaySpeed: 1000,
                  autoplayTimeout:3000,
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

           // ===== slider servicios ====

          $('#slider-servicios').owlCarousel({
                  loop:true,
                  margin:10,
                   nav:true,
                  dots:false,
                  autoplay: true,
                  autoplaySpeed: 1000,
                  autoplayTimeout:3000,
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

              /*=============================================
              =               MODALES VIDEO                 =
              =============================================*/

              $('#modal_video1').on('hide.bs.modal', function () {
                  callPlayer('el-video1', 'stopVideo');
              });

              $('#modal_video6').on('hide.bs.modal', function () {
                  callPlayer('el-video6', 'stopVideo');
              });



              $('.slider_galeria').owlCarousel({
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

  $('#form_contacto')
          .formValidation({
              icon: {
                  valid: 'glyphicon glyphicon-ok',
                  invalid: 'glyphicon glyphicon-remove',
                  validating: 'glyphicon glyphicon-refresh'
              },
        locale: 'es_ES'
          })
          .on('success.form.fv', function(e) {
              e.preventDefault();

              var $form = $(e.target),
                  fv    = $(e.target).data('formValidation');

        $('#btngrabar').html('Enviando <i class="fa fa fa-spinner fa-spin"></i>');

        var nombre = $form.data('nombre')

        $.ajax({
                  type: 'POST',
                  url: $form.attr('action'),
                data: $form.serialize(),
              })
              .done(function( data, textStatus, jqXHR ) {
             if ( console && console.log ) {
                console.log(data);

                 if(data=='ok'){
                    alert('Gracias, tu mensaje ha sido enviado.');
                    $('#form_contacto').trigger("reset");
                    $('#form_contacto').data('formValidation').resetForm();

                  }else{
                  error('Ha ocurrido un erro, por favor inténtalo de nuevo..');
            }
                      $('#btngrabar').html('Enviar');

          }

        })
        .fail(function( jqXHR, textStatus, errorThrown ) {
             if ( console && console.log ) {
                        alert('Ha ocurrido un error.');
             }
        });

<<<<<<< HEAD
          });

                    $(document).scroll(function() {
                        console.log($(document).scrollTop());
                    });

=======
          }); 
                /*
                    $(document).scroll(function() {
                        console.log($(document).scrollTop());
                    });  
                */
>>>>>>> d757bc512b1e0d1b9faf4418d6367e0325b00f77

})( jQuery ); //no conflict





