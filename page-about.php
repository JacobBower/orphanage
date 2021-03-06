<?php
/*
Template Name: About
*/
get_header(); ?>

	<div class="content">
        <h1><?php the_title(); the_post(); ?></h1>
        <div class="row">
            <div class="sidebar column-4 no-pad-right">
                <?php get_sidebar('secondary'); ?>
            </div>
            <section class="content-section column-8 no-pad-left no-pad-right">
                <div class="border-bottom mission-statement">
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
						<div class="leader-wrap no-pad-left no-pad-right column-12">
	                        <div class="image-wrapper column-4 no-pad-left no-pad-right">
	                            <?php the_post_thumbnail('custom_size'); ?>
	                        </div>
	                        <div class="page-post-description column-8 no-pad-left no-pad-right">
	                            <h4><?php the_title(); ?></h4>
	                            <?php the_content(); ?>
	                        </div>
						</div>
                    <?php endwhile; ?>
                </div>
        	</section><!--ABOUT-LEADERSHIP-->

            <!-- PARTNERS -->
            <section class="content-section leadership gallery-content column-8 no-pad-left no-pad-right">
                <h3 class="content-headline">Our Partners</h3>
                <ul>
                    <?php
                        $args = array(
                        'post_type' => 'partner',
                        'posts_per_page' => -1,
                        'orderby' => 'date',
                        'order' => 'DESC'
                        );
                        $loop = new WP_Query( $args );
                        while ( $loop->have_posts() ) : $loop->the_post(); ?>
                        <?php $url = get_field('partner_url'); ?>
                        <li>
                            <a href="<?php the_field('partner_url'); ?>" target="_blank">
                                <?php the_post_thumbnail('custom_size'); ?>
                                <p><?php the_title(); ?></p>
                            </a>
                        </li>
                    <?php endwhile; ?>
                </ul>
            </section><!--PARTNERS-->
        </div>
     </div><!-- ABOUT-CONTENT -->

<?php get_footer(); ?>
