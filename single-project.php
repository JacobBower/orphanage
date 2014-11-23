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
            <span class="date">Posted on <?php the_time('F jS, Y') ?></span> in
            <span class="cat"><?php the_category(', ') ?></span>
            <span class="author"><?php _e('By');?> <?php the_author_posts_link(); ?></span>
        </p>
            <!-- <h5><em>Posted October 23, 2014 by Weird Al under <a href="#">Tag</a> <a href="#">Tag</a> <a href="#">Tag</a>
            </em></h5> -->
                <?php the_post_thumbnail(); ?>
                <?php the_content('More &raquo;'); ?>
                <nav class="post-nav">
                    <div class="alignleft">
                        <?php previous_post_link(); ?>
                    </div>
                    <div class="alignright">
                        <?php next_post_link(); ?>
                    </div>
                </nav>

                <div class="clearfix"></div>

                <?php edit_post_link('Edit this entry.', '<p><small>', '</small></p>'); ?>
                <?php comments_template(); ?>
                <?php endwhile; else: ?>
                <p>Sorry, no posts matched your criteria.</p>
                <?php endif; ?>
            <!-- END CONTENT -->

        </div>
    </div>

<?php get_footer(); ?>
