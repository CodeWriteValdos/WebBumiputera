  <?php 
  
  /*function for general background image from Customizer of individual meta field background images in single posts and pages
*/
  if ( 0 < count( ( $rt_insurance_title_background_image_url2 = rwmb_meta( 'insurance_singletitlebg', 'type=image' )) ) )
    include(trailingslashit( get_template_directory() ) . 'title-background-images/singlepost-title.php');
  else
    include(trailingslashit( get_template_directory() ) . 'title-background-images/innerpages-title.php');
  ?> 