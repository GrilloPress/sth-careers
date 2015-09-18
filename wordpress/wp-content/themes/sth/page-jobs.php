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
      <div class="col-md-12">
        <?php sth_breadcrumbs(); ?>
      </div>
     </div>
     
    <div class="row">
      
      
      <main id="main" class="col-md-12" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
        
        <div id="controls">
          <script>
            jQuery(document).ready(function() {
                jQuery("div#results").sieve({ itemSelector: "div.vacancy:visible" });
              }); 
          </script>
        </div>
        
        <div id="master">
          <div class="row">
            
            <div class="col-md-3">
              <div class="row">
                <div id="job-form-controls">
                
                  <div class="col-md-12 col-sm-6 col-xs-12">
                    <div class="panel panel-primary">
                      <div class="panel-heading">
                        <h5 class="panel-title">
                          <a class="" role="button" data-toggle="collapse" href="#staffGroupsControls" aria-expanded="true" aria-controls="collapseExample">
                            Staff Groups <span class="caret"></span>
                          </a>
                        </h5>
                      </div>

                      <div class="panel-body collapse in" id="staffGroupsControls" aria-expanded="true">
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
                      </div>
                    </div>
                  </div>
                  
                  <div class="col-md-12 col-sm-6 col-xs-12">
                    <div class="panel panel-primary">
                      <div class="panel-heading">
                        <h5 class="panel-title">
                          <a class="" role="button" data-toggle="collapse" href="#jobtypeControls" aria-expanded="true" aria-controls="collapseExample">
                            Job Type <span class="caret"></span>
                          </a>
                        </h5>
                      </div>


                      <div class="panel-body collapse in" id="jobtypeControls" aria-expanded="true">
                        <aside role="complementary" id="radio-controls-job-type">
                          <form id="nhs-job-type">
                            <div class="radio">
                               <label>
                                 <input id="permanent" name="nhs-job-type" type="radio" value="permanent">
                                 Permanent
                               </label>
                             </div>

                             <div class="radio">
                               <label>
                                 <input id="fixed-term" name="nhs-job-type" type="radio" value="fixed-term">
                                 Fixed Term
                               </label>
                             </div>

                             <div class="radio">
                               <label>
                                 <input id="apprenticeship" name="nhs-job-type" type="radio" value="apprenticeship">
                                 Apprenticeship
                               </label>
                             </div>

                             <div class="radio">
                               <label>
                                 <input id="voluntary" name="nhs-job-type" type="radio" value="voluntary">
                                 Voluntary
                               </label>
                             </div>

                          </form>
                        </aside>
                      </div>
                    </div>
                  </div>
                  
                  
                  
                </div>                
              </div>
            </div>
            
            <div class="col-md-9">
              <div id="results">
                <div class="row">
                  <?php sth_job_feed(); ?>
                  
                                  
                </div>

              </div>
            </div>
            
          </div>
        </div>

			<?php endwhile; // End of the loop. ?>

		  </main><!-- #main -->
      

      
	  </div><!-- #primary -->
  </div>

        <script>
            
            jQuery(document).ready(function() {
              
                // disable enter in search field
                jQuery('input#sieve').keypress(function(e){
                    if ( e.which == 13 ) return false;
                    if ( e.which == 13 ) e.preventDefault();

                });

              });
          
          
          jQuery('#job-form-controls').change(function(){
            
            jQuery(".vacancy").show();
            
            var staffGroupValue = jQuery("#nhs-staff-groups input[type='radio']:checked").val();
            if (staffGroupValue){
              
              var staffGroupSearch = "." + staffGroupValue;
              jQuery('div.vacancy:visible').not(staffGroupSearch).hide();
              
            }
            
            var jobTypeValue = jQuery("#nhs-job-type input[type='radio']:checked").val();
            if (jobTypeValue){
              
              var jobTypeSearch = "." + jobTypeValue;
              jQuery('div.vacancy:visible').not(jobTypeSearch).hide();
              
            }
            
            // After the results are sorted, it counts them and updated the job count element
            jobCount = jQuery('.vacancy:visible').length;
            jQuery( "span.job-count" ).text( jobCount );
              
            // After the results are sorted, it finishes by scrolling the browser to the top of the results id
            if ( jQuery( window ).width() < 992 ){
              
              jQuery('html, body').animate({
                  scrollTop: jQuery("#results").offset().top - 50
              }, 1000);
              
            }
            
            
          });
          
          
          
              // job count function
              jQuery(document).ready(function() {
                
                // TODO - pull all document ready into a function. Add in sieve.
                // Start spinner modal in container until final stuff is added then remove spinner.

                onStart = true;

                if (onStart){

                  // On page load this counts the available job posts and injects the count in the job count span
                  initalCount = jQuery('.vacancy:visible').length;
                  jQuery( "span.job-count" ).text( initalCount );
                  onStart = false;
                }

              });

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
                   jQuery('div#results').find(".vacancy.well:contains('Permanent')").addClass("permanent");
                   jQuery('div#results').find(".vacancy.well:contains('Fixed Term')").addClass("fixed-term");
                   jQuery('div#results').find(".vacancy.well:contains('Apprenticeship')").addClass("apprenticeship");
                   jQuery( "div#results a" ).attr('target', '_blank');

                });

            jQuery(document).on('change keyup keypress keydown', 'input#sieve', function(e){

                  // Handles any changes to the job search and recounts the visible job posts & injects the count in the job count span
                  jobCount = jQuery('.vacancy:visible').length;
                  jQuery( "span.job-count" ).text( jobCount );

                });
            
          </script>

<?php get_footer(); ?>