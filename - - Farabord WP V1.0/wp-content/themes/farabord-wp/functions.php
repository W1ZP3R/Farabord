<?php
function farabordwp_scripts() { 
	wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/bootstrap/css/bootstrap.css', array(), null, 'all' );
    wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/fonts/font-awesome/css/font-awesome.css', array(), null, 'all' );
    wp_enqueue_style( 'fontello', get_template_directory_uri().'/fonts/fontello/css/fontello.css', array(), null, 'all' );
    wp_enqueue_style( 'popup', get_template_directory_uri().'/plugins/magnific-popup/magnific-popup.css', array(), null, 'all' );
    wp_enqueue_style( 'setting', get_template_directory_uri().'/plugins/rs-plugin/css/settings.css', array(), null, 'all' );
    wp_enqueue_style( 'animation.css', get_template_directory_uri().'/css/animations.css', array(), null, 'all' );
    wp_enqueue_style( 'carousel', get_template_directory_uri().'/plugins/owl-carousel/owl.carousel.css', array(), null, 'all' );
    wp_enqueue_style( 'transition', get_template_directory_uri().'/plugins/owl-carousel/owl.transitions.css', array(), null, 'all' );
    wp_enqueue_style( 'hover', get_template_directory_uri().'/plugins/hover/hover-min.css', array(), null, 'all' );
    wp_enqueue_style( 'style', get_template_directory_uri().'/css/style.css', array(), null, 'all' );
    wp_enqueue_style( 'typography', get_template_directory_uri().'/css/typography-default.css', array(), null, 'all' );
    wp_enqueue_style( 'skin', get_template_directory_uri().'/css/skins/light_blue.css', array(), null, 'all' );
    wp_enqueue_style( 'custom', get_template_directory_uri().'/css/custom.css', array(), null, 'all' );
}

add_action( 'wp_enqueue_scripts', 'farabordwp_scripts' );

function farabordwp_register_menus() {
  register_nav_menus(
    array(
      'top-menu' => 'Top Navigation',
      'footer-menu' => 'Footer Navigation',
    )
  );
}
add_action( 'init', 'farabordwp_register_menus' );

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class($classes, $item){
     if( in_array('current-menu-item', $classes) ){
             $classes[] = 'active ';
     }
     return $classes;
}

function farabordwp_register_sidebars() {
$args = array(
	'name'          => 'Main Sidebar',
	'description'   => 'Main Sidebar',
	'before_widget' => '<div class="gadget">',
	'after_widget'  => '</div><!-- End Widget -->',
	'before_title'  => '<h2 class="star">',
	'after_title'   => '</h2>' );
	register_sidebar( $args );
	
$args = array(
	'name'          => 'Footer Sidebar 1',
	'description'   => 'Footer Sidebar 1',
	'before_widget' => '',
	'after_widget'  => '<!-- End Widget -->',
	'before_title'  => '<h2>',
	'after_title'   => '</h2>' );
	register_sidebar( $args );
	
$args = array(
	'name'          => 'Footer Sidebar 2',
	'description'   => 'Footer Sidebar 2',
	'before_widget' => '',
	'after_widget'  => '<!-- End Widget -->',
	'before_title'  => '<h2>',
	'after_title'   => '</h2>' );
	register_sidebar( $args );
	
$args = array(
	'name'          => 'Footer Sidebar 3',
	'description'   => 'Footer Sidebar 3',
	'before_widget' => '',
	'after_widget'  => '<!-- End Widget -->',
	'before_title'  => '<h2>',
	'after_title'   => '</h2>' );
	register_sidebar( $args );
}
add_action( 'widgets_init', 'farabordwp_register_sidebars' );
