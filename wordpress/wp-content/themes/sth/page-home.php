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
        
        <?php // get_template_part( 'partials/content', 'slider' ); ?>
        
        <div class="jumbotron" style="background-image:url('<?php echo get_template_directory_uri() . "/images/large_montage_dark.jpg" ;?>');">
          <h1>Join the Team</h1>
          <p>This is a second line!</p>
          <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a> 
          <a class="btn btn-secondary btn-lg" href="#" role="button">Meet our Staff</a>
        </div>
        
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
                  <a href="<?php echo get_home_url() . "/current-vacancies/" ;?>" title="Find the latest vacancies at Sheffield Teaching Hospitals">
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
                  <a href="<?php echo get_home_url() . "/nursing-midwifery/" ;?>" title="Find out what makes Sheffield Teaching Hospitals a great place for your career as a Nurse or Midwife">
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
                  <a href="<?php echo get_home_url() . "/category/meet-the-staff/" ;?>" title="Meet our Staff and hear why they love working at Sheffield Teaching Hospitals">
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
                <p>With over 90% of our Band 7 Nurses hired from internal candidates you are assured that we reward skill, passion and excellence</p>
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
            
            <div class="col-md-12">
              <h2></h2>
            </div>

            <div class="col-md-6 col-sm-6">
              
                <?php
               global $post;
               $args = array('posts_per_page' => 4,
                             'category_name' => 'meet-the-staff');
               $myposts = get_posts($args);
               foreach($myposts as $post) :
               ?>
              <div class="card-staff staff-profile-card">
                <div class="row">
                  <div class="col-md-4">
                    <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
                      <?php if ( has_post_thumbnail() ) :?>
                        <?php the_post_thumbnail('category_thumb'); ?>
                      <?php endif ;?>
                    </a>
                  </div>
                
                  <div class="col-md-8">
                    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
                      <section class="post_content clearfix">
                        
                        <h4 class="post-header"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
                        <p class="lead"><?php echo get_post_meta(get_the_ID(), 'job_title', true); ?></p>
                      </section>
                    </article>
                  </div>
                </div>
              </div>
              

             <?php endforeach; ?>
              
              <a role="button" class="btn btn-link btn-block" href="<?php echo get_home_url() . "/category/meet-the-staff/" ;?>" title="Meet our Staff and hear why they love working at Sheffield Teaching Hospitals">Meet more of our staff</a>
             
            </div>
            
            <div class="col-md-6 col-sm-6">
              <a class="twitter-timeline" href="https://twitter.com/SheffieldHosp" data-widget-id="638713957470072834">Tweets by @SheffieldHosp</a>
              <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
            </div>
            
          </div>
        
        
			<?php // while ( have_posts() ) : the_post(); ?>

				<?php // get_template_part( 'template-parts/content', 'page' ); ?>

			<?php // endwhile; // End of the loop. ?>

		  </main><!-- #main -->
      
	  </div><!-- #primary -->

<?php get_footer(); ?>