
<?
/*

Template name: Portafolio

*/
?>
<?php get_header(); ?>
<? include(TEMPLATEPATH . '/BFI_Thumb.php'); ?>
  <body>
	<!-- Return to Top -->
	<a href="javascript:" id="return-to-top">
			<i class="fa fa-chevron-up" aria-hidden="true"></i>
	</a>
    <?php  include(TEMPLATEPATH . '/include-top-inner.php'); ?>

    <?php include(TEMPLATEPATH . '/include-portafolio-interior.php'); ?>

<?php get_footer(); ?>
