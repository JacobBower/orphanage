<?php get_header(); ?>

	<div class="content row">
    
	<h1><?php single_month_title(' '); ?></h1>
    
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
				        </p>
                            <p><?php echo excerpt(55); ?></p>
                            <a href="<?php the_permalink(); ?>" class="button-small alignright">View Post</a>
                        	<div class="clearfix"></div>
			        </div>
			    <?php endwhile; ?>
                
				<nav class="post-nav">
					<?php posts_nav_link(' || ','Newer Posts','Older Posts'); ?>
				</nav>
                
                <?php else :

					if ( is_category() ) { // If this is a category archive
						printf("<h2 class='center'>Sorry, but there aren't any posts in the %s category yet.</h2>", single_cat_title('',false));
					} else if ( is_date() ) { // If this is a date archive
						echo("<h2>Sorry, but there aren't any posts with this date.</h2>");
					} else if ( is_author() ) { // If this is a category archive
						$userdata = get_userdatabylogin(get_query_var('author_name'));
						printf("<h2 class='center'>Sorry, but there aren't any posts by %s yet.</h2>", $userdata->display_name);
					} else {
						echo("<h2 class='center'>No posts found.</h2>");
					}

                    
				endif; ?>
		</section>
	</div> <!-- CONTENT -->

<?php get_footer(); ?>
