<?php

/*Template Name: Blog archive posts - 1 column
*/
get_header(); ?>

<?php get_template_part( 'nav', 'single' );  ?>  

<div id="wrapperpages" class="inner-container">

  <?php 
    include(trailingslashit( get_template_directory() ) . 'title-background-images/title-function.php');
  ?> 
  
  <div class="wrapper100percent"> 
    <div class="container">
      <div class="row">
        <div class="<?php echo rt_insurance_agency_archivesidebar1() ?> blogpages"> 
          <?php 
		      $args = array( 'post_type' => 'post' ); $loop = new WP_Query( $args ); 
		      while ( $loop->have_posts() ) : $loop->the_post();
          ?>
          <article class="blogpost">
            <div class="text-center">
              <?php the_post_thumbnail('rt_insurance_one_row_img'); ?>
            </div> 
            <div class="wrapper100percent">
              <div <?php post_class(); ?>>
              <?php include(trailingslashit( get_template_directory() ) . 'meta.php'); ?>
                <a href="<?php the_permalink(); ?>" 
                title="<?php the_title_attribute(); ?>">
                <h2 class="blog-title">
                <?php the_title(); ?>
                </h2>
                </a>
                <br>
                <div class="wrapper100percent">
                <p>
                <?php 
                $content = get_the_content();
                $trimmed_content = wp_trim_words( $content, 35 );
                echo $trimmed_content;
                ?>
                </p>
                <?php include(trailingslashit( get_template_directory() ) . 'button2.php');?>
                </div>
              </div>
            </div>
          </article>
          <?php endwhile; wp_reset_postdata(); ?>	
        </div>
          <?php rt_insurance_agency_archivesidebar2() ?>
      </div>
    </div>
  </div> 

</div> 
<?php get_footer(); ?>