<?php
get_header(); ?>

	
	<div class="content row">
	<h1>Search Results:</h1>
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
				            <span class="author"><?php _e('By');?> <?php the_author_posts_link(); ?></span> &bull;
                            <span class="cat"><?php the_category(', ') ?></span>
				        </p>
                            <p><?php echo excerpt(55); ?></p>
                            <a href="<?php the_permalink(); ?>" class="button-small alignright">View Post</a>
                        	<div class="clearfix"></div>
			        </div>
			    <?php endwhile; ?>
                
						<nav class="post-nav">
                            <div class="alignleft">
                            	<?php previous_post_link( '%link', '&#x276e; Previous', TRUE ); ?>
                       		</div> 
                       		<div class="alignright">
                            	<?php next_post_link( '%link', 'Next &#x276f;', TRUE ); ?>
                       		</div>
                       </nav>
                    
			<?php endif; ?>
		</section>
	</div> <!-- CONTENT -->

<?php get_footer(); ?>
