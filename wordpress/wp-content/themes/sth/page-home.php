<?php
/*
 * 
 * Homepage for the STH Careers website
 * 
 * Template Name: Homepage
 * @package sth
 */
?>

<?php get_header(); ?>

	 <div id="primary" class="container">
      <main id="main" role="main">
        <?php get_template_part( 'partials/content', 'slider' ); ?>
        
        <div class="home-intro">
             <div class="row">
              <div class="col-md-5">
                <h2 class="well-heading">Join the Team!</h2>
                <div class="well">
                  <p>The affix plugin toggles between three classes, each representing a particular state: .affix, .affix-top, and .affix-bottom. You must provide the styles, with the exception of position: fixed; on .affix, for these classes yourself (independent of this plugin) to handle the actual positions.</p>
                  <p><strong>Sir Andrew Cash, OBE</strong></p>
                  <div class="text-center">
                     <a href="<?php echo get_home_url() . "/current-vacancies/" ;?>" class="btn btn-primary">Current Vacancies</a>
                  </div>
                </div>
              </div>

              <div class="col-md-7">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/gg-8c9MBrjo?rel=0&amp;controls=0" frameborder="0" allowfullscreen></iframe>
                <a href="#" class="btn btn-block btn-primary btn-lg">Something something something</a>
               </div>
            </div>
          </div>

          <div class="home-boxes">
            <div class="row">
              <div class="col-md-4 col-sm-4">
                <div class="home-boxes-unit">
                  <a href="<?php echo get_home_url() . "/current-vacancies/" ;?>">
                    <img alt="" src="<?php echo get_template_directory_uri() . "/images/nurses-with-computers.jpg" ; ?>" width="100%">
                    <div class="well">
                      <p class="lead">Current Vacancies</p>
                    </div>
                  </a>
                </div>
              </div>
              
              <div class="col-md-4 col-sm-4">
                <div class="home-boxes-unit">
                  <a href="<?php echo get_home_url() . "/nursing-midwifery/nursing-at-sheffield-teaching-hospitals/" ;?>">
                    <img alt="" src="<?php echo get_template_directory_uri() . "/images/box_images_nurses.jpg" ; ?>" width="100%">
                    <div class="well">
                      <p class="lead">Nursing at Sheffield</p>
                    </div>
                  </a>
                </div>
              </div>
              
              <div class="col-md-4 col-sm-4">
                <div class="home-boxes-unit">
                  <a href="<?php echo get_home_url() . "/current-vacancies/" ;?>">
                    <img alt="" src="<?php echo get_template_directory_uri() . "/images/hilary.jpg" ; ?>" width="100%">
                    <div class="well">
                      <p class="lead">Meet our Staff</p>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
          
          <div class="row">
            
            <div class="col-md-6 col-sm-6">
              <?php
               global $post;
               $args = array('posts_per_page' => 5);
               $myposts = get_posts($args);
               foreach($myposts as $post) :
               ?>

              <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
                  <section class="post_content clearfix">
                    <h3 class="post-header"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
                    <p class="meta"><time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php echo get_the_date('F jS, Y', '','', FALSE); ?></time> - News &amp; Events </p>
                    <?php the_content(); ?>
                  </section>

              </article>
              <hr>

             <?php endforeach; ?>
            </div>
            
            <div class="col-md-6 col-sm-6">
              <?php
               global $post;
               $args = array('posts_per_page' => 5);
               $myposts = get_posts($args);
               foreach($myposts as $post) :
               ?>

              <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
                  <section class="post_content clearfix">
                    <h3 class="post-header"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
                    <p class="meta"><?php _e("Posted", "wpbootstrap"); ?> <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php echo get_the_date('F jS, Y', '','', FALSE); ?></time></p>
                    <?php the_content(); ?>
                  </section>

              </article>
              <hr>

             <?php endforeach; ?>
            </div>
          </div>
        
        
			<?php // while ( have_posts() ) : the_post(); ?>

				<?php // get_template_part( 'template-parts/content', 'page' ); ?>

			<?php // endwhile; // End of the loop. ?>

		  </main><!-- #main -->
      
	  </div><!-- #primary -->

<?php get_footer(); ?>