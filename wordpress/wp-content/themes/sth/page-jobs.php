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
        
        <div id="master">
          <div class="row">
            
            <div class="col-md-3">
              <div class="row">
                <div id="job-form-controls">
                
                  <div class="col-md-12 col-sm-6 col-xs-12">
                    <div class="panel panel-primary visible-xs">
                      <div class="panel-heading">
                        <h5 class="panel-title">
                           Join the team!
                        </h5>
                      </div>

                      <div class="panel-body">
                        <p class="lead">Healthcare Scientist, Nurse or looking for your first post? Search our latest vacancies below</p>
                        <p>Use the filters below and our search box to find the right role for you</p>
                        <p>Alternatively, feel free to <a href="#results">jump straight to the posts available</a></p>
                      </div>
                    </div>
                    
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
              
              <div class="panel panel-primary">
                <div class="panel-heading">
                  <h5 class="panel-title">
                    <a class="" role="button" data-toggle="collapse" href="#searchForm" aria-expanded="true" aria-controls="collapseExample">
                      Search Vacancies <span class="caret"></span>
                    </a>
                  </h5>
                </div>

                <div class="panel-body collapse in" id="searchForm" aria-expanded="true">
                  <form id="job-search">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Search Vacancies">
                      <span class="input-group-btn">
                        <button class="btn btn-default" type="button">Search</button>
                      </span>
                    </div>
                  </form>
                </div>
              </div>
              
              
              <div id="results">
                
                <p><span class='job-counter'><span class='job-count'></span> Jobs Returned </span></p>
                
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
              
              // TODO - pull all document ready into a function. Add in sieve.
              // Start spinner modal in container until final stuff is added then remove spinner.

              onStart = true;
              
              if (onStart){

                  // On page load this counts the available job posts and injects the count in the job count span
                  initalCount = jQuery('.vacancy:visible').length;
                  jQuery( "span.job-count" ).text( initalCount );
                  onStart = false;
                }
              
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
          
          
          // jQuery('#master').change(function(){
          jQuery(document).on('change keyup keypress', '#master', function(e){
            
            if ( e.which == 13 ) return false;
            if ( e.which == 13 ) e.preventDefault();
            
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
            
            var jobSearchValue = jQuery("#job-search input[type='text']").val();
            if (jobSearchValue){

              // Loop through the comment list
              jQuery("div.vacancy:visible").each(function(){

                  // If the list item does not contain the text phrase fade it out
                  if (jQuery(this).text().search(new RegExp(jobSearchValue, "i")) < 0) {
                      jQuery(this).hide();

                  // Show the list item if the phrase matches and increase the count by 1
                  } else {
                      jQuery(this).show();
                  }
              });
              
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
            
          </script>

<?php get_footer(); ?>