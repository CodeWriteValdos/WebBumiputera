<?php
/**
 * Template for footer
 *
 * 
 */
?>     
<footer class="bottom">
  <div class="container widgets-style1">
	  <div class="row">
      <div class="col-sm-4">   
        <?php if ( is_active_sidebar( 'sidebar-3' ) ) : ?>
        <?php dynamic_sidebar( 'sidebar-3' ); ?>	
        <?php endif; ?>
      </div>
		<div class="col-sm-4">   
        <?php if ( is_active_sidebar( 'sidebar-4' ) ) : ?>
        <?php dynamic_sidebar( 'sidebar-4' ); ?>	
        <?php endif; ?>
      </div>
		<div class="col-sm-4">   
        <?php if ( is_active_sidebar( 'sidebar-5' ) ) : ?>
        <?php dynamic_sidebar( 'sidebar-5' ); ?>	
        <?php endif; ?>
      </div>
    </div>
  </div> 
  <div class="container">
  <div class="row">
    <div class="col-lg-12 text-center scroll">  
      <a href="javascript:scrollToTop()"><i class="fa fa-chevron-up"></i></a>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12 copyright">   
      <p>
	    <?php echo get_theme_mod('copyright_detailstext'); ?>
	    </p>
    </div>
  </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>