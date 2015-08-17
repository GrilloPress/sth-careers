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
        <aside role="complementary" id="radio-controls">
          <form id="nhs-staff-groups">
            <div class="radio">
              <label>
                <input id="admin-clerical" name="nhs-staff-groups" type="radio" value="administrative-clerical">
                Administrative &amp; Clerical
              </label>
            </div>

            <div class="radio">
              <label>
                <input id="allied-health" name="nhs-staff-groups" type="radio" value="allied-health">
                Allied Health Professionals
              </label>
            </div>

            <div class="radio">
              <label>
                <input id="additional-clinical" name="nhs-staff-groups" type="radio" value="additional-clinical">
                Additional Clinical Services
              </label>
            </div>

            <div class="radio">
              <label>
                <input id="additional-professional" name="nhs-staff-groups" type="radio" value="additional-professional">
                Additional Professional Scientific &amp; Technical
              </label>
            </div>

            <div class="radio">
              <label>
                <input id="estates-ancillary" name="nhs-staff-groups" type="radio" value="estates-ancillary">
                Estates &amp; Ancillary
              </label>
            </div>

            <div class="radio">
              <label>
                <input id="healthcare-scientists" name="nhs-staff-groups" type="radio" value="healthcare-scientists">
                Healthcare Scientists
              </label>
            </div>

            <div class="radio">
              <label>
                <input id="medical-dental" name="nhs-staff-groups" type="radio" value="medical-dental">
                Medical &amp; Dental
              </label>
            </div>

            <div class="radio">
              <label>
                <input id="nursing-midwifery" name="nhs-staff-groups" type="radio" value="nursing-midwifery">
                Nursing &amp; Midwifery
              </label>
            </div>

            <div class="radio">
              <label>
                <input id="students" name="nhs-staff-groups" type="radio" value="students">
                Students
              </label>
            </div>
          </form>
        </aside>
        
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
          
          // Watch the radio buttons
          // If a button is checked
          // Hide all the job feed
          // Apart from the ones that correspond
          // to the checked button
          jQuery('form#nhs-staff-groups').change(function(){

            jQuery(".vacancy:visible").hide();
            
            var inputValue = jQuery("#nhs-staff-groups input[type='radio']:checked").val();
            var classSearch = "." + inputValue;
            
            jQuery('div#results').find(classSearch).show();
            
            jobCount = jQuery('.vacancy:visible').length;
            jQuery( "span.job-count" ).text( jobCount );

            
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
              
              jQuery(document).ready(function() {
   
                 // This is horrendous. Make a function. Then call it.
                 jQuery('div#results').find(".vacancy.well:contains('Administrative & Clerical')").addClass("administrative-clerical");
                 jQuery('div#results').find(".vacancy.well:contains('Allied Health Professionals')").addClass("allied-health");
                 jQuery('div#results').find(".vacancy.well:contains('Additional Clinical Services')").addClass("additional-clinical");
                 jQuery('div#results').find(".vacancy.well:contains('Additional Professional Scientific & Technical')").addClass("additional-professional");
                 jQuery('div#results').find(".vacancy.well:contains('Estates & Ancillary')").addClass("estates-ancillary");
                 jQuery('div#results').find(".vacancy.well:contains('Healthcare Scientists')").addClass("healthcare-scientists");
                 jQuery('div#results').find(".vacancy.well:contains('Medical & Dental')").addClass("medical-dental");
                 jQuery('div#results').find(".vacancy.well:contains('Nursing & Midwifery')").addClass("nursing-midwifery");
                 jQuery('div#results').find(".vacancy.well:contains('Students')").addClass("students");

              });

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