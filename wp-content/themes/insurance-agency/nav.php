<!-- header navigation for inner page -->
  <div id="home"></div> 
  <header>
  <div class="wrapper100percent">    
  <div class="top1 top">  
    <div class="container widgets-style1"> 
      <div class="row">    
        <div class="col-lg-6">   
          <?php if ( is_active_sidebar( 'sidebar-6' ) ) : ?>
          <?php dynamic_sidebar( 'sidebar-6' ); ?>	
          <?php endif; ?>			
        </div>
        <div class="col-lg-6 header-right-widget">   
          <?php if ( is_active_sidebar( 'sidebar-7' ) ) : ?>
          <?php dynamic_sidebar( 'sidebar-7' ); ?>	
          <?php endif; ?>			
        </div>
      </div>
    </div>
  </div>
  <!-- menu -->
    <nav class="navbar navbar-height1"> 
	  <div class="container navbar-inner">
	    <div class="row">
      <div class="col-lg-12">
      <div class="responsive-wrapper"> 
        <div class="navbar-header">  
          <div class="navbar-brand">
          <?php if ( get_theme_mod( 'logo' ) ) : ?>
            <div class='site-logo'>
              <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo esc_url( get_theme_mod( 'logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a>
            </div>
          <?php else : ?>
          <hgroup>
            <h2 class='site-title'><a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><?php bloginfo( 'name' ); ?></a></h2>
            <h2 class='site-description'><?php bloginfo( 'description' ); ?></h2>
          </hgroup>
          <?php endif; ?>
          </div>
          <div id="toggle-icon" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div> 
      </div> 
      <div class="collapse navbar-collapse navbar-ex1-collapse"> 
          <div class="cl-effect-12">
          <?php wp_nav_menu( array( 
            'theme_location' => 'header-menu',
            'menu' => 'top_menu',
            'menu_class' => 'nav navbar-nav pull-right'
            )
          );
          ?>
          </div>
      </div>
	  </div>
	  </div>
    </div>
    </nav>
    <!-- menu end -->
    </div>
  </header> 
  <div class="menuswitch-point wrapper100percent"> </div>
