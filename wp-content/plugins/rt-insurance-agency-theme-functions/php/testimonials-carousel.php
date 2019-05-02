<?php
/**
 *  query for testimonials carousel custom post type
 *
 */
 ?>
<div class="wrapper100percent">
  <div class="testimonials">
  <div class="gallery js-flickity" data-flickity-options='{ 
    "contain": true, 
    "imagesLoaded": true, 
    "autoPlay": true,
    "pageDots": true,
    "prevNextButtons": false,
    "wrapAround": false
  }'>
  <?php
    $args = array( 'post_type' => 'rt-ins-carousel2', 'posts_per_page' => $limit, 'order' => $order );
    $loop = new WP_Query( $args );
    while ( $loop->have_posts() ) : $loop->the_post();
  ?>
    <div class="testimonialsinner">
      <div class="testimonial">
        <?php the_post_thumbnail(); ?>
        <?php the_content(); ?>    
        <h5><?php the_title(); ?></h5> 
      </div>
    </div>  
  <?php endwhile; wp_reset_postdata(); ?>
  </div>
  </div>
</div>