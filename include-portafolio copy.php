    <section id="portfolio" class="portfolio">
    <div class="container-fluid nopad">
      <div class="row no-gutter">
          <?php
			
			$args = array (
				'post_type' 		=> 'portafolio',
				'posts_per_page' 	=> 1,
			    'post_status'       => 'publish',
			    'tax_query' => array(
					array(
						'taxonomy' => 'tipo_portafolio',
						'field'    => 'slug',
						'terms'    => 'video',
					),
				),
			);	    
			$the_query = new WP_Query ($args);
			$i = 0;
            ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); 
	            $i++;
            ?>	 

            <div class="col-sm-12 col-md-6">
               <a href="javascript:void(0);" class="hovereffect" data-toggle="modal" data-target="#modal_video<?php echo $i; ?>">
                 <!-- 700 * 400 -->
                  <div class="img_bkg " style="background-image: url(<?php the_post_thumbnail_url('portafolio_video'); ?>)"></div>
                  <div class="info video">
                    <img class="img-responsive ico" src="<?php bloginfo('template_url'); ?>/assets/img/ico_video.svg" alt="" >
                    <h2><?php the_title(); ?></h2>
                    <p><?php the_content(); ?></p>
                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                  </div><!-- info -->
               </a> <!-- btn modal video 1 -->
            </div>

			<div class="modal fade custom_modal modal_video" id="modal_video<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
								<iframe id="el-video1" class="video_player" width="560" height="315" src="https://www.youtube.com/embed/<?php echo get('id_del_video'); ?>?showinfo=0&rel=0&modestbranding=1&enablejsapi=1" allowfullscreen></iframe>
							</div>
						</div>
						<div class="modal-footer">
						</div>
					</div> <!-- modal content -->
				</div>
			</div> <!-- modal video 1 -->            
            
            
            
            <?php endwhile;  ?>
            <?php wp_reset_query(); ?>
          <?php
			
			$args = array (
				'post_type' 		=> 'portafolio',
				'posts_per_page' 	=> 4,
			    'post_status'       => 'publish',
			    'tax_query' => array(
					array(
						'taxonomy' => 'tipo_portafolio',
						'field'    => 'slug',
						'terms'    => 'galeria',
					),
				),
			);	    
			$the_query = new WP_Query ($args);
            ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); 
	            $i++;
	        ?>	 

            <div class="col-sm-12 col-md-3">
                <a href="javascript:void(0);" class="hovereffect"  data-toggle="modal" data-target="#modal_galeria<?php echo $i; ?>">
                    <!-- 400 * 400 -->
                  <div class="img_bkg " style="background-image: url(<?php the_post_thumbnail_url('portafolio_galeria'); ?>)"></div>
                  <div class="info galeria">
                    <img class="img-responsive ico" src="<?php bloginfo('template_url'); ?>/assets/img/ico_camara.svg" alt="" >
                    <h2><?php the_title(); ?></h2>
                    <p><?php the_excerpt(); ?></p>
                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                  </div><!-- info -->
                </a>
            </div>



	       <div class="modal custom_modal modal_galeria" id="modal_galeria<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
	                           <h2><? the_title(); ?></h2>
	                           <? the_content(); ?>
	                           <? $e = 0; ?>
	                     </div>
	                      <div id="slider_galeria1" class="owl-carousel owl-theme slider_galeria">
						        <?php $imagenes = muestra_galeria(); ?>
								<?php foreach ($imagenes as $imagen): ?>		                      
	                            <div class="item">
		                        <? 
			                       $e++;   
			                       if($e==1){ ?>
	                               <div class="aro"> </div>
	                               <div class="caption">
	                                     <div class="centrar">
										 	                    <h2><? the_title(); ?></h2>
	                                         <? the_content(); ?>
	                                   </div>
	                               </div>
	                               <? } ?>
								   <?	
								  	$foto	  = wp_get_attachment_url($imagen->ID);
									$paramsxs = array( 'width' => 430, 'height' => 430, 'crop' => true );
									$paramssm = array( 'width' => 1100, 'height' => 430, 'fit' => true );
								  	$fotitoxs = bfi_thumb( $foto, $paramsxs );
								  	$fotitosm = bfi_thumb( $foto, $paramssm );	
									?>	                               
	                               <img class="center-block visible-xs visible-sm" src="<?php echo $fotitoxs; ?>" alt="">
	                               <img class="center-block hidden-xs hidden-sm" src="<?php echo $fotitosm; ?>" alt="">
	                           	</div> 
								<?php endforeach ?> 
	                     
	                     </div> <!-- slider galeria 1-->
	                  </div>
	                </div>  <!-- modal content -->
	              </div>
	       </div><!-- modal galeria 1 -->

            
            <?php endwhile;  ?>
            <?php wp_reset_query(); ?>

          <?php
			
			$args = array (
        'post_type' 		=> 'portafolio',
        'posts_per_page' 	=> 1,
        'offset' 			=> 1,
        'post_status'       => 'publish',
			    'tax_query' => array(
    					array(
    						'taxonomy' => 'tipo_portafolio',
    						'field'    => 'slug',
    						'terms'    => 'video',
    					),
    				),
			);	    
			$the_query = new WP_Query ($args); 
	            $i++;
            ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>	 

            <div class="col-sm-12 col-md-6">
               <a href="javascript:void(0);" class="hovereffect" data-toggle="modal" data-target="#modal_video<?php echo $i; ?>">
                 <!-- 700 * 400 -->
                  <div class="img_bkg " style="background-image: url(<?php the_post_thumbnail_url('portafolio_video'); ?>)"></div>
                  <div class="info video">
                    <img class="img-responsive ico" src="<?php bloginfo('template_url'); ?>/assets/img/ico_video.svg" alt="" >
                    <h2><?php the_title(); ?></h2>
                    <p><?php the_content( ); ?></p>
                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                  </div><!-- info -->
               </a> <!-- btn modal video 1 -->
            </div>

			<div class="modal fade custom_modal modal_video" id="modal_video<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
								<iframe id="el-video1" class="video_player" width="560" height="315" src="https://www.youtube.com/embed/<?php echo get('id_del_video'); ?>?showinfo=0&rel=0&modestbranding=1&enablejsapi=1" allowfullscreen></iframe>
							</div>
						</div>
						<div class="modal-footer">
						</div>
					</div> <!-- modal content -->
				</div>
			</div> <!-- modal video 1 -->            
            
            
            <?php endwhile;  ?>
            <?php wp_reset_query(); ?>
       </div>  <!-- row -->


       </div> <!-- container fluid  -->

        <?php  include(TEMPLATEPATH . '/include-portafolio-modales-galeria.php'); ?>  
         
    </section> <!-- / portfolio -->