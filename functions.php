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
function post_type_projects() {
    $args = array(
      'public' => true,
      'label'  => 'Projects'
    );
    register_post_type( 'project', $args );
}
add_action( 'init', 'post_type_projects' );

add_image_size( 'custom_size', 300, 300, array( 'center', 'center' ) );
// add_action('init', 'post_type_projects' );
// function post_type_projects() {
// 	$labels = array(
//  		'name'               => _x( 'Projects', 'post type general name' ),
// 		'singular_name'      => _x( 'Project', 'post type singular name' ),
// 		'menu_name'          => _x( 'Projects', 'admin menu' ),
// 		'name_admin_bar'     => _x( 'Project', 'add new on admin bar' ),
// 		'add_new'            => _x( 'Add New', 'project' ),
// 		'add_new_item'       => __( 'Add New Project' ),
// 		'new_item'           => __( 'New Project' ),
// 		'edit_item'          => __( 'Edit Project' ),
// 		'view_item'          => __( 'View Project' ),
// 		'all_items'          => __( 'All Projects' ),
// 		'search_items'       => __( 'Search Projects' ),
// 		'parent_item_colon'  => __( 'Parent Projects:' ),
// 		'not_found'          => __( 'No projects found.' ),
// 		'not_found_in_trash' => __( 'No projects found in Trash.' )
 		
//  	);
//  	$args = array(
//  		'lables' 			 => $labels,
//  		'public' 			 => true,
//  		'publicly_queryable' => true,
// 	    'show_ui' 			 => true, 
// 	    'show_in_menu' 		 => true, 
// 	    'query_var' 		 => true,
// 	    'rewrite' 			 => array( 'slug' => 'projects' ),
// 	    'capability_type' 	 => 'page',
// 	    'has_archive' 		 => false, 
// 	    'hierarchical' 		 => false,
// 	    'menu_position' 	 => null,
// 	    'supports' 			 => array( 'title', 'editor', 'thumbnail', 'page-attributes', 'comments' )
// 	);
//     register_post_type( 'project', $args );
// 	// register_taxonomy_for_object_type( 'post_tag', 'projects' );
// }

 