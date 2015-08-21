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
          
          <div id="" class="col-md-8">
            <?php while ( have_posts() ) : the_post(); ?>
             
            
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane in fade active" id="home">
                <?php if ( has_post_thumbnail() ){
                  
                echo get_the_post_thumbnail() ;
  
                } ;?>
                
            
                <?php get_template_part( 'template-parts/content', 'page' ); ?>
              </div>
               <?php endwhile; // End of the loop. ?>
              
             
              <?php 
                  $args = array(
                    'post_parent' => 19,
                    'post_type'   => 'any', 
                    'numberposts' => -1,
                    'post_status' => 'any' 
                  );

               $myposts = get_posts($args);
               foreach($myposts as $post) :?>

              <?php $post_slug=$post->post_name; ?>
              <?php $image = wp_get_attachment_url( get_post_thumbnail_id($post->ID));?>
              
              <div role="tabpanel" class="tab-pane fade" id="<?php echo $post_slug; ?>">
                
                <?php if($image): ?>
                  <img src="<?php echo $image;?>" width="100%">
                <?php endif ;?>
                

              <article id="post-<?php the_ID(); ?>" <?php post_class('well'); ?> role="article">
                  <section class="post_content clearfix">
                    <h3 class="post-header" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></h3>   
                    <?php $content = $post->post_content; ?>
                    <?php echo $content; ?>
                  </section>
              </article>
              </div>

             <?php endforeach; ?>

            </div>

           
          
          </div>
            
            <div class="col-md-4">
              
              <div class="nav-controls">
                 <!-- Nav tabs -->
                <ul class="nav nav-pills nav-stacked" role="tablist">
                  
                  <li role="presentation" class="active">
                    <a href="#home" aria-controls="home" role="tab" data-toggle="tab">Work for Us</a>
                  </li>
                  
                  <?php 
                  $args = array(
                    'post_parent' => 19,
                    'post_type'   => 'any', 
                    'numberposts' => -1,
                    'orderby'   => 'title',
                    'order' => 'ASC',
                    'post_status' => 'any' 
                  );

               $myposts = get_posts($args);
               foreach($myposts as $post) :?>
                  
               <?php $post_slug=$post->post_name; ?>
                  <li role="presentation">
                    <a href="#<?php echo $post_slug; ?>" aria-controls="<?php echo $post_slug; ?>" role="tab" data-toggle="tab"><?php the_title(); ?></a>
                  </li>
                  
               <?php endforeach; ?>

                </ul>
              </div>
              
              
              
            </div>

        </div>

        
        
      </main>
     
     <?php get_footer(); ?>
