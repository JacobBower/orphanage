<?php

if ( function_exists( 'add_theme_support' ) ) { 
    // add featured image/thumbnail support
    add_theme_support('post-thumbnails');
}

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
// Custom Post Types
function post_type_projects() {
	// register post type
    $postTypeArgs = array(
		'label'  => 'Projects',
		'public' => true,
		'rewrite' => array("slug" => "projects"),
		'supports' => array( 'title', 'editor', 'thumbnail', 'page-attributes' ),
    );
    register_post_type( 'project', $postTypeArgs );
    // Register taxonomy
	$taxArgs = array(
		'label'                         => 'Categories',
		'public'                        => true,
		'hierarchical'                  => true,
		'show_ui'                       => true,
		'show_in_nav_menus'             => true,
		'args'                          => array( 'orderby' => 'term_order' ),
		'query_var'                     => true
	);
	register_taxonomy( 'project_categories', 'project', $taxArgs );
}
add_action( 'init', 'post_type_projects' );

function post_type_leadership() {
	// register post type
    $postTypeArgs = array(
		'label'  => 'Leadership',
		'public' => true,
		'rewrite' => array("slug" => "leadership"),
		'supports' => array( 'title', 'editor', 'thumbnail', 'page-attributes', ),
    );
    register_post_type( 'leadership', $postTypeArgs );
    
}
add_action( 'init', 'post_type_leadership' );

function post_type_fundraising() {
	// register post type
    $postTypeArgs = array(
		'label'  => 'Fundraising',
		'public' => true,
		'rewrite' => array("slug" => "fundraising"),
		'supports' => array( 'title', 'editor', 'thumbnail', 'page-attributes', ),
    );
    register_post_type( 'fundraising', $postTypeArgs );
    
}
add_action( 'init', 'post_type_fundraising' );

add_image_size( 'custom_size', 300, 300, array( 'center', 'center' ) );

