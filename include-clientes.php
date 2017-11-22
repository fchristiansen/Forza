<section id="clientes" class="clientes">
    <div class="container">
      <div class="intro">
          <?php 
             $args = array (
                 'page_id' => 18
               );
               $the_query = new WP_Query ($args);
           ?>
          <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
          <?php the_title( '<h2 class="wow fadeInUp" data-wow-delay="0.6s">', '</h2>'); ?>
          <div class="wow fadeInUp" data-wow-delay="1s">
                <?php the_content(); ?>
          </div>
        </div> <!-- intro -->
            <?php endwhile; ?>
           <?php wp_reset_query(); ?>    
           <!-- slider clientes -->
         <div id="slider_clientes" class="owl-carousel owl-theme wow fadeInUp" data-wow-delay="1.5s">
              <?php 
              $args = array (
                  'post_type' => 'cliente'
                );
                $the_query = new WP_Query ($args);
            ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
              <div class="item">
                  <? the_post_thumbnail('logo_cliente', array('class' => 'center-block' ) ); ?>
              </div>
               <?php endwhile; ?>
               <?php wp_reset_query(); ?>  
        </div> <!-- slider clientes -->
    </div> <!--container -->
    </section><!-- / clientes -->
