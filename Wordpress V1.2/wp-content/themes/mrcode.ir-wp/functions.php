<?php
function mrcodeirwp_scripts() {
	wp_enqueue_style( 'style', get_template_directory_uri().'/style.css', array(), '1.0' );
}

add_action( 'wp_enqueue_scripts', 'mrcodeirwp_scripts' );

function mrcodeirwp_register_menus() {
  register_nav_menus(
    array(
      'top-menu' => 'Top Navigation',
      'footer-menu' => 'Footer Navigation',
    )
  );
}
add_action( 'init', 'mrcodeirwp_register_menus' );

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class($classes, $item){
     if( in_array('current-menu-item', $classes) ){
             $classes[] = 'active ';
     }
     return $classes;
}

function mrcodeirwp_register_sidebars() {
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
add_action( 'widgets_init', 'mrcodeirwp_register_sidebars' );