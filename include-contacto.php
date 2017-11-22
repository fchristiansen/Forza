    <section id="contacto" class="contacto">
      <div class="container">
        <div class="intro ">
              <?php 
                 $args = array (
                     'page_id' => 20
                   );
                   $the_query = new WP_Query ($args);
               ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <?php the_title( '<h2 class="wow fadeInUp" data-wow-delay="0.6s">', '</h2>'); ?>
            <div class="wow fadeInUp" data-wow-delay="1s">
                <?php the_content( $more_link_text, $strip_teaser ); ?>
             </div>
          </div> <!-- intro -->
            <?php endwhile; ?>
            <?php wp_reset_query(); ?>  

        <div class="row">
            <div class="col-sm-4 mb">
              <h3>nuestra oficina</h3>
              <ul>
                <li><i class="fa fa-map-marker" aria-hidden="true"></i> Asturias 166, Las Condes, Santiago</li>
                <li><i class="fa fa-phone" aria-hidden="true"></i> (+562) 220 763 16</li>
                <li><i class="fa fa-envelope" aria-hidden="true"></i> contacto@agenciaforza.cl</li>
              </ul>
            </div>
            <div class="col-sm-4 mb">
              <h3>horarios</h3>
                <ul>
                  <li><i class="fa fa-clock-o" aria-hidden="true"></i>Lunes a Jueves 9:00 - 19:00</li>
                  <li><i class="fa fa-clock-o" aria-hidden="true"></i>Viernes 9:00 - 16:30</li>
                </ul>
            </div>
            <div class="col-sm-4 mb">
              <h3>escríbenos</h3>
                
                <?php include(TEMPLATEPATH . '/include-form-contacto.php'); ?>   

            </div>
        </div>
      
      </div> <!-- container -->
    </section> <!-- / contacto -->

