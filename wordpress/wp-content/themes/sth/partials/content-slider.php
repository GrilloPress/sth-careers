<div class="row">
  <div class="col-md-12">
    <div id="myCarousel" class="carousel slide hidden-xs" data-ride="carousel">
      
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <img src="<?php echo get_template_directory_uri () . "/images/less-than.png" ; ?>" alt="Previous Slide">
        <span class="sr-only">Previous</span>
      </a>
      
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <img src="<?php echo get_template_directory_uri () . "/images/more-than.png" ; ?>" alt="Next Slide">
        <span class="sr-only">Next</span>
      </a>
    
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
      
        <div class="item active">
          <img src="http://placehold.it/1200x400/999999/cccccc">
           <div class="carousel-caption">
             <h3>Headline</h3>
          </div>
        </div><!-- End Item -->
 
         <div class="item">
          <img src="http://placehold.it/1200x400/999999/cccccc">
           <div class="carousel-caption">
            <h3>Headline</h3>
           </div>
        </div><!-- End Item -->
        
        <div class="item">
          <img src="http://placehold.it/1200x400/dddddd/333333">
           <div class="carousel-caption">
            <h3>Headline</h3>
           </div>
        </div><!-- End Item -->
        
        <div class="item">
          <img src="http://placehold.it/1200x400/999999/cccccc">
           <div class="carousel-caption">
            <h3>Headline</h3>
           </div>
        </div><!-- End Item -->
      
      </div><!-- End Carousel Inner -->

    	<ol class="carousel-indicators">
       <li class="main-slider-tab active" data-target="#myCarousel" data-slide-to="0"></li>
       <li class="main-slider-tab" data-target="#myCarousel" data-slide-to="1"></li>
       <li class="main-slider-tab" data-target="#myCarousel" data-slide-to="2"></li>
       <li class="main-slider-tab" data-target="#myCarousel" data-slide-to="3"></li>
      </ol>

    </div><!-- End Carousel -->
  </div>
</div>