    <section id="servicios" class="caja_servicios parallax-window">
        <div class="container">
        <div class="intro">
        <?php
           $args = array (
               'page_id' => 2
             );
             $the_query = new WP_Query ($args);
         ?>
         <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <?php the_title( '<h2 class="wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="1500ms" data-wow-offset="0">', '</h2>', true ); ?>
            <div class="wow fadeInUp" data-wow-delay="0.5s" data-wow-offset="0">
                <?php the_content(); ?>
            </div>
        </div> <!-- intro -->

        <?php endwhile; ?>
        <?php wp_reset_query(); ?>
        <div class="row">
            <div class="col-md-3 mb">
              <?php
                  $args = array (
                  'post_type' => 'servicios',
                  'p' 		  => 128
                );
                $the_query = new WP_Query ($args);
            ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
              <div class="servicio arco1 text-center wow bounceInUp" data-wow-delay="0.6s">
                  <div class="desc">
                    <img class="img-responsive center-block" src="<?php echo get('iconos_icono') ?>"  width="58" height="64" alt="">
                    <?php the_title( '<h3>', '</h3>'); ?>
                    <?php the_excerpt(); ?>
                  </div> <!-- desc -->
              </div> <!-- servicio -->
              <div class="text-center">
                  <a class="btn btn-default btn_rojo wow bounceInUp" data-wow-delay="0.6s" data-toggle="modal" data-target="#servicio1">ver +</a>
              </div>
              <?php endwhile;  ?>
              <?php wp_reset_query(); ?>
            </div> <!-- col md 4-->

            <div class="col-md-3 mb">
              <?php
              $args = array (

                 'post_type' => 'servicios',
                 'p' => 129

                );
                $the_query = new WP_Query ($args);
/*                 print_r($the_query); */
            ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
              <div class="servicio arco2 text-center wow bounceInUp" data-wow-delay="0.8s">
              <div class="desc">
                  <img class="img-responsive center-block" src="<?php echo get('iconos_icono') ?>" width="87" height="83" alt="">
                     <?php the_title( '<h3>', '</h3>'); ?>
                    <?php the_excerpt(); ?>
              </div> <!-- desc -->
              </div> <!-- servicio -->
              <div class="text-center">
                  <a class="btn btn-default btn_rojo wow bounceInUp" data-wow-delay="0.8s" data-toggle="modal" data-target="#servicio2">ver +</a>
              </div>
              <?php endwhile;  ?>
              <?php wp_reset_query(); ?>
            </div> <!-- col md 4 -->

            <div class="col-md-3 mb">
              <?php
              $args = array (
                  'post_type' => 'servicios',
                  'p' => 130
                );
                $the_query = new WP_Query ($args);
            ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

              <div class="servicio arco3 text-center wow bounceInUp" data-wow-delay="1s">
              <div class="desc">
                  <img class="img-responsive center-block" src="<?php echo get('iconos_icono') ?>" width="82" height="84" alt="">
                    <?php the_title( '<h3>', '</h3>'); ?>
                    <?php the_excerpt(); ?>
              </div><!-- desc -->
              </div> <!-- servicio  -->
              <div class="text-center">
                 <a class="btn btn-default btn_rojo wow bounceInUp" data-wow-delay="1s" data-toggle="modal" data-target="#servicio3">ver +</a>
              </div>
              <?php endwhile;  ?>
              <?php wp_reset_query(); ?>
            </div> <!-- col md 4 -->

            <div class="col-md-3 mb">
              <?php
              $args = array (
                  'post_type' => 'servicios',
                  'p' => 239
                );
                $the_query = new WP_Query ($args);
            ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

              <div class="servicio arco3 text-center wow bounceInUp" data-wow-delay="1s">
              <div class="desc">
                  <img class="img-responsive center-block" src="<?php echo get('iconos_icono') ?>" width="82" height="84" alt="">
                    <?php the_title( '<h3>', '</h3>'); ?>
                    <?php the_excerpt(); ?>
              </div><!-- desc -->
              </div> <!-- servicio  -->
              <div class="text-center">
                 <a class="btn btn-default btn_rojo wow bounceInUp" data-wow-delay="1s" data-toggle="modal" data-target="#servicio4">ver +</a>
              </div>
              <?php endwhile;  ?>
              <?php wp_reset_query(); ?>
            </div> <!-- col md 4 -->


            </div><!-- row -->
        </div> <!-- container -->
         <?php  include(TEMPLATEPATH . '/include-modales-servicios.php'); ?>
      <div id="js-parallax-servicios" class="parallax_servicios"></div>
    </section> <!-- / servicios -->
