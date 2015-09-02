<?php
/**
 * The template for displaying meet the staff category pages
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
    <main id="main" class="col-md-12" role="main">
      
      <?php if ( have_posts() ) : ?>
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>


                      
                      <section class="col-sm-4 col-md-4">
                        <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
                        <?php if ( has_post_thumbnail()) : ?>
                         <?php the_post_thumbnail('full', array('class' => 'full-width')); ?>
                        <?php else : ?>
                          
                        <?php endif; ?>
                        <div class="well well-staff">
                          <h3><?php the_title() ?></h3>
                          <p class="lead"><?php echo get_post_meta(get_the_ID(), 'job_title', true); ?></p>
                        </div>
                       </a>
                      </section>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php endif; ?>
      
    </main>
  </div>
  
  <?php // Get all of the services
                $args = array(
                  'post_type' => 'services',
                  'orderby'   => 'title',
		              'order'     => 'ASC',
                  'posts_per_page' => -1
                );
                $i = 0;
                echo '<div class="row">';
                $services = new WP_Query( $args );
                if( $services->have_posts() ){
                  while( $services->have_posts() ) {
                    $services->the_post();
                    ?>

                      <?php  if($i % 4 == 0) {echo '</div><div class="row">';} ?>
                      
                      <section class="col-sm-6 col-md-3">
                        <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
                        <?php if ( has_post_thumbnail()) : ?>
                         <?php the_post_thumbnail('full', array('class' => 'img-responsive hidden-xs')); ?>
                        <?php else : ?>
                          <img src="<?php echo content_url('/themes/wp-mimp/images/had.jpg'); ?>" width="100%" class="img-responsive hidden-xs">
                        <?php endif; ?>
                        <div class="well well-preview">
                          <h3><?php the_title() ?></h3>
                          <p>Service</p>
                        </div>
                       </a>
                      </section>
            
                    <?php $i++; ?>

                    <?php
                  }
                }
              ?>
  
</div>

<?php get_footer(); ?>