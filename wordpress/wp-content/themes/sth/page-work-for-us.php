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
        
        <section id="top-benefits" >
          <div class="row">
            
            <div class="col-md-6">
              <div class="card-benefit">
                <h3>Specialist Services</h3>
                <p>As one of the largest NHS Trusts in the Country we provide cutting-edge and specialist services found nowhere else in the country</p>
                <a href="#">Find out more</a>
                </div>
              </div>
            
            
             <div class="col-md-6">
              <div class="card-benefit">
                <h3>Multi-site Trust</h3>
                <p>With two major campuses, the Northern General and Central Campus, you are guarenteed to find variety and a great work location</p>
                <a href="#">Find out more</a>
                </div>
              </div>
            
             <div class="col-md-6">
              <div class="card-benefit">
                <h3>Training Opportunities</h3>
                <p>Being a Teaching Hospital we know the value of education and staff development. We offer advanced internal training and chances for top-up degrees</p>
                <a href="#">Find out more</a>
              </div>
            </div>
            
             <div class="col-md-6">
              <div class="card-benefit">
                <h3>Award Winning Trust</h3>
                <p>With numerous award winning developments across the Trust, we value and promote innovative thinking and offer great research opportunities</p>
                <a href="#">Find out more</a>
              </div>
            </div>
            
             <div class="col-md-6">
              <div class="card-benefit">
                <h3>Career Development</h3>
                <p>With over 90% of our Band 7 Nurses hired from intenral candidates you are assured that we reward skill, passion and excellence</p>
                <a href="#">Find out more</a>
              </div>
            </div>
            
             <div class="col-md-6">
              <div class="card-benefit">
                <h3>Staff Benefits</h3>
                <p>Our two dedicated Nurseries, staff events, groups and activites to discounts and vouchers make sure your work experience is highly rewarding </p>
                <a href="#">Find out more</a>
              </div>
            </div>
          
          </div>
        </section>
        
        
      </main>
     
     <?php get_footer(); ?>
