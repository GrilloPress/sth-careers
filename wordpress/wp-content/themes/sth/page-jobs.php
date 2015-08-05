<?php
/*
 * 
 * Central list of jobs for the STH Careers website
 * 
 * Template Name: All Jobs
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

			<?php while ( have_posts() ) : the_post(); ?>
        
        <div id="jobs">
          hi
        </div>
        
        <div id="results">
          <iframe frameborder="0" allowfullscreen="" width="100%" height="8500" src="http://www.jobs.nhs.uk/extsearch?client_id=121486&resonly=1&max_result=100">
          </iframe>
        </div>
        
          
			<?php endwhile; // End of the loop. ?>

		  </main><!-- #main -->
      
	  </div><!-- #primary -->
  </div>

<?php get_footer(); ?>