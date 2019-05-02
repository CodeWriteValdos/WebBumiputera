<?php
/**
 *  query for business partners carousel custom post type
 *
 */
 ?>
<div class="wrapper100percent">
<div class="fw-row gallery js-flickity" data-flickity-options='{ 
  "contain": true, 
  "imagesLoaded": true, 
  "autoPlay": true,
  "pageDots": false,
  "prevNextButtons": false,
  "wrapAround": false
}'>
<?php
  $args = array( 'post_type' => 'rt-ins-carousel1', 'posts_per_page' => $limit, 'columns' => $columns, 'order' => $order );
  $loop = new WP_Query( $args );
  while ( $loop->have_posts() ) : $loop->the_post();
 ?>
<div class="partnerone <?php if ($columns == "6"){ 
	    echo "fw-col-md-2"; 
		}
    elseif ($columns == "5"){ 
		  echo "col-five-columns";
		}
    elseif ($columns == "4"){ 
		  echo "fw-col-md-3";
		}
    elseif ($columns == "3"){ 
		  echo "fw-col-md-4";
		}
    elseif ($columns == "2"){ 
		  echo "fw-col-md-6";
		}
    elseif ($columns == "1"){ 
		  echo "fw-col-md-12";
		}
	  else { 
		  echo "fw-col-md-2";   
		}
?>
">
<?php if ($columns == "4"){ 
	    echo the_post_thumbnail('rt_insurance_four_rows_img'); 
		}
    elseif ($columns == "3"){ 
		  echo the_post_thumbnail('rt_insurance_three_rows_img'); 
		}
    elseif ($columns == "2"){
		  echo the_post_thumbnail('rt_insurance_two_rows_img'); 
		}
    elseif ($columns == "5"){
		  echo the_post_thumbnail('rt_insurance_five_rows_img'); 
		}
    elseif ($columns == "6"){
		  echo the_post_thumbnail('rt_insurance_six_rows_img'); 
		}
     elseif ($columns == "1"){ 
		  echo the_post_thumbnail('rt_insurance_one_row_img'); 
		}
	  else { 
		  echo the_post_thumbnail('rt_insurance_two_rows_img');  
		}
?>
</div>
<?php endwhile; wp_reset_postdata(); ?>
</div>
</div>