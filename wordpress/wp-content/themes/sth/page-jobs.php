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
      
            <div class="col-md-3">
        
        <form id="nhs-staff-groups">
          <div class="checkbox">
            <label>
              <input id="admin-clerical" type="checkbox" value="" checked>
              Administrative &amp; Clerical
            </label>
          </div>

          <div class="checkbox">
            <label>
              <input id="allied-health" type="checkbox" value="" checked>
              Allied Health Professionals
            </label>
          </div>

          <div class="checkbox">
            <label>
              <input id="additional-clinical" type="checkbox" value="" checked>
              Additional Clinical Services
            </label>
          </div>

          <div class="checkbox">
            <label>
              <input id="additional-professional" type="checkbox" value="" checked>
              Additional Professional Scientific &amp; Technical
            </label>
          </div>

          <div class="checkbox">
            <label>
              <input id="estates-ancillary" type="checkbox" value="" checked>
              Estates &amp; Ancillary
            </label>
          </div>

          <div class="checkbox">
            <label>
              <input id="healthcare-scientists" type="checkbox" value="" checked>
              Healthcare Scientists
            </label>
          </div>

          <div class="checkbox">
            <label>
              <input id="medical-dental" type="checkbox" value="" checked>
              Medical &amp; Dental
            </label>
          </div>

          <div class="checkbox">
            <label>
              <input id="nursing-midwifery" type="checkbox" value="" checked>
              Nursing &amp; Midwifery
            </label>
          </div>

          <div class="checkbox">
            <label>
              <input id="students" type="checkbox" value="" checked>
              Students
            </label>
          </div>

        </form>
        
        
        
        <div class="well">
          
        </div>
      </div>
      
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
        
          
			<?php endwhile; // End of the loop. ?>

		  </main><!-- #main -->
      

      
	  </div><!-- #primary -->
  </div>

<?php get_footer(); ?>