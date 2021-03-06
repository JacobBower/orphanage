<?php get_header(); ?>
	
	<div class="content row">
    
 	    <h1><?php the_title(); ?></h1>

        <div class="sidebar column-4 no-pad-right">
            <?php get_sidebar('secondary'); ?>
        </div>

        <!-- START CONTENT -->
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <div class="post-wrapper column-8 no-pad-left">
            <p class="postmetadata">
                <span class="date">Posted on <?php the_time('F jS, Y') ?></span> &bull; 
                <span class="author"><?php _e('By');?> <?php the_author_posts_link(); ?></span>
            </p>
            <div class="clearfix"></div>
                <?php the_content(); ?>
                       <nav class="post-nav">
                           <div class="alignleft">
                            <?php previous_post_link( '%link', '&#x276e; Previous', TRUE ); ?>
                       </div> 
                       <div class="alignright">
                            <?php next_post_link( '%link', 'Next &#x276f;', TRUE ); ?>
                       </div>
                       </nav>
                
                <?php endwhile; else: ?>
                
                 <p>Sorry, no posts matched your criteria.</p>

                <?php endif; ?>
            <!-- END CONTENT -->
        </div>
    </div>   

<?php get_footer(); ?>