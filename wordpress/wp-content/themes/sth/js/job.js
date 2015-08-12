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
   
   // add staff group, job type
   // 
   // get the inputs by ID. Handle clicks to them. Toggle hide()
                
   
});

// This is the start of creating event handlers for the input checkboxes. They will also eventually need to fire a recount for the jobs returned.

jQuery( "input#admin-clerical" ).click(function() {
  
  jQuery( ".administrative-clerical" ).toggle();
  
});