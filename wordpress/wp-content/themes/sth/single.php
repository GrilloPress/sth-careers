<?php
/**
 * The template for displaying all single posts.
 *
 * @package sth
 */

get_header(); ?>

	<div id="primary" class="container">
    
     <div class="row">
      <div class="col-md-8">
        <?php sth_breadcrumbs(); ?>
      </div>

    
    <div class="row">
      <main id="main" class="col-md-8" role="main">

        <?php while ( have_posts() ) : the_post(); ?>

          <?php get_template_part( 'template-parts/content', 'single' ); ?>
          <?php get_template_part( 'partials/post', 'navigation' ); ?>

        <?php endwhile; // End of the loop. ?>

        </main>
      
      <aside class="col-md-4">
        <?php get_template_part( 'partials/content', 'sidebox' ); ?>
        <?php get_sidebar(); ?>
      </aside>
    </div>
	</div><!-- #primary-->

<?php get_footer(); ?>