<?php 
/*
Template Name: Projects
*/
get_header(); ?>
	
	<div class="content projects row">
    
        <h1><?php the_title(); ?></h1>
       
        <div class="sidebar column-4 no-pad-right">
            <?php get_sidebar('secondary'); ?>
        </div>
       
        <section class="content-section gallery-content column-8 no-pad-left no-pad-right">
            <h3 class="content-headline">Current Projects</h3>
            <ul>
                <?php
                    $args = array(
                      'post_type' => 'project',
                      'posts_per_page' => -1,
                      'orderby' => 'date',
                      'order' => 'DESC',
                      'tax_query' => array(
                        array(
                          'taxonomy' => 'project_categories',
                          'field' => 'slug',
                          'terms' => array('current'),
                          'include_children' => false
                        )
                      )
                    );
                    $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <li>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('custom_size'); ?>
                            <p><?php the_title(); ?></p>
                        </a>
                    </li>
                <?php endwhile; ?>
            </ul>
        </section>
       
        <section class="content-section gallery-content past-projects column-8 no-pad-left no-pad-right">
            <h3 class="content-headline border-top">Past Projects</h3>
            <ul>
                <?php
                    $args = array(
                    'post_type' => 'project',
                    'posts_per_page' => -1,
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'tax_query' => array(
                      array(
                        'taxonomy' => 'project_categories',
                        'field' => 'slug',
                        'terms' => array('past'),
                        'include_children' => false
                      )
                    )
                    );
                    $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <li>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('custom_size'); ?>
                            <p><?php the_title(); ?></p>
                        </a>
                    </li>
                <?php endwhile; ?>
            </ul>
               			
       </section>
       <div class="clearfix"></div>
       
    </div><!--GALLERY-CONTENT-->
    
<?php get_footer(); ?>