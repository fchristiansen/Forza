<?php get_header(); ?>
  <body>
  	<!-- Return to Top -->
		<a href="javascript:" id="return-to-top">
				<i class="fa fa-chevron-up" aria-hidden="true"></i>
	 </a>
    <?php include(TEMPLATEPATH . '/include-top.php'); ?>
    <section id="servicios" class="caja_servicios parallax-window">
        <div class="container">
        <div class="intro">
            <h2 class="wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="1500ms" data-wow-offset="0"> SERVICIOS</h2>
            <p class="wow fadeInUp" data-wow-delay="0.5s" data-wow-offset="0">
            Sed sit amet interdum purus, ut facilisis nulla. Donec pretium accumsan finibus.
            Phasellus malesuada magna quis eleifend molestie.
            Quisque ac ultricies diam, ac fermentum est. quisque non egestas quam, quis mollis lorem. </p>
        </div>
        <div class="row">
            <div class="col-md-4 mb">
              <div class="servicio arco1 text-center wow bounceInUp" data-wow-delay="0.6s">
                  <div class="desc">
                    <img class="img-responsive center-block" src="<?php bloginfo('template_directory'); ?>/assets/img/ampolleta.svg"  width="58" height="64" alt="">
                    <h3>servicio </h3>
                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Ratione, dolor.</p>
                  </div> <!-- desc -->
              </div> <!-- servicio -->
              <div class="text-center">
                  <a class="btn btn-default btn_rojo wow bounceInUp" data-wow-delay="0.6s" data-toggle="modal" data-target="#servicio1">ver +</a> 
              </div>
            </div> <!-- col md 4-->
            <div class="col-md-4 mb">
              <div class="servicio arco2 text-center wow bounceInUp" data-wow-delay="0.8s">
              <div class="desc">
                  <img class="img-responsive center-block" src="<?php bloginfo('template_directory'); ?>/assets/img/dardo.svg" width="87" height="83" alt="">
                  <h3>servicio </h3>
                  <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                  Cumque, provident.</p>
              </div> <!-- desc -->
              </div> <!-- servicio -->
              <div class="text-center">
                  <a class="btn btn-default btn_rojo wow bounceInUp" data-wow-delay="0.8s" data-toggle="modal" data-target="#servicio2">ver +</a>           
              </div>
            </div>
            <div class="col-md-4 mb">
              <div class="servicio arco3 text-center wow bounceInUp" data-wow-delay="1s">
              <div class="desc">
                  <img class="img-responsive center-block" src="<?php bloginfo('template_directory'); ?>/assets/img/computador.svg" width="82" height="84" alt="">
                  <h3>servicio </h3>
                  <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, error?</p>
              </div><!-- desc -->
              </div> <!-- servicio  -->
              <div class="text-center">
                 <a class="btn btn-default btn_rojo wow bounceInUp" data-wow-delay="1s" data-toggle="modal" data-target="#servicio3">ver +</a>           
              </div>
            </div>
            </div><!-- row -->
        </div> <!-- container -->




          <div class="modal fade custom_modal" id="servicio1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col-md-7">
                     <img src="<?php bloginfo('template_directory'); ?>/assets/img/servicio1.svg" alt="" class="img-responsive center-block servicio_xs">
                      <h4> Lorem ipsum dolor.</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt, saepe.</p>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam
                      ipsa sunt optio architecto accusantium consequatur assumenda
                      et odit corporis voluptas?</p>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam
                      ipsa sunt optio architecto accusantium consequatur assumenda
                      et odit corporis voluptas?</p>
                    </div>
                    <div class="col-md-5">
                      <img src="<?php bloginfo('template_directory'); ?>/assets/img/servicio1.svg" alt="" class="img-responsive center-block servicio_md">
                    </div> 
                  </div>
                </div>
                <div class="modal-footer"> </div>
              </div><!-- modal content -->
            </div>
          </div> <!-- modal servicio 1 -->


          <div class="modal fade custom_modal" id="servicio2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col-md-7">
                     <img src="<?php bloginfo('template_directory'); ?>/assets/img/servicio1.svg" alt="" class="img-responsive center-block servicio_xs ">
                      <h4> Lorem ipsum dolor.</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt, saepe.</p>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam
                      ipsa sunt optio architecto accusantium consequatur assumenda
                      et odit corporis voluptas?</p>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam
                      ipsa sunt optio architecto accusantium consequatur assumenda
                      et odit corporis voluptas?</p>
                    </div>
                    <div class="col-md-5">
                          <img src="<?php bloginfo('template_directory'); ?>/assets/img/servicio1.svg" alt="" class="img-responsive center-block servicio_md">
                    </div>

                  </div>               
                  </div>
                <div class="modal-footer">
                </div>
              </div> <!-- modal content -->
            </div>
          </div> <!-- modal servicio 2 -->

          <div class="modal fade custom_modal" id="servicio3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col-md-7">
                     <img src="<?php bloginfo('template_directory'); ?>/assets/img/servicio1.svg" alt="" class="img-responsive center-block servicio_xs">
                      <h4> Lorem ipsum dolor.</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt, saepe.</p>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam
                      ipsa sunt optio architecto accusantium consequatur assumenda
                      et odit corporis voluptas?</p>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam
                      ipsa sunt optio architecto accusantium consequatur assumenda
                      et odit corporis voluptas?</p>
                    </div>
                    <div class="col-md-5">
                      <img src="<?php bloginfo('template_directory'); ?>/assets/img/servicio1.svg" alt="" class="img-responsive center-block servicio_md">
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                </div>
              </div> <!-- modal content -->
            </div>
          </div> <!-- modal servicio 3 -->

      <div id="js-parallax-servicios" class="parallax_servicios"></div>
    </section> <!-- / servicios -->

    <section id="portfolio" class="portfolio">
    <div class="container-fluid nopad">
      <div class="row no-gutter">
            <div class="col-sm-12 col-md-6">
               <a href="javascript:void(0);" class="hovereffect" data-toggle="modal" data-target="#modal_video1">
                 <!-- 700 * 400 -->
                  <div class="img_bkg " style="background-image: url(http://lorempixel.com/700/400)"></div>
                  <div class="info video">
                    <img class="img-responsive ico" src="assets/img/ico_video.svg" alt="" >
                    <h2>Lorem ipsum dolor.</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum, odio. </p>
                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                  </div><!-- info -->
               </a>
            </div>
            <div class="col-sm-12 col-md-3">
                <a href="javascript:void(0);"  class="hovereffect"  data-toggle="modal" data-target="#modal_galeria1">
                    <!-- 400 * 400 -->
                  <div class="img_bkg " style="background-image: url(http://lorempixel.com/400/400)"></div>
                  <div class="info galeria">
                    <img class="img-responsive ico" src="assets/img/ico_camara.svg" alt="" >
                    <h2>Lorem ipsum dolor.</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum, odio. </p>
                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                  </div><!-- info -->
                </a>
            </div>
            <div class="col-sm-12 col-md-3">
                <a href="javascript:void(0);" class="hovereffect">
                  <div class="img_bkg" style="background-image: url(http://lorempixel.com/400/400)"></div>
                <div class="info galeria">
                  <img class="img-responsive ico" src="assets/img/ico_camara.svg" alt="" >
                  <h2>Lorem ipsum dolor.</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum, odio. </p>
                  <i class="fa fa-arrow-right" aria-hidden="true"></i>
                </div><!-- info -->
                </a>
            </div>
            <div class="col-sm-12 col-md-3">
              <a href="javascript:void(0);" class="hovereffect">
                <div class="img_bkg" style="background-image: url(http://lorempixel.com/400/400)"></div>
              <div class="info galeria">
                <img class="img-responsive ico" src="assets/img/ico_camara.svg" alt="" >
                <h2>Lorem ipsum dolor.</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum, odio. </p>
                <i class="fa fa-arrow-right" aria-hidden="true"></i>
              </div><!-- info -->
              </a>
            </div>
            <div class="col-sm-12 col-md-3">
              <a href="javascript:void(0);" class="hovereffect">
                <div class="img_bkg" style="background-image: url(http://lorempixel.com/400/400)"></div>
              <div class="info galeria">
                <img class="img-responsive ico" src="assets/img/ico_camara.svg" alt="" >
                <h2>Lorem ipsum dolor.</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum, odio. </p>
                <i class="fa fa-arrow-right" aria-hidden="true"></i>
              </div><!-- info -->
              </a>
            </div>
            <div class="col-sm-12 col-md-6"> 
              <a href="javascript:void(0);" class="hovereffect" data-toggle="modal" data-target="#modal_video2">
                <div class="img_bkg " style="background-image: url(http://lorempixel.com/700/400)"></div>
                <div class="info video">
                  <img class="img-responsive ico" src="assets/img/ico_video.svg" alt="" >
                  <h2>Lorem ipsum dolor.</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum, odio. </p>
                  <i class="fa fa-arrow-right" aria-hidden="true"></i>
                </div><!-- info -->
              </a>
            </div>
       </div> 
       </div>
       <div class="modal fade custom_modal modal_video" id="modal_video1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
         <div class="modal-dialog" role="document">
           <div class="modal-content">
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span class="fa-stack">
               <i class="fa fa-circle fa-stack-2x"></i>
               <i class="fa fa-times fa-stack-1x fa-inverse" ></i>
             </span>
           </button>
           
             <div class="modal-body">
             <div class="embed-responsive embed-responsive-16by9">
                   <iframe id="video1" width="560" height="315" src="https://www.youtube.com/embed/vt5iAf6xbjA?showinfo=0&rel=0&modestbranding=1" allowfullscreen></iframe>
             </div>
             </div>
             <div class="modal-footer">
             </div>
           </div> <!-- modal content -->
         </div>
       </div> <!-- modal video 1 -->

       <div class="modal fade custom_modal modal_video" id="modal_video2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
         <div class="modal-dialog" role="document">
           <div class="modal-content">
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span class="fa-stack">
               <i class="fa fa-circle fa-stack-2x"></i>
               <i class="fa fa-times fa-stack-1x fa-inverse" ></i>
             </span>
           </button>
             <div class="modal-body">
             <div class="embed-responsive embed-responsive-16by9">
                   <iframe id="video2" width="560" height="315" src="https://www.youtube.com/embed/cD1Rrfc0y-M?showinfo=0&&rel=0&modestbranding=1" allowfullscreen></iframe>
             </div>
             </div>
           
           </div>  <!-- modal content -->
         </div>
       </div><!-- modal video 2 -->

       <div class="modal custom_modal modal_galeria" id="modal_galeria1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
         <div class="modal-dialog" role="document">
           <div class="modal-content">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span class="fa-stack">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-times fa-stack-1x fa-inverse" ></i>
                </span>
              </button>
             <div class="modal-body">
                <div class="caption_xs">
                      <h2>Ruta Milano</h2>
                      <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                      Asperiores nisi rerum praesentium nihil sit, nam natus dicta eligendi. 
                      Illum nulla earum magni placeat iusto quisquam molestias, perspiciatis 
                      voluptate quas? Eveniet!</p>
                </div>
                 <div id="slider_galeria1" class="owl-carousel owl-theme slider_galeria">
                       <div class="item">
                          <div class="aro"> </div>
                          <div class="caption">
                                <div class="centrar">
                                    <h2> Ruta Milano</h2>
                                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Asperiores nisi rerum praesentium nihil sit, nam natus dicta eligendi. 
                                    Illum nulla earum magni placeat iusto quisquam molestias, perspiciatis 
                                    voluptate quas? Eveniet!</p>
                                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Asperiores nisi rerum praesentium nihil sit</p>
                              </div>
                          </div>
                          <img class="center-block hidden-xs hidden-sm" src="http://lorempixel.com/1100/430" alt="">
                          <img class="center-block visible-xs visible-sm" src="http://lorempixel.com/700/700" alt="">
                      </div> 
                      <div class="item">
                          <img class="center-block hidden-xs hidden-sm" src="http://lorempixel.com/1100/430" alt="">
                          <img class="center-block visible-xs visible-sm" src="http://lorempixel.com/700/700" alt="">
                      </div>
                      <div class="item">
                          <img class="center-block hidden-xs hidden-sm" src="http://lorempixel.com/1100/430" alt="">
                          <img class="center-block visible-xs visible-sm" src="http://lorempixel.com/700/700" alt="">
                      </div>
                      <div class="item">
                          <img class="center-block hidden-xs hidden-sm" src="http://lorempixel.com/1100/430" alt="">
                          <img class="center-block visible-xs visible-sm" src="http://lorempixel.com/700/700" alt="">
                      </div>
                      <div class="item">
                          <img class="center-block hidden-xs hidden-sm" src="http://lorempixel.com/1100/430" alt="">
                          <img class="center-block visible-xs visible-sm" src="http://lorempixel.com/700/700" alt="">
                      </div>
                      <div class="item">
                          <img class="center-block hidden-xs hidden-sm" src="http://lorempixel.com/1100/430" alt="">
                          <img class="center-block visible-xs visible-sm" src="http://lorempixel.com/700/700" alt="">
                      </div>
                
                </div> <!-- slider galeria 1-->
             </div>
           </div>  <!-- modal content -->
         </div>
       </div><!-- modal galeria 1 -->
    </section> <!-- / portfolio -->

    <!-- EQUIPO -->
     <?php include(TEMPLATEPATH . '/include-equipo.php'); ?>
    
    <!-- INTRO CLIENTES -->
    <?php include(TEMPLATEPATH . '/include-intro-clientes.php'); ?>
  
  <!-- CLIENTES -->
  <?php include(TEMPLATEPATH . '/include-clientes.php'); ?>

  <!-- CONTACTO -->
  <?php include(TEMPLATEPATH . '/include-contacto.php'); ?>

    <section class="map">
          <div id="map"> </div> 
    </section> <!-- / map  -->

<?php get_footer(); ?>