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
                  <div class="col-md-3 col-sm-3 col-xs-6">
                    <img src="<?php echo get_template_directory_uri() . "/images/andrew-cash-side.jpg" ;?>" class="img-responsive">
                  </div>

                  <div class="col-md-8">
                    
                    <p>"The eight Clinical Commissioning Groups (CCGs) in South Yorkshire and North Derbyshire, along with NHS England (South Yorkshire and Bassetlaw) and Mid Yorkshire CCGs have formed a similar partnership called Working Together"</p>
                    
                    <a role="button" href="<?php echo get_home_url() . "/current-vacancies/" ;?>" class="btn btn-long btn-warning">Current Vacancies</a>
                    <a role="button" href="<?php echo get_home_url() . "/why-work-here/" ;?>" class="btn btn-link">Find out how we work</a>
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
                      <h3>Current Vacancies</h3>
                      <p class="text">Healthcare Scientist, Nurse or looking for your first post? Search our latest vacancies</p>
                      <div class="btn btn-warning">Current Vacancies</div>
                    </div>
                  </a>
                </div>
              </div>
              
              <div class="col-md-4 col-sm-4">
                <div class="home-boxes-unit">
                  <a href="<?php echo get_home_url() . "/nursing-midwifery/" ;?>">
                    <img alt="" src="<?php echo get_template_directory_uri() . "/images/box_images_nurses.jpg" ;?>" width="100%">
                    <div class="well">
                      <h3>Nursing at Sheffield</h3>
                      <p class="text">Find out what makes Sheffield Teaching Hospitals a great place for your career as a Nurse or Midwife</p>
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
                      <h3>Meet our Staff</h3>
                      <p class="text">Find out more about your future colleagues and why they love to work in Sheffield</p>
                      <div class="btn btn-warning">Meet our Staff</div>
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
                  <div class="col-md-6 col-sm-6">
                    <iframe width="100%" height="280" src="https://www.youtube.com/embed/gg-8c9MBrjo?rel=0&amp;controls=0" frameborder="0" allowfullscreen></iframe>
                  </div>

                  <div class="col-md-5">
                    <p>The eight Clinical Commissioning Groups (CCGs) in South Yorkshire and North Derbyshire, along with NHS England (South Yorkshire and Bassetlaw) and Mid Yorkshire CCGs have formed a similar partnership called 'Working Together'.
                   </p>

                  <a role="button" href="#" class="btn btn-long btn-warning">Further information</a>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        
        <section id="top-benefits" >
          <div class="row">
            
            <div class="col-md-6">
              <div class="well card-benefit">
                <h3>Specialist Services</h3>
                <p>As one of the largest NHS Trusts in the Country we provide cutting-edge and specialist services found nowhere else in the country</p>
              </div>
            </div>
            
            
             <div class="col-md-6">
              <div class="well card-benefit">
                <h3>Multi-site Trust</h3>
                <p>With two major campuses, the Northern General and Central Campus, you are guarenteed to find variety and a great work location</p>
                </div>
              </div>
            
             <div class="col-md-6">
              <div class="well card-benefit">
                <h3>Training Opportunities</h3>
                <p>Being a Teaching Hospital we know the value of education and staff development. We offer advanced internal training and chances for top-up degrees</p>
              </div>
            </div>
            
             <div class="col-md-6">
              <div class="well card-benefit">
                <h3>Award Winning Trust</h3>
                <p>With numerous award winning developments across the Trust, we value and promote innovative thinking and offer great research opportunities</p>
              </div>
            </div>
            
             <div class="col-md-6">
              <div class="well card-benefit">
                <h3>Career Development</h3>
                <p>With over 90% of our Band 7 Nurses hired from intenral candidates you are assured that we reward skill, passion and excellence</p>
              </div>
            </div>
            
             <div class="col-md-6">
              <div class="well card-benefit">
                <h3>Staff Benefits</h3>
                <p>Our two dedicated Nurseries, staff events, groups and activites to discounts and vouchers make sure your work experience is highly rewarding </p>
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
                    <p class="meta"><?php _e("Posted", "wpbootstrap"); ?> <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php echo get_the_date('F jS, Y', '','', FALSE); ?></time> - Staff Profiles</p>
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