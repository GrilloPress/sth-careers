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
        
        <section class="home-intro">
          <div class="row">
            <div class="col-md-12">
              <div class="well card">
                <h2>Find a new career</h2>
                <h3>Here at Sheffield Teaching Hospitals something something bringing innovative stuff with classic other promises</h3>
                <div class="row">
                  <div class="col-md-4 col-sm-4 col-xs-6">
                    <img src="<?php echo get_template_directory_uri() . "/images/andrew_cash_web_small.jpg" ;?>" class="img-responsive">
                  </div>

                  <div class="col-md-8">
                    <p class="lead">The eight Clinical Commissioning Groups (CCGs) in South Yorkshire and North Derbyshire, along with NHS England (South Yorkshire and Bassetlaw) and Mid Yorkshire CCGs have formed a similar partnership called 'Working Together'.
                   </p>

                  <a role="button" href="#" class="btn btn-warning">Further information</a>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

          <section class="home-boxes">
            <div class="row">
              <div class="col-md-4 col-sm-4">
                <div class="home-boxes-unit">
                  <a href="<?php echo get_home_url() . "/current-vacancies/" ;?>">
                    <img alt="" src="<?php echo get_template_directory_uri() . "/images/nurses-with-computers.jpg" ;?>" width="100%">
                    <div class="well">
                      <p class="lead">Current Vacancies</p>
                      <p class="text">Healthcare Scientist, Nurse or Search our latest vacancies and find your next career move at Sheffield Teaching Hospitals</p>
                      <div class="btn btn-warning">Find out more</div>
                    </div>
                  </a>
                </div>
              </div>
              
              <div class="col-md-4 col-sm-4">
                <div class="home-boxes-unit">
                  <a href="<?php echo get_home_url() . "/nursing-midwifery/" ;?>">
                    <img alt="" src="<?php echo get_template_directory_uri() . "/images/box_images_nurses.jpg" ;?>" width="100%">
                    <div class="well">
                      <p class="lead">Nursing at Sheffield</p>
                      <p class="text">With over nine of our Chief Nurses having started their careers with us, find out what makes Sheffield Teaching Hospitals a great place for Nursing and Midwifery</p>
                      <div class="btn btn-warning">Find out more</div>
                    </div>
                  </a>
                </div>
              </div>
              
              <div class="col-md-4 col-sm-4">
                <div class="home-boxes-unit">
                  <a href="#">
                    <img alt="" src="<?php echo get_template_directory_uri() . "/images/hilary.jpg" ;?>" width="100%">
                    <div class="well">
                      <p class="lead">Meet our Staff</p>
                      <p class="text">Find out more about your future colleagues and why they love to work in Sheffield and are "Proud" to make a difference in the NHS.</p>
                      <div class="btn btn-warning">Find out more</div>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </section>
        
        <section id="our-values">
           <div class="row">
            <div class="col-md-12">
              <div class="well card">
                <h2>Our Values</h2>
                <h3>Here at Sheffield Teaching Hospitals something something bringing innovative stuff with classic other promises</h3>
                <div class="row">
                  <div class="col-md-4 col-sm-4">
                    <iframe width="100%" height="250" src="https://www.youtube.com/embed/gg-8c9MBrjo?rel=0&amp;controls=0" frameborder="0" allowfullscreen></iframe>
                  </div>

                  <div class="col-md-8">
                    <p class="lead">The eight Clinical Commissioning Groups (CCGs) in South Yorkshire and North Derbyshire, along with NHS England (South Yorkshire and Bassetlaw) and Mid Yorkshire CCGs have formed a similar partnership called 'Working Together'.
                   </p>

                  <a role="button" href="#" class="btn btn-warning">Further information</a>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
          
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