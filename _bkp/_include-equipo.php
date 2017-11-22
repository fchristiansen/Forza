 <section id="team" class="team">
      <div class="container">
        <div class="intro">
              <?php 
                 $args = array (
                     'page_id' => 16
                   );
                   $the_query = new WP_Query ($args);
               ?>
         <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
          <?php the_title( ' <h2 class="wow fadeInUp" data-wow-delay="0.6s">', '</h2>'); ?>
          <div class="wow fadeInUp" data-wow-delay="0.9s"> 
              <?php the_content(); ?>
          </div>
        </div> <!-- intro -->
        <?php endwhile; ?>
        <?php wp_reset_query(); ?>  

          <!-- slider equipo -->
         <div id="slider_team" class="owl-carousel owl-theme wow fadeInUp" data-wow-delay="1.5s" data-wow-duration="1s">
                 <?php 
                 $args = array (
                     'post_type' => 'equipo',
                     'orderby' => 'date',
                     'order' =>'ASC'
                   );
                   $the_query = new WP_Query ($args);
               ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
              <div class="item">
                  <? the_post_thumbnail('img_equipo', array('class' => 'img-circle center-block' ) ); ?>
                  <?php the_title('<h3>', '</h3>'); ?>
                  <div>
                      <?php the_content(); ?>
                  </div>
              </div> <!-- item -->

           <?php endwhile; ?>
              <?php wp_reset_query(); ?>  

           
  
        </div> <!-- slider team -->
      </div>
       <div class="triangle2"> </div>
       <div class="circle_lg"></div>
    </section><!-- / team -->
