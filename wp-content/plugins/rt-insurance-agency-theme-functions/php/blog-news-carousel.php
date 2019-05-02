<?php
/**
 *  query for blog news carousel custom post type
 *
 */
 ?> 
<div class="wrapper100percent">
  <div class="gallery js-flickity" data-flickity-options='{ 
  "contain": true, 
  "imagesLoaded": true, 
  "autoPlay": true,
  "pageDots": false,
  "prevNextButtons": true,
  "wrapAround": false
}'> 
  <?php
    $args = array( 'post_type' => 'post', 'columns' => $columns, 'posts_per_page' => $limit, 'order' => $order );
    $loop = new WP_Query( $args );
    while ( $loop->have_posts() ) : $loop->the_post();
  ?>
  <div class="homeblogwrapper <?php 
    if ($columns == "1"){ 
	    echo "fw-col-md-12"; 
    }
    elseif ($columns == "2"){ 
	    echo "fw-col-md-6"; 
	  }  
    elseif ($columns == "3"){ 
	    echo "fw-col-md-4"; 
	}
    elseif ($columns == "4"){ 
	  	echo "fw-col-md-3"; 
	  }
    elseif ($columns == "5"){ 
	    echo "col-five-columns"; 
    }
    elseif ($columns == "6"){ 
	    echo "fw-col-md-2"; 
    }
    else { 
	    echo "fw-col-md-4"; 
	  } ?>">
    <div class="homeblog">
    <figure class="view1 view-first1">
    <?php if ($columns == "1"){ 
	    echo the_post_thumbnail('rt_insurance_one_row_img'); 
		}
    elseif ($columns == "2"){ 
		  echo the_post_thumbnail('rt_insurance_two_rows_img'); 
		}
    elseif ($columns == "3"){
		  echo the_post_thumbnail('rt_insurance_three_rows_img'); 
		}
    elseif ($columns == "4"){
		  echo the_post_thumbnail('rt_insurance_four_rows_img'); 
		}
    elseif ($columns == "5"){
		  echo the_post_thumbnail('rt_insurance_five_rows_img'); 
		}
    elseif ($columns == "6"){
		  echo the_post_thumbnail('rt_insurance_six_rows_img'); 
		}
    else {
		  echo the_post_thumbnail('rt_insurance_three_rows_img'); 
		} ?>
      <figcaption class="mask">
        <div class="maskinner">
        <?php printf('<a class="text" href="%1s">%2s</a>', get_permalink(), esc_html__('read more', 'insurance-agency')); ?>        
        </div> 
      </figcaption> 
    </figure> 
    <div class="wrapper100percent homeblog-inner">
      <a href="<?php the_permalink();?>"><h4><?php the_title();?></h4></a>
      <div class="date">
        <p>  <i class="fa fa-clock-o"></i>  <?php echo get_the_date(get_option('date_format'))?></p>
        <p> <i class="fa fa-user"></i> <?php the_author_posts_link(); ?>  </p>
      </div>
      <?php $text = get_the_excerpt(); $trimmed_content = wp_trim_words( $text, 11 ); echo $trimmed_content; ?>
    </div> 
    </div>
  </div>
  <?php endwhile; wp_reset_postdata(); ?>
</div>
</div>