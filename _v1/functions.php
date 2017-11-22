<?php 
  function iniciarTema(){
    // ACTIVA IMAGENES DESTACADAS  
     add_theme_support( 'post-thumbnails' );
     // add_image_size('top-seccion', 1200, 225, true); 
     // add_image_size('img-noticia',730 ,410 , true); 
     // add_image_size('home_cortos',730 ,410 , true); 
    
    // Activar Titulo 
    add_theme_support( 'title-tag' );

    // Activa Menu Dinamico  
      register_nav_menus( array(
          'primary' => __( 'Menu', 'menu_principal' ),
      ));
  }
 
    // Necesario para menu Bootstrap
    require_once('wp_bootstrap_navwalker.php');
    // Cuando ocurra 'after_setup_theme, invocar "iniciarTema"
    add_action( 'after_setup_theme', 'iniciarTema' );

    // remueve adminbar en front
     add_filter( 'show_admin_bar', '__return_false' );
     

function custom_excerpt_length( $length ) {
  return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );



//otro excerpt
// uso : echo excerpt(30);
function excerpt($limit) {
 $excerpt = explode(' ', get_the_excerpt(), $limit);
 if (count($excerpt)>=$limit) {
 array_pop($excerpt);
 $excerpt = implode(" ",$excerpt).'[...]';
 } else {
 $excerpt = implode(" ",$excerpt);
 }
 $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
 return $excerpt;
}
function content($limit) {
 $content = explode(' ', get_the_content(), $limit);
 if (count($content)>=$limit) {
 array_pop($content);
 $content = implode(" ",$content).'[...]';
 } else {
 $content = implode(" ",$content);
 }
 $content = preg_replace('/[.+]/','', $content);
 $content = apply_filters('the_content', $content);
 $content = str_replace(']]>', ']]&gt;', $content);
 return $content;
}

  

// carga css 
function theme_styles() {

  wp_enqueue_style('boostrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
  wp_enqueue_style('fonts', get_template_directory_uri() . '/assets/css/fonts.css');
  wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css');
  wp_enqueue_style('hover', get_template_directory_uri() . '/assets/css/hover-min.css');
  wp_enqueue_style('carousel', get_template_directory_uri() . '/assets/css/owl.carousel.css');
  wp_enqueue_style('carousel-theme', get_template_directory_uri() . '/assets/css/owl.theme.default.css');
  wp_enqueue_style('animate', get_template_directory_uri() . '/assets/css/animate.css');
  wp_enqueue_style('custom', get_template_directory_uri() . '/assets/css/custom.css');
}

// carga js
// function jquery_cdn() {
//    if (!is_admin()) {
//         wp_deregister_script('jquery');
//         wp_register_script('jquery', 'http://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js', true, '1.11.3'); 
//         wp_enqueue_script('jquery');
//    }
// }
// add_action('init', 'jquery_cdn');

function theme_js(){
    wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array('jquery'),'1.11.3', true);
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'),'3.3.7', true);
    wp_enqueue_script('wow', get_template_directory_uri() . '/assets/js/wow.min.js', array('jquery'),'1.1.3', true);
    wp_enqueue_script('nicescroll', get_template_directory_uri() . '/assets/js/jquery.nicescroll.min.js', array('jquery'),'3.6.8', true);
    wp_enqueue_script('owl', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'),'2.2.0', true);
    wp_enqueue_script('jorza-js', get_template_directory_uri() . '/assets/js/forza.js', array('jquery'),'1.0', true);

 }
  add_action('wp_enqueue_scripts', 'theme_styles');
  add_action('wp_enqueue_scripts', 'theme_js');


?>