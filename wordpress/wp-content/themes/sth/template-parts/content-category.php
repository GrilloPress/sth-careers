<?php
/**
 * The template used for displaying page content in category.php feed
 *
 * @package sth
 */
?>
  
    <article id="post-<?php the_ID(); ?>" <?php post_class("card-staff"); ?>>
      <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-4">

          <?php if ( has_post_thumbnail() ) :?>

             <?php the_post_thumbnail('full', array('class' => 'full-width')); ?>

          <?php endif ;?>

        </div>
        <div class="col-md-8">
              <header class="entry-header">
                <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
              </header><!-- .entry-header -->

              <div class="entry-content">
                
                <p class="lead"><?php echo get_post_meta(get_the_ID(), 'job_title', true); ?></p>
                
                <?php the_excerpt(); ?>
                <?php
                  wp_link_pages( array(
                    'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'sth' ),
                    'after'  => '</div>',
                  ) );
                ?>
              </div><!-- .entry-content -->

              <footer class="entry-footer">
                <?php sth_entry_footer(); ?>
              </footer><!-- .entry-footer -->

        </div>
      </div>
    </article><!-- #post-## -->