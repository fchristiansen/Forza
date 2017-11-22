
     	<?php

              global $wp_query;
              $args = array_merge( $wp_query->query_vars, array( 'post_type' => 'servicios', 'order' => 'ASC'));
              query_posts( $args );
              $i = 1;
          ?>
          <?php if ( have_posts() ) : while (have_posts() ) :the_post(); ?>

          <div class="modal fade custom_modal" id="servicio<?php echo $i ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col-md-7">
                     <img src="<?php echo get('iconos_icono_modal'); ?>" alt="<?php the_title();?>" class="img-responsive center-block servicio_xs">
                      <?php the_title( '<h4>', '</h4>'); ?>
                      <?php the_content() ?>
                    </div>
                    <div class="col-md-5">
                      <img src="<?php echo get('iconos_icono_modal'); ?>" alt="<?php the_title();?>" class="img-responsive center-block servicio_md">
                    </div>
                  </div>
                </div>
                <div class="modal-footer"> </div>
              </div><!-- modal content -->
            </div>
          </div> <!-- modal servicio 1 -->

		<?php $i++; ?>

		<?php endwhile; else:  ?>
		<?php endif; ?>
		<?php wp_reset_query() ?>




