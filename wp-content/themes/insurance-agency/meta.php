<?php
/**
 *  meta tags
 *
 */
 ?>
<div class="meta">
  <p>  <i class="fa fa-clock-o"></i> <?php echo get_the_date(get_option('date_format'))?> </p>
	<p> <i class="fa fa-user"></i>   <?php the_author_posts_link(); ?>  </p> 
  <p> <i class="fa fa-comment"></i>  <?php the_category(', ') ?>  </p>  
</div>

