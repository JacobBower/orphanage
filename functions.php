<?php

//Register custom menus
function register_menus() {
  register_nav_menus(
    array( 
		  'header-menu' => __( 'Header Menu' ), 
		  'footer-menu' => __( 'Footer Menu' )
		  )
  );
  
  add_action( 'init', 'register_my_menus' );

}

// Add custom menus to Dashboard when theme is active   
if ( function_exists( 'register_nav_menus' ) ) {
	register_nav_menus(
		array(
		  'header-menu' => 'Header Menu',
		  'footer_menu' => 'Footer Menu'
			 )
	);
}   
 

	