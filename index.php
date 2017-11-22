<?php get_header(); ?>
<? include(TEMPLATEPATH . '/BFI_Thumb.php'); ?>
  <body>
  	 <!-- Return to Top -->
		<a href="javascript:" id="return-to-top">
				<i class="fa fa-chevron-up" aria-hidden="true"></i>
		</a>
     <?php include(TEMPLATEPATH . '/include-top.php'); ?>

     <?php  include(TEMPLATEPATH . '/include-servicios.php'); ?>

     <?php include(TEMPLATEPATH . '/include-portafolio.php'); ?>

     <?php  include(TEMPLATEPATH . '/include-equipo.php'); ?>
    <div class="hidden">
        <?php  include(TEMPLATEPATH . '/include-intro-clientes.php'); ?>
    </div>
          <?php  include(TEMPLATEPATH . '/include-clientes.php'); ?>



     <?php  include(TEMPLATEPATH . '/include-contacto.php'); ?>

     <?php  include(TEMPLATEPATH . '/include-map.php'); ?>

<?php get_footer(); ?>
