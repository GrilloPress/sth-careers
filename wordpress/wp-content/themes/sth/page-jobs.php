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
          <script>
            jQuery(document).ready(function() {
                jQuery("div#results").sieve({ itemSelector: "div.vacancy" });
              }); 
          </script>
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
          <script>
            
            jQuery(document).ready(function() {
              
              // disable enter in search field
              jQuery('input#sieve').keypress(function(e){
                  if ( e.which == 13 ) return false;
                  if ( e.which == 13 ) e.preventDefault();
                
              });
              
            });
            
            // job count function
            jQuery(document).ready(function() {
              
              onStart = true;
              
              if (onStart){
                
                // On page load this counts the available job posts and injects the count in the job count span
                initalCount = jQuery('.vacancy:visible').length;
                jQuery( "span.job-count" ).text( initalCount );
                onStart = false;
              }

              jQuery(document).on('change keyup keypress', 'input#sieve', function(e){
                
                // Handles any changes to the job search and recounts the visible job posts & injects the count in the job count span
                jobCount = jQuery('.vacancy:visible').length;
                jQuery( "span.job-count" ).text( jobCount );

              });
              
            });
            
          </script>
        </div>
      </div>
      
	  </div><!-- #primary -->
  </div>

<?php get_footer(); ?>