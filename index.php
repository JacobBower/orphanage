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

	<div id="content">
	<!-- START CONTENT -->
		<?php if (have_posts()) : ?>
		    <?php while (have_posts()) : the_post(); ?>
		    	<div class="post-box">
			    	<h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
			        <p class="postmetadata">
			            <span class="date">Posted on <?php the_time('F jS, Y') ?></span> in 
			            <span class="cat"><?php the_category(', ') ?></span>
			            <span class="author"><?php _e('By');?> <?php the_author_posts_link(); ?></span>
			         	<span class="comments">with <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></span>
			        </p>
			        <?php the_content('More &raquo;'); ?>
			     	<?php edit_post_link('Edit this entry.', '<p><small>', '</small></p>'); ?>
		        </div>
		    <?php endwhile; ?>

				<nav class="post-nav">
		            <p class="alignleft"><?php next_posts_link('&laquo; Older Posts') ?></p>
		            <p class="alignright"><?php previous_posts_link('Newer Posts &raquo;') ?></p>
				</nav>

		<?php endif; ?>
		<!-- END CONTENT -->
	</div> <!-- CONTENT -->

<?php get_footer(); ?>



















	</div> <!-- CONTENT -->