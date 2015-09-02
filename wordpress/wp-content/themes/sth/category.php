<?php
/**
 * The template for displaying category pages.
 *
 * 
 * @package sth
 */

get_header(); ?>

	<div id="primary" class="container">
    
    <div class="row">
      <div class="col-md-8">
        <?php sth_breadcrumbs(); ?>
      </div>
     </div>
    
    <div class="row">
      <main id="main" class="col-md-8" role="main">

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content', 'category' );
				?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
      
      <aside class="col-md-4">
        <?php get_template_part( 'partials/content', 'sidebox' ); ?>
        <?php get_sidebar(); ?>
      </aside>
      
    </div>
	</div><!-- #primary -->






<?php get_footer(); ?>