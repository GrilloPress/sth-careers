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
           <div class="media">
            <div class="media-body">
              <section class="post_content clearfix">
                <h2 class="post-header"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                <p class="meta"><?php _e("Posted", "wpbootstrap"); ?> <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php echo get_the_date('F jS, Y', '','', FALSE); ?></time></p>
                <p class="lead"><?php the_field('sth_summary'); ?></p>
                <?php the_content(); ?>
              </section>
            </div>
            <div class="media-right">
              <header>
              <a href="#">
                <?php if(get_field('sth_youtube')) :?>
                  <iframe width="330" height="250" src="https://www.youtube.com/embed/<?php the_field('sth_youtube');?>?rel=0&amp;controls=0" frameborder="0" allowfullscreen></iframe>
                <?php endif; ?>
                
                <?php the_post_thumbnail( 'wpbs-featured' ); ?>
                
              </a>
              </header>
            </div>
          </div>
          </article>
          <hr>
          
         <?php endforeach; ?>
			
				</div> <!-- end #main -->
    
				<?php // get_sidebar(); // sidebar 1 ?>
    
			</div> <!-- end #content -->


<?php get_footer(); ?>