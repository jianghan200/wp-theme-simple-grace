<?php get_header(); ?>	



 		<div id="site_content">
      
            <?php get_sidebar();?>


            <div id="content">

          			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          				<?php the_content(); ?>

          			<?php endwhile; else: ?>
          				<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
          			<?php endif; ?>

            </div>

 		</div>


<?php get_footer();?>