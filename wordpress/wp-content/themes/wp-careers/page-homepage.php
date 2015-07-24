<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>

		
			<div id="content" class="clearfix row">
			
				<div id="main" class="col-sm-12 col-xs-12 clearfix" role="main">
          
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
              </div>
            </div>
          </div>
          
          <a href="#" class="btn btn-block btn-primary btn-lg">Something something something</a>

          <div class="home-boxes">
            <div class="row">
              <div class="col-md-4 col-sm-4">
                <div class="home-boxes-unit">
                  <a href="<?php echo get_home_url() . "/current-vacancies/" ;?>">
                    <img src="http://placehold.it/350x250" width="100%">
                    <div class="well">
                      <p class="lead">Current Vacancies</p>
                    </div>
                  </a>
                </div>
              </div>
              
              <div class="col-md-4 col-sm-4">
                <div class="home-boxes-unit">
                  <a href="<?php echo get_home_url() . "/current-vacancies/" ;?>">
                    <img src="http://placehold.it/350x250" width="100%">
                    <div class="well">
                      <p class="lead">News &amp; Events</p>
                    </div>
                  </a>
                </div>
              </div>
              
              <div class="col-md-4 col-sm-4">
                <div class="home-boxes-unit">
                  <a href="<?php echo get_home_url() . "/current-vacancies/" ;?>">
                    <img src="http://placehold.it/350x250" width="100%">
                    <div class="well">
                      <p class="lead">Meet our Staff</p>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
          
          <div class="social-media">
            <div class="row">
              <div class="col-sm-12">
                <ul class="list-inline">
                  <li>Twitter</li>
                  <li>Facebook</li>
                  <li>LinkedIn</li>
                </ul>
              </div>
            </div>
          </div>
          
          
          
          
          
          
          
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