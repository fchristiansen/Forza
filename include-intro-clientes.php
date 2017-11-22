     <section id="js_intro_clientes" class="intro_clientes parallax-window">
      <div class="container">
      <?php 
         $args = array (
             'page_id' => 89
           );
           $the_query = new WP_Query ($args);
       ?>
      <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <div class="intro">
          <div class="wow fadeInLeft" data-wow-delay="0s" data-wow-offset="100" data-wow-duration="1.5s"> 
               <?php the_content( $more_link_text, $strip_teaser ); ?>
           </div>
        </div><!-- intro -->
        <?php endwhile; ?>
        <?php wp_reset_query(); ?>   
        <div class="row">
          <div class="col-sm-6 ">
            <div class="box wow fadeInLeft">
                <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/assets/img/ico_clientes.svg" alt="">
                <h3> Nuestros <br>Clientes </h3>
                <div class="numero" data-wow-duration="0.2s">
                    <?php 
                      $args = array (
                        'post_type'     => 'cliente',
                        'posts_per_page' => 1
                      );
                      $count_posts = wp_count_posts( 'cliente' )->publish; 
                      $the_query = new WP_Query ($args);
                    ?>
                 <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                      <div class="black"><?php echo $count_posts ?></div>
                </div>
                 <?php endwhile; ?>
                 <?php wp_reset_query(); ?>   
            </div>
          </div> <!-- col-s-6 -->
          <div class="col-sm-6">
            <div class="box wow fadeInRight">
                <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/assets/img/ico_proyectos.svg" alt="">
                <h3>Proyectos <br>Completados</h3>
                <div class="numero" data-wow-duration="0.2s">
                    <p class="black">55</p>
                </div>
            </div>
          </div><!--- col sm 6 -->
        </div> <!-- row -->
      </div><!-- container -->
       <div id="js_parallax_clientes" class="parallax_clientes "></div>
    </section><!-- end intro_clientes -->

