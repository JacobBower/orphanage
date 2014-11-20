<?php get_header(); ?>

	<div class="content row">
    
    <h1>Recent Posts</h1>
    <br />
    
        <div class="sidebar column-4 no-pad-right">
                <?php get_sidebar('secondary'); ?>
        </div>
        
	<!-- START CONTENT -->	
		<?php if (have_posts()) : ?>
		    <?php while (have_posts()) : the_post(); ?>
            
		    	<div class="post-box">
			    	<h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
			        <p class="postmetadata">
			            <span class="date">Posted on <?php the_time('F jS, Y') ?></span> &bull; 
			            <span class="author"><?php _e('By');?> <?php the_author_posts_link(); ?></span>
			        </p>
                    
		        </div>
		    <?php endwhile; ?>

		<?php endif; ?>
		<!-- END CONTENT -->
	</div> <!-- CONTENT -->

<?php get_footer(); ?>



















	</div> <!-- CONTENT -->