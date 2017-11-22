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
       <?php wp_reset_postdata() ?>

        <div class="row">
			<div id="slider-servicios" class="owl-carousel owl-theme">
             <?php

            	global $wp_query;
            	$args = array_merge( $wp_query->query_vars, array( 'post_type' => 'servicios', 'order' => 'ASC') );
            	query_posts( $args );
            	$i = 1;
         	?>
        	<?php if ( have_posts() ) : while (have_posts() ) :the_post(); ?>

				<div class="item">

					<div class="servicio">
					    <div class="desc center-block">
					      <img class="img-responsive center-block" src="<?php echo get('iconos_icono') ?>"  alt="">
					      <?php the_title( '<h3>', '</h3>'); ?>
					      <?php the_excerpt(); ?>
					    </div> <!-- desc -->
					</div> <!-- servicio -->
					<div class="text-center">
					    <a class="btn btn-default btn_rojo" data-toggle="modal" data-target="#servicio<?php echo $i ?>">ver +</a>
					</div>
				</div> <!-- item -->
				<?php $i++ ?>

			<?php endwhile; else:  ?>
			<?php endif; ?>
			<?php wp_reset_query() ?>

		</div> <!-- owl carousel -->
        </div><!-- row -->
    </div> <!-- container -->
         <?php  include(TEMPLATEPATH . '/include-modales-servicios.php'); ?>
      <div id="js-parallax-servicios" class="parallax_servicios"></div>
</section> <!-- / servicios -->
