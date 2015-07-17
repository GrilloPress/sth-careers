<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>

		
			<div id="content" class="clearfix row">
			
				<div id="main" class="col-sm-12 col-xs-12 clearfix" role="main">  
          
          <?php
           global $post;
           $args = array('posts_per_page' => -1);
           $myposts = get_posts($args);
           foreach($myposts as $post) :
           ?>
          
          <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
              <section class="post_content clearfix">
                <h2 class="post-header"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                <p class="meta"><?php _e("Posted", "wpbootstrap"); ?> <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php echo get_the_date('F jS, Y', '','', FALSE); ?></time></p>
                <?php the_content(); ?>
              </section>

          </article>
          <hr>
          
         <?php endforeach; ?>
			
				</div> <!-- end #main -->
    
				<?php // get_sidebar(); // sidebar 1 ?>
    
			</div> <!-- end #content -->


<?php get_footer(); ?>