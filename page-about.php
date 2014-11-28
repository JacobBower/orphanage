<?php 
/*
Template Name: About
*/
get_header(); ?>
	
	<div class="content">
    
        <h1><?php the_title(); ?></h1>
        <div class="row">

        <div class="sidebar column-4 no-pad-right">
            <?php get_sidebar('secondary'); ?>
        </div>
       
        <section class="content-section column-8 no-pad-left no-pad-right">
            <div class="border-bottom">
                <?php the_content(); ?>
            </div>
        </section>
		<section class="content-section column-8 no-pad-left">
      		<h3>Our Leadership</h3>
            <div class="section-description border-bottom row">

                <?php
                    $args = array(
                        'post_type' => 'leadership',
                        'posts_per_page' => -1,
                        'orderby' => 'date',
                        'order' => 'ASC'
                    );
                    $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <div class="image-wrapper column-4 no-pad-left">
                        <?php the_post_thumbnail('custom_size'); ?>
                    </div>
                    <div class="page-post-description column-8 no-pad-right">
                        <h4><?php the_title(); ?></h4>
                        <?php the_content(); ?>
                    </div>

                <?php endwhile; ?>

            </div>

                	
    	</section><!--ABOUT-LEADERSHIP-->
		
        <section class="content-section column-8 no-pad-left">
        	<h3 class="pad-bottom">Our Partners</h3>
            	<div class="partners row">
                    <h4>Title</h4>
                    	<div class="partner-logo column-4">Logo</div>
                        <div class="partner-description column-8 no-pad-right">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <a href="" class="button-small">Button</a>
                        </div>
                </div><!--PARTNERS-->
                <br />
            	<div class="partners row">
                	<h4>Title</h4>
                    	<div class="partner-logo column-4">Logo</div>
                        <div class="partner-description column-8 no-pad-right">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <a href="" class="button-small">Button</a>
                        </div>
                </div><!--PARTNERS-->
        
        </section><!--ABOUT-PARTNERS-->
        </div>
     </div><!-- ABOUT-CONTENT -->

<?php get_footer(); ?>