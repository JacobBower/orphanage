<?php 
/*
Template Name: Fundraising
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
                    'post_type' => 'fundraising',
                    'posts_per_page' => -1,
                    'orderby' => 'date',
                    'order' => 'ASC');
                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <li class="row">
                        <a href="<?php the_permalink(); ?>">
                            <div class="image-wrapper column-4 no-pad-left">
                                <?php the_post_thumbnail('custom_size'); ?>
                            </div>
                            <div class="column-8 no-pad-right">
                                <?php the_title(); ?>
                                <?php the_excerpt(); ?>
                                <a href="<?php the_permalink(); ?>" class="button-small">More</a>
                            </div>
                        </a>
                    </li>
                <?php endwhile; ?>
            </ul>    
        </section>
		
        </div>
     </div><!-- FUNDRAISING CONTENT -->

<?php get_footer(); ?>