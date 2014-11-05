<?php

/* Register custom menus */
function register_my_menus() {
  register_nav_menus(
    array( 
		  'header-menu' => __( 'Header Menu' ), 
		  'footer-menu' => __( 'Footer Menu' )
		  )
  );
  
  add_action( 'init', 'register_my_menus' );

}

/* Add custom menus to Dashboard when theme is active */   
if ( function_exists( 'register_nav_menus' ) ) {
	register_nav_menus(
		array(
		  'header-menu' => 'Header Menu',
		  'footer_menu' => 'Footer Menu'
			 )
	);
}

add_action( 'widgets_init', 'register_my_sidebars' );

function register_my_sidebars() {

	/* Register the primary sidebar. */
	register_sidebar(
		array(
			'id' => 'primary',
			'name' => __( 'Primary Sidebar' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		)
	);
	
	/* Register the secondary sidebar. */
	register_sidebar(
		array(
			'id' => 'secondary',
			'name' => __( 'Secondary Sidebar' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		)
	);
	/* Repeat register_sidebar() code for additional sidebars. */
}

   
 

	