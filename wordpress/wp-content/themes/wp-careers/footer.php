</div> <!-- end #container -->			 
      
      <?php if ( is_home() || is_front_page() ) : ?>
          <?php get_template_part( 'partials/content', 'social' ); ?>
      <?php endif; ?>


		<div id="main-footer">
      <div class="container">
        <div class="row">
          <div id="widget-footer">
		        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer1') ) : ?>
		        <?php endif; ?>
		        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer2') ) : ?>
		        <?php endif; ?>
		        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer3') ) : ?>
		        <?php endif; ?>
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer4') ) : ?>
		        <?php endif; ?>
		      </div>
        </div>
        
        <div class="row">
          <p class="attribution">&copy; Sheffield Teaching Hospitals NHS Foundation Trust</p>
        </div>
      </div>
    </div>

				
		<!--[if lt IE 7 ]>
  			<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
  			<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->
		
		<?php wp_footer(); // js scripts are inserted using this function ?>

	</body>

</html>