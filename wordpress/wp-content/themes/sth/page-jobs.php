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
      <main id="main" class="col-md-9" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
        
        <div id="controls">

        </div>
        
        <div id="results">
          <div class="row">
            <?php sth_job_feed(); ?>
            
          </div>
        </div>
        
          
			<?php endwhile; // End of the loop. ?>

		  </main><!-- #main -->
      
      <div class="col-md-3">
        <div class="well">
          
        </div>
      </div>
      
	  </div><!-- #primary -->
  </div>

<?php get_footer(); ?>