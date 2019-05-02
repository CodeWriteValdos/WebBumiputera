<?php
/**
 *  query for team custom post type
 *
 */
 ?> 
<div class="fw-row">
  <?php
    $args = array( 'post_type' => 'rt-ins-team', 'columns' => $columns, 'posts_per_page' => $limit, 'order' => $order );
    $loop = new WP_Query( $args );
    while ( $loop->have_posts() ) : $loop->the_post();
  ?>
  <div class="<?php 
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
    <div class="teamcolumn">
      <div class="teamcolumn-inner">
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
      <div class="team-name">
        <a href="<?php the_permalink();?>"><h4><?php the_title();?></h4></a>
        <?php /* metaboxes for team information*/ ?>
        <?php $teamtext1 = rwmb_meta('insurance_teamtext1'); ?>
        <?php $teamtext2 = rwmb_meta('insurance_teamtext2'); ?>   
        <?php $teamtext3 = rwmb_meta('insurance_teamtext3'); ?>         
        <h6><?php echo $teamtext1; ?></h6>
        <p><?php echo $teamtext2; ?></p>
        <ul class="teamcolumn-icons">
          <?php echo $teamtext3; ?>
        </ul> 
      </div> 
    </div>
  </div>
</div>
  <?php endwhile; wp_reset_postdata(); ?>
</div>