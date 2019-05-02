<?php
/**
 * The sidebar containing the main widget area.
 *
 *
 */
?>
<div class="col-md-3">
  <div class="sidebar widgets-style1">
  <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
  <?php dynamic_sidebar( 'sidebar-1' ); ?>
  <?php endif; ?>
  </div>
</div>	
<div class="wrapper100percent">
<br><br>
</div>