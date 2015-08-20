<?php
/*
 * 
 * Central list of jobs for the STH Careers website
 * 
 * Template Name: Work for Us Splash Page
 * @package sth
 */

get_header(); ?>

	 <div id="primary" class="container">
     <div class="row">
      <div class="col-md-8">
        <?php sth_breadcrumbs(); ?>
      </div>
     </div>
    
      <main id="main" role="main">
        
        <div class="row">
          <section id="work-here-block">
            <div class="col-md-3 col-sm-4">
              <div class="work-here-block-unit">
                <a href="#">
                  <img src="<?php echo get_template_directory_uri() . "/images/300-350.png" ;?>" width="100%" alt="About the Trust">
                </a>
              </div>
            </div>
            
            <div class="col-md-6 col-sm-8">
              <div class="work-here-block-unit">
                <a href="#">
                  <img src="<?php echo get_template_directory_uri() . "/images/600-350.png" ;?>" width="100%" alt="Our Vision">
                </a>
              </div>
            </div>
            
            <div class="col-md-3 col-sm-4">
              <div class="work-here-block-unit">
                <a href="#">
                  <img src="<?php echo get_template_directory_uri() . "/images/300-350.png" ;?>" width="100%" alt="Services and Specialties">
                </a>
              </div>
            </div>
            
            <div class="col-md-6 col-sm-8">
              <div class="work-here-block-unit">
                <a href="#">
                  <img src="<?php echo get_template_directory_uri() . "/images/600-350.png" ;?>" width="100%" alt="Our Vision">
                </a>
              </div>
            </div>
            
            <div class="col-md-3 col-sm-6">
              <div class="work-here-block-unit">
                <a href="#">
                  <img src="<?php echo get_template_directory_uri() . "/images/300-350.png" ;?>" width="100%" alt="Staff Benefits">
                </a>
              </div>
            </div>
            
            <div class="col-md-3 col-sm-6">
              <div class="work-here-block-unit">
                <a href="#">
                  <img src="<?php echo get_template_directory_uri() . "/images/300-350.png" ;?>" width="100%" alt="Research and Innovation">
                </a>
              </div>
            </div>
          </section>  
          
          
          
          
        </div>
      </main>
     
     <?php get_footer(); ?>
