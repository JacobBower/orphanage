<?php 
/*
Template Name: Events
*/
get_header(); ?>
	
	<div class="content">
    
        <h1><?php the_title(); ?></h1>
        <div class="row">

        <div class="sidebar column-4 no-pad-right">
            <?php get_sidebar('secondary'); ?>
        </div>
       
        <section class="content-section column-8 no-pad-left no-pad-right">

            <?php the_content(); ?>

            <ul>
            <?php
                $args = array(
                    'post_type' => 'event',
                    'posts_per_page' => -1,
                    'orderby' => 'date',
                    'order' => 'DESC');
                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <li class="row">
                        <a href="<?php the_permalink(); ?>">
                            <div class="image-wrapper column-4 no-pad-left">
                                <?php the_post_thumbnail('custom_size'); ?>
                            </div>
                        </a>
                        <div class="column-8 no-pad-right">
                            <?php the_title(); ?>
                            <p><?php echo excerpt(35); ?></p>
                            <a href="<?php the_permalink(); ?>" class="button-small">More</a>
                        </div>
                    </li>
                <?php endwhile; ?>
            </ul>    
        </section>
		
        </div>
     </div><!-- EVENTS CONTENT -->

<?php get_footer(); ?>