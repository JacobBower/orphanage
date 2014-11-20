<?php 
/*
Template Name: Projects
*/
get_header(); ?>
	
	<div class="content row">
    
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
              <?php the_title(); ?>
            </a>
          </li>
          <?php endwhile; ?>
        </ul>
		
       </section>
       <div class="clearfix"></div>
       <!--GALLERY-->
       
       <section class="content-section gallery-content column-8 no-pad-left no-pad-right">
        <h3 class="content-headline">Past Projects</h3>

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
              <?php the_title(); ?>
            </a>
          </li>
          <?php endwhile; ?>
        </ul>
               			
       </section>
       <div class="clearfix"></div>
       
       <section class="section-content gallery-content column-8 no-pad-left no-pad-right">
       <h2>Partners</h2>
       <div class="row">
                <div class="image-row-container">
                    <div class="column-3 image-container"><a href="#"><img class="placeholder" src="<?php bloginfo('template_directory'); ?>/img/placeholder-square.jpg" alt="" /></a></div>
                    <div class="column-3 image-container"><a href="#"><img class="placeholder" src="<?php bloginfo('template_directory'); ?>/img/placeholder-square.jpg" alt="" /></a></div>
                </div>
                <div class="image-row-container">
                    <div class="column-3 image-container"><a href="#"><img class="placeholder" src="<?php bloginfo('template_directory'); ?>/img/placeholder-square.jpg" alt="" /></a></div>
                    <div class="column-3 image-container"><a href="#"><img class="placeholder" src="<?php bloginfo('template_directory'); ?>/img/placeholder-square.jpg" alt="" /></a></div>
                </div>
            </div>
       
       </section>
       
    </div><!--GALLERY-CONTENT-->
    



<?php get_footer(); ?>