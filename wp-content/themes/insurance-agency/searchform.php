<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
  <input type="text" placeholder="<?php echo esc_attr__('search', 'insurance-agency' );?>" value="<?php echo get_search_query(); ?>" name="s" id="s" />
  <input type="submit" id="searchsubmit" value="" />
</form>