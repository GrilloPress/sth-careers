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
    <div class="col-md-12">
      <header>
        <h1 class="feature-heading">Meet our Staff</h1>
        <p class="feature-lead">Find out more about our amazing staff and why they are proud to work at Sheffield Teaching Hospitals</p>
      </header>
    </div>
  </div>
  
  <div class="row">
    <main id="main" class="col-md-12" role="main">
      
      <?php if ( have_posts() ) : ?>
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
      
      <section class="col-sm-4 col-md-4 fade-in" style="display: none;">
        <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
          
          <?php if ( has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('full', array('class' => 'full-width')); ?>
          <?php else : ?>
            <?php // we need an alternative image here ?>
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
</div>

<script>

  // fade in divs
  var fadein = jQuery('section.fade-in');
  jQuery.each(fadein, function(i, item) {
    setTimeout(function() {
      jQuery(item).fadeIn(1000); // duration of fadein
    }, 1000 * i); // duration between fadeins
  });

</script>

<?php get_footer(); ?>