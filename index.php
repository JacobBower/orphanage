<?php
/*
* Orphanage Theme
* Main template file.
*
* This is the most generic template file in a WordPress theme
* and one of the two required files for a theme (the other being style.css).
* It is used to display a page when nothing more specific matches a query.
*/

get_header(); ?>

	
	<div class="content row">
	<h1>Blog</h1>
		<div class="sidebar column-4 no-pad-right">
		    <?php get_sidebar('secondary'); ?>
		</div>

		<section class="content-section column-8">
			<!-- START CONTENT -->

			<?php if (have_posts()) : ?>
			    <?php while (have_posts()) : the_post(); ?>
			    	<div class="post-box">
				    	<h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h3>
				        <p class="postmetadata">
				            <span class="date">Posted on <?php the_time('F jS, Y') ?></span> &bull; 
				            <span class="author"><?php _e('By');?> <?php the_author_posts_link(); ?></span>
                            <span class="tag"><?php wp_tag_cloud(); ?></span>
                            <p><?php echo excerpt(55); ?></p>
				        </p>
                        
			        </div>
			    <?php endwhile; ?>
                
				<div class="post-nav">
					<div class="alignright"><?php previous_posts_link( 'Next Posts &raquo;' ); ?></div>
					<div class="alignleft"><?php next_posts_link( '&laquo; Previous Posts', '' ); ?></div>
				</div>
                    
			<?php endif; ?>
		</section>
	</div> <!-- CONTENT -->

<?php get_footer(); ?>
